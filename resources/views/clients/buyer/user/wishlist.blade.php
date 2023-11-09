@extends('clients.buyer.master')
@section('title', 'Wishlist')

@section('childs')
    <main class="main">
        <div class="section-box">
            <div class="breadcrumbs-div">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a class="font-xs color-gray-1000" href="{{ route('buyer.home') }}">Beranda</a></li>
                        <li><a class="font-xs color-gray-1000" href="{{ route('buyer.allGridProduct') }}">Produk</a>
                        </li>
                        <li><a class="font-xs color-gray-500" href="{{ route('buyer.wishlist') }}">Wishlist</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="section-box shop-template">
            <div class="container">
                <div class="box-wishlist">
                    <div class="head-wishlist">
                        <div class="item-wishlist">
                            <div class="wishlist-product"><span class="font-md-bold color-brand-3">Produk</span></div>
                            <div class="wishlist-price"><span class="font-md-bold color-brand-3">Harga</span></div>
                            <div class="wishlist-status"><span class="font-md-bold color-brand-3">Status Stok</span></div>
                            <div class="wishlist-action"><span class="font-md-bold color-brand-3">Aksi</span></div>
                            <div class="wishlist-remove"><span class="font-md-bold color-brand-3">Hapus</span></div>
                        </div>
                    </div>
                    <div class="content-wishlist">
                        <div class="item-wishlist">
                            <div class="wishlist-product">
                                <div class="product-wishlist">
                                    <div class="product-image"><a
                                            href="{{ route('buyer.detailProduct', ['slug' => 'sd']) }}"><img
                                                src="{{ asset('ecom/imgs/page/product/img-sub.png') }}" alt="Ecom"></a>
                                    </div>
                                    <div class="product-info"><a href="{{ route('buyer.detailProduct', ['slug' => 'sd']) }}">
                                            <h6 class="color-brand-3">Samsung 36&quot; French door 28 cu. ft. Smart Energy
                                                Star Refrigerator </h6>
                                        </a>
                                        <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wishlist-price">
                                <h4 class="color-brand-3">$2.51</h4>
                            </div>
                            <div class="wishlist-status"><span
                                    class="btn btn-gray font-md-bold color-brand-3">Persediaan</span></div>
                            <div class="wishlist-action"><a class="btn btn-cart font-sm-bold"
                                    href="{{ route('buyer.cart') }}">Keranjang</a></div>
                            <div class="wishlist-remove"><a class="btn btn-delete" href="#"></a></div>
                        </div>
                    </div>
                </div>
                {{-- <h4 class="color-brand-3">Kamu mungkin juga suka</h4>
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
                                    href="{{ route('buyer.detailSeller', ['slug' => 'sd']) }}">Apple</a><br><a
                                    class="color-brand-3 font-sm-bold"
                                    href="{{ route('buyer.detailProduct', ['slug' => 'sd']) }}">Razer Power Up Gaming Bundle
                                    V2 - Cynosa Lite</a>
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
                            <div class="image-box"><a href="#"><img
                                        src="{{ asset('ecom/imgs/page/homepage1/imgsp1.png') }}" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><span class="font-xs color-gray-500">HP</span><br><a
                                    class="color-brand-3 font-xs-bold" href="#">HP 24 All-in-One PC, Intel Core
                                    i3-1115G4</a>
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
                </div> --}}
            </div>
        </section>
        @include('clients.buyer.layouts.benefit')

    </main>
@endsection
@push('importjs')
@endpush
