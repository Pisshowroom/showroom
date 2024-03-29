<?php

namespace App\Http\Controllers\Clients\buyer;

use App\Models\Help;
use App\Http\Controllers\Controller;
use App\Http\Resources\MasterAccountResource;
use App\Http\Resources\NotificationResource;
use App\Http\Resources\ProductResource;
use App\Models\Address;
use App\Models\MasterAccount;
use App\Models\Notification;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use Xendit\QRCode;
use Xendit\Retail;
use Xendit\VirtualAccounts;
use Xendit\Xendit;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Support\Str;
use App\Models\Setting;

class OrderController extends Controller
{
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

    public function payment($identifier)
    {
        $order = Order::where('payment_identifier', $identifier)->where('payment_status', 'PaymentPending')->with('master_account:id,provider_name,image,type')->firstOrFail();
        $order->due = parseDates($order->payment_due);
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
        $order['name_id'] = $help->name_id ?? '';
        $order['content_id'] = $help->content_id ?? '';
        $data = $this->getCommonData();

        return view('clients.dashboard.order.payment', ['order' => $order, 'data' => $data]);
    }

    public function piPayment($identifier)
    {
        $data = $this->getCommonData();

        $order = Order::where('payment_identifier', $identifier)->where('payment_status', 'PaymentPending')->with('master_account:id,provider_name,image,type')->firstOrFail();
        $order->due = parseDates($order->payment_due);
        return view('clients.dashboard.order.pi_payment', ['order' => $order, 'data' => $data]);
    }

    public function myOrder(Request $request)
    {
        $status = $request->input('status');

        $order = Order::where('user_id', Auth::guard('web')->user()->id)
            ->with([
                'order_items:id,product_id,order_id',
                'seller:id,seller_name,seller_slug',
                'order_items:id,product_id,order_id,user_id',
                'order_items.product:id,name'
            ])
            ->whereHas('order_items', function ($q) use ($request) {
                $q->whereHas('product', function ($qq) use ($request) {
                    if ($request->filled('search'))
                        $qq->where('payment_identifier', 'like', "%$request->search%");
                });
            })->select('id', 'payment_identifier', 'user_id', 'created_at', 'status', 'payment_status', 'total', 'total_final', 'payment_due')
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

        return view('clients.dashboard.order.all', ['orders' => $order, 'data' => $data]);
    }
    public function detailOrder($identifier)
    {
        $order = Order::where('payment_identifier', $identifier)
            ->with([
                'address:id,person_name,district,city,phone_number,lat,long',
                'user:id,name,email',
                'order_items', 'order_items.product:id,name,seller_id,images,slug',
                'order_items.product.seller:id,seller_name,seller_slug,email',
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

        return view('clients.dashboard.order.detail', ['order' => $order, 'data' => $data]);
    }

    public function cancelRefundReturnComplaint($identifier)
    {
        $user = Auth::guard('web')->user();
        $order = Order::where('payment_identifier', $identifier)->first();
        if (!$order)
            return redirect("/pembeli/pesananku")->with('error', 'Pesanan tidak ditemukan')->with('auth', base64_encode($user->uid));

        $order->status = Order::DELIVERED;

        $order->save();
        return redirect("/pembeli/pesananku")->with('success', 'Permintaan pengembalian dibatalkan')->with('auth', base64_encode($user->uid));
    }

    public function sendProductBack($identifier)
    {
        $user = Auth::guard('web')->user();

        $order = Order::where('payment_identifier', $identifier)->first();
        if (!$order)
            return redirect("/pembeli/pesananku")->with('error', 'Pesanan tidak ditemukan')->with('auth', base64_encode($user->uid));
        $data = $this->getCommonData();

        // $order = Order::where('payment_identifier', $identifier)->where('status', 'ProcessedBySeller')->firstOrFail();
        return view('clients.dashboard.order.send_product_back', ['order' => $order, 'data' => $data]);
    }


    public function buyerSendingOrder(Request $request)
    {
        $request->validate([
            'returning_delivery_service_code' => 'required',
            'returning_delivery_service_name' => 'required',
            'returning_delivery_service_receipt' => 'required',
        ]);
        $user = Auth::guard('web')->user();

        $order = Order::where('id', $request->id)->first();
        if (!$order)
            return redirect("/pembeli/pesananku")->with('error', 'Pesanan tidak ditemukan')->with('auth', base64_encode($user->uid));

        DB::beginTransaction();
        $order->returning_delivery_service_receipt = $request->returning_delivery_service_receipt;
        $order->returning_delivery_service_code = $request->returning_delivery_service_code;
        $order->returning_delivery_service_name = $request->returning_delivery_service_name;
        $order->status = Order::RETURN_SHIPPED;

        $order->save();
        $order->load(['seller']);
        $seller = $order->seller;
        if ($seller) {
            $notificationTitle = "Pengembalian Pesanan";
            $notificationSubTitle = "Pembeli telah mengirimkan pesanan yang dikembalikan";

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
            if ($seller->device_id != null)
                sendMessage($notificationTitle, $notificationSubTitle, $dataNotif, $seller->device_id);
        }

        DB::commit();
        return response()->json([
            "status" => "success",
            "message" => "Permintaan pengembalian dikonfirmasi",
            "redirect" => route('dashboard.myOrder') . '?auth=' . base64_encode($user->uid)
        ], 200, [], JSON_UNESCAPED_SLASHES);
    }


    public function completedOrder($id)
    {
        $user = Auth::guard('web')->user();
        $order = Order::findOrFail($id);
        if (in_array($order->status, [Order::SHIPPED, Order::DELIVERED])) {
            $order->status = Order::COMPLETED;
        } else {
            return redirect("/pembeli/pesananku")->with('error', 'Status Pesanan Belum memenuhi syarat untuk selesai')->with('auth', base64_encode($user->uid));
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

        DB::commit();
        return redirect("/pembeli/pesananku")->with('success', 'Pesanan berhasil diselesaikan')->with('auth', base64_encode($user->uid));
    }


    public function preCheckEarly(Request $request)
    {
        // VirtualAccount::setters
        $request->validate([
            'order_items' => 'required',
        ]);

        $products = [];
        $total = 0;
        $totalWithoutDiscount = 0;
        $countedPromoProduct = 0;
        $countedAmountPromo = 0;
        $weight = 0;

        $orderItems = json_decode($request->order_items, true);

        foreach ($orderItems as $order_item) {
            $product_id = isset($order_item['product_id']) ? $order_item['product_id'] : $order_item['id'];
            $product = \App\Models\Product::find($product_id);
            if ($product == null) {
                $product = Product::withTrashed()->where('id', $product_id)->first();
                if ($product == null)
                    return ResponseAPI("Maaf produk dengan id tidak ditemukan.", 404);
                else
                    return ResponseAPI("Maaf kami sudah tidak menjual produk " . $product->name . " lagi.", 404);
            }
            $product->load('parent');

            if ($product->stock < $order_item['qty']) {
                return ResponseAPI('Stock Produk ' . $product->name . " tidak cukup. stok yang tersisa sebanyak " . $product->stock, 400);
            }

            if ($product->discount > 0) {
                $thePromoAmount = $product->price * ($product->discount / 100);
                $resultItemPriceAfterDiscount = $product->price - $thePromoAmount;
                $countedPromoProduct++;
                $countedAmountPromo += ($thePromoAmount * $order_item['qty']);

                $total += ($resultItemPriceAfterDiscount * $order_item['qty']);
                $totalWithoutDiscount += ($product->price * $order_item['qty']);
            } else {
                $itemTotal = ($product->price * $order_item['qty']);
                $total += $itemTotal;
                $totalWithoutDiscount += $itemTotal;
            }

            $weight += $product->weight * $order_item['qty'];
            $productTransformed = new ProductResource($product);
            array_push($products, $productTransformed);
        }

        $data['total'] = $total;
        $data['total_without_discount'] = $totalWithoutDiscount;
        $data['counted_promo_product'] = $countedPromoProduct;
        $data['counted_amount_promo'] = $countedAmountPromo;
        // $aa = $this->checkShippingPrice();
        $data['products'] = $products;

        return ResponseAPI($data);
    }
    public function preCheck(Request $request)
    {
        // VirtualAccount::setters
        $request->validate([
            'order_items' => 'required',
            'address_id' => 'required',
        ]);
        $addressBuyer = Address::findOrFail($request->address_id);
        if (!$addressBuyer)  return ResponseAPI("Kamu belum menginput alamat.", 404);
        if (!$request->seller_id)  return ResponseAPI("Penjual belum menginput alamat.", 404);
        $seller = \App\Models\User::find($request->seller_id);        // $addressBuyer = Address::findOrFail($request->address_id);
        if (!$seller)  return ResponseAPI("Penjual belum menginput alamat.", 404);
        // $seller = \App\Models\User::find($request->seller_id);
        // dd($seller);
        $sellerAddress = Address::where('user_id', $seller->id)->where('for_seller', true)->first();
        if (!$sellerAddress)  return ResponseAPI("Penjual belum menginput alamat.", 404);

        $products = [];
        $total = 0;
        $totalWithoutDiscount = 0;
        $countedPromoProduct = 0;
        $countedAmountPromo = 0;
        $weight = 0;

        $orderItems = json_decode($request->order_items, true);
        // dd($orderItems);
        foreach ($orderItems as $order_item) {
            $product_id = isset($order_item['product_id']) ? $order_item['product_id'] : $order_item['id'];
            $product = \App\Models\Product::find($product_id);
            if ($product == null) {
                $product = Product::withTrashed()->where('id', $product_id)->first();
                if ($product == null)
                    return ResponseAPI("Maaf produk dengan id tidak ditemukan.", 404);
                else
                    return ResponseAPI("Maaf kami sudah tidak menjual produk " . $product->name . " lagi.", 404);
            }
            $product->load('parent');

            if ($product->stock < $order_item['qty']) {
                return ResponseAPI('Stock Produk ' . $product->name . " tidak cukup. stok yang tersisa sebanyak " . $product->stock, 400);
            }

            if ($product->discount > 0) {
                $thePromoAmount = $product->price * ($product->discount / 100);
                $resultItemPriceAfterDiscount = $product->price - $thePromoAmount;
                $countedPromoProduct++;
                $countedAmountPromo += ($thePromoAmount * $order_item['qty']);

                $total += ($resultItemPriceAfterDiscount * $order_item['qty']);
                $totalWithoutDiscount += ($product->price * $order_item['qty']);
            } else {
                $itemTotal = ($product->price * $order_item['qty']);
                $total += $itemTotal;
                $totalWithoutDiscount += $itemTotal;
            }

            $weight += ($product->weight * $order_item['qty']);
            $productTransformed = new ProductResource($product);
            array_push($products, $productTransformed);
        }


        $data['total'] = $total;
        $data['total_without_discount'] = $totalWithoutDiscount;
        $data['counted_promo_product'] = $countedPromoProduct;
        $data['counted_amount_promo'] = $countedAmountPromo;
        $data['weight'] = $weight;
        // Log::info('checkShippingPrice called with parameters:', [
        //     'origin_id' => $addressBuyer->ro_subdistrict_id,
        //     'destination_id' => $sellerAddress->ro_city_id,
        //     'weight' => $weight,
        // ]);

        // $weight = -2;
        // $deliveryServicesInfo = checkShippingPrice($addressBuyer->ro_subdistrict_id, $sellerAddress->ro_city_id, $weight);
        $dataRequest = [
            'origin_id' => $addressBuyer->ro_subdistrict_id,
            'destination_id' => $sellerAddress->ro_city_id,
            'weight' => $weight,
        ];
        $requestForShippingPrice = new Request();
        $requestForShippingPrice->merge($dataRequest);
        // $data['delivery_services_info'] = checkShippingPrice($addressBuyer->ro_subdistrict_id, $sellerAddress->ro_city_id, $weight);
        try {
            $data['delivery_services_info'] = $this->lypsisCheckShippingPrice($sellerAddress->ro_city_id, $addressBuyer->ro_subdistrict_id, $weight, $seller->seller_delivery_service);
        } catch (\Exception $e) {
            $message = $e->getMessage();

            return ResponseAPI($message, 400);
        }
        // $aa = $this->checkShippingPrice();
        $data['products'] = $products;

        return ResponseAPI($data);
    }

    public function precheckWithDelivery(Request $request)
    {
        $request->validate([
            'order_items' => 'required',
            'address_id' => 'required',
            'delivery_cost' => 'required|numeric',
            'delivery_code' => 'required',
            'delivery_name' => 'required',
            'delivery_service' => 'required',
            'delivery_estimation_day' => 'required',
            'master_account_id' => 'required',
        ]);

        $products = [];
        $total = 0;
        $totalWithoutDiscount = 0;
        $countedPromoProduct = 0;
        $countedAmountPromo = 0;
        $deliveryCost = (int)$request->delivery_cost;
        $masterAccount = MasterAccount::findOrFail($request->master_account_id);


        $orderItems = json_decode($request->order_items, true);
        $sellerId = null;

        foreach ($orderItems as $order_item) {
            $product_id = isset($order_item['product_id']) ? $order_item['product_id'] : $order_item['id'];
            $product = \App\Models\Product::find($product_id);
            if ($product == null) {
                $product = Product::withTrashed()->where('id', $product_id)->first();
                if ($product == null)
                    return ResponseAPI("Maaf produk dengan id tidak ditemukan.", 404);
                else
                    return ResponseAPI("Maaf kami sudah tidak menjual produk " . $product->name . " lagi.", 404);
            }
            if ($sellerId == null) {
                $sellerId = $product->seller_id;
                $product->load('seller');
                $seller = $product->seller;
                if ($seller != null && $seller->is_seller_active != true) {
                    return ResponseAPI("Maaf, toko " . $seller->seller_name . " tidak aktif. Maka tidak bisa beli barang disini", 400);
                }
            } else {
                if ($sellerId != $product->seller_id) {
                    return ResponseAPI("Maaf, kamu hanya bisa membeli produk-produk dari 1 toko dalam 1 transaksi.", 400);
                }
            }

            $product->load('parent');

            $qty = isset($order_item['qty']) ? $order_item['qty'] : 1;
            if ($product->stock < $qty) {
                return ResponseAPI('Stock Produk ' . $product->name . " tidak cukup. stok yang tersisa sebanyak " . $product->stock, 400);
            }

            if ($product->discount > 0) {
                // minusing the product price with discount as percentage
                $thePromoAmount = $product->price * ($product->discount / 100);
                $resultItemPriceAfterDiscount = $product->price - $thePromoAmount;
                $countedPromoProduct++;
                $countedAmountPromo += $thePromoAmount * $qty;

                $total += $resultItemPriceAfterDiscount * $qty;
                $totalWithoutDiscount += $product->price * $qty;
            } else {
                $total += $product->price * $qty;
                $totalWithoutDiscount += $product->price * $qty;
            }
            $productTransformed = new ProductResource($product);
            array_push($products, $productTransformed);
        }

        // create $identifier on Order::class i had getNextId()


        // $type = 'QRIS';
        // $type = 'VirtualAccount';
        $serviceFee = 0;
        // $type = 'Retail';
        if ($masterAccount->type == 'Virtual-Account') {
            $serviceFee = 4500;
        } elseif ($masterAccount->type == 'E-Wallet') { // * A.k.a QRIS
            // $serviceFee = floor($total * 0.00699);
            $serviceFee = floor($total * 0.007);
        } elseif ($masterAccount->type == 'Retail-Outlet') {
            $serviceFee = 5550;
        }

        $subTotal = $total;
        $data['subtotal'] = $subTotal;
        $additionFee = $deliveryCost + $serviceFee;
        $feeGlobalAmount = lypsisGetSetting("", [], true, ['buyer_fee_amount', 'buyer_fee_percent'])->toArray();
        $feeGlobalAmount = array_map('intval', $feeGlobalAmount);
        if ($feeGlobalAmount[0] > 0) {
            $buyerFee = $feeGlobalAmount[0];
        } else {
            $buyerFee = ($total * $feeGlobalAmount[1] / 100);
        }
        $additionFee += $buyerFee;

        $total += $additionFee;
        $totalWithoutDiscount += $additionFee;

        $data['delivery_cost'] = $deliveryCost;
        $data['market_fee_buyer'] = $buyerFee;
        $data['payment_service_fee'] = $serviceFee;
        $data['master_account'] = new MasterAccountResource($masterAccount);
        $data['total'] = $total;
        $data['total_without_discount'] = $totalWithoutDiscount;
        $data['counted_promo_product'] = $countedPromoProduct;
        $data['counted_amount_promo'] = $countedAmountPromo;
        $data['products'] = $products;
        $data['delivery_code'] = $request->input('delivery_code');
        $data['delivery_name'] = $request->input('delivery_name');
        $data['delivery_service'] = $request->input('delivery_service');
        $data['delivery_estimation_day'] = $request->input('delivery_estimation_day');

        return ResponseAPI($data);
    }

    public function checkout(Request $request)
    {
        $request->validate([
            'order_items' => 'required',
            'address_id' => 'required',
            'delivery_cost' => 'required|numeric',
            'delivery_code' => 'required',
            'delivery_name' => 'required',
            'delivery_service' => 'required',
            'master_account_id' => 'required',
        ]);

        $user = auth()->guard('web')->user();
        $masterAccount = MasterAccount::findOrFail($request->master_account_id);

        DB::beginTransaction();

        $products = [];
        $total = 0;
        $totalWithoutDiscount = 0;
        $countedPromoProduct = 0;
        $countedAmountPromo = 0;
        $deliveryCost = (int)$request->delivery_cost;
        // $paymentDue = now()->addDays(1)->format('Y-m-d H:i:s');
        // $paymentDue = now()->addHours(24)->format('Y-m-d H:i:s');
        $paymentDue = now()->addHours(24);
        $countOrderToday = DB::table('orders')->whereDate('created_at', now())->count();
        $identifier = str_pad(now()->day, 2, '0', STR_PAD_LEFT) . strtoupper(now()->format("M")) . now()->format('y') . 'ORD' . str_pad(($countOrderToday + 1), 3, '0', STR_PAD_LEFT) . env('XND_ID') . time();


        $orderItems = json_decode($request->order_items, true);

        $order = new Order();

        $order->payment_identifier = $identifier;
        $order->user_id = $user->id;
        $order->save();
        $weight = 0;
        $sellerId = null;

        foreach ($orderItems as $order_item) {
            $product_id = isset($order_item['product_id']) ? $order_item['product_id'] : $order_item['id'];
            $product = \App\Models\Product::find($product_id);
            $itemTotal = 0;

            if ($product == null) {
                $product = Product::withTrashed()->where('id', $product_id)->first();
                DB::rollBack();

                if ($product == null)
                    return ResponseAPI("Maaf produk dengan id tidak ditemukan.", 404);
                else
                    return ResponseAPI("Maaf kami sudah tidak menjual produk " . $product->name . " lagi.", 404);
            }
            if ($sellerId == null) {
                $sellerId = $product->seller_id;
                $product->load('seller');
                $seller = $product->seller;
                if ($seller != null && $seller->is_seller_active != true) {
                    return ResponseAPI("Maaf, toko " . $seller->seller_name . " tidak aktif. Maka tidak bisa beli barang disini", 400);
                }
            } else {
                if ($sellerId != $product->seller_id) {
                    return ResponseAPI("Maaf, kamu hanya bisa membeli produk-produk dari 1 toko dalam 1 transaksi.", 400);
                }
            }

            $product->load('parent');
            $qty = isset($order_item['qty']) ? $order_item['qty'] : 1;
            if ($product->stock < $qty) {
                DB::rollBack();
                return ResponseAPI('Stock Produk ' . $product->name . " tidak cukup. stok yang tersisa sebanyak " . $product->stock, 400);
            }

            if ($product->discount > 0) {
                $thePromoAmount = $product->price * ($product->discount / 100);
                $resultItemPriceAfterDiscount = $product->price - $thePromoAmount;
                $countedPromoProduct++;
                $countedAmountPromo += ($thePromoAmount * $qty);

                $total += ($resultItemPriceAfterDiscount * $qty);
                $totalWithoutDiscount += ($product->price * $qty);
            } else {
                $itemTotal = ($product->price * $qty);
                $total += $itemTotal;
                $totalWithoutDiscount += $itemTotal;
            }
            $thisItemWeight = ($product->weight * $qty);

            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $product_id;
            $orderItem->quantity = $qty;
            $orderItem->subtotal = $product->price * $qty;
            $orderItem->item_total = $itemTotal;
            $orderItem->price = $product->price;
            $orderItem->weight = $thisItemWeight;
            // $orderItem->fee_seller = $product->fee_seller;
            // $orderItem->fee_buyer = $product->fee_buyer;
            $orderItem->save();

            $weight += $thisItemWeight;
            $productTransformed = new ProductResource($product);
            array_push($products, $productTransformed);
        }

        // create $identifier on Order::class i had getNextId()


        // $type = 'QRIS';
        // $type = 'VirtualAccount';
        $subTotal = $total;
        $data['subtotal'] = $subTotal;


        $serviceFee = 0;
        if ($masterAccount->type == 'Virtual-Account') {
            $serviceFee = 4500;
        } elseif ($masterAccount->type == 'E-Wallet') { // * A.k.a QRIS
            // $serviceFee = floor($total * 0.00699);
            $serviceFee = floor($total * 0.007);
        } elseif ($masterAccount->type == 'Retail-Outlet') {
            $serviceFee = 5550;
        }

        $additionFee = $deliveryCost + $serviceFee;

        $feeGlobalAmount = lypsisGetSetting("", [], true, ['buyer_fee_amount', 'buyer_fee_percent'])->toArray();
        $feeGlobalAmount = array_map('intval', $feeGlobalAmount);
        if ($feeGlobalAmount[0] > 0) {
            $buyerFee = $feeGlobalAmount[0];
        } else {
            $buyerFee = ($total * $feeGlobalAmount[1] / 100);
        }
        $additionFee += $buyerFee;

        $total += $additionFee;
        $totalWithoutDiscount += $additionFee;



        $channelType = lypsisConvertPaymentChannelType($masterAccount->type);
        $channelCode = $channelType == 'QR_CODE' ? "DYNAMIC" : $masterAccount->provider_name;

        $dataPaymentCreated = $this->createPaymentRequest($channelType, $channelCode, $total, $identifier, $paymentDue, $user);
        Log::info("created payReq - $identifier :", $dataPaymentCreated);

        // dd($dataPaymentCreated);
        // return ResponseAPI($dataPaymentCreated);


        $order->discount_product = $countedAmountPromo;
        $order->payment_status = Order::PAYMENT_PENDING;
        $order->status = Order::PENDING;
        $order->address_id = $request->address_id;
        $order->seller_id = $sellerId;
        $order->delivery_cost = $deliveryCost;
        $order->service_fee = $serviceFee;
        $order->subtotal = $subTotal;
        $order->market_fee_buyer = $buyerFee;
        $order->delivery_estimation_day = $request->delivery_estimation_day;
        $order->delivery_service_code = codeServiceDelivery($request->delivery_code);
        $order->delivery_service_name = $request->delivery_name;
        $order->delivery_service_kind = $request->delivery_service;
        $order->note = 'Tolong hati hati';
        if ($countedAmountPromo > 0) {
            $order->total = $totalWithoutDiscount;
            $order->total_final = $total;
        } else {
            $order->total = $total;
        }

        // $order->market_fee_buyer = '';
        // $order->market_fee_seller = '';
        $order->master_account_id = $request->master_account_id;
        $order->payment_channel = $masterAccount->provider_name;
        $order->payment_due = $paymentDue;
        $order->weight = $weight;

        if ($channelType == 'VIRTUAL_ACCOUNT') {
            $order->va_number = $dataPaymentCreated['account_number'];
        } else if ($channelType == 'QR_CODE') {
            $order->qr_id = $dataPaymentCreated['id'];
            $order->qr_string = $dataPaymentCreated['qr_string'];
        } else if ($channelType == 'OVER_THE_COUNTER') {
            $order->outlet_payment_code = $dataPaymentCreated['payment_code'];
        } else if ($channelType == 'PI') {
            $order->pi_delivery_cost = convertRupiahToPi($order->delivery_cost);
            $order->pi_service_fee = convertRupiahToPi($order->service_fee);
            if ($countedAmountPromo > 0) {
                $order->pi_total = convertRupiahToPi($order->total);
                $order->pi_total_final = convertRupiahToPi($order->total_final);
            } else {
                $order->pi_total = convertRupiahToPi($order->total);
            }
        }


        $order->save();
        // * Remember To Save The MasterAccountId

        $data['delivery_cost'] = $deliveryCost;
        $data['payment_service_fee'] = $serviceFee;
        $data['market_fee_buyer'] = $buyerFee;
        $data['total'] = $total;
        $data['total_without_discount'] = $totalWithoutDiscount;
        $data['counted_promo_product'] = $countedPromoProduct;
        $data['counted_amount_promo'] = $countedAmountPromo;
        $data['order'] = $order;
        // $data['products'] = $products;
        DB::commit();

        return ResponseAPI($data);
    }

    public function serverApprove(Request $request)
    {
        $user = $request->user();

        if (!$user) {
            return response()->json(['message' => 'login terlebih dahulu'], 401);
        }

        $paymentId = $request->payment_id;
        $currentPayment = $this->platformAPIClient("v2/payments/$paymentId");

        $order = Order::find($currentPayment->metadata->order_id);
        if ($order == null) {
            return response()->json(['message' => 'order tidak ditemukan'], 400);
        }
        $order->pi_payment_id = $paymentId;
        $order->pi_total_final = $currentPayment->amount;
        $order->save();


        // let Pi Servers know that you're ready
        $this->platformAPIClient("v2/payments/$paymentId/approve", 'post');
        return response()->json(["message" => "Approved the payment $paymentId"]);
    }

    public function serverComplete(Request $request)
    {
        $paymentId = $request->payment_id;
        $txid = $request->txid;

        $order = Order::where('pi_payment_id', $request->payment_id)->first();
        if ($order) {
            $order->status = Order::PAID;
            $order->payment_status = Order::PAYMENT_PAID;
            $order->txid = $txid;
            $order->save();
        }

        // let Pi server know that the payment is completed
        $this->platformAPIClient("/v2/payments/$paymentId/complete", "post", ['txid' => $txid]);
        return response()->json(["message" => "Completed the payment $paymentId"]);
    }

    public function serverIncomplete(Request $request)
    {
        $payment = $request->payment;
        $paymentId = $payment->identifier;
        $txid = $payment->transaction && $payment->transaction->txid;
        $txURL = $payment->transaction && $payment->transaction->_link;

        // find the incomplete order
        $order = Order::where('pi_payment_id', $paymentId)->first();

        // order doesn't exist
        if (!$order) {
            return response()->json([
                'message' => "Order not found"
            ], 400);
        }

        // check the transaction on the Pi blockchain
        $horizonResponse = $this->platformAPIClient($txURL);
        $paymentIdOnBlock = $horizonResponse->memo ?? null;

        // and check other data as well e.g. amount
        if ($paymentIdOnBlock !== $order->pi_payment_id) {
            return response()->json(["message" => "Payment id doesn't match."]);
        }

        // mark the order as paid
        $order->status = Order::PAID;
        $order->payment_status = Order::PAYMENT_PAID;
        $order->txid = $txid;
        $order->save();

        // let Pi Servers know that the payment is completed
        $this->platformAPIClient("v2/payments/{$paymentId}/complete", 'post', ['txid' => $txid]);

        return response()->json([
            'message ' => `Handled the incomplete payment $paymentId`
        ]);
    }


    public function serverCancel(Request $request)
    {

        $paymentId = $request->payment_id;

        $orders = Order::where('pi_payment_id', $request->pi_payment_id)->where("status", '!=', Order::PAID)->get();

        foreach ($orders as $order) {
            $order->status = Order::CANCELLED;
            $order->payment_status = Order::PAYMENT_CANCELLED;
            $order->save();
        }

        return response()->json([
            "message" => "Cancelled the payment $paymentId"
        ]);
    }


    private function lypsisCheckShippingPrice($originId, $destinationId, $weight, $deliveryServices, $earlierMode = false)
    {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, "https://pro.rajaongkir.com/api/cost");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode([
            'origin' => $originId,
            'originType' => 'city',
            'destination' => $destinationId,
            'destinationType' => 'subdistrict',
            'weight' => $weight,
            'courier' => $deliveryServices,
        ]));
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            'key: ' . env('RO_KEY'),
            'Content-Type: application/json',
        ]);
        curl_setopt($curl, CURLOPT_TIMEOUT, 15);

        try {
            $res = curl_exec($curl);

            if ($res === false) {
                throw new Exception(curl_error($curl), curl_errno($curl));
            }

            $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

            if ($httpCode >= 400) {
                // throw new Exception("Error getting shipping cost: HTTP $res");
                // $rajaOngkirResponse = json_decode($res);

                // return ResponseAPI("asdasdasd", 404);

                // return ResponseAPI($rajaOngkirResponse, 404);

                $rajaOngkirResponse = json_decode($res);
                $errorCode = $rajaOngkirResponse->rajaongkir->status->code;
                $errorDescription = $rajaOngkirResponse->rajaongkir->status->description;
                if ($errorDescription)
                    return ResponseAPI("Error getting shipping cost: $errorDescription", 404);
                else
                    return ResponseAPI("Error getting shipping cost", 404);
            }

            $rajaOngkirResponse = json_decode($res);
            if (!$rajaOngkirResponse)
                return ResponseAPI('Jasa kirim tidak tersedia.', 404);
            elseif ($rajaOngkirResponse && !$rajaOngkirResponse->rajaongkir)
                return ResponseAPI('Jasa kirim tidak tersedia.', 404);

            $shippingCost = $rajaOngkirResponse->rajaongkir;

            // $data['origin_details'] = $shippingCost->origin_details;
            // $data['destination_details'] = $shippingCost->destination_details;

            $data = [];
            if ($earlierMode == false) {
                // $data['results'] = $shippingCost->results;
                $data = $shippingCost;
            } else {
                $dataEarlier = null;

                if (isset($shippingCost->results[0]->costs[1])) {
                    $dataEarlier = $shippingCost->results[0]->costs[1];
                } else {
                    $dataEarlier = $shippingCost->results[0]->costs[0];
                }

                $data['results_earlier'] = $dataEarlier;
            }

            return $data;
        } catch (\Exception $e) {
            // throw $e;
            return ResponseAPI('Jasa kirim tidak tersedia.', 404);

            // Log::info("1_Error RajaJasa kirim tidak tersedia.Ongkir: " . $e->getMessage());
            // throw new Exception("", 404);
        } finally {
            curl_close($curl);
        }
    }


    public function createPaymentRequest($channelType, $channelCode, $amount, $paymentIdentifier, $paymentDue, User $user)
    {
        if ($channelType == 'PI') {
            return [];
        }

        Xendit::setApiKey(env('XENDIT_KEY'));

        $result = null;
        // dd($amount);

        if ($channelType == 'VIRTUAL_ACCOUNT') {
            $result = VirtualAccounts::create([
                'external_id' => $paymentIdentifier,
                'bank_code' => $channelCode,
                'is_closed' => true,
                'name' => $user->name,
                'expected_amount' => $amount,
                'expiration_date' => $paymentDue,
            ]);
        } else if ($channelType == 'QR_CODE') {
            // $amount check maximum 100000
            if ($amount > 10000000) {
                return ResponseAPI('Gagal membuat pembayaran, maksimal transaksi dengan metode ini adalah Rp. 10.000.000', 400);
                // throw new HttpException(400, 'Gagal membuat pembayaran, maksimal transaksi dengan metode ini adalah Rp. 10.000.000');
            }
            $result = QRCode::create([
                'api_version' => '2022-07-31',
                'reference_id' => $paymentIdentifier,
                'type' => 'DYNAMIC',
                'webhook-url' => 'https://662b-103-154-110-81.ngrok-free.app/0xff-callback-confirm-payment',
                'amount' => $amount,
                'expires_at' => $paymentDue,
                'currency' => 'IDR',
            ]);
        } else if ($channelType == 'OVER_THE_COUNTER') {
            $result = Retail::create([
                'external_id' => $paymentIdentifier,
                'retail_outlet_name' => $channelCode,
                'name' => $user->name,
                'expected_amount' => $amount,
                'expiration_date' => $paymentDue,
            ]);
        }


        return $result;
    }

    private function platformAPIClient($url, $method = 'get', $json = [])
    {
        $platformAPIClient = new Client([
            'base_uri' => "https://api.minepi.com",
            'timeout'  => 20000,
            'headers'  => [
                'Authorization' => 'Key rj3ovcgdeuktnwyzeatifmgchc1vvmltfnbi5o3fqciqlqrdxb7osbnfldyep4ja'
                // 'Authorization' => 'Key mtr9iaoqhkkqvqz4lgwcu8jrbkorcaf8u6qlrfytia1rzrzkwbapvlsagmdseajd'
                // 'Authorization' => 'Key sfzgfudokxyf6urlin26hda1cmo0rgiui62dqslp2qqkib4rzohcbngosbppplbt'
            ],
        ]);

        if ($method == 'post')
            $response = $platformAPIClient->post($url, [
                'json' => $json,
            ]);
        else
            $response = $platformAPIClient->get($url);


        return json_decode($response->getBody());
    }
}
