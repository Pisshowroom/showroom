@extends('clients.buyer.master')
@section('title', 'Keranjang')

@section('childs')
    <main class="main">
        <div class="section-box">
            <div class="breadcrumbs-div">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a class="font-xs color-gray-1000" href="{{ route('buyer.home') }}">Beranda</a></li>
                        <li><a class="font-xs color-gray-1000" href="{{ route('buyer.allGridProduct') }}">Produk</a>
                        </li>
                        <li><a class="font-xs color-gray-500" href="{{ route('buyer.cart') }}">Keranjang</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="section-box shop-template">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="box-carts">
                            <div class="head-wishlist">
                                <div class="item-wishlist">
                                    <div class="wishlist-cb">
                                        <input class="cb-layout cb-all" type="checkbox">
                                    </div>
                                    <div class="wishlist-product"><span class="font-md-bold color-brand-3">Produk</span>
                                    </div>
                                    <div class="wishlist-price"><span class="font-md-bold color-brand-3">Harga</span>
                                    </div>
                                    <div class="wishlist-status"><span class="font-md-bold color-brand-3">Kuantitas</span>
                                    </div>
                                    <div class="wishlist-action"><span class="font-md-bold color-brand-3">Subtotal</span>
                                    </div>
                                    <div class="wishlist-remove"><span class="font-md-bold color-brand-3">Hapus</span>
                                    </div>
                                </div>
                            </div>
                            <div class="content-wishlist mb-20">
                                <div class="item-wishlist">
                                    <div class="wishlist-cb">
                                        <input class="cb-layout cb-select" type="checkbox">
                                    </div>
                                    <div class="wishlist-product">
                                        <div class="product-wishlist">
                                            <div class="product-image"><a
                                                    href="{{ route('buyer.detailProduct', ['slug' => 'sd']) }}"><img
                                                        src="{{ asset('ecom/imgs/page/product/img-sub.png') }}"
                                                        alt="Ecom"></a></div>
                                            <div class="product-info"><a
                                                    href="{{ route('buyer.detailProduct', ['slug' => 'sd']) }}">
                                                    <h6 class="color-brand-3">Dell Optiplex 9020 Small Form Business Desktop
                                                        Tower PC</h6>
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
                                                        alt="Ecom"><span class="font-xs color-gray-500"> (65)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wishlist-price">
                                        <h4 class="color-brand-3">$2.51</h4>
                                    </div>
                                    <div class="wishlist-status">
                                        <div class="box-quantity">
                                            <div class="input-quantity">
                                                <input class="font-xl color-brand-3" type="text" value="1"><span
                                                    class="minus-cart"></span><span class="plus-cart"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wishlist-action">
                                        <h4 class="color-brand-3">$2.51</h4>
                                    </div>
                                    <div class="wishlist-remove"><a class="btn btn-delete" href="#"></a></div>
                                </div>
                                <div class="item-wishlist">
                                    <div class="wishlist-cb">
                                        <input class="cb-layout cb-select" type="checkbox">
                                    </div>
                                    <div class="wishlist-product">
                                        <div class="product-wishlist">
                                            <div class="product-image"><a
                                                    href="{{ route('buyer.detailProduct', ['slug' => 'sd']) }}"><img
                                                        src="{{ asset('ecom/imgs/page/product/img-sub2.png') }}"
                                                        alt="Ecom"></a>
                                            </div>
                                            <div class="product-info"><a
                                                    href="{{ route('buyer.detailProduct', ['slug' => 'sd']) }}">
                                                    <h6 class="color-brand-3">HP 24 All-in-One PC, Intel Core i3-1115G4, 4GB
                                                        RAM</h6>
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
                                                        alt="Ecom"><span class="font-xs color-gray-500"> (65)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wishlist-price">
                                        <h4 class="color-brand-3">$1.51</h4>
                                    </div>
                                    <div class="wishlist-status">
                                        <div class="box-quantity">
                                            <div class="input-quantity">
                                                <input class="font-xl color-brand-3" type="text" value="1"><span
                                                    class="minus-cart"></span><span class="plus-cart"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wishlist-action">
                                        <h4 class="color-brand-3">$1.51</h4>
                                    </div>
                                    <div class="wishlist-remove"><a class="btn btn-delete" href="#"></a></div>
                                </div>
                                <div class="item-wishlist">
                                    <div class="wishlist-cb">
                                        <input class="cb-layout cb-select" type="checkbox">
                                    </div>
                                    <div class="wishlist-product">
                                        <div class="product-wishlist">
                                            <div class="product-image"><a
                                                    href="{{ route('buyer.detailProduct', ['slug' => 'sd']) }}"><img
                                                        src="{{ asset('ecom/imgs/page/product/img-sub3.png') }}"
                                                        alt="Ecom"></a>
                                            </div>
                                            <div class="product-info"><a
                                                    href="{{ route('buyer.detailProduct', ['slug' => 'sd']) }}">
                                                    <h6 class="color-brand-3">Gateway 23.8&quot; All-in-one Desktop, Fully
                                                        Adjustable Stand</h6>
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
                                                        alt="Ecom"><span class="font-xs color-gray-500"> (65)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wishlist-price">
                                        <h4 class="color-brand-3">$3.51</h4>
                                    </div>
                                    <div class="wishlist-status">
                                        <div class="box-quantity">
                                            <div class="input-quantity">
                                                <input class="font-xl color-brand-3" type="text" value="1"><span
                                                    class="minus-cart"></span><span class="plus-cart"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wishlist-action">
                                        <h4 class="color-brand-3">$3.51</h4>
                                    </div>
                                    <div class="wishlist-remove"><a class="btn btn-delete" href="#"></a></div>
                                </div>
                            </div>
                            <div class="row mb-40">
                                <div class="col-lg-6 col-md-6 col-sm-6-col-6"><a
                                        class="btn btn-buy w-auto arrow-back mb-10"
                                        href="{{ route('buyer.allGridProduct') }}">Lanjutkan Belanja</a></div>
                                <div class="col-lg-6 col-md-6 col-sm-6-col-6 text-md-end"><a
                                        class="btn btn-buy w-auto update-cart mb-10"
                                        href="{{ route('buyer.cart') }}">Perbarui
                                        Keranjang</a>
                                </div>
                            </div>
                            <div class="row mb-50">
                                <div class="col-lg-6 col-md-6">
                                    <div class="box-cart-left">
                                        <h5 class="font-md-bold mb-10">Hitung Pengiriman</h5><span
                                            class="font-sm-bold mb-5 d-inline-block color-gray-500">Flat rate:</span><span
                                            class="font-sm-bold d-inline-block color-brand-3">5%</span>
                                        <div class="form-group">
                                            <select class="form-control select-style1 color-gray-700">
                                                <option value="1">USA</option>
                                                <option value="1">EURO</option>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 mb-10">
                                                <input class="form-control" placeholder="Stage / Country">
                                            </div>
                                            <div class="col-lg-6 mb-10">
                                                <input class="form-control" placeholder="PostCode / ZIP">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="box-cart-right p-20">
                                        <h5 class="font-md-bold mb-10">Kupon</h5><span
                                            class="font-sm-bold mb-5 d-inline-block color-gray-500">Menggunakan Kode
                                            Promo?</span>
                                        <div class="form-group d-flex">
                                            <input class="form-control mr-15" placeholder="Masukkan Kupon">
                                            <button class="btn btn-buy w-auto">Kirim</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="summary-cart">
                            <div class="border-bottom mb-10">
                                <div class="row">
                                    <div class="col-6"><span class="font-md-bold color-gray-500">Subtotal</span></div>
                                    <div class="col-6 text-end">
                                        <h4> $2.51</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom mb-10">
                                <div class="row">
                                    <div class="col-6"><span class="font-md-bold color-gray-500">Shipping</span></div>
                                    <div class="col-6 text-end">
                                        <h4> Free</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom mb-10">
                                <div class="row">
                                    <div class="col-6"><span class="font-md-bold color-gray-500">Perkiraan untuk</span>
                                    </div>
                                    <div class="col-6 text-end">
                                        <h6>United Kingdom</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-10">
                                <div class="row">
                                    <div class="col-6"><span class="font-md-bold color-gray-500">Total</span></div>
                                    <div class="col-6 text-end">
                                        <h4> $2.51</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="box-button"><a class="btn btn-buy"
                                    href="{{ route('buyer.checkout') }}">Lanjutkan ke
                                    pembayaran</a></div>
                        </div>
                    </div>
                </div>
                <h4 class="color-brand-3">Kamu mungkin juga suka</h4>
                <div class="list-products-5 mt-20 mb-40">
                    <div class="card-grid-style-3">
                        <div class="card-grid-inner">
                            <div class="tools">
                                <a class="btn btn-wishlist btn-tooltip mb-10" href="{{ route('buyer.wishlist') }}"
                                    aria-label="Tambahkan ke Wishlist"></a>
                            </div>
                            <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                    href="{{ route('buyer.detailProduct', ['slug' => 'sd']) }}"><img
                                        src="{{ asset('ecom/imgs/page/homepage1/imgsp3.png') }}" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><a class="font-xs color-gray-500"
                                    href="{{ route('buyer.detailSeller', ['slug' => 'sd']) }}">Hisense</a><br><a
                                    class="color-brand-3 font-sm-bold"
                                    href="{{ route('buyer.detailProduct', ['slug' => 'sd']) }}">Hisense
                                    43&quot; Class 4K UHD LED XClass Smart TV
                                    HDR</a>
                                <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                                <div class="price-info mt-1">
                                    <strong class="font-md-bold color-brand-3 price-main">$2856.3</strong><span
                                        class="color-gray-500 price-line">$3225.6</span>
                                </div>
                                <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                        href="{{ route('buyer.cart') }}">Keranjang</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="color-brand-3">Barang yang baru-baru ini dilihat</h4>
                <div class="row mt-40">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card-grid-style-2 card-grid-none-border hover-up">
                            <div class="image-box"><a href="{{ route('buyer.detailProduct', ['slug' => 'sd']) }}"><img
                                        src="{{ asset('ecom/imgs/page/homepage1/imgsp1.png') }}" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><span class="font-xs color-gray-500">HP</span><br><a
                                    class="color-brand-3 font-xs-bold"
                                    href="{{ route('buyer.detailProduct', ['slug' => 'sd']) }}">HP
                                    DeskJet 2755e
                                    Wireless Color All-in-One Printer</a>
                                <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                                <div class="price-info mt-1">
                                    <strong class="font-md-bold color-brand-3 price-main">$2556.3</strong><span
                                        class="color-gray-500 price-line">$3225.6</span>
                                </div>
                            </div>
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
    </main>
@endsection
@push('importjs')
@endpush
