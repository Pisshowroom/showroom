<div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
    <div class="image-box">
        @if ($prd->discount && $prd->discount > 0)
            <span class="label bg-brand-2">{{ $prd->discount }}%</span>
        @endif
        @auth
            <a
                href="{{ route('buyer.detailProduct', ['slug' => $prd->slug ?? 'sd']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
            @endauth
            @guest
                <a href="{{ route('buyer.detailProduct', ['slug' => $prd->slug ?? 'sd']) }}">
                @endguest
                <img src="{{ $prd?->images && count($prd?->images) > 0 ? $prd->images[0] : asset('ecom/imgs/page/homepage2/camera.png') }}"
                    alt="produk {{ $prd->name ?? '' }}"></a>
    </div>
    <div class="info-right">
        @if ($prd?->seller && $prd?->seller?->seller_slug)
            <a class="font-xs color-gray-500 line-1 text-start"
                href="{{ route('buyer.detailSeller', ['slug' => $prd?->seller?->seller_slug]) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                {{ $prd->seller ? $prd->seller->seller_name ?? '-' : '-' }}</a>
        @else
            <p class="font-xs color-gray-500 line-1 text-start">-</p>
        @endif
        <a class="color-brand-3 font-xs-bold line-2 text-start"
            href="{{ route('buyer.detailSeller', ['slug' => $prd?->seller?->seller_slug]) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
            <p class="text-start">{{ $prd->name ?? '' }}</p>
        </a>
        <div class="rating">
            <img src="{{ asset('ecom/imgs/template/icons/star.svg') }}" alt="rating produk {{ $prd->name ?? '' }}">
            <span
                class="font-xs color-gray-500">{{ $prd->reviews_avg_rating ? doubleval($prd->reviews_avg_rating) : 0 }}
                ({{ $prd->total_sell ? moneyFormat($prd->total_sell) ?? 0 : 0 }}
                Terjual)</span>
        </div>
        <div class="price-info mt-1">
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
    </div>
</div>
