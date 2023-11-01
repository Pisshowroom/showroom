@extends('clients.buyer.master')
@section('title', 'Beranda')
@section('home', 'actived')
@section('childs')
    <main class="main">
        <section class="section-box">
            <div class="banner-hero banner-1 pt-10">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mb-30">
                            <div class="box-swiper">
                                <div class="swiper-container swiper-group-1">
                                    <div class="swiper-wrapper">
                                        @if (count($data['sliders']) > 0)
                                            @foreach ($data['sliders'] as $slider)
                                                <div class="swiper-slide">
                                                    <div class="banner-big banner-big-3 bg-22"
                                                        style="background-image: url({{ asset('ecom/imgs/page/homepage4/bg-banner.png') }})">
                                                        <h1 class="color-gray-100 w-50 text-uppercase text-shadow">
                                                            {!! $slider->description ?? '' !!}</h1>
                                                        {{-- <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <ul class="list-disc">
                                                            <li class="font-lg color-brand-3">Free Shipping. Secure
                                                                Payment</li>
                                                            <li class="font-lg color-brand-3">Kontak Kami 24hrs a day
                                                            </li>
                                                            <li class="font-lg color-brand-3">Support gift service</li>
                                                        </ul>
                                                    </div>
                                                </div> --}}
                                                        <div class="mt-30"><a class="btn btn-brand-2 btn-gray-1000"
                                                                href="{{ route('buyer.allGridProduct') }}">Belanja</a>
                                                            {{-- <a
                                                        class="btn btn-link text-underline" href="{{route('buyer.allGridProduct')}}">Learn
                                                        more</a> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="swiper-slide">
                                                <div class="banner-big banner-big-3 bg-22"
                                                    style="background-image: url({{ asset('ecom/imgs/page/homepage4/bg-banner.png') }})">
                                                    <h1 class="color-gray-100 text-uppercase text-shadow">Enjoy<br
                                                            class="d-none d-lg-block"> The Music</h1>
                                                    {{-- <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <ul class="list-disc">
                                                            <li class="font-lg color-brand-3">Free Shipping. Secure
                                                                Payment</li>
                                                            <li class="font-lg color-brand-3">Kontak Kami 24hrs a day
                                                            </li>
                                                            <li class="font-lg color-brand-3">Support gift service</li>
                                                        </ul>
                                                    </div>
                                                </div> --}}
                                                    <div class="mt-30"><a class="btn btn-brand-2 btn-gray-1000"
                                                            href="{{ route('buyer.allGridProduct') }}">Belanja</a>
                                                        {{-- <a
                                                        class="btn btn-link text-underline" href="{{route('buyer.allGridProduct')}}">Learn
                                                        more</a> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="swiper-pagination swiper-pagination-1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container mt-20">
            <div class="row">
                <div class="col-lg-12">
                    <div class="head-main">
                        <h3 class="mb-5">Produk terbatas</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 order-first order-lg-last">

                    <div class="row mt-20">
                        @if (count($data['limited_product']) > 0)
                            @foreach ($data['limited_product'] as $lpr)
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="card-grid-style-3">
                                        <div class="card-grid-inner">
                                            <div class="tools">
                                                {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                            aria-label="Trend"></a> --}}
                                                <a class="btn btn-wishlist btn-tooltip mb-10"
                                                    href="{{ route('buyer.wishlist') }}"
                                                    aria-label="Tambahkan ke Wishlist"></a>
                                                {{--
                                            <a class="btn btn-quickview btn-tooltip"
                                            aria-label="Quick view" href="#ModalQuickview"
                                            data-bs-toggle="modal"></a> --}}
                                            </div>
                                            <div class="image-box">
                                                {{-- <span class="label bg-brand-2">-17%</span> --}}
                                                <a href="{{ route('buyer.detailProduct', ['slug' => $lpr->slug]) }}"><img
                                                        src="{{ asset('ecom/imgs/page/homepage1/imgsp3.png') }}"
                                                        alt="Ecom"></a>
                                            </div>
                                            <div class="info-right"><a class="font-xs color-gray-500"
                                                    href="{{ route('buyer.detailSeller', ['slug' => $lpr->seller ? $lpr->seller->seller_slug : 'bobsmith']) }}">{{ $lpr->seller ? $lpr->seller->name ?? '' : '' }}</a><br><a
                                                    class="color-brand-3 font-sm-bold"
                                                    href="{{ route('buyer.detailProduct', ['slug' => $lpr->slug]) }}">{{ $lpr->name ?? '' }}</a>
                                                <div class="rating"><img
                                                        src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                        alt="Ecom"><img
                                                        src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                        alt="Ecom"><img
                                                        src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                        alt="Ecom"><img
                                                        src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                        alt="Ecom"><img
                                                        src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                        alt="Ecom"><span class="font-xs color-gray-500">(65)</span>
                                                </div>
                                                <div class="price-info">
                                                    <strong class="font-lg-bold color-brand-3 price-main">
                                                        {{ $lpr->price > 0 ? numbFormat($lpr->price) : 'Rp 0' }}
                                                    </strong>
                                                    {{-- <span class="color-gray-500 price-line">$3225.6</span> --}}
                                                </div>
                                                <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                        href="{{ route('buyer.cart') }}">Keranjang</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-lg-12 text-center mt-40">
                                <h4>Tidak ada data Produk saat ini</h4>
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
        <div class="section-box pt-30 pb-60 bg-gray-50 mt-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="box-content">
                            <div class="head-main bd-gray-200">
                                <div class="row">
                                    <div class="col-xl-7 col-lg-6">
                                        <h3 class="mb-5">Produk Terbaru</h4>
                                    </div>
                                    {{-- <div class="col-xl-5 col-lg-6">
                                        <!-- Button slider-->
                                        <div class="box-button-slider-normal">
                                            <div class="button-slider-nav" id="tab-1-all-nav">
                                                <div class="swiper-button-prev swiper-button-prev-tab-4"></div>
                                                <div class="swiper-button-next swiper-button-next-tab-4"></div>
                                            </div>
                                        </div>
                                        <!-- End Button slider-->
                                    </div> --}}
                                </div>
                            </div>
                            <div class="box-swiper">
                                <div class="swiper-container swiper-tab-4">
                                    <div class="row">
                                        {{-- 8 --}}
                                        @if (count($data['latest_product']) > 0)
                                            @foreach ($data['latest_product'] as $lp)
                                                <div class="col-xl-3 col-lg-6 col-md-6">
                                                    <div class="card-grid-style-3">
                                                        <div class="card-grid-inner">
                                                            <div class="tools">

                                                                <a class="btn btn-wishlist btn-tooltip mb-10"
                                                                    href="{{ route('buyer.wishlist') }}"
                                                                    aria-label="Tambahkan ke Wishlist"></a>

                                                            </div>
                                                            <div class="image-box">
                                                                {{-- <span
                                                                    class="label bg-brand-2">-17%</span> --}}
                                                                <a
                                                                    href="{{ route('buyer.detailProduct', ['slug' => $lp->slug]) }}">
                                                                    <img src="{{ asset('ecom/imgs/page/homepage1/imgsp3.png') }}"
                                                                        alt="produk {{ $lp->name ?? '' }}"></a>
                                                            </div>
                                                            <div class="info-right"><a class="font-xs color-gray-500"
                                                                    href="{{ route('buyer.detailSeller', ['slug' => $lp->seller ? $lp->seller->seller_slug : 'bobsmith']) }}">{{ $lp->seller ? $lp->seller->name ?? '' : '' }}</a><br><a
                                                                    class="color-brand-3 font-sm-bold"
                                                                    href="{{ route('buyer.detailProduct', ['slug' => $lp->slug]) }}">{{ $lp->name ?? '' }}</a>
                                                                <div class="rating"><img
                                                                        src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                        alt="Ecom"><img
                                                                        src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                        alt="Ecom"><img
                                                                        src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                        alt="Ecom"><img
                                                                        src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                        alt="Ecom"><img
                                                                        src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                        alt="Ecom"><span
                                                                        class="font-xs color-gray-500">(65)</span>
                                                                </div>
                                                                <div class="price-info"><strong
                                                                        class="font-lg-bold color-brand-3 price-main">{{ $lp->price > 0 ? numbFormat($lp->price) : 'Rp 0' }}</strong>
                                                                    {{-- <span
                                                                                class="color-gray-500 price-line">$3225.6</span> --}}
                                                                </div>
                                                                <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                        href="{{ route('buyer.cart') }}">Keranjang</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="col-lg-12 text-center mt-40">
                                                <h4>Tidak ada data Produk terbaru saat ini</h4>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="box-content mt-45">
                            <div class="head-main bd-gray-200">
                                <div class="row">
                                    <div class="col-xl-7 col-lg-6">
                                        <h4 class="mb-5">Produk Rating Tinggi</h4>
                                    </div>
                                    <div class="col-xl-5 col-lg-6">
                                        <!-- Button slider-->
                                        <div class="box-button-slider-normal">
                                            <div class="button-slider-nav" id="tab-2-all-nav">
                                                <div class="swiper-button-prev swiper-button-prev-tab-5"></div>
                                                <div class="swiper-button-next swiper-button-next-tab-5"></div>
                                            </div>
                                        </div>
                                        <!-- End Button slider-->
                                    </div>
                                </div>
                            </div>
                            <div class="box-swiper">
                                <div class="swiper-container swiper-tab-5">
                                    <div class="swiper-wrapper pt-5">
                                        <div class="swiper-slide">
                                            <div class="row">
                                                {{-- 8 --}}
                        {{-- <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="card-grid-style-3">
                                <div class="card-grid-inner">
                                    <div class="tools">

                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                            href="{{ route('buyer.wishlist') }}" aria-label="Tambahkan ke Wishlist"></a>

                                    </div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                            href="{{ route('buyer.detailProduct', ['slug' => 'slug']) }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp3.png') }}"
                                                alt="Ecom"></a></div>
                                    <div class="info-right"><a class="font-xs color-gray-500"
                                            href="{{ route('buyer.detailSeller',['slug'=>'sd']) }}">Apple</a><br><a
                                            class="color-brand-3 font-sm-bold"
                                            href="{{ route('buyer.detailProduct', ['slug' => 'slug']) }}">Apple
                                            AirPods Pro
                                            with MagSafe Charging Case</a>
                                        <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><span class="font-xs color-gray-500">(65)</span>
                                        </div>
                                        <div class="price-info"><strong
                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span>
                                        </div>
                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                href="{{ route('buyer.cart') }}">Keranjang</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-20">
            <div class="row">
                <div class="col-lg-12">
                    <div class="head-main">
                        <h3 class="mb-5">Produk yang direkomendasikan</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 order-first order-lg-last">

                    <div class="row mt-20">
                        @if (count($data['recommended_products']) > 0)
                            @foreach ($data['recommended_products'] as $rp)
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="card-grid-style-3">
                                        <div class="card-grid-inner">
                                            <div class="tools">
                                                {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                            aria-label="Trend"></a> --}}
                                                <a class="btn btn-wishlist btn-tooltip mb-10"
                                                    href="{{ route('buyer.wishlist') }}"
                                                    aria-label="Tambahkan ke Wishlist"></a>
                                                {{--
                                            <a class="btn btn-quickview btn-tooltip"
                                            aria-label="Quick view" href="#ModalQuickview"
                                            data-bs-toggle="modal"></a> --}}
                                            </div>
                                            <div class="image-box">
                                                {{-- <span class="label bg-brand-2">-17%</span> --}}
                                                <a href="{{ route('buyer.detailProduct', ['slug' => $rp->slug]) }}"><img
                                                        src="{{ asset('ecom/imgs/page/homepage1/imgsp3.png') }}"
                                                        alt="Ecom"></a>
                                            </div>
                                            <div class="info-right"><a class="font-xs color-gray-500"
                                                    href="{{ route('buyer.detailSeller', ['slug' => $rp->seller ? $rp->seller->seller_slug : 'bobsmith']) }}">{{ $rp->seller ? $rp->seller->name ?? '' : '' }}</a><br><a
                                                    class="color-brand-3 font-sm-bold"
                                                    href="{{ route('buyer.detailProduct', ['slug' => $rp->slug]) }}">{{ $rp->name ?? '' }}</a>
                                                <div class="rating"><img
                                                        src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                        alt="Ecom"><img
                                                        src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                        alt="Ecom"><img
                                                        src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                        alt="Ecom"><img
                                                        src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                        alt="Ecom"><img
                                                        src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                        alt="Ecom"><span class="font-xs color-gray-500">(65)</span>
                                                </div>
                                                <div class="price-info">
                                                    <strong class="font-lg-bold color-brand-3 price-main">
                                                        {{ $rp->price > 0 ? numbFormat($rp->price) : 'Rp 0' }}
                                                    </strong>
                                                    {{-- <span class="color-gray-500 price-line">$3225.6</span> --}}
                                                </div>
                                                <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                        href="{{ route('buyer.cart') }}">Keranjang</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-lg-12 text-center mt-40">
                                <h4>Tidak ada data Produk saat ini</h4>
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
        {{-- <div class="col-xl-3 col-lg-4">
                        <div class="box-slider-item box-sidebar">
                            <div class="head">
                                <h5 class="d-inline-block">Penjualan Terbaik</h5>
                                <div class="box-button-control">
                                    <div
                                        class="swiper-button-prev swiper-button-prev-style-2 swiper-button-prev-bestseller">
                                    </div>
                                    <div
                                        class="swiper-button-next swiper-button-next-style-2 swiper-button-next-bestseller">
                                    </div>
                                </div>
                            </div>
                            <div class="content-slider pl-10 pr-10">
                                <div class="box-swiper">
                                    <div class="swiper-container swiper-best-seller">
                                        <div class="swiper-wrapper pt-5">
                                            <div class="swiper-slide">
                                                <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                            href="{{ route('buyer.detailProduct',['slug'=>'slug']) }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage2/camera.png') }}"
                                                                alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                            href="{{ route('buyer.detailProduct',['slug'=>'slug']) }}">LG 65&quot; Class
                                                            4K UHD
                                                            Smart TV OLED A1 Series </a>
                                                        <div class="rating"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><span class="font-xs color-gray-500">
                                                                (65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-md-bold color-brand-3 price-main">$2556.3</strong><span
                                                                class="color-gray-500 font-sm price-line">$3225.6</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                    <div class="image-box"><a
                                                            href="{{ route('buyer.detailProduct',['slug'=>'slug']) }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage2/clock.png') }}"
                                                                alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                            href="{{ route('buyer.detailProduct',['slug'=>'slug']) }}">Chromecast with
                                                            Google TV
                                                            - Streaming Entertainment</a>
                                                        <div class="rating"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><span class="font-xs color-gray-500">
                                                                (65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-md-bold color-brand-3 price-main">$2556.3</strong><span
                                                                class="color-gray-500 font-sm price-line">$3225.6</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                    <div class="image-box"><a
                                                            href="{{ route('buyer.detailProduct',['slug'=>'slug']) }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage2/airpod.png') }}"
                                                                alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                            href="{{ route('buyer.detailProduct',['slug'=>'slug']) }}">2022 Apple iMac
                                                            with
                                                            Retina 5K Display 8GB RAM, 256GB SSD</a>
                                                        <div class="rating"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><span class="font-xs color-gray-500">
                                                                (65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-md-bold color-brand-3 price-main">$2556.3</strong><span
                                                                class="color-gray-500 font-sm price-line">$3225.6</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                    <div class="image-box"><a
                                                            href="{{ route('buyer.detailProduct',['slug'=>'slug']) }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage2/camera.png') }}"
                                                                alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                            href="{{ route('buyer.detailProduct',['slug'=>'slug']) }}">RCA 43&quot; Class
                                                            4K
                                                            Ultra HD (2160P) HDR Roku Smart</a>
                                                        <div class="rating"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><span class="font-xs color-gray-500">
                                                                (65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-md-bold color-brand-3 price-main">$2556.3</strong><span
                                                                class="color-gray-500 font-sm price-line">$3225.6</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                    <div class="image-box"><a
                                                            href="{{ route('buyer.detailProduct',['slug'=>'slug']) }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage2/clock.png') }}"
                                                                alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                            href="{{ route('buyer.detailProduct',['slug'=>'slug']) }}">Apple Watch Series
                                                            7 GPS +
                                                            Cellular, 41mm Midnight</a>
                                                        <div class="rating"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><span class="font-xs color-gray-500">
                                                                (65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-md-bold color-brand-3 price-main">$2556.3</strong><span
                                                                class="color-gray-500 font-sm price-line">$3225.6</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                    <div class="image-box"><a
                                                            href="{{ route('buyer.detailProduct',['slug'=>'slug']) }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage2/airpod.png') }}"
                                                                alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                            href="{{ route('buyer.detailProduct',['slug'=>'slug']) }}">HP 11.6&quot;
                                                            Chromebook,
                                                            AMD A4, 4GB RAM, 32GB Storage</a>
                                                        <div class="rating"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><span class="font-xs color-gray-500">
                                                                (65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-md-bold color-brand-3 price-main">$2556.3</strong><span
                                                                class="color-gray-500 font-sm price-line">$3225.6</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-slider-item box-sidebar">
                            <div class="head">
                                <h5 class="d-inline-block">Produk Baru</h5>
                                <div class="box-button-control">
                                    <div
                                        class="swiper-button-prev swiper-button-prev-style-2 swiper-button-prev-featured">
                                    </div>
                                    <div
                                        class="swiper-button-next swiper-button-next-style-2 swiper-button-next-featured">
                                    </div>
                                </div>
                            </div>
                            <div class="content-slider pl-10 pr-10">
                                <div class="box-swiper">
                                    <div class="swiper-container swiper-featured">
                                        <div class="swiper-wrapper pt-5">
                                            <div class="swiper-slide">
                                                <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                            href="{{ route('buyer.detailProduct',['slug'=>'slug']) }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage2/camera.png') }}"
                                                                alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                            href="{{ route('buyer.detailProduct',['slug'=>'slug']) }}">2022 Apple iMac
                                                            with
                                                            Retina 5K Display 8GB RAM, 256GB SSD</a>
                                                        <div class="rating"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><span class="font-xs color-gray-500">
                                                                (65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-md-bold color-brand-3 price-main">$2556.3</strong><span
                                                                class="color-gray-500 font-sm price-line">$3225.6</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                    <div class="image-box"><a
                                                            href="{{ route('buyer.detailProduct',['slug'=>'slug']) }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage2/clock.png') }}"
                                                                alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                            href="{{ route('buyer.detailProduct',['slug'=>'slug']) }}">HP 11.6&quot;
                                                            Chromebook,
                                                            AMD A4, 4GB RAM, 32GB Storage</a>
                                                        <div class="rating"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><span class="font-xs color-gray-500">
                                                                (65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-md-bold color-brand-3 price-main">$2556.3</strong><span
                                                                class="color-gray-500 font-sm price-line">$3225.6</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                    <div class="image-box"><a
                                                            href="{{ route('buyer.detailProduct',['slug'=>'slug']) }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage2/airpod.png') }}"
                                                                alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                            href="{{ route('buyer.detailProduct',['slug'=>'slug']) }}">MSI Optix G272
                                                            27&quot;
                                                            Full HD LED Gaming LCD Monitor</a>
                                                        <div class="rating"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><span class="font-xs color-gray-500">
                                                                (65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-md-bold color-brand-3 price-main">$2556.3</strong><span
                                                                class="color-gray-500 font-sm price-line">$3225.6</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                    <div class="image-box"><a
                                                            href="{{ route('buyer.detailProduct',['slug'=>'slug']) }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage2/camera.png') }}"
                                                                alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                            href="{{ route('buyer.detailProduct',['slug'=>'slug']) }}">Apple Watch Series
                                                            7 GPS +
                                                            Cellular, 41mm Midnight</a>
                                                        <div class="rating"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><span class="font-xs color-gray-500">
                                                                (65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-md-bold color-brand-3 price-main">$2556.3</strong><span
                                                                class="color-gray-500 font-sm price-line">$3225.6</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                    <div class="image-box"><a
                                                            href="{{ route('buyer.detailProduct',['slug'=>'slug']) }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage2/clock.png') }}"
                                                                alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                            href="{{ route('buyer.detailProduct',['slug'=>'slug']) }}">LG 65&quot; Class
                                                            4K UHD
                                                            Smart TV OLED A1 Series D</a>
                                                        <div class="rating"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><span class="font-xs color-gray-500">
                                                                (65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-md-bold color-brand-3 price-main">$2556.3</strong><span
                                                                class="color-gray-500 font-sm price-line">$3225.6</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                    <div class="image-box"><a
                                                            href="{{ route('buyer.detailProduct',['slug'=>'slug']) }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage2/airpod.png') }}"
                                                                alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                            href="{{ route('buyer.detailProduct',['slug'=>'slug']) }}">2022 Apple iMac
                                                            with
                                                            Retina 5K Display 8GB RAM, 256GB SSD</a>
                                                        <div class="rating"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><span class="font-xs color-gray-500">
                                                                (65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-md-bold color-brand-3 price-main">$2556.3</strong><span
                                                                class="color-gray-500 font-sm price-line">$3225.6</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
        <div class="section-box pt-30 pb-60 bg-gray-50 mt-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="box-content">
                            <div class="head-main bd-gray-200">
                                <div class="row">
                                    <div class="col-xl-7 col-lg-6">
                                        <h3 class="mb-5">Artikel</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="box-swiper">
                                <div class="swiper-container swiper-tab-4">
                                    <div class="row mt-4">
                                        @if (count($data['articles']) > 0)
                                            @foreach ($data['articles'] as $article)
                                                <div class="col-xl-3 col-lg-6 col-md-6">
                                                    <div class="card-grid-style-3">
                                                        <div class="card-grid-inner">
                                                            <div class="image-box">
                                                                <a
                                                                    href="{{ route('buyer.detailArticle', ['id' => $article->id]) }}">
                                                                    <img src="{{ asset('ecom/imgs/page/blog/blog-1.jpg') }}"
                                                                        alt="produk {{ $article->title ?? '' }}"></a>
                                                            </div>
                                                            <div class="info-right">
                                                                <a class="color-brand-3 font-sm-bold line-2 text-start"
                                                                    href="{{ route('buyer.detailArticle', ['id' => $article->id]) }}">{{ $article->title ?? '' }}</a>
                                                                <div class="price-info">
                                                                    <span
                                                                        class="color-gray-500 line-3 text-start">{!! $article->content !!}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="col-lg-12 text-center mt-40">
                                                <h4>Tidak ada Artikel saat ini</h4>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        {{-- <section class="section-box mt-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="head-main">
                            <h3 class="mb-5">Produk Terlaris</h3>
                            <p class="font-base color-gray-500">Produk spesial di bulan ini.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card-grid-style-2">
                            <div class="image-box"><a href="#"><img
                                        src="{{ asset('ecom/imgs/page/homepage1/imgsp1.png') }}" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><span class="font-xs color-gray-500">SAMSUNG</span><br><a
                                    class="color-brand-3 font-sm-bold" href="#">SAMSUNG Galaxy Tab S7 Plus
                                    12.4&quot; 128GB Mystic Black</a>
                                <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                                <div class="price-info"><strong
                                        class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span
                                        class="color-gray-500 price-line">$3225.6</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        {{-- <section class="section-box pt-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-7 col-md-7 col-sm-12 mb-30">
                        <div class="bg-4 block-charge"><span class="color-brand-3 font-sm-lh32">Power Bank</span>
                            <h3 class="font-xl mb-10">Quick Charge</h3>
                            <p class="font-base color-brand-3 mb-20">Lightweight and Portable<br
                                    class="d-none d-lg-block"> Dual port fast charge</p><a
                                class="btn btn-brand-2 btn-arrow-right" href="{{ route('buyer.allGridProduct') }}">Belanja</a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 mb-30">
                        <div class="bg-6 block-player">
                            <h3 class="font-33 mb-20">Xbox Series XS Game Controller</h3>
                            <div class="mb-30"><strong class="font-16">Replacement Kit D-pad ABXY Keys</strong>
                            </div><a class="btn btn-brand-3 btn-arrow-right" href="{{ route('buyer.allGridProduct') }}">learn
                                more</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-5 col-md-5 col-sm-12 mb-30">
                        <div class="bg-5 block-iphone"><span class="color-brand-3 font-sm-lh32">Starting from
                                $899</span>
                            <h3 class="font-xl mb-10">iPhone 12 Pro 128Gb</h3>
                            <p class="font-base color-brand-3 mb-10">Special Sale</p><a class="btn btn-arrow"
                                href="{{ route('buyer.allGridProduct') }}">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        {{-- <section class="section-box mt-50">
            <div class="container">
                <div class="head-main">
                    <h3 class="mb-5">Latest News &amp; Events</h3>
                    <p class="font-base color-gray-500">From our blog, forum</p>
                    <div class="box-button-slider">
                        <div class="swiper-button-next swiper-button-next-group-4"></div>
                        <div class="swiper-button-prev swiper-button-prev-group-4"></div>
                    </div>
                </div>
            </div>
            <div class="container mt-10">
                <div class="box-swiper">
                    <div class="swiper-container swiper-group-4">
                        <div class="swiper-wrapper pt-5">
                            <div class="swiper-slide">
                                <div class="card-grid-style-1">
                                    <div class="image-box"><a href="blog-single-2.html"></a><img
                                            src="{{ asset('ecom/imgs/page/blog/blog-1.jpg') }}" alt="Ecom"></div>
                                    <a class="tag-dot font-xs" href="blog-list.html">Technology</a><a
                                        class="color-gray-1100" href="blog-single-2.html">
                                        <h4>The latest technologies to be used for VR in 2022</h4>
                                    </a>
                                    <div class="mt-20"><span class="color-gray-500 font-xs mr-30">September 02,
                                            2022</span><span class="color-gray-500 font-xs">4<span> Mins
                                                read</span></span></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-grid-style-1">
                                    <div class="image-box"><a href="blog-single.html"></a><img
                                            src="{{ asset('ecom/imgs/page/blog/blog-2.jpg') }}" alt="Ecom"></div>
                                    <a class="tag-dot font-xs" href="blog-list.html">Technology</a><a
                                        class="color-gray-1100" href="blog-single.html">
                                        <h4>How can Web 3.0 Bring Changes to the Gaming?</h4>
                                    </a>
                                    <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 30,
                                            2022</span><span class="color-gray-500 font-xs">5<span> Mins
                                                read</span></span></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-grid-style-1">
                                    <div class="image-box"><a href="blog-single-3.html"></a><img
                                            src="{{ asset('ecom/imgs/page/blog/blog-3.jpg') }}" alt="Ecom"></div>
                                    <a class="tag-dot font-xs" href="blog-list.html">Gaming</a><a
                                        class="color-gray-1100" href="blog-single-3.html">
                                        <h4>NFT Blockchain Games That Might Take Off</h4>
                                    </a>
                                    <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 25,
                                            2022</span><span class="color-gray-500 font-xs">3<span> Mins
                                                read</span></span></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-grid-style-1">
                                    <div class="image-box"><a href="blog-single-2.html"></a><img
                                            src="{{ asset('ecom/imgs/page/blog/blog-4.jpg') }}" alt="Ecom"></div>
                                    <a class="tag-dot font-xs" href="blog-list.html">Blockchain</a><a
                                        class="color-gray-1100" href="blog-single-2.html">
                                        <h4>Blockchain Gaming And Its Three Challenges</h4>
                                    </a>
                                    <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 15,
                                            2022</span><span class="color-gray-500 font-xs">7<span> Mins
                                                read</span></span></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-grid-style-1">
                                    <div class="image-box"><a href="blog-single-2.html"></a><img
                                            src="{{ asset('ecom/imgs/page/blog/blog-5.jpg') }}" alt="Ecom"></div>
                                    <a class="tag-dot font-xs" href="blog-list.html">Development</a><a
                                        class="color-gray-1100" href="blog-single-2.html">
                                        <h4>HTML5 – The Future of Mobile App Development</h4>
                                    </a>
                                    <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 12,
                                            2022</span><span class="color-gray-500 font-xs">9<span> Mins
                                                read</span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        @include('clients.buyer.layouts.benefit')
        <div class="modal fade" id="ModalQuickview" tabindex="-1" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-xl">
                <div class="modal-content apply-job-form">
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body p-30">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="gallery-image">
                                    <div class="galleries-2">
                                        <div class="detail-gallery">
                                            <div class="product-image-slider-2">
                                                <figure class="border-radius-10"><img
                                                        src="{{ asset('ecom/imgs/page/product/img-gallery-1.jpg') }}"
                                                        alt="product image"></figure>
                                                <figure class="border-radius-10"><img
                                                        src="{{ asset('ecom/imgs/page/product/img-gallery-2.jpg') }}"
                                                        alt="product image"></figure>
                                                <figure class="border-radius-10"><img
                                                        src="{{ asset('ecom/imgs/page/product/img-gallery-3.jpg') }}"
                                                        alt="product image"></figure>
                                                <figure class="border-radius-10"><img
                                                        src="{{ asset('ecom/imgs/page/product/img-gallery-4.jpg') }}"
                                                        alt="product image"></figure>
                                                <figure class="border-radius-10"><img
                                                        src="{{ asset('ecom/imgs/page/product/img-gallery-5.jpg') }}"
                                                        alt="product image"></figure>
                                                <figure class="border-radius-10"><img
                                                        src="{{ asset('ecom/imgs/page/product/img-gallery-6.jpg') }}"
                                                        alt="product image"></figure>
                                                <figure class="border-radius-10"><img
                                                        src="{{ asset('ecom/imgs/page/product/img-gallery-7.jpg') }}"
                                                        alt="product image"></figure>
                                            </div>
                                        </div>
                                        <div class="slider-nav-thumbnails-2">
                                            <div>
                                                <div class="item-thumb"><img
                                                        src="{{ asset('ecom/imgs/page/product/img-gallery-1.jpg') }}"
                                                        alt="product image"></div>
                                            </div>
                                            <div>
                                                <div class="item-thumb"><img
                                                        src="{{ asset('ecom/imgs/page/product/img-gallery-2.jpg') }}"
                                                        alt="product image"></div>
                                            </div>
                                            <div>
                                                <div class="item-thumb"><img
                                                        src="{{ asset('ecom/imgs/page/product/img-gallery-3.jpg') }}"
                                                        alt="product image"></div>
                                            </div>
                                            <div>
                                                <div class="item-thumb"><img
                                                        src="{{ asset('ecom/imgs/page/product/img-gallery-4.jpg') }}"
                                                        alt="product image"></div>
                                            </div>
                                            <div>
                                                <div class="item-thumb"><img
                                                        src="{{ asset('ecom/imgs/page/product/img-gallery-5.jpg') }}"
                                                        alt="product image"></div>
                                            </div>
                                            <div>
                                                <div class="item-thumb"><img
                                                        src="{{ asset('ecom/imgs/page/product/img-gallery-6.jpg') }}"
                                                        alt="product image"></div>
                                            </div>
                                            <div>
                                                <div class="item-thumb"><img
                                                        src="{{ asset('ecom/imgs/page/product/img-gallery-7.jpg') }}"
                                                        alt="product image"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-tags">
                                    <div class="d-inline-block mr-25"><span
                                            class="font-sm font-medium color-gray-900">Category:</span><a class="link"
                                            href="#">Smartphones</a></div>
                                    <div class="d-inline-block"><span
                                            class="font-sm font-medium color-gray-900">Tags:</span><a class="link"
                                            href="#">Blue</a>,<a class="link" href="#">Smartphone</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="product-info">
                                    <h5 class="mb-15">SAMSUNG Galaxy S22 Ultra, 8K Camera & Video, Brightest Display
                                        Screen, S Pen Pro</h5>
                                    <div class="info-by"><span
                                            class="bytext color-gray-500 font-xs font-medium">by</span><a
                                            class="byAUthor color-gray-900 font-xs font-medium"
                                            href="{{ route('buyer.detailSeller', ['slug' => 'sd']) }}"> Ecom Tech</a>
                                        <div class="rating d-inline-block"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><span class="font-xs color-gray-500 font-medium"> (65
                                                reviews)</span></div>
                                    </div>
                                    <div class="border-bottom pt-10 mb-20"></div>
                                    <div class="box-product-price">
                                        <h3 class="color-brand-3 price-main d-inline-block mr-10">$2856.3</h3><span
                                            class="color-gray-500 price-line font-xl line-througt">$3225.6</span>
                                    </div>
                                    <div class="product-description mt-10 color-gray-900">
                                        <ul class="list-dot">
                                            <li>8k super steady video</li>
                                            <li>Nightography plus portait mode</li>
                                            <li>50mp photo resolution plus bright display</li>
                                            <li>Adaptive color contrast</li>
                                            <li>premium design & craftmanship</li>
                                            <li>Long lasting battery plus fast charging</li>
                                        </ul>
                                    </div>
                                    <div class="box-product-color mt-10">
                                        <p class="font-sm color-gray-900">Color:<span class="color-brand-2 nameColor">Pink
                                                Gold</span></p>
                                        <ul class="list-colors">
                                            <li class="disabled"><img
                                                    src="{{ asset('ecom/imgs/page/product/img-gallery-1.jpg') }}"
                                                    alt="Ecom" title="Pink"></li>
                                            <li><img src="{{ asset('ecom/imgs/page/product/img-gallery-2.jpg') }}"
                                                    alt="Ecom" title="Gold"></li>
                                            <li><img src="{{ asset('ecom/imgs/page/product/img-gallery-3.jpg') }}"
                                                    alt="Ecom" title="Pink Gold"></li>
                                            <li><img src="{{ asset('ecom/imgs/page/product/img-gallery-4.jpg') }}"
                                                    alt="Ecom" title="Silver"></li>
                                            <li class="active"><img
                                                    src="{{ asset('ecom/imgs/page/product/img-gallery-5.jpg') }}"
                                                    alt="Ecom" title="Pink Gold"></li>
                                            <li class="disabled"><img
                                                    src="{{ asset('ecom/imgs/page/product/img-gallery-6.jpg') }}"
                                                    alt="Ecom" title="Black"></li>
                                            <li class="disabled"><img
                                                    src="{{ asset('ecom/imgs/page/product/img-gallery-7.jpg') }}"
                                                    alt="Ecom" title="Red"></li>
                                        </ul>
                                    </div>
                                    <div class="box-product-style-size mt-10">
                                        <div class="row">
                                            <div class="col-lg-12 mb-10">
                                                <p class="font-sm color-gray-900">Style:<span
                                                        class="color-brand-2 nameStyle">S22</span></p>
                                                <ul class="list-styles">
                                                    <li class="disabled" title="S22 Ultra">S22 Ultra</li>
                                                    <li class="active" title="S22">S22</li>
                                                    <li title="S22 + Standing Cover">S22 + Standing Cover</li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-12 mb-10">
                                                <p class="font-sm color-gray-900">Size:<span
                                                        class="color-brand-2 nameSize">512GB</span></p>
                                                <ul class="list-sizes">
                                                    <li class="disabled" title="1GB">1GB</li>
                                                    <li class="active" title="512 GB">512 GB</li>
                                                    <li title="256 GB">256 GB</li>
                                                    <li title="128 GB">128 GB</li>
                                                    <li class="disabled" title="64GB">64GB</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="buy-product mt-5">
                                        <p class="font-sm mb-10">Kuantitas</p>
                                        <div class="box-quantity">
                                            <div class="input-quantity">
                                                <input class="font-xl color-brand-3" type="text" value="1"><span
                                                    class="minus-cart"></span><span class="plus-cart"></span>
                                            </div>
                                            <div class="button-buy"><a class="btn btn-cart"
                                                    href="{{ route('buyer.cart') }}">Keranjang</a><a class="btn btn-buy"
                                                    href="{{ route('buyer.checkout') }}">Beli
                                                    Sekarang</a></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@push('importjs')
@endpush
