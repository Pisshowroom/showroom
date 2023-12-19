@extends('clients.buyer.master')
@section('title', 'Detail Artikel')
@section('article', 'actived')
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
                                href="{{ route('buyer.allArticle') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Semua
                                Artikel</a></li>
                        <li><a class="font-xs color-gray-500" href="javascript:void(0);">Detail Artikel</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <section class="section-box shop-template mt-10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 order-first order-lg-last">
                        <div class="row">
                            <div class="col-lg-12 display-list">
                                <h3 class="mt-15 mb-25">{{ $article->title ?? '' }}</h3>
                                <div class="box-author mb-5">
                                    <div class="img-author mr-30">
                                        <img src="{{ asset('ecom/imgs/page/blog/author.png') }}" alt="admin"><span
                                            class="font-md-bold">Admin</span>
                                    </div>
                                    <span class="datepost color-gray-500 font-sm mr-30">{{ $article->date ?? '' }}</span>
                                    <span
                                        class="datepost color-gray-500 font-sm mr-30">{{ $article->view ? moneyFormat($article->view) . 'x dilihat' : '0 dilihat' }}</span>
                                </div>
                                <div class="content-text">
                                    {!! $article->content ?? '' !!}
                                </div>
                                <div class="border-bottom-4 mt-20"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 order-last order-lg-first mt-4 mt-lg-0">
                        <div class="box-slider-item mb-30">
                            <div class="head pb-15 border-brand-2">
                                <h5 class="color-gray-900">Artikel Lainnya</h5>
                            </div>
                            <div class="content-slider">
                                <div class="box-swiper slide-shop">
                                    <div class="swiper-container swiper-best-seller">
                                        <div class="swiper-wrapper pt-5">
                                            <div class="swiper-slide">
                                                @foreach ($data['another_articles'] as $aa)
                                                    <div class="card-grid-style-2 card-none-border mb-30 pb-5 mh-auto">
                                                        <div class="image-box mw-84">
                                                            <a
                                                                href="{{ route('buyer.detailArticle', ['id' => $aa->id]) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                                                <img class="width:84px;height:63px;object-fit:contain;"
                                                                    src="{{ $aa?->image ? $aa->image : asset('ecom/imgs/page/blog/blog-1.jpg') }}"
                                                                    alt="produk {{ $aa->title ?? '' }}"></a>
                                                        </div>
                                                        <div class="info-right">
                                                            <a class="color-brand-3 font-sm line-2 text-start"
                                                                href="{{ route('buyer.detailArticle', ['id' => $aa->id]) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                                                {{ $aa->title ?? '' }}</a>
                                                            <div class="row mt-5">
                                                                <div class="col-12">
                                                                    {!! file_get_contents('ecom/imgs/page/product/icon-eye.svg') !!}
                                                                    <strong class="color-gray-500 font-xs mr-20">
                                                                        {{ $aa->view ? moneyFormat($aa->view) . 'x dilihat' : 'belum dilihat' }}
                                                                    </strong>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="swiper-slide">
                                                @foreach ($data['another_articles2'] as $aa)
                                                    <div class="card-grid-style-2 card-none-border mb-30 pb-5 mh-auto">
                                                        <div class="image-box mw-84">
                                                            <a
                                                                href="{{ route('buyer.detailArticle', ['id' => $aa->id]) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                                                <img class="width:84px;height:63px;object-fit:contain;"
                                                                    src="{{ $aa?->image ? $aa->image : asset('ecom/imgs/page/blog/blog-1.jpg') }}"
                                                                    alt="produk {{ $aa->title ?? '' }}"></a>
                                                        </div>
                                                        <div class="info-right">
                                                            <a class="color-brand-3 font-sm line-2 text-start"
                                                                href="{{ route('buyer.detailArticle', ['id' => $aa->id]) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                                                {{ $aa->title ?? '' }}</a>
                                                            <div class="row mt-5">
                                                                <div class="col-12">
                                                                    {!! file_get_contents('ecom/imgs/page/product/icon-eye.svg') !!}
                                                                    <strong class="color-gray-500 font-xs mr-20">
                                                                        {{ $aa->view ? moneyFormat($aa->view) . 'x dilihat' : 'belum dilihat' }}
                                                                    </strong>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
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
                        <div class="banner-right h-500 text-center mb-30">
                            @if ($data['ads'] && $data['ads']->image)
                                <a
                                    href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                    <img class="mb-30" src="{{ $data['ads']->image }}" alt="iklan"
                                        style="border-radius: 5px">
                                </a>
                            @else<span class="text-no font-11">No.9</span>
                                <h5 class="font-23 mt-20">Sensitive Touch<br class="d-none d-lg-block">without fingerprint
                                </h5>
                                <p class="text-desc font-16 mt-15">Smooth handle and accurate click</p>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="section-box shop-template mt-30">
            <div class="container">
                <h3 class="color-brand-3">Artikel Populer</h3>
                <div class="row mt-30">
                    @foreach ($data['articles'] as $article)
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-40">
                            <div class="card-grid-style-1 articles">
                                <div class="image-box">
                                    <a
                                        href="{{ route('buyer.detailArticle', ['id' => $article->id]) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                        <img style="object-fit: cover;width:auto !important;"
                                            src="{{ $article?->image ? $article->image : asset('ecom/imgs/page/blog/blog-17.jpg') }}"
                                            alt="produk {{ $article->title ?? '' }}"></a>
                                </div>
                                <a class="color-gray-1100"
                                    href="{{ route('buyer.detailArticle', ['id' => $article->id]) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                    <h4 class="mb-10 line-2 text-start article-desc">{{ $article->title ?? '' }}</h4>
                                </a>
                                <div class="row">
                                    <div class="col-12">
                                        {!! file_get_contents('ecom/imgs/page/product/icon-eye.svg') !!}
                                        <strong
                                            class="color-gray-500 font-xs mr-20">{{ $article->view ? moneyFormat($article->view) . 'x dilihat' : 'belum dilihat' }}
                                        </strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        @include('clients.buyer.layouts.benefit')
    </main>
@endsection
@push('importjs')
    <script>
        setTimeout(function() {
            $('#mydiv').fadeOut('fast');
        }, 2000);

        $(document).ready(function() {
            $('.info-right').each(function() {
                var text = $(this).find('.color-brand-3.font-sm').text();

                // Menghapus spasi ekstra dan memeriksa jumlah baris
                if (text.trim().split(/\r\n|\r|\n/).length < 2) {
                    $(this).find('.color-brand-3.font-sm').css('height', '40px');
                }
            });
            $('.articles').each(function() {
                var text = $(this).find('.color-gray-1100 .article-desc').text();
                console.log(text);
                if (text.trim().split(/\r\n|\r|\n/).length < 2) {
                    $(this).find('.color-gray-1100 .article-desc').css('height', '57px');
                }
            });
        });
    </script>
@endpush
