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
                            @foreach ($data['limited_product'] as $prd)
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
                                            @foreach ($data['latest_product'] as $prd)
                                                <div class="col-xl-3 col-lg-6 col-md-6">
                                                    @include('clients.buyer.components.list_product1')
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
                                        <h3 class="mb-5">Artikel</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="box-swiper">
                                <div class="swiper-container swiper-tab-4">
                                    <div class="row mt-4">
                                        @if (count($data['articles']) > 0)
                                            @foreach ($data['articles'] as $prd)
                                                <div class="col-xl-3 col-lg-6 col-md-6">
                                                    @include('clients.buyer.components.list_product1')
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
            // Fungsi untuk menambahkan produk ke localStorage
            function tambahkanKeLocalStorage(product) {
                let existingProducts = JSON.parse(localStorage.getItem('produkKeranjang')) || [];

                existingProducts.push(product);

                localStorage.setItem('produkKeranjang', JSON.stringify(existingProducts));
            }

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
