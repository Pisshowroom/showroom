@extends('clients.buyer.master')
@section('title', 'Wishlist')

@section('childs')
    <main class="main">
        <div class="section-box">
            <div class="breadcrumbs-div">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a class="font-xs color-gray-1000"
                                href="{{ route('buyer.home') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Beranda</a>
                        </li>
                        <li><a class="font-xs color-gray-1000"
                                href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Produk</a>
                        </li>
                        <li><a class="font-xs color-gray-500"
                                href="{{ route('buyer.wishlist') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Wishlist</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="section-box shop-template">
            <div class="container">
                <div class="box-wishlist col-lg-10">
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
                                            href="{{ route('buyer.detailProduct', ['slug' => 'sd']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"><img
                                                src="{{ asset('ecom/imgs/page/product/img-sub.png') }}" alt="Ecom"></a>
                                    </div>
                                    <div class="product-info"><a
                                            href="{{ route('buyer.detailProduct', ['slug' => 'sd']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                            <h6 class="color-brand-3">Samsung 36&quot; French door 28 cu. ft. Smart Energy
                                                Star Refrigerator </h6>
                                        </a>
                                        <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><span class="font-xs color-gray-500">4 (65)</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wishlist-price">
                                <h4 class="color-brand-3">Rp251.000</h4>
                            </div>
                            <div class="wishlist-status"><span
                                    class="btn btn-gray font-md-bold color-brand-3">Persediaan</span></div>
                            <div class="wishlist-action"><a class="btn btn-cart font-sm-bold"
                                    href="{{ route('buyer.cart') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Keranjang</a>
                            </div>
                            <div class="wishlist-remove"><a class="btn btn-delete" href="#"></a></div>
                        </div>
                    </div>
                </div>
                <h4 class="color-brand-3">Kamu mungkin juga suka</h4>
                <div class="list-products-5 mt-20 mb-40">
                    @foreach ($data['best_seller_product'] as $prd)
                        @include('clients.buyer.components.list_product1')
                    @endforeach
                </div>
                <h4 class="color-brand-3">Barang yang direkomendasikan</h4>
                <div class="list-products-5 mt-20 mb-40">
                    @foreach ($data['recommended_products'] as $prd)
                        @include('clients.buyer.components.list_product1')
                    @endforeach
                </div>

            </div>
        </section>
        @include('clients.buyer.layouts.benefit')

    </main>
@endsection
@push('importjs')
@endpush
