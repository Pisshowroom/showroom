@extends('clients.buyer.master')
@section('title', 'Beranda')
@section('home', 'actived')
@section('childs')
    {{-- @php
auth()->guard('web')->attempt(['email' =>'ran@gmail.com', 'password' => "12345678"]);
dd(request()->all());

@endphp --}}
    {{-- {!! dd(request()->session()->all()); !!} --}}
    <main class="main">
        <section class="section-box">
            <div class="banner-hero banner-1 pt-10">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-12 col-md-12 mb-30">
                            <div class="box-swiper">
                                <div class="swiper-container swiper-group-1">
                                    <div class="swiper-wrapper">
                                        {{-- @if (count($data['sliders']) > 0)
                                            @foreach ($data['sliders'] as $slider)
                                                <div class="swiper-slide">
                                                    <div class="banner-big banner-big-3 bg-22"
                                                        style="background-image: url({{ asset('ecom/imgs/page/homepage4/bg-banner.png') }})">
                                                        <h1 class="color-gray-100 w-50 text-uppercase text-shadow">
                                                            {!! $slider->description ?? '' !!}</h1>
                                                        <div class="mt-30"><a class="btn btn-brand-2 btn-gray-1000"
                                                                href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Belanja</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else --}}
                                        <div class="swiper-slide">
                                            <a
                                                href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                                <img src="{{ asset('ecom/imgs/page/homepage4/slider-1.jpg') }}" style="height: 100%;object-fit:fill !important;"
                                                    alt="slider pertama beranda">
                                            </a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a
                                                href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                                <img src="{{ asset('ecom/imgs/page/homepage4/slider-2.jpg') }}" style="height: 100%;object-fit:fill !important;"
                                                    alt="slider kedua beranda">
                                            </a>

                                        </div>
                                        <div class="swiper-slide">
                                            <a
                                                href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                                <img src="{{ asset('ecom/imgs/page/homepage4/slider-3.jpg') }}" style="height: 100%;object-fit:fill !important;"
                                                    alt="slider ketiga beranda">
                                            </a>
                                        </div>
                                        {{-- @endif --}}
                                    </div>
                                    <div class="swiper-pagination swiper-pagination-1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-12 col-md-12">
                            <div class="row">
                                <div class="col-xl-7 col-lg-9 col-md-8 col-sm-12 mb-30">
                                    <div class="bg-metaverse bg-22 pt-25 mb-20 pl-20 h-175">
                                        <h3 class="mb-10 font-32">Metaverse</h3>
                                        <p class="font-16">The Future of Creativity</p>
                                        <div class="mt-10"><a class="btn btn-link-brand-2 btn-arrow-brand-2"
                                                href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">learn
                                                more</a></div>
                                    </div>
                                    <div class="bg-4 box-bdrd-4 bg-headphone pt-20 mh-307"><span
                                            class="font-md color-brand-3">Headphone</span>
                                        <h4 class="font-32 color-gray-1000 mb-10 mt-5">Rockez 547</h4>
                                        <p class="color-brand-1 font-sm">MUSIC EVERYWHERE<br
                                                class="d-none d-lg-block">ANYTIME</p>
                                        <div class="mt-35"><a class="btn btn-brand-2 btn-arrow-right"
                                                href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Shop
                                                Now</a></div>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-3 col-md-4 col-sm-12">
                                    <div class="box-promotions">
                                        <!-- Swiper-->
                                        <div class="swiper swiper-vertical-1">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide"><a
                                                        href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"><img
                                                            src="{{ asset('ecom/imgs/page/homepage4/promotion1.png') }}"
                                                            alt="Ecom"></a><a
                                                        href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"><img
                                                            src="{{ asset('ecom/imgs/page/homepage4/promotion2.png') }}"
                                                            alt="Ecom"></a><a
                                                        href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"><img
                                                            src="{{ asset('ecom/imgs/page/homepage4/promotion3.png') }}"
                                                            alt="Ecom"></a><a
                                                        href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"><img
                                                            src="{{ asset('ecom/imgs/page/homepage4/promotion4.png') }}"
                                                            alt="Ecom"></a><a
                                                        href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"><img
                                                            src="{{ asset('ecom/imgs/page/homepage4/promotion5.png') }}"
                                                            alt="Ecom"></a><a
                                                        href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"><img
                                                            src="{{ asset('ecom/imgs/page/homepage4/promotion6.png') }}"
                                                            alt="Ecom"></a></div>
                                                <div class="swiper-slide"><a
                                                        href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"><img
                                                            src="{{ asset('ecom/imgs/page/homepage4/promotion2.png') }}"
                                                            alt="Ecom"></a><a
                                                        href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"><img
                                                            src="{{ asset('ecom/imgs/page/homepage4/promotion4.png') }}"
                                                            alt="Ecom"></a><a
                                                        href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"><img
                                                            src="{{ asset('ecom/imgs/page/homepage4/promotion6.png') }}"
                                                            alt="Ecom"></a><a
                                                        href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"><img
                                                            src="{{ asset('ecom/imgs/page/homepage4/promotion1.png') }}"
                                                            alt="Ecom"></a><a
                                                        href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"><img
                                                            src="{{ asset('ecom/imgs/page/homepage4/promotion3.png') }}"
                                                            alt="Ecom"></a><a
                                                        href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"><img
                                                            src="{{ asset('ecom/imgs/page/homepage4/promotion5.png') }}"
                                                            alt="Ecom"></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- @if (count($data['promo_products']) > 0)
            <div class="container mt-20">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="head-main">
                            <h3 class="mb-5">Produk promo</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 order-first order-lg-last">

                        <div class="row mt-20">
                            @if (count($data['promo_products']) > 0)
                                @foreach ($data['promo_products'] as $prd)
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                        @include('clients.buyer.components.list_product1')
                                    </div>
                                @endforeach
                            @else
                                <div class="col-lg-12 text-center mt-40">
                                    <h4>Tidak ada Produk saat ini</h4>
                                </div>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        @endif --}}
        <section class="section-box mt-30">
            <div class="container">
                <div class="head-main bd-gray-200">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <ul class="nav nav-tabs text-start" role="tablist">
                                <li class="pl-0"><a class="active pl-0" href="#tab-1-featured" data-bs-toggle="tab"
                                        role="tab" aria-controls="tab-1-featured" aria-selected="true" data-index="1">
                                        <h4>Produk Terbaru</h4>
                                    </a></li>
                                <li><a href="#tab-1-bestseller" data-bs-toggle="tab" role="tab"
                                        aria-controls="tab-1-bestseller" aria-selected="false" data-index="2">
                                        <h4>Penjualan Terbaik</h4>
                                    </a></li>
                                <li><a href="#tab-1-mostviewed" data-bs-toggle="tab" role="tab"
                                        aria-controls="tab-1-mostviewed" aria-selected="false" data-index="3">
                                        <h4>Rekomendasi Produk</h4>
                                    </a></li>
                            </ul>
                            <!-- Button slider-->
                            <div class="box-button-slider">
                                <div class="button-slider-nav" id="tab-1-featured-nav">
                                    <div class="swiper-button-next swiper-button-next-tab-1"></div>
                                </div>
                                <div class="button-slider-nav" id="tab-1-bestseller-nav" style="display: none;">
                                    <div class="swiper-button-next swiper-button-next-tab-2"></div>
                                </div>
                                <div class="button-slider-nav" id="tab-1-mostviewed-nav" style="display: none;">
                                    <div class="swiper-button-next swiper-button-next-tab-3"></div>
                                </div>
                            </div>
                            <!-- End Button slider-->
                        </div>
                    </div>
                </div>
                <div class="tab-content tab-content-slider">
                    <div class="tab-pane fade active show" id="tab-1-featured" role="tabpanel"
                        aria-labelledby="tab-1-featured">
                        <div class="box-swiper">
                            <div class="swiper-container swiper-tab-1">
                                <div class="swiper-wrapper pt-5">
                                    <div class="swiper-slide">
                                        <div class="list-products-5">
                                            @foreach ($data['latest_product'] as $prd)
                                                @include('clients.buyer.components.list_product1')
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-1-bestseller" role="tabpanel" aria-labelledby="tab-1-bestseller">
                        <div class="box-swiper">
                            <div class="swiper-container swiper-tab-2">
                                <div class="swiper-wrapper pt-5">
                                    <div class="swiper-slide">
                                        <div class="list-products-5">
                                            @foreach ($data['best_seller_product'] as $prd)
                                                @include('clients.buyer.components.list_product1')
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-1-mostviewed" role="tabpanel" aria-labelledby="tab-1-mostviewed">
                        <div class="box-swiper">
                            <div class="swiper-container swiper-tab-3">
                                <div class="swiper-wrapper pt-5">
                                    <div class="swiper-slide">
                                        <div class="list-products-5">
                                            @foreach ($data['recommended_products'] as $prd)
                                                @include('clients.buyer.components.list_product1')
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="section-box pt-60 pb-60 bg-gray-50 mt-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8">
                        <div class="box-content">
                            <div class="head-main bd-gray-200">
                                <div class="row">
                                    <div class="col-xl-7 col-lg-6">
                                        <h4 class="mb-5"> Produk yang Sedang Tren</h4>
                                    </div>
                                    <div class="col-xl-5 col-lg-6">
                                        <!-- Button slider-->
                                        <div class="box-button-slider-normal">
                                            <div class="button-slider-nav" id="tab-1-all-nav">
                                                <div class="swiper-button-prev swiper-button-prev-tab-4"></div>
                                                <div class="swiper-button-next swiper-button-next-tab-4"></div>
                                            </div>
                                        </div>
                                        <!-- End Button slider-->
                                    </div>
                                </div>
                            </div>
                            <div class="box-swiper">
                                <div class="swiper-container swiper-tab-4">
                                    <div class="swiper-wrapper pt-5">
                                        <div class="swiper-slide">
                                            <div class="row">
                                                @foreach ($data['recommended_products'] as $prd)
                                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                                        @include('clients.buyer.components.list_product1')
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-20"><a
                                    href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"><img
                                        src="{{ asset('ecom/imgs/page/homepage4/banner-ads.png') }}" alt="Ecom"></a>
                            </div>
                        </div>
                        <div class="box-content mt-45">
                            <div class="head-main bd-gray-200">
                                <div class="row">
                                    <div class="col-xl-7 col-lg-6">
                                        <h4 class="mb-5">Produk yang direkomendasikan</h4>
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
                                                @foreach ($data['recommended_products'] as $prd)
                                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                                        @include('clients.buyer.components.list_product1')
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="box-slider-item box-sidebar">
                            <div class="head">
                                <h4 class="d-inline-block">Penjualan Terbaik</h4>
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
                                                @foreach ($data['best_seller_product'] as $prd)
                                                    @include('clients.buyer.components.list_product2')
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="banner-right h-500 text-center mb-30"><span class="text-no font-11">No.9</span>
                            <h5 class="font-23 mt-20">Sensitive Touch<br class="d-none d-lg-block">without fingerprint
                            </h5>
                            <p class="text-desc font-16 mt-15">Smooth handle and accurate click</p>
                        </div>
                        <div class="box-slider-item box-sidebar">
                            <div class="head">
                                <h4 class="d-inline-block">Produk Terbaru</h4>
                                <div class="box-button-control">
                                    <div class="swiper-button-prev swiper-button-prev-style-2 swiper-button-prev-featured">
                                    </div>
                                    <div class="swiper-button-next swiper-button-next-style-2 swiper-button-next-featured">
                                    </div>
                                </div>
                            </div>
                            <div class="content-slider pl-10 pr-10">
                                <div class="box-swiper">
                                    <div class="swiper-container swiper-featured">
                                        <div class="swiper-wrapper pt-5">
                                            <div class="swiper-slide">
                                                @foreach ($data['latest_product'] as $key => $prd)
                                                    @if ($key <= 4)
                                                        @include('clients.buyer.components.list_product2')
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="section-box pt-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-5 col-md-5 col-sm-12 mb-30">
                        <div class="bg-5 block-iphone"><span class="color-brand-3 font-sm-lh32">Starting from
                                $899</span>
                            <h3 class="font-xl mb-10">iPhone 12 Pro 128Gb</h3>
                            <p class="font-base color-brand-3 mb-10">Special Sale</p><a class="btn btn-arrow"
                                href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">learn
                                more</a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-7 col-md-7 col-sm-12 mb-30">
                        <div class="bg-4 block-samsung"><span class="color-brand-3 font-sm-lh32">New Arrivals</span>
                            <h3 class="font-xl mb-10">Samsung 2022 Led TV</h3>
                            <p class="font-base color-brand-3 mb-20">Special Sale</p><a
                                class="btn btn-brand-2 btn-arrow-right"
                                href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">learn
                                more</a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12">
                        <div class="bg-6 block-drone">
                            <h3 class="font-33 mb-20">Drone Quadcopter UAV - DJI Air 2S</h3>
                            <div class="mb-30"><strong class="font-18">Gimbal Camera, 5.4K Video</strong></div><a
                                class="btn btn-brand-2 btn-arrow-right"
                                href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">learn
                                more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-box mt-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="head-main">
                            <h3 class="mb-5">Produk Terlaris</h3>
                            <p class="font-base color-gray-500">Produk spesial yang banyak diminati.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($data['recommended_products'] as $prd)
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                            @include('clients.buyer.components.list_product1')
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        <section class="section-box pt-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-7 col-md-7 col-sm-12 mb-30">
                        <div class="bg-4 block-charge"><span class="color-brand-3 font-sm-lh32">Power Bank</span>
                            <h3 class="font-xl mb-10">Quick Charge</h3>
                            <p class="font-base color-brand-3 mb-20">Lightweight and Portable<br
                                    class="d-none d-lg-block"> Dual port fast charge</p><a
                                class="btn btn-brand-2 btn-arrow-right"
                                href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Belanja
                                Sekarang</a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 mb-30">
                        <div class="bg-6 block-player">
                            <h3 class="font-33 mb-20">Xbox Series XS Game Controller</h3>
                            <div class="mb-30"><strong class="font-16">Replacement Kit D-pad ABXY Keys</strong></div><a
                                class="btn btn-brand-3 btn-arrow-right"
                                href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">learn
                                more</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-5 col-md-5 col-sm-12 mb-30">
                        <div class="bg-5 block-iphone"><span class="color-brand-3 font-sm-lh32">Starting from
                                $899</span>
                            <h3 class="font-xl mb-10">iPhone 12 Pro 128Gb</h3>
                            <p class="font-base color-brand-3 mb-10">Special Sale</p><a class="btn btn-arrow"
                                href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">learn
                                more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- @if (count($data['limited_product']) > 0)
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
                                @foreach ($data['limited_product'] as $prd)
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                        @include('clients.buyer.components.list_product1')
                                    </div>
                                @endforeach
                            @else
                                <div class="col-lg-12 text-center mt-40">
                                    <h4>Tidak ada Produk saat ini</h4>
                                </div>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        @endif

        <div class="section-box pt-30 bg-gray-50 mt-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="box-content">
                            <div class="head-main bd-gray-200">
                                <div class="row">
                                    <div class="col-xl-7 col-lg-6">
                                        <h3 class="mb-5">Produk Terlaris</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="box-swiper">
                                <div class="swiper-container swiper-tab-4">
                                    <div class="row">
                                        @if (count($data['best_seller_product']) > 0)
                                            @foreach ($data['best_seller_product'] as $prd)
                                                <div class="col-xl-3 col-lg-6 col-md-6">
                                                    @include('clients.buyer.components.list_product1')
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="col-lg-12 text-center mt-40">
                                                <h4>Tidak ada Produk terbaru saat ini</h4>
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
        <div class="section-box pt-30 pb-60 bg-gray-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="box-content">
                            <div class="head-main bd-gray-200">
                                <div class="row">
                                    <div class="col-xl-7 col-lg-6">
                                        <h3 class="mb-5">Produk Terbaru</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="box-swiper">
                                <div class="swiper-container swiper-tab-4">
                                    <div class="row">
                                        @if (count($data['latest_product']) > 0)
                                            @foreach ($data['latest_product'] as $prd)
                                                <div class="col-xl-3 col-lg-6 col-md-6">
                                                    @include('clients.buyer.components.list_product1')
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="col-lg-12 text-center mt-40">
                                                <h4>Tidak ada Produk terbaru saat ini</h4>
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
                            @foreach ($data['recommended_products'] as $prd)
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    @include('clients.buyer.components.list_product1')
                                </div>
                            @endforeach
                        @else
                            <div class="col-lg-12 text-center mt-40">
                                <h4>Tidak ada Produk saat ini</h4>
                            </div>
                        @endif
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
                                                    <div class="card-grid-style-3"
                                                        style="max-height: none !important;aspect-ratio: auto !important;object-fit: cover !important;max-width: 100% !important;">
                                                        <div class="card-grid-inner">
                                                            <div class="image-box">
                                                                <a
                                                                    href="{{ route('buyer.detailArticle', ['id' => $article->id]) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                                                    <img style="height:auto;"
                                                                        src="{{ $article?->image ? $article->image : asset('ecom/imgs/page/blog/blog-1.jpg') }}"
                                                                        alt="produk {{ $article->title ?? '' }}"></a>
                                                            </div>
                                                            <div class="info-right">
                                                                <a class="color-brand-3 font-sm-bold line-2 text-start"
                                                                    href="{{ route('buyer.detailArticle', ['id' => $article->id]) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">{{ $article->title ?? '' }}</a>
                                                                <div class="price-info article-desc">
                                                                    <span
                                                                        class="color-gray-500 line-3 text-start">{!! $article->content !!}</span>
                                                                </div>
                                                                <div
                                                                    class="price-info mt-0 d-flex flex-row gap-1 align-items-center">
                                                                    {!! file_get_contents('ecom/imgs/page/product/icon-eye.svg') !!}
                                                                    <strong class="font-sm color-gray-500 price-main">
                                                                        {{ $article->view ? moneyFormat($article->view) . 'x dilihat' : 'belum dilihat' }}
                                                                    </strong>
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
        @include('clients.buyer.layouts.benefit')
    </main>
@endsection
@push('importjs')
    <script>
        $(document).ready(function() {
            $('.info-right').each(function() {
                var text = $(this).find('.color-brand-3.font-sm-bold').text();

                // Menghapus spasi ekstra dan memeriksa jumlah baris
                if (text.trim().split(/\r\n|\r|\n/).length < 2) {
                    $(this).find('.color-brand-3.font-sm-bold').css('height', '40px');
                }
                var text2 = $(this).find('.article-desc span').text();
                if (text2.trim().split(/\r\n|\r|\n/).length < 3) {
                    $(this).find('.article-desc span').css('height', '54px');
                }
            });

            // Menangani klik tombol "Keranjang" menggunakan jQuery
            $('.btn-cart').on('click', function() {
                // Mendapatkan informasi produk dari atribut data
                const productInfo = {
                    id: $(this).data('productId'),
                    nama: $(this).data('productName'),
                    harga: $(this).data('productPrice')
                    // Tambahkan info produk lainnya jika diperlukan
                };

                // Menyimpan produk ke localStorage saat tombol "Keranjang" diklik
                tambahkanKeLocalStorage(productInfo);
            });
        });
    </script>
@endpush
