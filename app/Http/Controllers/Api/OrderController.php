<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Product;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
// use Xendit\PaymentMethod\VirtualAccount;
use Xendit\PaymentRequest\VirtualAccount;

// use Xendit\PaymentRequest\VirtualAccount;
// use Xendit\VirtualAccounts;


class OrderController extends Controller
{
    // create function preCheck Price from request order_items[product_id,qty], calculate total of order
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

            if ($product->stock < $order_item['qty']) {
                return ResponseAPI('Stock Produk ' . $product->name . " tidak cukup. stok yang tersisa sebanyak " . $product->stock, 400);
            }

            if ($product->discount > 0) {
                // minusing the product price with discount as percentage
                $thePromoAmount = ($product->price * $product->discount / 100);
                $resultItemPriceAfterDiscount = $product->price - $thePromoAmount;
                $countedPromoProduct++;
                $countedAmountPromo += $thePromoAmount * $order_item['qty'];

                $total += $resultItemPriceAfterDiscount * $order_item['qty'];
                $totalWithoutDiscount += $product->price * $order_item['qty'];
            } else {
                $total += $product->price * $order_item['qty'];
                $totalWithoutDiscount += $product->price * $order_item['qty'];
            }

            $weight += $product->weight * $order_item['qty'];
            array_push($products, $product);
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
        // dd($seller);
        $sellerAddress = Address::where('user_id', $seller->id)->where('main', true)->firstOrFail();

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

            if ($product->stock < $order_item['qty']) {
                return ResponseAPI('Stock Produk ' . $product->name . " tidak cukup. stok yang tersisa sebanyak " . $product->stock, 400);
            }

            if ($product->discount > 0) {
                // minusing the product price with discount as percentage
                $thePromoAmount = ($product->price * $product->discount / 100);
                $resultItemPriceAfterDiscount = $product->price - $thePromoAmount;
                $countedPromoProduct++;
                $countedAmountPromo += $thePromoAmount * $order_item['qty'];

                $total += $resultItemPriceAfterDiscount * $order_item['qty'];
                $totalWithoutDiscount += $product->price * $order_item['qty'];
            } else {
                $total += $product->price * $order_item['qty'];
                $totalWithoutDiscount += $product->price * $order_item['qty'];
            }

            $weight += $product->weight * $order_item['qty'];
            array_push($products, $product);
        }

        $data['total'] = $total;
        $data['total_without_discount'] = $totalWithoutDiscount;
        $data['counted_promo_product'] = $countedPromoProduct;
        $data['counted_amount_promo'] = $countedAmountPromo;
        $data['delivery_services_info'] = checkShippingPrice($addressBuyer->ro_subdistrict_id, $sellerAddress->ro_city_id, $weight);
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
        ]);

        $products = [];
        $total = 0;
        $totalWithoutDiscount = 0;
        $countedPromoProduct = 0;
        $countedAmountPromo = 0;
        $deliveryCost = (int)$request->delivery_cost;


        $orderItems = json_decode($request->order_items, true);

        foreach ($orderItems as $order_item) {
            $product_id = $order_item['product_id'];
            $product = \App\Models\Product::find($order_item['product_id']);
            if ($product == null) {
                $product = Product::withTrashed()->where('id', $product_id)->first();
                return ResponseAPI("Maaf kami sudah tidak menjual produk " . $product->name . " lagi.", false);
            }

            if ($product->stock < $order_item['qty']) {
                return ResponseAPI(['error' => 'Stock Produk ' . $product->name . " tidak cukup. stok yang tersisa sebanyak " . $product->stock], 40);
            }

            if ($product->discount > 0) {
                // minusing the product price with discount as percentage
                $thePromoAmount = ($product->price * $product->discount / 100);
                $resultItemPriceAfterDiscount = $product->price - $thePromoAmount;
                $countedPromoProduct++;
                $countedAmountPromo += $thePromoAmount * $order_item['qty'];

                $total += $resultItemPriceAfterDiscount * $order_item['qty'];
                $totalWithoutDiscount += $product->price * $order_item['qty'];
            } else {
                $total += $product->price * $order_item['qty'];
                $totalWithoutDiscount += $product->price * $order_item['qty'];
            }
            array_push($products, $product);
        }

        // create $identifier on Order::class i had getNextId() 


        // $type = 'QRIS';
        // $type = 'VirtualAccount';
        $serviceFee = 0;
        $type = 'Retail';
        if ($type == 'VirtualAccount') {
            $serviceFee = 4500;
        } elseif ($type == 'QRIS') {
            // $serviceFee = floor($total * 0.00699);
            $serviceFee = floor($total * 0.007);
        } elseif ($type == 'Retail') {
            $serviceFee = 5550;
        }

        $data['subtotal'] = $total;
        $additionFee = $deliveryCost + $serviceFee;
        $total += $additionFee;
        $totalWithoutDiscount += $additionFee;

        $data['delivery_cost'] = $deliveryCost;
        $data['payment_service_fee'] = $serviceFee;
        $data['total'] = $total;
        $data['total_without_discount'] = $totalWithoutDiscount;
        $data['counted_promo_product'] = $countedPromoProduct;
        $data['counted_amount_promo'] = $countedAmountPromo;
        $data['products'] = $products;

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
        ]);
        $user = auth()->user();

        $products = [];
        $total = 0;
        $totalWithoutDiscount = 0;
        $countedPromoProduct = 0;
        $countedAmountPromo = 0;
        $deliveryCost = (int)$request->delivery_cost;
        $paymentDue = now()->addDays(1)->format('Y-m-d H:i:s');
        $countOrderToday = DB::table('orders')->whereDate('created_at', now())->count();
        $identifier = str_pad(now()->day, 2, '0', STR_PAD_LEFT) . strtoupper(now()->format("M")) . now()->format('y') . 'ORD' . str_pad(($countOrderToday + 1), 3, '0', STR_PAD_LEFT) . env('XND_ID');


        $orderItems = json_decode($request->order_items, true);

        foreach ($orderItems as $order_item) {
            $product_id = $order_item['product_id'];
            $product = \App\Models\Product::find($order_item['product_id']);
            if ($product == null) {
                $product = Product::withTrashed()->where('id', $product_id)->first();
                return ResponseAPI("Maaf kami sudah tidak menjual produk " . $product->name . " lagi.", false);
            }

            if ($product->stock < $order_item['qty']) {
                return ResponseAPI(['error' => 'Stock Produk ' . $product->name . " tidak cukup. stok yang tersisa sebanyak " . $product->stock], 40);
            }

            if ($product->discount > 0) {
                // minusing the product price with discount as percentage
                $thePromoAmount = ($product->price * $product->discount / 100);
                $resultItemPriceAfterDiscount = $product->price - $thePromoAmount;
                $countedPromoProduct++;
                $countedAmountPromo += $thePromoAmount * $order_item['qty'];

                $total += $resultItemPriceAfterDiscount * $order_item['qty'];
                $totalWithoutDiscount += $product->price * $order_item['qty'];
            } else {
                $total += $product->price * $order_item['qty'];
                $totalWithoutDiscount += $product->price * $order_item['qty'];
            }
            array_push($products, $product);
        }

        // create $identifier on Order::class i had getNextId() 


        // $type = 'QRIS';
        // $type = 'VirtualAccount';
        $data['subtotal'] = $total;

        $serviceFee = 0;
        $type = 'Retail';
        if ($type == 'VirtualAccount') {
            $serviceFee = 4500;
            $additionFee = $deliveryCost + $serviceFee;

            $total += $additionFee;
            $totalWithoutDiscount += $additionFee;
            $params = [
                'external_id' => $identifier,
                'bank_code' => $request->payment_provider_name,
                'name' => ucwords(Str::slug(preg_replace('/\d+/u', '', $user->name),  ' ')),
                'is_closed' => true,
                'expected_amount' => $total,
                'expiration_date' => $paymentDue,
            ];
        } elseif ($type == 'QRIS') {
            // $serviceFee = floor($total * 0.00699);
            $serviceFee = floor($total * 0.007);
        } elseif ($type == 'Retail') {
            $serviceFee = 5550;
        }




        $data['delivery_cost'] = $deliveryCost;
        $data['payment_service_fee'] = $serviceFee;
        $data['total'] = $total;
        $data['total_without_discount'] = $totalWithoutDiscount;
        $data['counted_promo_product'] = $countedPromoProduct;
        $data['counted_amount_promo'] = $countedAmountPromo;
        $data['products'] = $products;

        return ResponseAPI($data);
    }


    

    public function waybillCheck(Request $request)
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
