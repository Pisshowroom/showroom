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
            </div>
        </section>
        @include('clients.buyer.layouts.benefit')

    </main>
@endsection
@push('importjs')
@endpush
