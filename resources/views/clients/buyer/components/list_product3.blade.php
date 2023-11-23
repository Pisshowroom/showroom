<div
    class="card-grid-style-2  {{ in_array(Route::currentRouteName(), ['buyer.detailProduct']) ? 'card-grid-none-border hover-up' : '' }}">
    <div class="image-box" style="width:120px !important;height:126px !important;">
        <a
            href="{{ route('buyer.detailProduct', ['slug' => $prd->slug ?? 'sd']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
            <img style="object-fit:cover;width:120px;height:126px;"
                src="{{ $prd?->images && count($prd?->images) > 0 ? $prd->images[0] : asset('ecom/imgs/page/homepage1/imgsp1.png') }}"
                alt="produk {{ $prd->name ?? '' }}">
        </a>
    </div>
    <div class="info-right" style="width:80% !important">
        @if ($prd?->seller && $prd?->seller?->seller_slug)
            <span
                class="font-xs color-gray-500 line-1 text-start">{{ $prd->seller ? $prd->seller->seller_name ?? '-' : '-' }}</span>
        @else
            <span class="font-xs color-gray-500 line-1 text-start">-</span>
        @endif

        <a class="color-brand-3 font-sm-bold"
            href="{{ route('buyer.detailProduct', ['slug' => $prd->slug ?? 'sd']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
            <p class="line-2 text-start">{{ $prd->name ?? '' }}</p>
        </a>
        <div class="rating">
            <img src="{{ asset('ecom/imgs/template/icons/star.svg') }}" alt="rating produk {{ $prd->name ?? '' }}">
            <span
                class="font-xs color-gray-500">{{ $prd->reviews_avg_rating ? doubleval($prd->reviews_avg_rating) : 0 }}
                ({{ $prd->total_sell ? moneyFormat($prd->total_sell) ?? 0 : 0 }}
                Terjual)</span>
        </div>
        <div class="price-info mt-0">
            @if (isset($prd->price_discount) && $prd->price_discount > 0)
                <strong class="font-md-bold color-brand-3 price-main">
                    {{ $prd->price_discount > 0 ? numbFormat($prd->price_discount) : 'Rp 0' }}</strong>
            @else
                <strong class="font-md-bold color-brand-3 price-main">
                    {{ $prd->price > 0 ? numbFormat($prd->price) : 'Rp 0' }}</strong>
            @endif
            @if (isset($prd->price_discount) && $prd->price_discount > 0)
                <br>
                <span class="color-gray-500 font-sm price-line">
                    {{ $prd->price > 0 ? numbFormat($prd->price) : 'Rp 0' }}
                </span>
            @else
                <br>
                <span class="color-gray-500 font-sm price-line">
                </span>
                <br>
            @endif

        </div>
        <div class="price-info price-info2 mt-0 d-flex flex-row gap-1 align-items-center">
            {!! file_get_contents('ecom/imgs/page/product/icon-location.svg') !!}
            @if ($prd?->seller && $prd?->seller->address && $prd?->seller->address?->city)
                <strong class="font-sm color-gray-500 price-main locations">
                    {{ $prd?->seller->address?->city }}</strong>
            @else
                <strong class="font-sm color-gray-500 price-main locations">
                    Jakarta</strong>
            @endif
        </div>
    </div>
</div>
