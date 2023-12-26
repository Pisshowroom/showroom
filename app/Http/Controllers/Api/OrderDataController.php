<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use App\Models\Help;
use App\Models\HistoryFund;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Setting;
use Barryvdh\DomPDF\Facade\Pdf;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class OrderDataController extends Controller
{
    public function index(Request $request)
    {
        // validation for request status in Pending, Paid, Sending, Cancel, Returning, Completed
        $request->validate([
            'status' => 'required|in:Pending,Paid,ProcessedBySeller,Sending,Cancel,Returning,Completed'
        ]);
        $user = auth()->guard('api-client')->user();

        $status = $request->input('status');
        $status = lypsisGetOrderStatusValues($status);
        // $orders = Order::withCount('order_items')->when($status, function ($query, $status) {
        $orders = Order::withCount('order_items')->where('user_id', $user->id)->when(empty($status) == false, function ($query) use ($status) {
            // return $query->where('status', $status);
            return $query->whereIn('status', $status);
        })
            ->with(['single_order_item_with_product.product.parent', 'single_order_item_with_product.product.seller'])->paginate(20);

        return OrderResource::collection($orders);
    }

    public function detail(Order $order)
    {
        $order->load(['master_account', 'order_items.product.parent', 'user.address.ro_city']);

        return new OrderResource($order);
    }

    public function detailOrderForComplain(Order $order)
    {
        $order->load(['order_items.product.parent']);

        return new OrderResource($order);
    }

    public function tutorialPayment(Order $order)
    {
        if (isset($order->qr_string)) {
            $str = 'e wallet ' . $order->payment_channel;
            $help = Help::where('slug', Str::slug($str))->first();
        } elseif (isset($order->outlet_payment_code)) {
            $str = 'retail outlet ' . $order->payment_channel;
            $help = Help::where('slug', Str::slug($str))->first();
        } elseif (isset($order->va_number)) {
            $str = 'Virtual Account ' . $order->payment_channel;
            $help = Help::where('slug', Str::slug($str))->first();
        } else {
            $help = new Help();
            $help->name_id = '';
            $help->content_id = '';
        }
        $data['name_id'] = $help->name_id ?? '';
        $data['content_id'] = $help->content_id ?? '';

        return ResponseAPI($data, 200);
    }

    public function sellerListOrder(Request $request)
    {
        $request->validate([
            'status' => 'required|in:Pending,Paid,ProcessedBySeller,Sending,Cancel,Returning,Completed'
        ]);
        $user = auth()->guard('api-client')->user();

        $status = $request->input('status');
        $status = lypsisGetOrderStatusValues($status);

        $orders = Order::withCount('order_items')->where('seller_id', $user->id)->when(empty($status) == false, function ($query) use ($status) {
            // return $query->where('status', $status);
            return $query->whereIn('status', $status);
        })
            ->when($request->filled('search'), function ($query) use ($request) {
                $query->where('payment_identifier', 'like', "%$request->search%");
            })
            ->with(['single_order_item_with_product.product.parent', 'single_order_item_with_product.product.seller', 'user.address.ro_city'])->paginate(20);

        return OrderResource::collection($orders);
    }

    public function buyerCancelOrder(Order $order)
    {
        $order->status = Order::CANCELLED;
        $order->save();

        $order->load(['seller']);
        $seller = $order->seller;
        if ($seller != null && $seller->device_id != null) {
            $notificationTitle = "Pesanan Dibatalkan";
            $notificationSubTitle = "Pembeli telah membatalkan pesanannya";
            $notifLink = "/detail_penjualan-" . $order->id;
            $notifLinkLabel = "Lihat Pesanan";
            $notifLinkWeb = "/toko/detail-transaksi/" . $order->payment_identifier;
            $dataNotif = [
                'type' => "new-notification",
                'notifLink' => $notifLink,
                'notifLinkLabel' => $notifLinkLabel,
                'notifLinkWeb' => $notifLinkWeb
            ];
            createNotificationData($seller->id, $notificationTitle, $notificationSubTitle, null, $notifLink, $notifLinkLabel, $notifLinkWeb);
            sendMessage($notificationTitle, $notificationSubTitle, $dataNotif, $seller->device_id);
        }

        return ResponseAPI('Pesanan berhasil dibatalkan', 200);
    }

    public function sellerAcceptOrder(Order $order)
    {
        $order->status = Order::PROCESSED_BY_SELLER;
        $order->save();

        return ResponseAPI('Pesanan berhasil diterima', 200);
    }

    public function sellerRejectOrder(Order $order)
    {
        $order->status = Order::CANCELLED;
        $order->save();

        $order->load(['user']);
        $user = $order->user;
        if ($user != null && $user->device_id != null) {
            $notificationTitle = "Pesanan Dibatalkan";
            $notificationSubTitle = "Penjual telah membatalkan pesanan anda";

            $notifLink = "/transaksi/detail-" . $order->id;
            $notifLinkLabel = "Lihat Pesanan";
            $notifLinkWeb = "/pembeli/detail-pesanan/" . $order->payment_identifier;
            $dataNotif = [
                'type' => "new-notification",
                'notifLink' => $notifLink,
                'notifLinkLabel' => $notifLinkLabel,
                'notifLinkWeb' => $notifLinkWeb
            ];
            createNotificationData($user->id, $notificationTitle, $notificationSubTitle, null, $notifLink, $notifLinkLabel, $notifLinkWeb);
            sendMessage($notificationTitle, $notificationSubTitle, $dataNotif, $user->device_id);
        }

        return ResponseAPI('Pesanan berhasil ditolak', 200);
    }

    public function sellerSendOrder(Order $order, Request $request)
    {
        $request->validate([
            'delivery_service' => 'required|in:jne,jnt,sicepat,anteraja',
            'delivery_receipt_number' => 'required|string',
        ]);

        $requestNew = new Request();
        $requestNew->replace([
            'delivery_service' => $request->delivery_service,
            'delivery_receipt_number' => $request->delivery_receipt_number,
            'just_json' => true,
        ]);
        // TODOS : Uncomment This
        // $orderController = new OrderController();
        // $orderController->waybillCheck($requestNew);

        $order->delivery_receipt_number = $request->delivery_receipt_number;
        $order->status = Order::SHIPPED;
        $order->save();


        $pdf = Pdf::loadView('receipt_image', ['order' => $order->load(['address.ro_province', 'seller', 'seller.address_seller', 'seller.address_seller.ro_province', 'order_items.product', 'user'])]);
        // $link_label = public_path("/receipt_images/$order->delivery_receipt_number.pdf");
        // $pdf->save($link_label);
        // $order->link_label =  $link_label;
        $filename = $order->delivery_receipt_number . ".pdf";

        $link_label = url("/receipt_images/$filename");

        $pdf->save(public_path("/receipt_images/$filename"));
        $order->link_label = $link_label;
        $order->save();

        // receipt image
        // exec("wkhtmltoimage --format png $html $output");
        $order->load(['user']);
        $user = $order->user;
        if ($user != null && $user->device_id != null) {
            $notificationTitle = "Pesanan Diproses";
            $notificationSubTitle = "Penjual sedang memproses pesanan anda";

            $notifLink = "/transaksi/detail-" . $order->id;
            $notifLinkLabel = "Lihat Pesanan";
            $notifLinkWeb = "/pembeli/detail-pesanan/" . $order->payment_identifier;
            $dataNotif = [
                'type' => "new-notification",
                'notifLink' => $notifLink,
                'notifLinkLabel' => $notifLinkLabel,
                'notifLinkWeb' => $notifLinkWeb
            ];
            createNotificationData($user->id, $notificationTitle, $notificationSubTitle, null, $notifLink, $notifLinkLabel, $notifLinkWeb);
            sendMessage($notificationTitle, $notificationSubTitle, $dataNotif, $user->device_id);
        }

        return ResponseAPI('Pesanan berhasil dikirim', 200);
    }

    public function checkStatusDeliveredOrder(Order $order)
    {

        $dateFromDelivery = now();
        $requestNew = new Request();
        $requestNew->replace([
            'delivery_service' => $order->delivery_service_code,
            'delivery_receipt_number' => $order->delivery_receipt_number,
            'just_json' => true,
        ]);
        $result = false;

        DB::beginTransaction();

        if ($order->status == Order::SHIPPED) {
            try {
                $requestNew = new Request();
                $requestNew->replace([
                    'delivery_service' => $order->delivery_service_code,
                    'delivery_receipt_number' => $order->delivery_receipt_number,
                    'just_json' => true,
                ]);
                $orderController = new OrderController();
                $resultWaybill = $orderController->waybillCheck($requestNew);
                // dd($resultWaybill);

                if ($resultWaybill != null && $resultWaybill->delivered == true) {
                    $order->status = Order::DELIVERED;
                    $order->delivered_at = $dateFromDelivery;
                    $order->save();

                    $order->load(['user']);
                    $user = $order->user;

                    if ($user != null && $user->device_id != null) {
                        $notificationTitle = "Pesanan Telah Sampai";
                        $notificationSubTitle = "Pesanan anda telah sampai ketujuan";

                        $notifLink = "/transaksi/detail-" . $order->id;
                        $notifLinkLabel = "Lihat Pesanan";
                        $notifLinkWeb = "/pembeli/detail-pesanan/" . $order->payment_identifier;
                        $dataNotif = [
                            'type' => "new-notification",
                            'notifLink' => $notifLink,
                            'notifLinkLabel' => $notifLinkLabel,
                            'notifLinkWeb' => $notifLinkWeb
                        ];
                        createNotificationData($user->id, $notificationTitle, $notificationSubTitle, null, $notifLink, $notifLinkLabel, $notifLinkWeb);
                        sendMessage($notificationTitle, $notificationSubTitle, $dataNotif, $user->device_id);
                    }
                    $result = true;
                }
            } catch (\Exception $th) {
                $result = false;
                goto skipToReturnApi;
                // throw $th;
            }
        }

        DB::commit();

        skipToReturnApi:
        if ($result) {
            return ResponseAPI('Pesanan telah sampai ketujuan', 200);
        } else {
            return ResponseAPI('Pesanan belum sampai ketujuan', 400);
        }
    }

    public function completedOrder(Order $order)
    {

        if (in_array($order->status, [Order::SHIPPED, Order::DELIVERED])) {
            $order->status = Order::COMPLETED;
        } else {
            return ResponseAPI('Status Pesanan Belum memenuhi syarat untuk selesai', 400);
        }

        $seller = $order->seller;
        $totalPrice = $order->total_final ? $order->total_final : $order->total;
        $feeCommerce = 0;
        $feeGlobalAmount = lypsisGetSetting("", [], true, ['seller_fee_amount', 'seller_fee_percent'])->toArray();
        $feeGlobalAmount = array_map('intval', $feeGlobalAmount);
        $dateFromDelivery = now();


        if ($seller->seller_fee_amount > 0) {
            $feeCommerce = $seller->seller_fee_amount;
        } else if ($seller->seller_fee_percentage > 0) {
            $feeCommerce = $totalPrice * ($seller->seller_fee_percentage / 100);
        } else if ($feeGlobalAmount[0] > 0) {
            $feeCommerce = $feeGlobalAmount[0];
        } else if ($feeGlobalAmount[1] > 0) {
            $feeCommerce = $totalPrice * ($feeGlobalAmount[1] / 100);
        }

        DB::beginTransaction();
        $totalIncome = $totalPrice - $feeCommerce;

        $order->market_fee_seller = $feeCommerce;
        $order->arrived_at = $dateFromDelivery;
        $order->save();

        $commerceBalance = Setting::where('name', 'commerce_balance')->firstOrFail();
        $theCommerceBalance = intval($commerceBalance->value);
        $commerceBalance->value = $theCommerceBalance + $feeCommerce;
        $commerceBalance->save();

        $seller->balance += $totalIncome;
        $seller->save();

        $historyFund = new HistoryFund();
        $historyFund->order_id = $order->id;
        $historyFund->user_id = $seller->id;
        $historyFund->type = "Penjualan";
        $historyFund->amount = $totalIncome;
        $historyFund->name = "Penjualan #" . $order->payment_identifier;
        $historyFund->save();

        $order->load(['seller']);
        $seller = $order->seller;
        if ($seller != null && $seller->device_id != null) {
            $notificationTitle = "Pesanan Sudah Selesai";
            $notificationSubTitle = "Pesanan Telah Sampai ke pembeli";

            $notifLink = "/transaksi/detail-" . $order->id;
            $notifLinkLabel = "Lihat Pesanan";
            $notifLinkWeb = "/pembeli/detail-pesanan/" . $order->payment_identifier;
            $dataNotif = [
                'type' => "new-notification",
                'notifLink' => $notifLink,
                'notifLinkLabel' => $notifLinkLabel,
                'notifLinkWeb' => $notifLinkWeb
            ];
            createNotificationData($seller->id, $notificationTitle, $notificationSubTitle, null, $notifLink, $notifLinkLabel, $notifLinkWeb);
            sendMessage($notificationTitle, $notificationSubTitle, $dataNotif, $seller->device_id);
        }

        DB::commit();
        return ResponseAPI('Pesanan berhasil diselesaikan', 200);
    }

    private function viewReceipt(Order $order)
    {
        return view('receipt_image', ['order' => $order]);
    }

    public function requestRefund(Order $order, Request $request)
    {
        $request->validate([
            'returning_product_type' => 'required|in:ReturnProdukDanUang,Refund,Komplain',
            'returning_reason' => 'required',
            'returning_description' => 'required',
        ]);

        DB::beginTransaction();

        $refundTotal = 0;
        if ($request->returning_product_type == 'ReturnProdukDanUang') {
            // TODOS add checker status suits for this and 2 others
            $request->validate([

                'returning_images' => 'required',
                'order_items' => 'required',
                'order_items.*.id' => 'required',
                'order_items.*.return_quantity' => 'required',
                'returning_video' => 'required|mimes:mp4|max:10240',
            ]);
            $images = [];
            $order->status = Order::REQUESTED_RETURN;

            if (!empty($request->returning_images)) {
                foreach ($request->returning_images as $img) {
                    if (isset($img) && is_uploaded_file($img)) {
                        $images[] = uploadFoto($img, 'uploads/photos_refund_complain');
                    }
                }
            }

            $order->returning_images = $images;
            if (isset($request->returning_video) && is_uploaded_file($request->returning_video)) {
                $order->returning_video = uploadFile($request->returning_video, 'uploads/video_refund_complain');
            }

            $orderItems = json_decode($request->order_items, true);
            foreach ($orderItems as $order_item) {
                $orderItem = OrderItem::find($order_item['id'] ?? null);
                if (!$orderItem) {
                    return ResponseAPI('Item pesanan tidak ditemukan', 400);
                }
                if ($order_item['return_quantity'] > $orderItem->quantity) {
                    return ResponseAPI('Jumlah item pesanan yang dikembalikan melebihi jumlah item yang dipesan', 400);
                }
                $orderItem->return_quantity = $order_item['return_quantity'];
                $returningItemTotal = $orderItem->price * ($order_item['return_quantity'] ?? 1);
                $orderItem->return_item_total = $returningItemTotal;
                $refundTotal += $returningItemTotal;
                $orderItem->save();
            }
        } else if ($request->returning_product_type == 'Refund') {
            $request->validate([
                'returning_images' => 'required',
                'returning_video' => 'required|mimes:mp4|max:10240',
            ]);
            $order->status = Order::REQUESTED_REFUND;

            if (!empty($request->images)) {
                foreach ($request->images as $img) {
                    if (isset($img) && is_uploaded_file($img)) {
                        $images[] = uploadFoto($img, 'uploads/photos_refund_complain');
                    }
                }
            }

            $order->returning_images = $images;
            if (isset($request->returning_video) && is_uploaded_file($request->returning_video)) {
                $order->returning_video = uploadFile($request->returning_video, 'uploads/video_refund_complain');
            }
            $refundTotal = $order->subtotal;
        } else if ($request->returning_product_type == 'Komplain') {

            $refundTotal = $order->subtotal;
            $order->status = Order::COMPLAINT;
        }

        $order->refund_total = $refundTotal;
        $order->returning_description = $request->returning_description;
        $order->returning_product_type = $request->returning_product_type;
        $order->returning_reason = $request->returning_reason ?? null;

        $order->save();

        DB::commit();
        return ResponseAPI("Permintaan $request->returning_product_type berhasil dikirim", 200);
    }

    public function cancelRefundReturnComplaint(Order $order)
    {
        $order->status = Order::COMPLETED;

        $order->save();
        return ResponseAPI('Permintaan pengembalian dibatalkan', 200);
    }

    public function buyerSendingOrder(Order $order, Request $request)
    {
        $request->validate([
            'returning_delivery_service_code' => 'required',
            'returning_delivery_service_name' => 'required',
            // 'returning_delivery_service_name' => 'required',
        ]);
        
        // TODOS : Uncomment This - Fix Also Code And Receipt
        // $requestNew = new Request();
        // $requestNew->replace([
        //     'delivery_service' => codeServiceDelivery($request->returning_delivery_service_name),
        //     'delivery_receipt_number' => $request->returning_delivery_service_code,
        //     'just_json' => true,
        // ]);
        // $orderController = new OrderController();
        // $orderController->waybillCheck($requestNew);
        DB::beginTransaction();

        $order->returning_delivery_service_code = $request->returning_delivery_service_code;
        $order->returning_delivery_service_name = $request->returning_delivery_service_name;
        $order->status = Order::RETURN_SHIPPED;
        $order->save();

        $order->load(['seller']);
        $seller = $order->seller;
        if ($seller != null && $seller->device_id != null) {
            $notificationTitle = "Pengembalian Pesanan";
            $notificationSubTitle = "Pembeli telah mengirimkan pesanan yang dikembalikan";

            $notifLink = "/transaksi/detail-" . $order->id;
            $notifLinkLabel = "Lihat Pesanan";
            $notifLinkWeb = "/pembeli/detail-pesanan/" . $order->payment_identifier;
            $dataNotif = [
                'type' => "new-notification",
                'notifLink' => $notifLink,
                'notifLinkLabel' => $notifLinkLabel,
                'notifLinkWeb' => $notifLinkWeb
            ];
            createNotificationData($seller->id, $notificationTitle, $notificationSubTitle, null, $notifLink, $notifLinkLabel, $notifLinkWeb);
            sendMessage($notificationTitle, $notificationSubTitle, $dataNotif, $seller->device_id);
        }

        DB::commit();
        return ResponseAPI('Permintaan pengembalian dikonfirmasi', 200);
    }

    public function sellerReceivingReturningOrder(Order $order)
    {
        $order->load('user');

        $user = $order->user;
        DB::beginTransaction();

        if ($user) {
            $user->update([
                'balance' => ($user->balance + $order->refund_total)
            ]);
        } else {
            return ResponseAPI('Gagal, Data Pembeli Tidak Ditemukan', 404);
        }
        $order->status = Order::RETURN_COMPLETED;

        $order->save();

        $order->load(['user']);
        $user = $order->user;
        if ($user != null && $user->device_id != null) {
            $notificationTitle = "Pesanan Berhasil Dikembalikan";
            $notificationSubTitle = "Pesanannya telah dikembalikan oleh pembeli";

            $notifLink = "/transaksi/detail-" . $order->id;
            $notifLinkLabel = "Lihat Pesanan";
            $notifLinkWeb = "/pembeli/detail-pesanan/" . $order->payment_identifier;
            $dataNotif = [
                'type' => "new-notification",
                'notifLink' => $notifLink,
                'notifLinkLabel' => $notifLinkLabel,
                'notifLinkWeb' => $notifLinkWeb
            ];
            createNotificationData($user->id, $notificationTitle, $notificationSubTitle, null, $notifLink, $notifLinkLabel, $notifLinkWeb);
            sendMessage($notificationTitle, $notificationSubTitle, $dataNotif, $user->device_id);
        }



        DB::commit();
        return ResponseAPI('Pengembalian barang selesai', 200);
    }
}
