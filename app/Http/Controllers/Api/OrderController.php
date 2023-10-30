<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // create function preCheck Price from request order_items[product_id,qty], calculate total of order
    public function preCheck(Request $request)
    {
        $request->validate([
            'order_items' => 'required',
        ]);

        $products = [];
        $total = 0;
        $totalWithoutDiscount = 0;
        $countedPromoProduct = 0;
        $countedAmountPromo = 0;

        $orderItems = json_decode($request->order_items, true);

        foreach ($orderItems as $order_item) {
            $product_id = $order_item['product_id'];
            $product = \App\Models\Product::find($order_item['product_id']);
            if ($product == null) {
                $product = Product::withTrashed()->where('id', $product_id)->first();
                return ResponseAPI("Maaf kami sudah tidak menjual produk " . $product->name . " lagi.", false);
            }
        // dd($order_item);


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

        $data['products'] = $products;
        $data['total'] = $total;
        $data['total_without_discount'] = $totalWithoutDiscount;
        $data['counted_promo_product'] = $countedPromoProduct;
        $data['counted_amount_promo'] = $countedAmountPromo;

        return ResponseAPI($data);
    }
}
