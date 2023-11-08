<div class="card-grid-style-3">
    <div class="card-grid-inner">
        <div class="tools">
            <a class="btn btn-wishlist btn-tooltip mb-10" href="{{ route('buyer.wishlist') }}"
                aria-label="Tambahkan ke Wishlist"></a>
        </div>
        <div class="image-box">
            {{-- <span class="label bg-brand-2">-17%</span> --}}
            <a href="{{ route('buyer.detailProduct', ['slug' => $product->slug ?? '']) }}">
                <img src="{{ asset('ecom/imgs/page/homepage1/imgsp3.png') }}" alt="Ecom"></a>
        </div>
        <div class="info-right">
            <a class="font-xs color-gray-500"
                href="{{ route('buyer.detailSeller', ['slug' => $product->seller ? $product->seller->seller_slug : 'bobsmith']) }}">{{ $product->seller ? $product->seller->seller_name : '-' }}</a><br><a
                class="color-brand-3 font-sm-bold"
                href="{{ route('buyer.detailProduct', ['slug' => $product->slug ?? '']) }}">{{ $product->name ?? '' }}</a>
            <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}" alt="Ecom"><img
                    src="{{ asset('ecom/imgs/template/icons/star.svg') }}" alt="Ecom"><img
                    src="{{ asset('ecom/imgs/template/icons/star.svg') }}" alt="Ecom"><img
                    src="{{ asset('ecom/imgs/template/icons/star.svg') }}" alt="Ecom"><img
                    src="{{ asset('ecom/imgs/template/icons/star.svg') }}" alt="Ecom"><span
                    class="font-xs color-gray-500">({{ $product->reviews_count ? moneyFormat($product->reviews_count) ?? 0 : 0 }})</span>
            </div>
            <div class="price-info mt-1"><strong class="font-md-bold color-brand-3 price-main">
                    {{ $product->price > 0 ? numbFormat($product->price) : 'Rp 0' }}</strong>
            </div>
            <div class="mt-10 box-btn-cart">
                @if (in_array(Route::currentRouteName(), ['buyer.home', 'buyer.detailProduct']))
                    <button class="btn btn-cart">Keranjang</button>
                @else
                    <button class="btn btn-cart" id="cart">Keranjang</button>
                @endif

            </div>
        </div>
    </div>
</div>
