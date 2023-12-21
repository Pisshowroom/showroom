<?php

namespace App\Http\Controllers\Clients\seller;

use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Controller;
use App\Http\Resources\NotificationResource;
use App\Models\Notification;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class TransactionOrderController extends Controller
{
    public function isSeller()
    {
        return Auth::guard('web')->user()->is_seller == true;
    }
    public function getCommonData()
    {

        if (Auth::guard('web')->user() && Auth::guard('web')->user()->id) {
            $notifications = Notification::where('user_id', Auth::guard('web')->user()->id)->orderBy('created_at', 'desc')->take(4)->get();
            $data['notification'] = NotificationResource::collection($notifications);
            $data['notif_count'] = Notification::where('user_id', Auth::guard('web')->user()->id)->count();
        } else {
            $data['notification'] = null;
            $data['notif_count'] = 0;
        }
        return $data;
    }

    public function allTransaction(Request $request)
    {
        if (!$this->isSeller()) {
            $user = Auth::guard('web')->user();
            return redirect('/pembeli')->with('auth', base64_encode($user->uid));
        }
        $status = $request->input('status');

        $order = Order::where('seller_id', Auth::guard('web')->user()->id)
            ->with(['order_items:id,product_id,order_id', 'order_items:id,product_id,order_id,user_id', 'order_items.product:id,name'])
            ->whereHas('order_items', function ($q) use ($request) {
                $q->whereHas('product', function ($qq) use ($request) {
                    if ($request->filled('search'))
                        $qq->where('payment_identifier', 'like', "%$request->search%");
                    $qq->where('seller_id', Auth::guard('web')->user()->id);
                });
            })
            ->select('id', 'payment_identifier', 'user_id', 'created_at', 'status', 'payment_status', 'total', 'total_final', 'seller_id', 'payment_due')
            ->when($status, function ($query, $status) {
                if ($status != 'all')
                    return $query->where('status', $status);
            })->orderBy('id', $request->orderBy ?? 'desc')->paginate($request->per_page ?? 10);
        foreach ($order as $key => $value) {
            if (now() > $value->payment_due)
                $value->expired = true;
            else
                $value->expired = false;
            $value->date = parseDates($value->created_at);
        }
        $data = $this->getCommonData();
        return view('clients.seller.transaction.all', ['orders' => $order, 'data' => $data]);
    }
    public function sendResi($identifier)
    {
        $user = Auth::guard('web')->user();
        if (!$this->isSeller()) {
            return redirect('/pembeli')->with('auth', base64_encode($user->uid));
        }
        $order = Order::where('payment_identifier', $identifier)->first();
        if (!$order)
            return redirect("/toko/semua-transaksi")->with('error', 'Transaksi tidak ditemukan')->with('auth', base64_encode($user->uid));

        // $order = Order::where('payment_identifier', $identifier)->where('status', 'ProcessedBySeller')->firstOrFail();
        $data = $this->getCommonData();
        return view('clients.seller.transaction.send_resi', ['order' => $order, 'data' => $data]);
    }
    public function detailTransaction($identifier)
    {
        if (!$this->isSeller()) {
            $user = Auth::guard('web')->user();
            return redirect('/pembeli')->with('auth', base64_encode($user->uid));
        }
        $order = Order::where('payment_identifier', $identifier)
            ->with([
                'address:id,person_name,district,city,phone_number,lat,long',
                'user:id,name,email', 'order_items',
                'order_items.product:id,name,seller_id,images,slug',
                'master_account:id,name,image,type'
            ])->firstOrFail();
        if (now() > $order->payment_due)
            $order->expired = true;
        else
            $order->expired = false;
        $order->date = parseDates($order->created_at);
        $order->date_paid_at = $order->paid_at ? parseDates($order->paid_at) : '-';
        $order->date_packing_due = $order->packing_due ? parseDates($order->packing_due) : '-';
        $order->date_delivered_at = $order->delivered_at ? parseDates($order->delivered_at) : '-';
        $order->date_arrived_at = $order->arrived_at ? parseDates($order->arrived_at) : '-';
        $data = $this->getCommonData();
        return view('clients.seller.transaction.detail', ['order' => $order, 'data' => $data]);
    }

    // seller approve / reject
    public function sellerAcceptOrder($id)
    {
        $user = Auth::guard('web')->user();

        $order = Order::findOrFail($id);
        $order->status = Order::PROCESSED_BY_SELLER;
        $order->save();
        return redirect("/toko/semua-transaksi")->with('success', 'Pesanan berhasil diterima')->with('auth', base64_encode($user->uid));
    }

    public function sellerRejectOrder($id)
    {
        $user = Auth::guard('web')->user();

        $order = Order::findOrFail($id);
        $order->status = Order::CANCELLED;
        $order->save();
        $order->load(['user']);
        $user = $order->user;
        if ($user && $user->device_id != null) {
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

        return redirect("/toko/semua-transaksi")->with('success', 'Pesanan berhasil ditolak')->with('auth', base64_encode($user->uid));
    }

    public function sellerSendOrder(Request $request)
    {
        $user = Auth::guard('web')->user();
        $request->validate([
            'delivery_service' => 'required|in:jne,jnt,sicepat,anteraja',
            'delivery_receipt_number' => 'required|string',
        ]);

        $order = Order::findOrFail($request->id);
        $orderController = new OrderController();
        $requestNew = new Request();
        $requestNew->replace([
            'delivery_service' => $request->delivery_service,
            'delivery_receipt_number' => $request->delivery_receipt_number,
            'just_json' => true,
        ]);
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
        $order->load(['user']);
        $user = $order->user;
        if ($user && $user->device_id != null) {
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

        return response()->json([
            "status" => "success",
            "message" => "Pesanan berhasil dikirim",
            "redirect" => route('dashboardSeller.allTransaction') . '?auth=' . base64_encode($user->uid)
        ], 200, [], JSON_UNESCAPED_SLASHES);
    }

    public function acceptComplaint($id)
    {
        $order = Order::first($id);
        $admin = Auth::guard('web')->user();
        if (!$order)
            return redirect("/toko/semua-transaksi")->with('error', 'Transaksi tidak ditemukan')->with('auth', base64_encode($admin->uid));

        DB::beginTransaction();
        $order->load('user');
        $user = $order->user;

        if ($user) {
            $user->update([
                'balance' => ($user->balance + $order->refund_total)
            ]);
        } else {
            return redirect("/toko/semua-transaksi")->with('error', 'Gagal, Data Pembeli Tidak Ditemukan')->with('auth', base64_encode($admin->uid));
        }
        $order->status = Order::COMPLAINT_ACCEPTED;

        $order->save();

        DB::commit();
        return redirect("/toko/semua-transaksi")->with('success', 'Komplain disetujui')->with('auth', base64_encode($admin->uid));
    }

    public function rejectComplaint($id)
    {
        $order = Order::first($id);
        $admin = Auth::guard('web')->user();
        if (!$order)
            return redirect("/toko/semua-transaksi")->with('error', 'Transaksi tidak ditemukan')->with('auth', base64_encode($admin->uid));

        $order->status = Order::COMPLAINT_DECLINED;
        $order->save();
        return redirect("/toko/semua-transaksi")->with('success', 'Komplain ditolak')->with('auth', base64_encode($admin->uid));
    }

    public function acceptReturnBack($id)
    {
        $order = Order::first($id);
        $admin = Auth::guard('web')->user();
        if (!$order)
            return redirect("/toko/semua-transaksi")->with('error', 'Transaksi tidak ditemukan')->with('auth', base64_encode($admin->uid));

        $order->status = Order::RETURN_ACCEPTED;
        $order->save();
        return redirect("/toko/semua-transaksi")->with('success', 'Pengembalian barang diterima')->with('auth', base64_encode($admin->uid));
    }

    public function rejectReturnBack($id)
    {
        $order = Order::first($id);
        $admin = Auth::guard('web')->user();
        if (!$order)
            return redirect("/toko/semua-transaksi")->with('error', 'Transaksi tidak ditemukan')->with('auth', base64_encode($admin->uid));

        $order->status = Order::RETURN_DECLINED;
        $order->save();
        return redirect("/toko/semua-transaksi")->with('success', 'Pengembalian barang ditolak')->with('auth', base64_encode($admin->uid));
    }

    public function acceptRefund($id)
    {
        $order = Order::first($id);
        $admin = Auth::guard('web')->user();
        if (!$order)
            return redirect("/toko/semua-transaksi")->with('error', 'Transaksi tidak ditemukan')->with('auth', base64_encode($admin->uid));

        $order->load('user');

        $user = $order->user;

        if ($user) {
            $user->update([
                'balance' => ($user->balance + $order->refund_total)
            ]);
        } else {
            return redirect("/toko/semua-transaksi")->with('error', 'Gagal, Data Pembeli Tidak Ditemukan')->with('auth', base64_encode($admin->uid));
        }

        $order->status = Order::REFUND_ACCEPTED;
        $order->save();
        return redirect("/toko/semua-transaksi")->with('success', 'Refund disetujui')->with('auth', base64_encode($admin->uid));
    }

    public function rejectRefund($id)
    {
        $order = Order::first($id);
        $admin = Auth::guard('web')->user();
        if (!$order)
            return redirect("/toko/semua-transaksi")->with('error', 'Transaksi tidak ditemukan')->with('auth', base64_encode($admin->uid));

        $order->status = Order::REFUND_DECLINED;
        $order->save();
        return redirect("/toko/semua-transaksi")->with('success', 'Refund ditolak')->with('auth', base64_encode($admin->uid));
    }


    public function checkStatusDeliveredOrder($id)
    {
        $user = Auth::guard('web')->user();
        $order = Order::findOrFail($id);
        $dateFromDelivery = now();

        if ($order->status == Order::SHIPPED) {
            $order->status = Order::DELIVERED;
            $order->arrived_at = $dateFromDelivery;
            $order->save();
        }

        return redirect("/toko/semua-transaksi")->with('success', 'Pesanan telah sampai ketujuan')->with('auth', base64_encode($user->uid));
    }


    private function viewReceipt(Order $order)
    {
        return view('receipt_image', ['order' => $order]);
    }
}
