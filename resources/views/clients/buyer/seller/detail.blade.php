@extends('clients.buyer.master')
@section('title', 'Detail Penjual')

@section('childs')
    <main class="main">
        <div class="section-box">
            <div class="breadcrumbs-div">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a class="font-xs color-gray-1000" href="{{ route('buyer.home') }}">Beranda</a></li>
                        <li><a class="font-xs color-gray-500" href="{{ route('buyer.allSeller') }}">Semua Penjual</a></li>
                        <li><a class="font-xs color-gray-500"
                                href="{{ route('buyer.detailSeller', ['slug' => $seller->seller_slug]) }}">Detail
                                Penjual</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-box shop-template mt-30">
            <div class="container">
                <div class="d-flex box-banner-vendor col-12">
                    <div class="vendor-left">
                        <div class="banner-vendor"><img src="{{ asset('ecom/imgs/page/vendor/featured.png') }}"
                                alt="Ecom">
                            <div class="d-flex box-info-vendor">
                                <div class="avarta"><img class="mb-5"
                                        src="{{ asset('ecom/imgs/page/vendor/fasfox.png') }}" alt="Ecom"><a
                                        class="btn btn-buy font-xs"
                                        href="{{ route('buyer.allGridProduct') }}">{{ $seller->products_count ? moneyFormat($seller->products_count) ?? 0 : 0 }}
                                        Produk</a></div>
                                <div class="info-vendor">
                                    <h4 class="mb-5">Fasfox Coporation</h4><span
                                        class="font-xs color-gray-500 mr-20">sejak 2012</span>
                                    <div class="rating d-inline-block"><img
                                            src="{{ asset('ecom/imgs/template/icons/star.svg') }}" alt="Ecom"><span
                                            class="font-xs color-gray-500"> (65)</span></div>
                                </div>
                                <div class="vendor-contact">
                                    <div class="row">
                                        <div class="col-xl-7 col-lg-12">
                                            <div class="d-inline-block font-md color-gray-500 location mb-10">5171 W
                                                Campbell Ave undefined Kent, Utah 53127 United States</div>
                                        </div>
                                        <div class="col-xl-5 col-lg-12">
                                            <div class="d-inline-block font-md color-gray-500 phone">(+91) -
                                                540-025-124553<br>(+91) - 540-025-235688</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vendor-right">
                        <div class="box-featured-product">
                            <div class="item-featured">
                                <div class="featured-icon"><img src="{{ asset('ecom/imgs/page/product/delivery.svg') }}"
                                        alt="Ecom"></div>
                                <div class="featured-info"><span class="font-sm-bold color-gray-1000">Pengiriman
                                        gratis</span>
                                    <p class="font-sm color-gray-500 font-medium">Semua pesanan di atas 5 Juta</p>
                                </div>
                            </div>
                            <div class="item-featured">
                                <div class="featured-icon"><img src="{{ asset('ecom/imgs/page/product/support.svg') }}"
                                        alt="Ecom"></div>
                                <div class="featured-info"><span class="font-sm-bold color-gray-1000">Bantuan 24/7</span>
                                    <p class="font-sm color-gray-500 font-medium">Berbelanja dengan ahlinya</p>
                                </div>
                            </div>
                            <div class="item-featured">
                                <div class="featured-icon"><img src="{{ asset('ecom/imgs/template/voucher.svg') }}"
                                        alt="Ecom"></div>
                                <div class="featured-info"><span class="font-sm-bold color-gray-1000">Kupon hadiah</span>
                                    <p class="font-sm color-gray-500 font-medium">Ajak teman</p>
                                </div>
                            </div>
                            <div class="item-featured">
                                <div class="featured-icon"><img src="{{ asset('ecom/imgs/template/secure.svg') }}"
                                        alt="Ecom"></div>
                                <div class="featured-info"><span class="font-sm-bold color-gray-1000">Dana Kembali</span>
                                    <p class="font-sm color-gray-500 font-medium">100% Terlindungi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-9 order-first order-lg-last">
                        <div class="box-filters mt-0 pb-5 border-bottom">
                            <div class="row">
                                <div class="col-xl-2 col-lg-3 mb-10 text-lg-start text-center"><a
                                        class="btn btn-filter font-sm color-brand-3 font-medium" href="#ModalFiltersForm"
                                        data-bs-toggle="modal">Filter</a></div>
                                <div class="col-xl-10 col-lg-9 mb-10 text-lg-end text-center"><span
                                        class="font-sm color-gray-900 font-medium border-1-right span">Menampilkan
                                        {{ count($products) > 0 ? count($products) : 0 }} hasil</span>
                                    <div class="d-inline-block"><span
                                            class="font-sm color-gray-500 font-medium">Berdasarkan:</span>
                                        <div class="dropdown dropdown-sort">
                                            <button class="btn dropdown-toggle font-sm color-gray-900 font-medium"
                                                id="dropdownSort" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">Produk Terbaru</button>
                                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort"
                                                style="margin: 0px;">
                                                <li><a class="dropdown-item active" href="#">Produk Terbaru</a></li>
                                                <li><a class="dropdown-item" href="#">Produk Terlama</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    {{-- <div class="d-inline-block"><span class="font-sm color-gray-500 font-medium">Show</span>
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
                                </div>
                            </div>
                        </div>
                        <div class="row mt-20">
                            @if (count($products) > 0)
                                @foreach ($products as $prd)
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                        @include('clients.buyer.components.list_product1')
                                    </div>
                                @endforeach
                            @else
                                <div class="col-lg-12 text-center mt-40">
                                    <h4>Tidak ada data Produk saat ini</h4>
                                </div>
                            @endif
                        </div>
                        @if (count($products) > 0)
                            {{ $products->onEachSide(3)->links() }}
                        @endif
                        {{-- <nav>
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
                        </nav> --}}
                    </div>
                    <div class="col-lg-3 order-last order-lg-first">
                        <div class="sidebar-border mb-0">
                            <div class="sidebar-head">
                                <h6 class="color-gray-900">Kategori Produk</h6>
                            </div>
                            <div class="sidebar-content">
                                @if (count($data['categories_product']) > 0)
                                    <ul class="list-nav-arrow">
                                        @foreach ($data['categories_product'] as $ct)
                                            <li class="{{ request()->input('category_id') == $ct->id ? 'active' : '' }}">
                                                <a class="{{ request()->input('category_id') == $ct->id ? 'active' : '' }}"
                                                    href="{{ route('buyer.allGridProduct', ['category_id' => $ct->id]) }}">{{ $ct->name ?? '' }}<span
                                                        class="number">{{ $ct->products_count }}</span></a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <div class="col-lg-12 text-center">
                                        <p>Tidak ada kategori</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                        {{-- <div class="sidebar-border mb-40">
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
                                <h6 class="color-gray-900 mt-20 mb-10">Brands</h6>
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
                                    href="#ModalFiltersForm" data-bs-toggle="modal">More Fillters</a>
                            </div>
                        </div> --}}
                        {{-- <div class="box-slider-item mb-30">
                            <div class="head pb-15 border-brand-2">
                                <h5 class="color-gray-900">Best seller</h5>
                            </div>
                            <div class="content-slider">
                                <div class="box-swiper slide-shop">
                                    <div class="swiper-container swiper-best-seller">
                                        <div class="swiper-wrapper pt-5">
                                            <div class="swiper-slide">
                                                <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                            href="{{ route('buyer.detailProduct',['slug'=>'sd']) }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage2/camera.png') }}"
                                                                alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                            href="{{ route('buyer.detailProduct',['slug'=>'sd']) }}">HP Slim Desktop, Intel
                                                            Celeron J4025, 4GB RAM</a>
                                                        <div class="rating"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><span class="font-xs color-gray-500">
                                                                (65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-md-bold color-brand-3 price-main">$150</strong><span
                                                                class="color-gray-500 font-sm price-line">$187</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                    <div class="image-box"><a href="{{ route('buyer.detailProduct',['slug'=>'sd']) }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage2/cat-img-8.png') }}"
                                                                alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                            href="{{ route('buyer.detailProduct',['slug'=>'sd']) }}">Lenovo Legion 5i 15.6&quot;
                                                            Laptop, Intel Core i5</a>
                                                        <div class="rating"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="Ecom"><span class="font-xs color-gray-500">
                                                                (65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-md-bold color-brand-3 price-main">$150</strong><span
                                                                class="color-gray-500 font-sm price-line">$187</span>
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
                        </div> --}}
                        {{-- <div class="box-slider-item">
                            <div class="head pb-15 border-brand-2">
                                <h5 class="color-gray-900">Label Produk</h5>
                            </div>
                            <div class="content-slider mb-50"><a class="btn btn-border mr-5"
                                    href="{{ route('buyer.allGridProduct') }}">Games</a><a class="btn btn-border mr-5"
                                    href="{{ route('buyer.allGridProduct') }}">Electronics</a><a
                                    class="btn btn-border mr-5" href="{{ route('buyer.allGridProduct') }}">Video</a><a
                                    class="btn btn-border mr-5"
                                    href="{{ route('buyer.allGridProduct') }}">Cellphone</a><a
                                    class="btn btn-border mr-5"
                                    href="{{ route('buyer.allGridProduct') }}">Indoor</a><a
                                    class="btn btn-border mr-5" href="{{ route('buyer.allGridProduct') }}">VGA
                                    Card</a><a class="btn btn-border mr-5"
                                    href="{{ route('buyer.allGridProduct') }}">USB</a><a class="btn btn-border mr-5"
                                    href="{{ route('buyer.allGridProduct') }}">Lightning</a><a
                                    class="btn btn-border mr-5"
                                    href="{{ route('buyer.allGridProduct') }}">Camera</a><a class="btn btn-border"
                                    href="{{ route('buyer.allGridProduct') }}">Window</a><a
                                    class="btn btn-border mr-5" href="{{ route('buyer.allGridProduct') }}">Air
                                    Vent</a><a class="btn btn-border mr-5"
                                    href="{{ route('buyer.allGridProduct') }}">Bedroom</a><a
                                    class="btn btn-border mr-5"
                                    href="{{ route('buyer.allGridProduct') }}">Laptop</a><a
                                    class="btn btn-border mr-5"
                                    href="{{ route('buyer.allGridProduct') }}">Dashboard</a><a
                                    class="btn btn-border mr-5"
                                    href="{{ route('buyer.allGridProduct') }}">Keyboard</a></div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
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
                                <h6 class="color-gray-900 mb-0">Harga</h6>
                                <ul class="list-checkbox">
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox" name="price" value="tertinggi"
                                                {{ request()->get('price') && request()->get('price') == 'tertinggi' ? 'checked' : '' }}><span
                                                class="text-small">Harga Tertinggi</span>
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox" name="price" value="terendah"
                                                {{ request()->get('price') && request()->get('price') == 'terendah' ? 'checked' : '' }}><span
                                                class="text-small">Harga
                                                Terendah</span>
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-w-1">
                                <h6 class="color-gray-900 mb-0">Rating</h6>
                                <ul class="list-checkbox">
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox" name="rating" value="tertinggi"
                                                {{ request()->get('rating') && request()->get('rating') == 'tertinggi' ? 'checked' : '' }}><span
                                                class="text-small">Rating Tertinggi</span>
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox" name="rating" value="terendah"
                                                {{ request()->get('rating') && request()->get('rating') == 'terendah' ? 'checked' : '' }}><span
                                                class="text-small">Rating
                                                Terendah</span>
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-w-1">
                                <h6 class="color-gray-900 mb-0">Berdasarkan</h6>
                                <ul class="list-checkbox">
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox" name="orderBy" value="desc"
                                                {{ !request()->get('orderBy') || (request()->get('orderBy') && request()->get('orderBy') == 'desc') ? 'checked' : '' }}><span
                                                class="text-small">Produk Terbaru</span>
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox" name="orderBy" value="asc"
                                                {{ request()->get('orderBy') && request()->get('orderBy') == 'asc' ? 'checked' : '' }}><span
                                                class="text-small">Produk Terlama</span>
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
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
    </main>
@endsection
@push('importjs')
@endpush
