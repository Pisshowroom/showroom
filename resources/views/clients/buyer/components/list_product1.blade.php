<div class="card-grid-style-3">
    <div class="card-grid-inner">
        <div class="tools">
            <a class="btn btn-wishlist btn-tooltip mb-10" href="{{ route('buyer.wishlist') }}"
                aria-label="Tambahkan ke Wishlist"></a>
        </div>
        <div class="image-box">
            @if ($prd->discount && $prd->discount > 0)
                <span class="label bg-brand-2">{{ $prd->discount }}%</span>
            @endif
            <a href="{{ route('buyer.detailProduct', ['slug' => $prd->slug ?? 'sd']) }}">
                <img src="{{ asset('ecom/imgs/page/homepage1/imgsp3.png') }}" alt="Ecom"></a>
        </div>
        <div class="info-right">
            <a class="font-xs color-gray-500 line-1 text-start"
                href="{{ route('buyer.detailSeller', ['slug' => $prd->seller ? $prd->seller->seller_slug : 'bobsmith']) }}">
                {{ $prd->seller ? $prd->seller->seller_name ?? '-' : '-' }}</a>
            <a class="color-brand-3 font-sm-bold line-2 text-start"
                href="{{ route('buyer.detailProduct', ['slug' => $prd->slug ?? 'sd']) }}">
                <p class="text-start">{{ $prd->name ?? '' }}</p>
            </a>
            <div class="rating">
                <img src="{{ asset('ecom/imgs/template/icons/star.svg') }}" alt="rating produk {{ $prd->name ?? '' }}">
                <span
                    class="font-xs color-gray-500">{{ $prd->reviews_avg_rating ? doubleval($prd->reviews_avg_rating) : 0 }}
                    ({{ $prd->total_sell ? moneyFormat($prd->total_sell) ?? 0 : 0 }}
                    Terjual)</span>
            </div>
            <div class="price-info mt-1"><strong class="font-md-bold color-brand-3 price-main">
                    {{ $prd->price > 0 ? numbFormat($prd->price) : 'Rp 0' }}</strong>
            </div>
            <div class="price-info mt-0 d-flex flex-row gap-1 align-items-center">
                {!! file_get_contents('ecom/imgs/page/product/icon-location.svg') !!}
                <strong class="font-md color-gray-500 price-main">
                    Jakarta</strong>
            </div>
            <div class="mt-10 box-btn-cart">
                @if (Route::currentRouteName() && in_array(Route::currentRouteName(), ['buyer.home', 'buyer.detailProduct']))
                    <button class="btn btn-cart">Beli Sekarang</button>
                @else
                    <button class="btn btn-cart" id="cart">Beli Sekarang</button>
                @endif

            </div>
        </div>
    </div>
</div>

@push('importjs')
    <script>
        $(document).ready(function() {
            $('.info-right').each(function() {
                var text = $(this).find('.color-brand-3.font-sm-bold p').text();

                // Menghapus spasi ekstra dan memeriksa jumlah baris
                if (text.trim().split(/\r\n|\r|\n/).length < 2) {
                    $(this).find('.color-brand-3.font-sm-bold p').css('height', '40px');
                }
            });

        });
    </script>
@endpush
