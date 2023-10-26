@extends('clients.buyer.master')
@section('title', 'Semua Produk')

@section('childs')
    <main class="main">
        <div class="section-box">
            <div class="breadcrumbs-div">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a class="font-xs color-gray-1000" href="{{ route('buyer.home') }}">Beranda</a></li>
                        <li><a class="font-xs color-gray-500" href="{{ route('buyer.allListProduct') }}">Semua Produk</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-box shop-template mt-30">
            <div class="container">
                <div class="box-swiper slider-shop-2">
                    <div class="swiper-container swiper-group-3">
                        <div class="swiper-wrapper pt-5">
                            <div class="swiper-slide">
                                <div class="card-grid-style-2"><span class="label bg-brand-2">-12%</span>
                                    <div class="image-box"><a href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage2/cat-img-6.png') }}"
                                                alt="Ecom"></a></div>
                                    <div class="info-right"><span class="font-xs color-gray-500">YSSOA Store</span><br><a
                                            class="color-brand-3 font-sm-bold" href="{{ route('buyer.detailProduct') }}">Chair Mesh
                                            Ergonomic Adjustable Swivel Task Chair with Headrest</a>
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
                            <div class="swiper-slide">
                                <div class="card-grid-style-2"><span class="label bg-brand-2">-17%</span>
                                    <div class="image-box"><a href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage2/cat-img-9.png') }}"
                                                alt="Ecom"></a></div>
                                    <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a
                                            class="color-brand-3 font-sm-bold" href="{{ route('buyer.detailProduct') }}">Straight Talk
                                            Samsung Galaxy A03s, 32GB, Black</a>
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
                            <div class="swiper-slide">
                                <div class="card-grid-style-2"><span class="label bg-brand-2">-20%</span>
                                    <div class="image-box"><a href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage2/cat-img-10.png') }}"
                                                alt="Ecom"></a></div>
                                    <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a
                                            class="color-brand-3 font-sm-bold" href="{{ route('buyer.detailProduct') }}">iMac
                                            MNE92LL/A 27 Inch, 3.4 GHz Intel Core i5, 8GB RAM, 1TB Drive</a>
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
                            <div class="swiper-slide">
                                <div class="card-grid-style-2"><span class="label bg-brand-2">-22%</span>
                                    <div class="image-box"><a href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage2/cat-img-16.png') }}"
                                                alt="Ecom"></a></div>
                                    <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a
                                            class="color-brand-3 font-sm-bold" href="{{ route('buyer.detailProduct') }}">Apple Watch
                                            Series 8 [GPS 45mm] Smart Watch w/ Midnight Case </a>
                                        <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                                        <div class="price-info"><strong
                                                class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next swiper-button-next-group-3"></div>
                    <div class="swiper-button-prev swiper-button-next-group-3"></div>
                </div>
            </div>
        </div>
        <section class="section-box shop-template mt-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 order-first order-lg-last">
                        <div class="box-filters mt-0 pb-5 border-bottom">
                            <div class="row">
                                <div class="col-xl-2 col-lg-3 mb-10 text-lg-start text-center"><a
                                        class="btn btn-filter font-sm color-brand-3 font-medium" href="#ModalFiltersForm"
                                        data-bs-toggle="modal">Semua Filter</a></div>
                                <div class="col-xl-10 col-lg-9 mb-10 text-lg-end text-center"><span
                                        class="font-sm color-gray-900 font-medium border-1-right span">Menampilkan
                                        1&ndash;16
                                        of 17 Hasil</span>
                                    <div class="d-inline-block"><span
                                            class="font-sm color-gray-500 font-medium">Berdasarkan:</span>
                                        <div class="dropdown dropdown-sort border-1-right">
                                            <button class="btn dropdown-toggle font-sm color-gray-900 font-medium"
                                                id="dropdownSort" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">Produk Terbaru</button>
                                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort"
                                                style="margin: 0px;">
                                                <li><a class="dropdown-item active" href="#">Produk Terbaru</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#">Produk terlama</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    {{-- <div class="d-inline-block"><span
                                            class="font-sm color-gray-500 font-medium">Show</span>
                                        <div class="dropdown dropdown-sort border-1-right">
                                            <button class="btn dropdown-toggle font-sm color-gray-900 font-medium"
                                                id="dropdownSort2" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false" data-bs-display="static"><span>30
                                                    items</span></button>
                                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort2">
                                                <li><a class="dropdown-item active" href="#">30 items</a></li>
                                                <li><a class="dropdown-item" href="#">50 items</a></li>
                                                <li><a class="dropdown-item" href="#">100 items</a></li>
                                            </ul>
                                        </div>
                                    </div> --}}
                                    <div class="d-inline-block">
                                        <a class="view-type-grid mr-5 "
                                            href="{{ route('buyer.allGridProduct') }}"></a><a class="view-type-list active"
                                            href="{{ route('buyer.allListProduct') }}"></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-20 display-list">
                            <div class="col-lg-12">
                                <div class="card-grid-style-3">
                                    <div class="card-grid-inner">
                                        <div class="tools">
                                            {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                aria-label="Trend"></a> --}}
                                            <a class="btn btn-wishlist btn-tooltip mb-10" href="{{ route('buyer.wishlist') }}"
                                                aria-label="Tambahkan ke Wishlist"></a>
                                            {{--
                                                <a class="btn btn-quickview btn-tooltip"
                                                aria-label="Quick view" href="#ModalQuickview"
                                                data-bs-toggle="modal"></a> --}}
                                        </div>
                                        <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                href="{{ route('buyer.detailProduct') }}"><img
                                                    src="{{ asset('ecom/imgs/page/homepage1/imgsp3.png') }}"
                                                    alt="Ecom"></a></div>
                                        <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a
                                                href="{{ route('buyer.detailProduct') }}">
                                                <h4 class="color-brand-3">2022 Apple iMac with Retina 5K Display 8GB RAM
                                                    Tower PC</h4>
                                            </a>
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
                                                    alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                                            <div class="price-info"><strong
                                                    class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                    class="color-gray-500 price-line">$3225.6</span></div>
                                            <div class="mt-20"><a class="btn btn-cart"
                                                    href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card-grid-style-3">
                                    <div class="card-grid-inner">
                                        <div class="tools">
                                            {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                aria-label="Trend"></a> --}}
                                            <a class="btn btn-wishlist btn-tooltip mb-10" href="{{ route('buyer.wishlist') }}"
                                                aria-label="Tambahkan ke Wishlist"></a>
                                            {{--
                                                <a class="btn btn-quickview btn-tooltip"
                                                aria-label="Quick view" href="#ModalQuickview"
                                                data-bs-toggle="modal"></a> --}}
                                        </div>
                                        <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                href="{{ route('buyer.detailProduct') }}"><img
                                                    src="{{ asset('ecom/imgs/page/homepage1/imgsp4.png') }}"
                                                    alt="Ecom"></a></div>
                                        <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a
                                                href="{{ route('buyer.detailProduct') }}">
                                                <h4 class="color-brand-3">Bose Sport Earbuds True Wireless Bluetooth
                                                    Headphones</h4>
                                            </a>
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
                                                    alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                                            <div class="price-info"><strong
                                                    class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                    class="color-gray-500 price-line">$3225.6</span></div>
                                            <div class="mt-20"><a class="btn btn-cart"
                                                    href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card-grid-style-3">
                                    <div class="card-grid-inner">
                                        <div class="tools">
                                            {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                aria-label="Trend"></a> --}}
                                            <a class="btn btn-wishlist btn-tooltip mb-10" href="{{ route('buyer.wishlist') }}"
                                                aria-label="Tambahkan ke Wishlist"></a>
                                            {{--
                                                <a class="btn btn-quickview btn-tooltip"
                                                aria-label="Quick view" href="#ModalQuickview"
                                                data-bs-toggle="modal"></a> --}}
                                        </div>
                                        <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                href="{{ route('buyer.detailProduct') }}"><img
                                                    src="{{ asset('ecom/imgs/page/homepage1/imgsp5.png') }}"
                                                    alt="Ecom"></a></div>
                                        <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a
                                                href="{{ route('buyer.detailProduct') }}">
                                                <h4 class="color-brand-3">2022 Apple 10.9-inch iPad Air Wi-Fi 64GB - Silver
                                                </h4>
                                            </a>
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
                                                    alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                                            <div class="price-info"><strong
                                                    class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                    class="color-gray-500 price-line">$3225.6</span></div>
                                            <div class="mt-20"><a class="btn btn-cart"
                                                    href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card-grid-style-3">
                                    <div class="card-grid-inner">
                                        <div class="tools">
                                            {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                aria-label="Trend"></a> --}}
                                            <a class="btn btn-wishlist btn-tooltip mb-10" href="{{ route('buyer.wishlist') }}"
                                                aria-label="Tambahkan ke Wishlist"></a>
                                            {{--
                                                <a class="btn btn-quickview btn-tooltip"
                                                aria-label="Quick view" href="#ModalQuickview"
                                                data-bs-toggle="modal"></a> --}}
                                        </div>
                                        <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                href="{{ route('buyer.detailProduct') }}"><img
                                                    src="{{ asset('ecom/imgs/page/homepage1/imgsp6.png') }}"
                                                    alt="Ecom"></a></div>
                                        <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a
                                                href="{{ route('buyer.detailProduct') }}">
                                                <h4 class="color-brand-3">Chromecast with Google TV - Streaming
                                                    Entertainment</h4>
                                            </a>
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
                                                    alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                                            <div class="price-info"><strong
                                                    class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                    class="color-gray-500 price-line">$3225.6</span></div>
                                            <div class="mt-20"><a class="btn btn-cart"
                                                    href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card-grid-style-3">
                                    <div class="card-grid-inner">
                                        <div class="tools">
                                            {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                aria-label="Trend"></a> --}}
                                            <a class="btn btn-wishlist btn-tooltip mb-10" href="{{ route('buyer.wishlist') }}"
                                                aria-label="Tambahkan ke Wishlist"></a>
                                            {{--
                                                <a class="btn btn-quickview btn-tooltip"
                                                aria-label="Quick view" href="#ModalQuickview"
                                                data-bs-toggle="modal"></a> --}}
                                        </div>
                                        <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                href="{{ route('buyer.detailProduct') }}"><img
                                                    src="{{ asset('ecom/imgs/page/homepage1/imgsp7.png') }}"
                                                    alt="Ecom"></a></div>
                                        <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a
                                                href="{{ route('buyer.detailProduct') }}">
                                                <h4 class="color-brand-3">HDR Smart Portable Projector - SP-LSP3BLAXZA 2022
                                                </h4>
                                            </a>
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
                                                    alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                                            <div class="price-info"><strong
                                                    class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                    class="color-gray-500 price-line">$3225.6</span></div>
                                            <div class="mt-20"><a class="btn btn-cart"
                                                    href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card-grid-style-3">
                                    <div class="card-grid-inner">
                                        <div class="tools">
                                            {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                aria-label="Trend"></a> --}}
                                            <a class="btn btn-wishlist btn-tooltip mb-10" href="{{ route('buyer.wishlist') }}"
                                                aria-label="Tambahkan ke Wishlist"></a>
                                            {{--
                                                <a class="btn btn-quickview btn-tooltip"
                                                aria-label="Quick view" href="#ModalQuickview"
                                                data-bs-toggle="modal"></a> --}}
                                        </div>
                                        <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                href="{{ route('buyer.detailProduct') }}"><img
                                                    src="{{ asset('ecom/imgs/page/homepage1/imgsp1.png') }}"
                                                    alt="Ecom"></a></div>
                                        <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a
                                                href="{{ route('buyer.detailProduct') }}">
                                                <h4 class="color-brand-3">Lenovo Legion 5i 15.6&quot; Laptop, Intel Core
                                                    i5-10500H</h4>
                                            </a>
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
                                                    alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                                            <div class="price-info"><strong
                                                    class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                    class="color-gray-500 price-line">$3225.6</span></div>
                                            <div class="mt-20"><a class="btn btn-cart"
                                                    href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card-grid-style-3">
                                    <div class="card-grid-inner">
                                        <div class="tools">
                                            {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                aria-label="Trend"></a> --}}
                                            <a class="btn btn-wishlist btn-tooltip mb-10" href="{{ route('buyer.wishlist') }}"
                                                aria-label="Tambahkan ke Wishlist"></a>
                                            {{--
                                                <a class="btn btn-quickview btn-tooltip"
                                                aria-label="Quick view" href="#ModalQuickview"
                                                data-bs-toggle="modal"></a> --}}
                                        </div>
                                        <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                href="{{ route('buyer.detailProduct') }}"><img
                                                    src="{{ asset('ecom/imgs/page/homepage1/imgsp2.png') }}"
                                                    alt="Ecom"></a></div>
                                        <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a
                                                href="{{ route('buyer.detailProduct') }}">
                                                <h4 class="color-brand-3">SAMSUNG Galaxy Tab A7 Lite, 8.7&quot; Tablet 32GB
                                                </h4>
                                            </a>
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
                                                    alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                                            <div class="price-info"><strong
                                                    class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                    class="color-gray-500 price-line">$3225.6</span></div>
                                            <div class="mt-20"><a class="btn btn-cart"
                                                    href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card-grid-style-3">
                                    <div class="card-grid-inner">
                                        <div class="tools">
                                            {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                aria-label="Trend"></a> --}}
                                            <a class="btn btn-wishlist btn-tooltip mb-10" href="{{ route('buyer.wishlist') }}"
                                                aria-label="Tambahkan ke Wishlist"></a>
                                            {{--
                                                <a class="btn btn-quickview btn-tooltip"
                                                aria-label="Quick view" href="#ModalQuickview"
                                                data-bs-toggle="modal"></a> --}}
                                        </div>
                                        <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                href="{{ route('buyer.detailProduct') }}"><img
                                                    src="{{ asset('ecom/imgs/page/homepage1/imgsp3.png') }}"
                                                    alt="Ecom"></a></div>
                                        <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a
                                                href="{{ route('buyer.detailProduct') }}">
                                                <h4 class="color-brand-3">Kasa Outdoor Smart Plug, Smart Home Wi-Fi Outlet
                                                    with 2 Sockets</h4>
                                            </a>
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
                                                    alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                                            <div class="price-info"><strong
                                                    class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                    class="color-gray-500 price-line">$3225.6</span></div>
                                            <div class="mt-20"><a class="btn btn-cart"
                                                    href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card-grid-style-3">
                                    <div class="card-grid-inner">
                                        <div class="tools">
                                            {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                aria-label="Trend"></a> --}}
                                            <a class="btn btn-wishlist btn-tooltip mb-10" href="{{ route('buyer.wishlist') }}"
                                                aria-label="Tambahkan ke Wishlist"></a>
                                            {{--
                                                <a class="btn btn-quickview btn-tooltip"
                                                aria-label="Quick view" href="#ModalQuickview"
                                                data-bs-toggle="modal"></a> --}}
                                        </div>
                                        <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                href="{{ route('buyer.detailProduct') }}"><img
                                                    src="{{ asset('ecom/imgs/page/homepage1/imgsp4.png') }}"
                                                    alt="Ecom"></a></div>
                                        <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a
                                                href="{{ route('buyer.detailProduct') }}">
                                                <h4 class="color-brand-3">Sceptre 24&quot; Professional Thin 75Hz 1080p LED
                                                    Monitor 2x HDMI</h4>
                                            </a>
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
                                                    alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                                            <div class="price-info"><strong
                                                    class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                    class="color-gray-500 price-line">$3225.6</span></div>
                                            <div class="mt-20"><a class="btn btn-cart"
                                                    href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card-grid-style-3">
                                    <div class="card-grid-inner">
                                        <div class="tools">
                                            {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                aria-label="Trend"></a> --}}
                                            <a class="btn btn-wishlist btn-tooltip mb-10" href="{{ route('buyer.wishlist') }}"
                                                aria-label="Tambahkan ke Wishlist"></a>
                                            {{--
                                                <a class="btn btn-quickview btn-tooltip"
                                                aria-label="Quick view" href="#ModalQuickview"
                                                data-bs-toggle="modal"></a> --}}
                                        </div>
                                        <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                href="{{ route('buyer.detailProduct') }}"><img
                                                    src="{{ asset('ecom/imgs/page/homepage1/imgsp5.png') }}"
                                                    alt="Ecom"></a></div>
                                        <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a
                                                href="{{ route('buyer.detailProduct') }}">
                                                <h4 class="color-brand-3">Seagate Portable 2TB External Hard Drive Portable
                                                    HDD – USB 3.0</h4>
                                            </a>
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
                                                    alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                                            <div class="price-info"><strong
                                                    class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                    class="color-gray-500 price-line">$3225.6</span></div>
                                            <div class="mt-20"><a class="btn btn-cart"
                                                    href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card-grid-style-3">
                                    <div class="card-grid-inner">
                                        <div class="tools">
                                            {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                aria-label="Trend"></a> --}}
                                            <a class="btn btn-wishlist btn-tooltip mb-10" href="{{ route('buyer.wishlist') }}"
                                                aria-label="Tambahkan ke Wishlist"></a>
                                            {{--
                                                <a class="btn btn-quickview btn-tooltip"
                                                aria-label="Quick view" href="#ModalQuickview"
                                                data-bs-toggle="modal"></a> --}}
                                        </div>
                                        <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                href="{{ route('buyer.detailProduct') }}"><img
                                                    src="{{ asset('ecom/imgs/page/homepage1/imgsp6.png') }}"
                                                    alt="Ecom"></a></div>
                                        <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a
                                                href="{{ route('buyer.detailProduct') }}">
                                                <h4 class="color-brand-3">SanDisk 128GB Ultra microSDXC UHS-I Memory Card
                                                    with Adapter </h4>
                                            </a>
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
                                                    alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                                            <div class="price-info"><strong
                                                    class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                    class="color-gray-500 price-line">$3225.6</span></div>
                                            <div class="mt-20"><a class="btn btn-cart"
                                                    href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card-grid-style-3">
                                    <div class="card-grid-inner">
                                        <div class="tools">
                                            {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                aria-label="Trend"></a> --}}
                                            <a class="btn btn-wishlist btn-tooltip mb-10" href="{{ route('buyer.wishlist') }}"
                                                aria-label="Tambahkan ke Wishlist"></a>
                                            {{--
                                                <a class="btn btn-quickview btn-tooltip"
                                                aria-label="Quick view" href="#ModalQuickview"
                                                data-bs-toggle="modal"></a> --}}
                                        </div>
                                        <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                href="{{ route('buyer.detailProduct') }}"><img
                                                    src="{{ asset('ecom/imgs/page/homepage1/imgsp7.png') }}"
                                                    alt="Ecom"></a></div>
                                        <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a
                                                href="{{ route('buyer.detailProduct') }}">
                                                <h4 class="color-brand-3">Original HP 63XL Black High-yield Ink Cartridge |
                                                    Works</h4>
                                            </a>
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
                                                    alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                                            <div class="price-info"><strong
                                                    class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                    class="color-gray-500 price-line">$3225.6</span></div>
                                            <div class="mt-20"><a class="btn btn-cart"
                                                    href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card-grid-style-3">
                                    <div class="card-grid-inner">
                                        <div class="tools">
                                            {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                aria-label="Trend"></a> --}}
                                            <a class="btn btn-wishlist btn-tooltip mb-10" href="{{ route('buyer.wishlist') }}"
                                                aria-label="Tambahkan ke Wishlist"></a>
                                            {{--
                                                <a class="btn btn-quickview btn-tooltip"
                                                aria-label="Quick view" href="#ModalQuickview"
                                                data-bs-toggle="modal"></a> --}}
                                        </div>
                                        <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                href="{{ route('buyer.detailProduct') }}"><img
                                                    src="{{ asset('ecom/imgs/page/homepage1/imgsp1.png') }}"
                                                    alt="Ecom"></a></div>
                                        <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a
                                                href="{{ route('buyer.detailProduct') }}">
                                                <h4 class="color-brand-3">HP 24mh FHD Monitor - Computer Monitor with
                                                    23.8-Inch</h4>
                                            </a>
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
                                                    alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                                            <div class="price-info"><strong
                                                    class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                    class="color-gray-500 price-line">$3225.6</span></div>
                                            <div class="mt-20"><a class="btn btn-cart"
                                                    href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card-grid-style-3">
                                    <div class="card-grid-inner">
                                        <div class="tools">
                                            {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                aria-label="Trend"></a> --}}
                                            <a class="btn btn-wishlist btn-tooltip mb-10" href="{{ route('buyer.wishlist') }}"
                                                aria-label="Tambahkan ke Wishlist"></a>
                                            {{--
                                                <a class="btn btn-quickview btn-tooltip"
                                                aria-label="Quick view" href="#ModalQuickview"
                                                data-bs-toggle="modal"></a> --}}
                                        </div>
                                        <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                href="{{ route('buyer.detailProduct') }}"><img
                                                    src="{{ asset('ecom/imgs/page/homepage1/imgsp2.png') }}"
                                                    alt="Ecom"></a></div>
                                        <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a
                                                href="{{ route('buyer.detailProduct') }}">
                                                <h4 class="color-brand-3">Logitech MK345 Wireless Combo Full-Sized Keyboard
                                                    with Palm </h4>
                                            </a>
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
                                                    alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                                            <div class="price-info"><strong
                                                    class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                    class="color-gray-500 price-line">$3225.6</span></div>
                                            <div class="mt-20"><a class="btn btn-cart"
                                                    href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <nav>
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link page-prev" href="#"></a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link active" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                <li class="page-item"><a class="page-link page-next" href="#"></a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3 order-last order-lg-first">
                        <div class="sidebar-border mb-0">
                            <div class="sidebar-head">
                                <h6 class="color-gray-900">Kategori Produk</h6>
                            </div>
                            <div class="sidebar-content">
                                <ul class="list-nav-arrow">
                                    <li><a href="{{ route('buyer.allListProduct') }}">Computers &amp; Laptop<span
                                                class="number">09</span></a>
                                    </li>
                                    <li><a href="{{ route('buyer.allListProduct') }}">Electric accessories<span
                                                class="number">12</span></a>
                                    </li>
                                    <li><a href="{{ route('buyer.allListProduct') }}">Mainboard &amp; CPU<span
                                                class="number">24</span></a>
                                    </li>
                                    <li><a href="{{ route('buyer.allListProduct') }}">Bluetooth devices<span
                                                class="number">34</span></a></li>
                                    <li><a href="{{ route('buyer.allListProduct') }}">Mouse &amp; Keyboard<span
                                                class="number">65</span></a>
                                    </li>
                                    <li><a href="{{ route('buyer.allListProduct') }}">Wired Headphone<span
                                                class="number">15</span></a></li>
                                    <li><a href="{{ route('buyer.allListProduct') }}">Gaming Gatgets<span
                                                class="number">76</span></a></li>
                                    <li><a href="{{ route('buyer.allListProduct') }}">Smart watches<span
                                                class="number">89</span></a></li>
                                    <li><a href="{{ route('buyer.allListProduct') }}">Cell Phones<span
                                                class="number">23</span></a></li>
                                    <li><a href="{{ route('buyer.allListProduct') }}">Headphone<span
                                                class="number">98</span></a></li>
                                </ul>
                                <div>
                                    <div class="collapse" id="moreMenu">
                                        <ul class="list-nav-arrow">
                                            <li><a href="{{ route('buyer.allListProduct') }}">Home theater<span
                                                        class="number">98</span></a>
                                            </li>
                                            <li><a href="{{ route('buyer.allListProduct') }}">Cameras & drones<span
                                                        class="number">124</span></a></li>
                                            <li><a href="{{ route('buyer.allListProduct') }}">PC gaming<span
                                                        class="number">56</span></a></li>
                                            <li><a href="{{ route('buyer.allListProduct') }}">Smart home<span
                                                        class="number">87</span></a></li>
                                            <li><a href="{{ route('buyer.allListProduct') }}">Networking<span
                                                        class="number">36</span></a></li>
                                        </ul>
                                    </div><a class="link-see-more mt-5" data-bs-toggle="collapse" href="#moreMenu"
                                        role="button" aria-expanded="false" aria-controls="moreMenu">See More</a>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-border mb-40">
                            <div class="sidebar-head">
                                <h6 class="color-gray-900">Filter Produk</h6>
                            </div>
                            <div class="sidebar-content">
                                <h6 class="color-gray-900 mt-10 mb-10">Harga</h6>
                                <div class="box-slider-range mt-20 mb-15">
                                    <div class="row mb-20">
                                        <div class="col-sm-12">
                                            <div id="slider-range"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label class="lb-slider font-sm color-gray-500">Price Range:</label><span
                                                class="min-value-money font-sm color-gray-1000"></span>
                                            <label class="lb-slider font-sm font-medium color-gray-1000"></label>-
                                            <span class="max-value-money font-sm font-medium color-gray-1000"></span>
                                        </div>
                                        <div class="col-lg-12">
                                            <input class="form-control min-value" type="hidden" name="min-value"
                                                value="">
                                            <input class="form-control max-value" type="hidden" name="max-value"
                                                value="">
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-checkbox">
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox" checked="checked"><span class="text-small">Free -
                                                $100</span><span class="checkmark"></span>
                                        </label><span class="number-item">145</span>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">$100 - $200</span><span
                                                class="checkmark"></span>
                                        </label><span class="number-item">56</span>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">$200 - $400</span><span
                                                class="checkmark"></span>
                                        </label><span class="number-item">23</span>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">$400 - $600</span><span
                                                class="checkmark"></span>
                                        </label><span class="number-item">43</span>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">$600 - $800</span><span
                                                class="checkmark"></span>
                                        </label><span class="number-item">65</span>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Over $1000</span><span
                                                class="checkmark"></span>
                                        </label><span class="number-item">56</span>
                                    </li>
                                </ul>
                                {{-- <h6 class="color-gray-900 mt-20 mb-10">Brands</h6>
                                <ul class="list-checkbox">
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox" checked="checked"><span
                                                class="text-small">Apple</span><span class="checkmark"></span>
                                        </label><span class="number-item">12</span>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Sony</span><span
                                                class="checkmark"></span>
                                        </label><span class="number-item">34</span>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Toshiba</span><span
                                                class="checkmark"></span>
                                        </label><span class="number-item">56</span>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Assus</span><span
                                                class="checkmark"></span>
                                        </label><span class="number-item">78</span>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Samsung</span><span
                                                class="checkmark"></span>
                                        </label><span class="number-item">23</span>
                                    </li>
                                </ul>
                                <h6 class="color-gray-900 mt-20 mb-10">Color</h6>
                                <ul class="list-color">
                                    <li><a class="color-red active" href="#"></a><span>Red</span></li>
                                    <li><a class="color-green" href="#"></a><span>Green</span></li>
                                    <li><a class="color-blue" href="#"></a><span>Blue</span></li>
                                    <li><a class="color-purple" href="#"></a><span>Purple</span></li>
                                    <li><a class="color-black" href="#"></a><span>Black</span></li>
                                    <li><a class="color-gray" href="#"></a><span>Gray</span></li>
                                    <li><a class="color-pink" href="#"></a><span>Pink</span></li>
                                    <li><a class="color-brown" href="#"></a><span>Brown</span></li>
                                    <li><a class="color-yellow" href="#"></a><span>Yellow</span></li>
                                </ul><a class="btn btn-filter font-sm color-brand-3 font-medium mt-10"
                                    href="#ModalFiltersForm" data-bs-toggle="modal">Filter Lainnya</a> --}}
                            </div>
                        </div>
                        <div class="box-slider-item mb-30">
                            <div class="head pb-15 border-brand-2">
                                <h5 class="color-gray-900">Penjualan terbaik</h5>
                            </div>
                            <div class="content-slider">
                                <div class="box-swiper slide-shop">
                                    <div class="swiper-container swiper-best-seller">
                                        <div class="swiper-wrapper pt-5">
                                            <div class="swiper-slide">
                                                <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                            href="{{ route('buyer.detailProduct') }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage2/camera.png') }}"
                                                                alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                            href="{{ route('buyer.detailProduct') }}">HP Slim Desktop, Intel
                                                            Celeron J4025, 4GB RAM</a>
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
                                                                class="font-md-bold color-brand-3 price-main">$150</strong><span
                                                                class="color-gray-500 font-sm price-line">$187</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                    <div class="image-box"><a href="{{ route('buyer.detailProduct') }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage2/clock.png') }}"
                                                                alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                            href="{{ route('buyer.detailProduct') }}">Class 4K UHD (2160P) LED
                                                            Roku Smart TV HDR</a>
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
                                                                class="font-md-bold color-brand-3 price-main">$2900</strong><span
                                                                class="color-gray-500 font-sm price-line">$3200</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                    <div class="image-box"><a href="{{ route('buyer.detailProduct') }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage2/airpod.png') }}"
                                                                alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                            href="{{ route('buyer.detailProduct') }}">HP 11.6&quot; Chromebook,
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
                                                                class="font-md-bold color-brand-3 price-main">$160</strong><span
                                                                class="color-gray-500 font-sm price-line">$168</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                    <div class="image-box"><a href="{{ route('buyer.detailProduct') }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage2/cat-img-7.png') }}"
                                                                alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                            href="{{ route('buyer.detailProduct') }}">LG 65&quot; Class 4K UHD
                                                            Smart TV OLED A1 Series</a>
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
                                                                class="font-md-bold color-brand-3 price-main">$325</strong><span
                                                                class="color-gray-500 font-sm price-line">$392</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                    <div class="image-box"><a href="{{ route('buyer.detailProduct') }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage2/cat-img-8.png') }}"
                                                                alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                            href="{{ route('buyer.detailProduct') }}">Lenovo Legion 5i 15.6&quot;
                                                            Laptop, Intel Core i5</a>
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
                                                                class="font-md-bold color-brand-3 price-main">$150</strong><span
                                                                class="color-gray-500 font-sm price-line">$187</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                            href="{{ route('buyer.detailProduct') }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage2/cat-img-1.png') }}"
                                                                alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                            href="{{ route('buyer.detailProduct') }}">SAMSUNG Galaxy Tab A7 Lite,
                                                            8.7&quot; Tablet 32GB</a>
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
                                                                class="font-md-bold color-brand-3 price-main">$2900</strong><span
                                                                class="color-gray-500 font-sm price-line">$3200</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                    <div class="image-box"><a href="{{ route('buyer.detailProduct') }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage2/cat-img-2.png') }}"
                                                                alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                            href="{{ route('buyer.detailProduct') }}">Apple AirPods Pro with
                                                            MagSafe Charging</a>
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
                                                                class="font-md-bold color-brand-3 price-main">$160</strong><span
                                                                class="color-gray-500 font-sm price-line">$168</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                    <div class="image-box"><a href="{{ route('buyer.detailProduct') }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage2/cat-img-3.png') }}"
                                                                alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                            href="{{ route('buyer.detailProduct') }}">Razer Power Up Gaming Bundle
                                                            V2 - Cynosa</a>
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
                                                                class="font-md-bold color-brand-3 price-main">$325</strong><span
                                                                class="color-gray-500 font-sm price-line">$392</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="swiper-button-next swiper-button-next-style-2 swiper-button-next-bestseller">
                                    </div>
                                    <div
                                        class="swiper-button-prev swiper-button-prev-style-2 swiper-button-prev-bestseller">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-slider-item">
                            <div class="head pb-15 border-brand-2">
                                <h5 class="color-gray-900">Label Produk</h5>
                            </div>
                            <div class="content-slider mb-50"><a class="btn btn-border mr-5"
                                    href="{{ route('buyer.allGridProduct') }}">Games</a><a class="btn btn-border mr-5"
                                    href="{{ route('buyer.allGridProduct') }}">Electronics</a><a
                                    class="btn btn-border mr-5" href="{{ route('buyer.allGridProduct') }}">Video</a><a
                                    class="btn btn-border mr-5"
                                    href="{{ route('buyer.allGridProduct') }}">Cellphone</a><a
                                    class="btn btn-border mr-5" href="{{ route('buyer.allGridProduct') }}">Indoor</a><a
                                    class="btn btn-border mr-5" href="{{ route('buyer.allGridProduct') }}">VGA
                                    Card</a><a class="btn btn-border mr-5"
                                    href="{{ route('buyer.allGridProduct') }}">USB</a><a class="btn btn-border mr-5"
                                    href="{{ route('buyer.allGridProduct') }}">Lightning</a><a
                                    class="btn btn-border mr-5" href="{{ route('buyer.allGridProduct') }}">Camera</a><a
                                    class="btn btn-border" href="{{ route('buyer.allGridProduct') }}">Window</a><a
                                    class="btn btn-border mr-5" href="{{ route('buyer.allGridProduct') }}">Air
                                    Vent</a><a class="btn btn-border mr-5"
                                    href="{{ route('buyer.allGridProduct') }}">Bedroom</a><a
                                    class="btn btn-border mr-5"
                                    href="{{ route('buyer.allGridProduct') }}">Laptop</a><a
                                    class="btn btn-border mr-5"
                                    href="{{ route('buyer.allGridProduct') }}">Dashboard</a><a
                                    class="btn btn-border mr-5"
                                    href="{{ route('buyer.allGridProduct') }}">Keyboard</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('clients.buyer.layouts.benefit')
        <div class="modal fade" id="ModalFiltersForm" tabindex="-1" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-xl">
                <div class="modal-content apply-job-form">
                    <div class="modal-header">
                        <h5 class="modal-title color-gray-1000 filters-icon">Filter Tingkat Lanjut
                        </h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-30">
                        <div class="row">
                            {{-- <div class="col-w-1">
                                <h6 class="color-gray-900 mb-0">Brands</h6>
                                <ul class="list-checkbox">
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox" checked="checked"><span
                                                class="text-small">Apple</span><span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Samsung</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Baseus</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Remax</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Handtown</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Elecom</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Razer</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Auto Focus</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Nillkin</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Logitech</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">ChromeBook</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div> --}}
                            <div class="col-w-1">
                                <h6 class="color-gray-900 mb-0">Penawaran khusus</h6>
                                <ul class="list-checkbox">
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Di jual</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox" checked="checked"><span class="text-small">Bebas
                                                biaya kirim</span><span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Big deals</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Shop Mall</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                                <h6 class="color-gray-900 mb-0 mt-40">Ready to ship in</h6>
                                <ul class="list-checkbox">
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">1 business day</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox" checked="checked"><span
                                                class="text-small">1&ndash;3 business days</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">in 1 week</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Shipping now</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-w-1">
                                {{-- <h6 class="color-gray-900 mb-0">Ordering options</h6>
                                <ul class="list-checkbox">
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Accepts gift
                                                cards</span><span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Customizable</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox" checked="checked"><span class="text-small">Can be
                                                gift-wrapped</span><span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Installment 0%</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul> --}}
                                <h6 class="color-gray-900 mb-0 mt-40">Rating</h6>
                                <ul class="list-checkbox">
                                    <li class="mb-5"><a href="#"><img
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
                                                class="ml-10 font-xs color-gray-500 d-inline-block align-top">(5
                                                stars)</span></a></li>
                                    <li class="mb-5"><a href="#"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><span
                                                class="ml-10 font-xs color-gray-500 d-inline-block align-top">(4
                                                stars)</span></a></li>
                                    <li class="mb-5"><a href="#"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><span
                                                class="ml-10 font-xs color-gray-500 d-inline-block align-top">(3
                                                stars)</span></a></li>
                                    <li class="mb-5"><a href="#"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><span
                                                class="ml-10 font-xs color-gray-500 d-inline-block align-top">(2
                                                stars)</span></a></li>
                                    <li class="mb-5"><a href="#"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><span
                                                class="ml-10 font-xs color-gray-500 d-inline-block align-top">(1
                                                star)</span></a></li>
                                </ul>
                            </div>
                            {{-- <div class="col-w-2">
                                <h6 class="color-gray-900 mb-0">Material</h6>
                                <ul class="list-checkbox">
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Nylon (8)</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Tempered Glass
                                                (5)</span><span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox" checked="checked"><span class="text-small">Liquid
                                                Silicone Rubber (5)</span><span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Aluminium Alloy
                                                (3)</span><span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                                <h6 class="color-gray-900 mb-20 mt-40">Product tags</h6>
                                <div><a class="btn btn-border mr-5" href="#">Games</a><a
                                        class="btn btn-border mr-5" href="#">Electronics</a><a
                                        class="btn btn-border mr-5" href="#">Video</a><a
                                        class="btn btn-border mr-5" href="#">Cellphone</a><a
                                        class="btn btn-border mr-5" href="#">Indoor</a><a
                                        class="btn btn-border mr-5" href="#">VGA Card</a><a
                                        class="btn btn-border mr-5" href="#">USB</a><a
                                        class="btn btn-border mr-5" href="#">Lightning</a><a
                                        class="btn btn-border mr-5" href="#">Camera</a></div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="modal-footer justify-content-start pl-30"><a class="btn btn-buy w-auto"
                            href="#">Terapkan Filter</a><a class="btn font-sm-bold color-gray-500"
                            href="#">Setel Ulang Filter</a></div>
                </div>
            </div>
        </div>
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
                                            href="{{ route('buyer.detailSeller') }}"> Ecom Tech</a>
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
                                        <p class="font-sm color-gray-900">Color:<span
                                                class="color-brand-2 nameColor">Pink Gold</span></p>
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
                                                <input class="font-xl color-brand-3" type="text"
                                                    value="1"><span class="minus-cart"></span><span
                                                    class="plus-cart"></span>
                                            </div>
                                            <div class="button-buy"><a class="btn btn-cart"
                                                href="{{ route('buyer.cart') }}">Keranjang</a><a class="btn btn-buy"
                                                href="{{ route('buyer.checkout') }}">Beli Sekarang</a></div>


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
