<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use App\Http\Resources\MasterAccountResource;
use App\Http\Resources\ProductResource;
use App\Http\Resources\SliderResource;
use App\Models\Address;
use App\Models\Article;
use App\Models\Category;
use App\Models\MasterAccount;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Slider;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class BuyerController extends Controller
{
    public function getCommonData()
    {
        $data['categories'] = Category::all();

        if (Auth::guard('web')->user() && Auth::guard('web')->user()->id) {
            $data['addresses'] = $this->addresses();
        } else {
            $data['addresses'] = null;
        }

        return $data;
    }

    private function addresses()
    {
        return Address::where('user_id', Auth::guard('web')->user()->id)->where('main', true)->whereNull('deleted_at')->first();
    }

    public function home(Request $request)
    {
        // $recommendedProducts = Product::with(['category', 'parent'])
        //     ->whereHas('order_items.order', function ($query) {
        //         $query->where('status', 'done');
        //     })
        //     ->havingRaw('COUNT(order_items.id) > 0')
        //     ->orderByDesc('order_items_count')
        //     ->take(10)
        //     ->get();


        $sliders = Slider::all();
        // limitted 5 article latest
        $articles  = Article::latest()->take(4)->get();
        $latestProducts = Product::with(['category', 'seller'])->latest()->take(10)->get();
        $limitedProducts = Product::with(['category', 'seller'])->inRandomOrder()->take(10)->get();
        $promoProducts = Product::with(['category', 'seller'])->whereNotNull('discount')->inRandomOrder()->take(10)->get();
        $bestSellerProducts = Product::with(['category', 'seller'])
            ->addSelect([
                'total_quantity' => OrderItem::selectRaw('sum(quantity)')
                    ->whereColumn('product_id', 'products.id')
                    ->join('orders', 'order_items.order_id', '=', 'orders.id')
                    ->where('orders.status', 'done')
            ])
            ->orderByDesc('total_quantity')
            ->take(10)
            ->get();
        $data = $this->getCommonData();
        $data['sliders'] = SliderResource::collection($sliders);
        $data['latest_product'] = ProductResource::collection($latestProducts);
        $data['limited_product'] = ProductResource::collection($limitedProducts);
        $data['best_seller_product'] = ProductResource::collection($bestSellerProducts);
        $data['recommended_products'] = ProductResource::collection($limitedProducts);
        $data['promo_products'] = ProductResource::collection($promoProducts);
        $data['articles'] = ArticleResource::collection($articles);

        return view('clients.buyer.home', ['data' => $data]);
    }


    public function notFound()
    {
        $data = $this->getCommonData();
        return view('clients.buyer.error404', ['data' => $data]);
    }
    public function contact()
    {
        $data = $this->getCommonData();
        return view('clients.buyer.contact', ['data' => $data]);
    }


    //auth
    public function login()
    {
        $data = $this->getCommonData();
        return view('clients.buyer.auth.login', ['data' => $data]);
    }
    public function register()
    {
        $data = $this->getCommonData();
        return view('clients.buyer.auth.register', ['data' => $data]);
    }

    public function about()
    {
        $data = $this->getCommonData();
        return view('clients.buyer.about', ['data' => $data]);
    }
    public function term()
    {
        $data = $this->getCommonData();
        return view('clients.buyer.term', ['data' => $data]);
    }

    //user
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

            if ($product->stock < $order_item['qty']) {
                return ResponseAPI('Stock Produk ' . $product->name . " tidak cukup. stok yang tersisa sebanyak " . $product->stock, 400);
            }

            if ($product->discount > 0) {
                // minusing the product price with discount as percentage
                $thePromoAmount = ($product->price * $product->discount / 100);
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
            array_push($products, $product);
        }


        $data['total'] = $total;
        $data['total_without_discount'] = $totalWithoutDiscount;
        $data['counted_promo_product'] = $countedPromoProduct;
        $data['counted_amount_promo'] = $countedAmountPromo;
        $data['weight'] = $weight;
        Log::info('checkShippingPrice called with parameters:', [
            'origin_id' => $addressBuyer->ro_subdistrict_id,
            'destination_id' => $sellerAddress->ro_city_id,
            'weight' => $weight,
        ]);

        // $weight = -2;
        // $deliveryServicesInfo = checkShippingPrice($addressBuyer->ro_subdistrict_id, $sellerAddress->ro_city_id, $weight);
        $dataRequest = [
            'origin_id' => $addressBuyer->ro_subdistrict_id,
            'destination_id' => $sellerAddress->ro_city_id,
            'weight' => $weight,
        ];
        $requestForShippingPrice = new Request();
        $requestForShippingPrice->merge($dataRequest);
        // $deliveryServicesInfo = $this->lypsisCheckShippingPrice($requestForShippingPrice);
        // $deliveryServicesInfo = null;
        // $data['delivery_services_info'] = $deliveryServicesInfo;
        // $data['delivery_services_info'] = checkShippingPrice($addressBuyer->ro_subdistrict_id, $sellerAddress->ro_city_id, $weight);
        $data['delivery_services_info'] = $this->lypsisCheckShippingPrice($addressBuyer->ro_subdistrict_id, $sellerAddress->ro_city_id, $weight);
        // $aa = $this->checkShippingPrice();
        $data['products'] = $products;

        return ResponseAPI($data);
    }

    public function checkout()
    {
        $data = $this->getCommonData();
        $masterAccounts = MasterAccount::whereIn('type', ['Virtual-Account', 'E-Wallet', 'Retail-Outlet'])
            ->orderBy('type')
            ->get();

        $data['master_account'] = MasterAccountResource::collection($masterAccounts);

        return view('clients.buyer.user.checkout', ['data' => $data]);
    }
    public function cart()
    {
        $data = $this->getCommonData();
        return view('clients.buyer.user.cart', ['data' => $data]);
    }

    public function wishlist()
    {
        $data = $this->getCommonData();
        return view('clients.buyer.user.wishlist', ['data' => $data]);
    }


    private function lypsisCheckShippingPrice($originId, $destinationId, $weight, $earlierMode = false)
    {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, "https://pro.rajaongkir.com/api/cost");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode([
            'origin' => $originId,
            'originType' => 'subdistrict',
            'destination' => $destinationId,
            'destinationType' => 'city',
            'weight' => $weight,
            'courier' => env('RO_SERVICES'),
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
                throw new Exception("Error getting shipping cost: $errorDescription", 404);
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
            throw $e;
        } finally {
            curl_close($curl);
        }
    }
}
