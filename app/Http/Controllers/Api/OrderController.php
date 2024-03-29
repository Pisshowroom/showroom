<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MasterAccountResource;
use App\Http\Resources\ProductResource;
use App\Models\Address;
use App\Models\MasterAccount;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use Exception;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Xendit\Configuration;
use Xendit\PaymentRequest\PaymentRequestApi;
use Xendit\PaymentRequest\PaymentRequestParameters;
use Xendit\QRCode;
use Xendit\Retail;
use Xendit\VirtualAccounts;
use Xendit\Xendit;

// use Xendit\Xendit;


class OrderController extends Controller
{

    public function manualCreatePayReq(Request $request)
    {
        $channelType = $request->input('channelType');
        $channelCode = $request->input('channelCode');
        $amount = $request->input('amount');
        $paymentIdentifier = $request->input('paymentIdentifier');
        $paymentDue = $request->input('paymentDue');
        $user = User::find(1);

        $result = $this->createPaymentRequest($channelType, $channelCode, $amount, $paymentIdentifier, $paymentDue, $user);
        return $result;
    }

    public function createPaymentRequest($channelType, $channelCode, $amount, $paymentIdentifier, $paymentDue, User $user)
    {
        Xendit::setApiKey(env('XENDIT_KEY'));

        $result = null;
        // dd($amount);

        if ($channelType == 'VIRTUAL_ACCOUNT') {
            $result = VirtualAccounts::create([
                // . strval(time()),
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
                // return ResponseAPI('Gagal membuat pembayaran, maksimal transaksi dengan metode ini adalah Rp. 10.000.000', 400);
                throw new HttpException(400, 'Gagal membuat pembayaran, maksimal transaksi dengan metode ini adalah Rp. 10.000.000');
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

    public function destroy(Product $product)
    {
        $product->delete();
        return ResponseAPI('Product berhasil dihapus.');
    }


    public function preCheckEarly(Request $request)
    {
        $user = auth()->guard('api-client')->user();
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
            $product_id = $order_item['product_id'];
            $product = \App\Models\Product::find($order_item['product_id']);
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
        $user = auth()->guard('api-client')->user();
        // VirtualAccount::setters
        $request->validate([
            'order_items' => 'required',
            'address_id' => 'required',
        ]);

        $addressBuyer = Address::findOrFail($request->address_id);
        $seller = \App\Models\User::find($request->seller_id);
        if ($seller == null) {
            return ResponseAPI('Penjual tidak ditemukan.', 404);
        }
        $seller->load('address_seller');
        // dd($seller);
        if ($seller->address_seller == null) {
            return ResponseAPI('Alamat penjual tidak ditemukan.', 404);
        }
        $sellerAddress = $seller->address_seller;

        $products = [];
        $total = 0;
        $totalWithoutDiscount = 0;
        $countedPromoProduct = 0;
        $countedAmountPromo = 0;
        $weight = 0;

        $orderItems = json_decode($request->order_items, true);
        // dd($orderItems);
        foreach ($orderItems as $order_item) {
            $product_id = $order_item['product_id'];
            $product = \App\Models\Product::find($order_item['product_id']);
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

        try {
            $data['delivery_services_info'] = $this->lypsisCheckShippingPrice($sellerAddress->ro_city_id, $addressBuyer->ro_subdistrict_id, $weight, $seller->seller_delivery_service);
        } catch (\Exception $e) {
            $message = $e->getMessage();

            return ResponseAPI($message, 400);
        }

        $data['total'] = $total;
        $data['total_without_discount'] = $totalWithoutDiscount;
        $data['counted_promo_product'] = $countedPromoProduct;
        $data['counted_amount_promo'] = $countedAmountPromo;
        $data['weight'] = $weight;
        /* Log::info('checkShippingPrice called with parameters:', [
            'origin_id' => $addressBuyer->ro_subdistrict_id,
            'destination_id' => $sellerAddress->ro_city_id,
            'weight' => $weight,
        ]); */

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
        // $aa = $this->checkShippingPrice();
        $data['products'] = $products;

        return ResponseAPI($data);
    }

    public function callbackConfirmPayment($type, Request $request)
    {
        // return "a";
        if ($type == 'QR_CODE') {
            $data = $request->data;
            if ($data && in_array($data['status'], ['SUCCEEDED', 'COMPLETED'])) {
                $external_id = $data['reference_id'];
            }
        } elseif ($type == 'VIRTUAL_ACCOUNT') {
            $external_id = $request->external_id;
            // $payment_id = $request->payment_id;
        } elseif ($type == 'OVER_THE_COUNTER') {
            $external_id = $request->external_id;
            // $payment_id = $request->payment_id;
        }

        DB::beginTransaction();
        $order = Order::where('payment_identifier', $external_id)->first();
        if ($order == null) {
            return ResponseAPI("Maaf pesanan dengan id " . $external_id . " tidak ditemukan.", 200);
        }

        // dd($order);

        $order->paid_at = now();
        $order->status = Order::PROCESSED_BY_SELLER;
        $order->payment_status = Order::PAYMENT_PAID;
        $order->save();

        $order->load(['order_items', 'user', 'seller']);
        $user = $order->user;

        if (count($order->order_items) > 0) {
            foreach ($order->order_items as $order_item) {
                $product = Product::find($order_item->product_id);
                if (empty($product)) {
                    // $user balance addition from orderitem -> item_total
                    if ($user) {
                        $user->balance += $order_item->item_total;
                        $user->save();
                    }

                    // * This WRONG
                    /* try {
                        $product = Product::withTrashed()->where('id', $order_item->product_id)->firstOrFail();
                    } catch (\Exception $e) {
                        $user = User::findOrFail($order->user_id);
                        $total = $order->total_final ? $order->total_final : $order->total;
                        $user->balance += $total;
                        // DB::rollBack();
                        // return ResponseAPI("Maaf produk " . $product->name . " sudah tidak dijual lagi.", 404);
                    } */
                }


                $product->stock -= $order_item->qty;
                $product->save();
            }
        }
        $seller = $order->seller;
        if ($seller != null && $seller->device_id != null) {
            $notificationTitle = "Ada Pesaanan Baru";
            $notificationSubTitle = "Pesanan sudah dibayar dengan Identifier : " . $external_id;
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

        DB::commit();
        // Log::info('callbackConfirmPayment called with parameters:', $request->all());
        return ResponseAPI("Pembayaran berhasil dikonfirmasi.", 200);
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
                throw new Exception("Tidak dapat menemukan jasa kirim beserta biayanya: $errorDescription", 404);
            }

            $rajaOngkirResponse = json_decode($res);
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
            Log::info("1_Error RajaOngkir: " . $e->getMessage());
            $message = $e->getMessage();
            if (empty($message)) {
                $message = "Jasa kirim tidak tersedia. Coba lagi nanti / Coba sesuaikan alamat valid lagi";
            }
            throw new Exception($message, 404);
            // throw new Exception("Jasa kirim tidak tersedia. Coba lagi nanti / Coba sesuaikan alamat valid lagi.", 404);
        } finally {
            curl_close($curl);
        }
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
            $product_id = $order_item['product_id'];
            $product = \App\Models\Product::find($order_item['product_id']);
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


            if ($product->stock < $order_item['qty']) {
                return ResponseAPI('Stock Produk ' . $product->name . " tidak cukup. stok yang tersisa sebanyak " . $product->stock, 400);
            }

            if ($product->discount > 0) {
                // minusing the product price with discount as percentage
                $thePromoAmount = $product->price * ($product->discount / 100);
                $resultItemPriceAfterDiscount = $product->price - $thePromoAmount;
                $countedPromoProduct++;
                $countedAmountPromo += $thePromoAmount * $order_item['qty'];

                $total += $resultItemPriceAfterDiscount * $order_item['qty'];
                $totalWithoutDiscount += $product->price * $order_item['qty'];
            } else {
                $total += $product->price * $order_item['qty'];
                $totalWithoutDiscount += $product->price * $order_item['qty'];
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

        $user = auth()->guard('api-client')->user();
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
        $identifier = str_pad(now()->day, 2, '0', STR_PAD_LEFT) . strtoupper(now()->format("M")) . now()->format('y') . 'ORD' . str_pad(($countOrderToday + 1), 3, '0', STR_PAD_LEFT) . env('XND_ID');

        $orderItems = json_decode($request->order_items, true);

        $order = new Order();

        $order->payment_identifier = $identifier;
        $order->user_id = $user->id;
        $order->save();
        $weight = 0;
        $sellerId = null;


        foreach ($orderItems as $order_item) {
            $product_id = $order_item['product_id'];
            $product = \App\Models\Product::find($order_item['product_id']);
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

            if ($product->stock < $order_item['qty']) {
                DB::rollBack();
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
            $thisItemWeight = ($product->weight * $order_item['qty']);

            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $product_id;
            $orderItem->quantity = $order_item['qty'];
            // $orderItem->note = $order_item['note'] ?? null;
            $orderItem->subtotal = $product->price * $order_item['qty'];
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
        $order->note = $request->note ?? null;
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

    public function waybillCheck(Request $request)
    {
        $request->validate([
            'delivery_receipt_number' => 'required',
            'delivery_service' => 'required|in:jne,jnt,sicepat,anteraja',
            'just_json' => 'nullable',
        ]);

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, "https://pro.rajaongkir.com/api/waybill");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query([
            'waybill' => $request->delivery_receipt_number,
            'courier' => $request->delivery_service,
        ]));
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            'key: ' . env('RO_KEY'),
        ]);
        curl_setopt($curl, CURLOPT_TIMEOUT, 30);

        try {
            $res = curl_exec($curl);

            if ($res === false) {
                throw new Exception(curl_error($curl), curl_errno($curl));
            }

            $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

            if ($httpCode >= 400) {
                $rajaOngkirResponse = json_decode($res);
                // $errorCode = $rajaOngkirResponse->rajaongkir->status->code;
                $errorDescription = $rajaOngkirResponse->rajaongkir->status->description;
                throw new Exception("Error checking waybill: $errorDescription", 404);
            }

            $rajaOngkirResponse = json_decode($res)->rajaongkir->result;

            if ($request->just_json == true) {
                return $rajaOngkirResponse;
            }
            return ResponseAPI($rajaOngkirResponse);
        } catch (\Exception $e) {
            throw $e;
        } finally {
            curl_close($curl);
        }
    }

    public function waybillCheckOld(Request $request)
    {
        $request->validate([
            'delivery_receipt_number' => 'required',
            'delivery_service' => 'required',
        ]);

        $client = new Client();
        $res = $client->request('POST', 'https://pro.rajaongkir.com/api/waybill', [
            'headers' => [
                'key'     => '5f96f4b2ff5b4de345165466b71d002c',
            ],
            'form_params' => [
                'waybill' => $request->delivery_receipt_number,
                'courier' => $request->delivery_service,
            ]
        ]);

        $rajaOngkirResponse = json_decode($res->getBody()->getContents())->rajaongkir->result;
        return ResponseAPI($rajaOngkirResponse);
    }
}
