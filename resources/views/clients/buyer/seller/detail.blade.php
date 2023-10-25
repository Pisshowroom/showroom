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
                        <li><a class="font-xs color-gray-500" href="{{ route('buyer.detailSeller') }}">Detail Penjual</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="section-box shop-template mt-30">
            <div class="container">
                <div class="d-flex box-banner-vendor">
                    <div class="vendor-left">
                        <div class="banner-vendor"><img src="{{ asset('ecom/imgs/page/vendor/featured.png') }}"
                                alt="Ecom">
                            <div class="d-flex box-info-vendor">
                                <div class="avarta"><img class="mb-5"
                                        src="{{ asset('ecom/imgs/page/vendor/fasfox.png') }}" alt="Ecom"><a
                                        class="btn btn-buy font-xs" href="{{ route('buyer.allGridProduct') }}">360
                                        Produk</a></div>
                                <div class="info-vendor">
                                    <h4 class="mb-5">Fasfox Coporation</h4><span
                                        class="font-xs color-gray-500 mr-20">sejak 2012</span>
                                    <div class="rating d-inline-block"><img
                                            src="{{ asset('ecom/imgs/template/icons/star.svg') }}" alt="Ecom"><img
                                            src="{{ asset('ecom/imgs/template/icons/star.svg') }}" alt="Ecom"><img
                                            src="{{ asset('ecom/imgs/template/icons/star.svg') }}" alt="Ecom"><img
                                            src="{{ asset('ecom/imgs/template/icons/star.svg') }}" alt="Ecom"><img
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
                                <div class="featured-info"><span class="font-sm-bold color-gray-1000">Free Delivery</span>
                                    <p class="font-sm color-gray-500 font-medium">From all orders over $10</p>
                                </div>
                            </div>
                            <div class="item-featured">
                                <div class="featured-icon"><img src="{{ asset('ecom/imgs/page/product/support.svg') }}"
                                        alt="Ecom"></div>
                                <div class="featured-info"><span class="font-sm-bold color-gray-1000">Support 24/7</span>
                                    <p class="font-sm color-gray-500 font-medium">Shop with an expert</p>
                                </div>
                            </div>
                            <div class="item-featured">
                                <div class="featured-icon"><img src="{{ asset('ecom/imgs/page/product/return.svg') }}"
                                        alt="Ecom"></div>
                                <div class="featured-info"><span class="font-sm-bold color-gray-1000">Return & Refund</span>
                                    <p class="font-sm color-gray-500 font-medium">Free return over $200</p>
                                </div>
                            </div>
                            <div class="item-featured">
                                <div class="featured-icon"><img src="{{ asset('ecom/imgs/page/product/payment.svg') }}"
                                        alt="Ecom"></div>
                                <div class="featured-info"><span class="font-sm-bold color-gray-1000">Secure payment</span>
                                    <p class="font-sm color-gray-500 font-medium">100% Protected</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-bottom mb-20 border-vendor"></div>
                <div class="row">
                    <div class="col-lg-12">
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
                                                <li><a class="dropdown-item active" href="#">Produk Terbaru</a></li>
                                                <li><a class="dropdown-item" href="#">Produk terlama</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-inline-block"><span
                                            class="font-sm color-gray-500 font-medium">Munculkan</span>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-products-5 mt-20">
                            <div class="card-grid-style-3">
                                <div class="card-grid-inner">
                                    <div class="tools">
                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                            href="{{ route('buyer.wishlist') }}" aria-label="Tambahkan ke Wishlist"></a>
                                        {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                    </div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                            href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp3.png') }}"
                                                alt="Ecom"></a></div>
                                    <div class="info-right"><a class="font-xs color-gray-500"
                                            href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                                            class="color-brand-3 font-sm-bold"
                                            href="{{ route('buyer.detailProduct') }}">Samsung
                                            36&quot; French door 28 cu. ft. Smart Energy Star </a>
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
                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                        <ul class="list-features">
                                            <li>27-inch (diagonal) Retina 5K display</li>
                                            <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                            <li>AMD Radeon Pro 5300 graphics</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-grid-style-3">
                                <div class="card-grid-inner">
                                    <div class="tools">
                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                            href="{{ route('buyer.wishlist') }}" aria-label="Tambahkan ke Wishlist"></a>
                                        {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                    </div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                            href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp4.png') }}"
                                                alt="Ecom"></a></div>
                                    <div class="info-right"><a class="font-xs color-gray-500"
                                            href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                                            class="color-brand-3 font-sm-bold"
                                            href="{{ route('buyer.detailProduct') }}">2022
                                            Apple iMac with Retina 5K Display 8GB RAM</a>
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
                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                        <ul class="list-features">
                                            <li>27-inch (diagonal) Retina 5K display</li>
                                            <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                            <li>AMD Radeon Pro 5300 graphics</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-grid-style-3">
                                <div class="card-grid-inner">
                                    <div class="tools">
                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                            href="{{ route('buyer.wishlist') }}" aria-label="Tambahkan ke Wishlist"></a>
                                        {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                    </div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                            href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp5.png') }}"
                                                alt="Ecom"></a></div>
                                    <div class="info-right"><a class="font-xs color-gray-500"
                                            href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                                            class="color-brand-3 font-sm-bold"
                                            href="{{ route('buyer.detailProduct') }}">Samsung
                                            36&quot; French door 28 cu. ft. Smart Energy Star </a>
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
                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                        <ul class="list-features">
                                            <li>27-inch (diagonal) Retina 5K display</li>
                                            <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                            <li>AMD Radeon Pro 5300 graphics</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-grid-style-3">
                                <div class="card-grid-inner">
                                    <div class="tools">
                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                            href="{{ route('buyer.wishlist') }}" aria-label="Tambahkan ke Wishlist"></a>
                                        {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                    </div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                            href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp6.png') }}"
                                                alt="Ecom"></a></div>
                                    <div class="info-right"><a class="font-xs color-gray-500"
                                            href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                                            class="color-brand-3 font-sm-bold"
                                            href="{{ route('buyer.detailProduct') }}">2022
                                            Apple iMac with Retina 5K Display 8GB RAM</a>
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
                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                        <ul class="list-features">
                                            <li>27-inch (diagonal) Retina 5K display</li>
                                            <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                            <li>AMD Radeon Pro 5300 graphics</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-grid-style-3">
                                <div class="card-grid-inner">
                                    <div class="tools">
                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                            href="{{ route('buyer.wishlist') }}" aria-label="Tambahkan ke Wishlist"></a>
                                        {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                    </div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                            href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp7.png') }}"
                                                alt="Ecom"></a></div>
                                    <div class="info-right"><a class="font-xs color-gray-500"
                                            href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                                            class="color-brand-3 font-sm-bold"
                                            href="{{ route('buyer.detailProduct') }}">Samsung
                                            36&quot; French door 28 cu. ft. Smart Energy Star </a>
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
                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                        <ul class="list-features">
                                            <li>27-inch (diagonal) Retina 5K display</li>
                                            <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                            <li>AMD Radeon Pro 5300 graphics</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-grid-style-3">
                                <div class="card-grid-inner">
                                    <div class="tools">
                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                            href="{{ route('buyer.wishlist') }}" aria-label="Tambahkan ke Wishlist"></a>
                                        {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                    </div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                            href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp3.png') }}"
                                                alt="Ecom"></a></div>
                                    <div class="info-right"><a class="font-xs color-gray-500"
                                            href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                                            class="color-brand-3 font-sm-bold"
                                            href="{{ route('buyer.detailProduct') }}">Samsung
                                            36&quot; French door 28 cu. ft. Smart Energy Star </a>
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
                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                        <ul class="list-features">
                                            <li>27-inch (diagonal) Retina 5K display</li>
                                            <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                            <li>AMD Radeon Pro 5300 graphics</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-grid-style-3">
                                <div class="card-grid-inner">
                                    <div class="tools">
                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                            href="{{ route('buyer.wishlist') }}" aria-label="Tambahkan ke Wishlist"></a>
                                        {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                    </div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                            href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp4.png') }}"
                                                alt="Ecom"></a></div>
                                    <div class="info-right"><a class="font-xs color-gray-500"
                                            href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                                            class="color-brand-3 font-sm-bold"
                                            href="{{ route('buyer.detailProduct') }}">2022
                                            Apple iMac with Retina 5K Display 8GB RAM</a>
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
                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                        <ul class="list-features">
                                            <li>27-inch (diagonal) Retina 5K display</li>
                                            <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                            <li>AMD Radeon Pro 5300 graphics</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-grid-style-3">
                                <div class="card-grid-inner">
                                    <div class="tools">
                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                            href="{{ route('buyer.wishlist') }}" aria-label="Tambahkan ke Wishlist"></a>
                                        {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                    </div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                            href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp5.png') }}"
                                                alt="Ecom"></a></div>
                                    <div class="info-right"><a class="font-xs color-gray-500"
                                            href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                                            class="color-brand-3 font-sm-bold"
                                            href="{{ route('buyer.detailProduct') }}">Samsung
                                            36&quot; French door 28 cu. ft. Smart Energy Star </a>
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
                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                        <ul class="list-features">
                                            <li>27-inch (diagonal) Retina 5K display</li>
                                            <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                            <li>AMD Radeon Pro 5300 graphics</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-grid-style-3">
                                <div class="card-grid-inner">
                                    <div class="tools">
                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                            href="{{ route('buyer.wishlist') }}" aria-label="Tambahkan ke Wishlist"></a>
                                        {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                    </div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                            href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp6.png') }}"
                                                alt="Ecom"></a></div>
                                    <div class="info-right"><a class="font-xs color-gray-500"
                                            href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                                            class="color-brand-3 font-sm-bold"
                                            href="{{ route('buyer.detailProduct') }}">2022
                                            Apple iMac with Retina 5K Display 8GB RAM</a>
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
                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                        <ul class="list-features">
                                            <li>27-inch (diagonal) Retina 5K display</li>
                                            <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                            <li>AMD Radeon Pro 5300 graphics</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-grid-style-3">
                                <div class="card-grid-inner">
                                    <div class="tools">
                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                            href="{{ route('buyer.wishlist') }}" aria-label="Tambahkan ke Wishlist"></a>
                                        {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                    </div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                            href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp7.png') }}"
                                                alt="Ecom"></a></div>
                                    <div class="info-right"><a class="font-xs color-gray-500"
                                            href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                                            class="color-brand-3 font-sm-bold"
                                            href="{{ route('buyer.detailProduct') }}">Samsung
                                            36&quot; French door 28 cu. ft. Smart Energy Star </a>
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
                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                        <ul class="list-features">
                                            <li>27-inch (diagonal) Retina 5K display</li>
                                            <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                            <li>AMD Radeon Pro 5300 graphics</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-grid-style-3">
                                <div class="card-grid-inner">
                                    <div class="tools">
                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                            href="{{ route('buyer.wishlist') }}" aria-label="Tambahkan ke Wishlist"></a>
                                        {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                    </div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                            href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp3.png') }}"
                                                alt="Ecom"></a></div>
                                    <div class="info-right"><a class="font-xs color-gray-500"
                                            href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                                            class="color-brand-3 font-sm-bold"
                                            href="{{ route('buyer.detailProduct') }}">Samsung
                                            36&quot; French door 28 cu. ft. Smart Energy Star </a>
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
                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                        <ul class="list-features">
                                            <li>27-inch (diagonal) Retina 5K display</li>
                                            <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                            <li>AMD Radeon Pro 5300 graphics</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-grid-style-3">
                                <div class="card-grid-inner">
                                    <div class="tools">
                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                            href="{{ route('buyer.wishlist') }}" aria-label="Tambahkan ke Wishlist"></a>
                                        {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                    </div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                            href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp4.png') }}"
                                                alt="Ecom"></a></div>
                                    <div class="info-right"><a class="font-xs color-gray-500"
                                            href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                                            class="color-brand-3 font-sm-bold"
                                            href="{{ route('buyer.detailProduct') }}">2022
                                            Apple iMac with Retina 5K Display 8GB RAM</a>
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
                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                        <ul class="list-features">
                                            <li>27-inch (diagonal) Retina 5K display</li>
                                            <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                            <li>AMD Radeon Pro 5300 graphics</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-grid-style-3">
                                <div class="card-grid-inner">
                                    <div class="tools">
                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                            href="{{ route('buyer.wishlist') }}" aria-label="Tambahkan ke Wishlist"></a>
                                        {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                    </div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                            href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp5.png') }}"
                                                alt="Ecom"></a></div>
                                    <div class="info-right"><a class="font-xs color-gray-500"
                                            href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                                            class="color-brand-3 font-sm-bold"
                                            href="{{ route('buyer.detailProduct') }}">Samsung
                                            36&quot; French door 28 cu. ft. Smart Energy Star </a>
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
                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                        <ul class="list-features">
                                            <li>27-inch (diagonal) Retina 5K display</li>
                                            <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                            <li>AMD Radeon Pro 5300 graphics</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-grid-style-3">
                                <div class="card-grid-inner">
                                    <div class="tools">
                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                            href="{{ route('buyer.wishlist') }}" aria-label="Tambahkan ke Wishlist"></a>
                                        {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                    </div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                            href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp6.png') }}"
                                                alt="Ecom"></a></div>
                                    <div class="info-right"><a class="font-xs color-gray-500"
                                            href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                                            class="color-brand-3 font-sm-bold"
                                            href="{{ route('buyer.detailProduct') }}">2022
                                            Apple iMac with Retina 5K Display 8GB RAM</a>
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
                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                        <ul class="list-features">
                                            <li>27-inch (diagonal) Retina 5K display</li>
                                            <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                            <li>AMD Radeon Pro 5300 graphics</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-grid-style-3">
                                <div class="card-grid-inner">
                                    <div class="tools">
                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                            href="{{ route('buyer.wishlist') }}" aria-label="Tambahkan ke Wishlist"></a>
                                        {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                    </div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                            href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp7.png') }}"
                                                alt="Ecom"></a></div>
                                    <div class="info-right"><a class="font-xs color-gray-500"
                                            href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                                            class="color-brand-3 font-sm-bold"
                                            href="{{ route('buyer.detailProduct') }}">Samsung
                                            36&quot; French door 28 cu. ft. Smart Energy Star </a>
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
                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                        <ul class="list-features">
                                            <li>27-inch (diagonal) Retina 5K display</li>
                                            <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                            <li>AMD Radeon Pro 5300 graphics</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-grid-style-3">
                                <div class="card-grid-inner">
                                    <div class="tools">
                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                            href="{{ route('buyer.wishlist') }}" aria-label="Tambahkan ke Wishlist"></a>
                                        {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                    </div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                            href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp3.png') }}"
                                                alt="Ecom"></a></div>
                                    <div class="info-right"><a class="font-xs color-gray-500"
                                            href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                                            class="color-brand-3 font-sm-bold"
                                            href="{{ route('buyer.detailProduct') }}">Samsung
                                            36&quot; French door 28 cu. ft. Smart Energy Star </a>
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
                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                        <ul class="list-features">
                                            <li>27-inch (diagonal) Retina 5K display</li>
                                            <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                            <li>AMD Radeon Pro 5300 graphics</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-grid-style-3">
                                <div class="card-grid-inner">
                                    <div class="tools">
                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                            href="{{ route('buyer.wishlist') }}" aria-label="Tambahkan ke Wishlist"></a>
                                        {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                    </div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                            href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp4.png') }}"
                                                alt="Ecom"></a></div>
                                    <div class="info-right"><a class="font-xs color-gray-500"
                                            href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                                            class="color-brand-3 font-sm-bold"
                                            href="{{ route('buyer.detailProduct') }}">2022
                                            Apple iMac with Retina 5K Display 8GB RAM</a>
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
                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                        <ul class="list-features">
                                            <li>27-inch (diagonal) Retina 5K display</li>
                                            <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                            <li>AMD Radeon Pro 5300 graphics</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-grid-style-3">
                                <div class="card-grid-inner">
                                    <div class="tools">
                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                            href="{{ route('buyer.wishlist') }}" aria-label="Tambahkan ke Wishlist"></a>
                                        {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                    </div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                            href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp5.png') }}"
                                                alt="Ecom"></a></div>
                                    <div class="info-right"><a class="font-xs color-gray-500"
                                            href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                                            class="color-brand-3 font-sm-bold"
                                            href="{{ route('buyer.detailProduct') }}">Samsung
                                            36&quot; French door 28 cu. ft. Smart Energy Star </a>
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
                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                        <ul class="list-features">
                                            <li>27-inch (diagonal) Retina 5K display</li>
                                            <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                            <li>AMD Radeon Pro 5300 graphics</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-grid-style-3">
                                <div class="card-grid-inner">
                                    <div class="tools">
                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                            href="{{ route('buyer.wishlist') }}" aria-label="Tambahkan ke Wishlist"></a>
                                        {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                    </div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                            href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp6.png') }}"
                                                alt="Ecom"></a></div>
                                    <div class="info-right"><a class="font-xs color-gray-500"
                                            href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                                            class="color-brand-3 font-sm-bold"
                                            href="{{ route('buyer.detailProduct') }}">2022
                                            Apple iMac with Retina 5K Display 8GB RAM</a>
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
                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                        <ul class="list-features">
                                            <li>27-inch (diagonal) Retina 5K display</li>
                                            <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                            <li>AMD Radeon Pro 5300 graphics</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-grid-style-3">
                                <div class="card-grid-inner">
                                    <div class="tools">
                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                            aria-label="Trend" data-bs-placement="left"></a> --}}
                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                            href="{{ route('buyer.wishlist') }}" aria-label="Tambahkan ke Wishlist"></a>
                                        {{--
                                            <a
                                            class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                            data-bs-toggle="modal"></a> --}}
                                    </div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                            href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp7.png') }}"
                                                alt="Ecom"></a></div>
                                    <div class="info-right"><a class="font-xs color-gray-500"
                                            href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                                            class="color-brand-3 font-sm-bold"
                                            href="{{ route('buyer.detailProduct') }}">Samsung
                                            36&quot; French door 28 cu. ft. Smart Energy Star </a>
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
                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                href="{{ route('buyer.cart') }}">Add To Cart</a></div>
                                        <ul class="list-features">
                                            <li>27-inch (diagonal) Retina 5K display</li>
                                            <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                            <li>AMD Radeon Pro 5300 graphics</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-20">
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
                    </div>
                </div>
            </div>
        </section>
        @include('clients.buyer.layouts.benefit')
        @include('clients.buyer.layouts.subscribe')

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
                                            <input type="checkbox" checked="checked"><span class="text-small">1&ndash;3
                                                business days</span><span class="checkmark"></span>
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
                                        <p class="font-sm mb-10">Quantity</p>
                                        <div class="box-quantity">
                                            <div class="input-quantity">
                                                <input class="font-xl color-brand-3" type="text"
                                                    value="1"><span class="minus-cart"></span><span
                                                    class="plus-cart"></span>
                                            </div>
                                            <div class="button-buy"><a class="btn btn-cart"
                                                    href="{{ route('buyer.cart') }}">Keranjang</a><a
                                                    class="btn btn-buy" href="{{ route('buyer.checkout') }}">Beli
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
