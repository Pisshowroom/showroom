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
                                                    <div class="mt-30"><a class="btn btn-brand-2 btn-gray-1000"
                                                            href="{{ route('buyer.allGridProduct') }}">Belanja</a>
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
                                <h4>Tidak ada Produk saat ini</h4>
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
                                                                <div class="price-info article-desc">
                                                                    <span
                                                                        class="color-gray-500 line-3 text-start">{!! $article->content !!}</span>
                                                                </div>
                                                                <div
                                                                    class="price-info mt-0 d-flex flex-row gap-1 align-items-center">
                                                                    {!! file_get_contents('ecom/imgs/page/product/icon-eye.svg') !!}
                                                                    <strong class="font-sm color-gray-500 price-main">
                                                                        {{ $article->view ? moneyFormat($article->view) : 0 }}
                                                                        dilihat</strong>
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
                var text = $(this).find('.article-desc').text();
                if (text.trim().split(/\r\n|\r|\n/).length < 3) {
                    $(this).find('.article-desc').css('height', '54px');
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
