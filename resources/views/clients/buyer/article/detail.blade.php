@extends('clients.buyer.master')
@section('title', 'Detail Artikel')
@section('article', 'actived')
@section('childs')
    <main class="main">
        <div class="section-box">
            <div class="breadcrumbs-div">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a class="font-xs color-gray-1000" href="{{ route('buyer.home') }}">Beranda</a></li>
                        <li><a class="font-xs color-gray-1000" href="{{ route('buyer.allArticle') }}">Semua Artikel</a></li>
                        <li><a class="font-xs color-gray-500" href="javascript:void(0);">Detail Artikel</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <section class="section-box shop-template mt-10">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-12 display-list">
                                {{-- <a class="tag-dot font-xs"
                                    href="#">Technology</a> --}}
                                <h3 class="mt-15 mb-25">{{ $article->title ?? '' }}</h3>
                                <div class="box-author mb-5">
                                    <div class="img-author mr-30"><img src="{{ asset('ecom/imgs/page/blog/author.png') }}"
                                            alt="Ecom"><span class="font-md-bold">By Sugar Rosie</span></div><span
                                        class="datepost color-gray-500 font-sm mr-30">{{ $article->date ?? '' }}</span>
                                    {{-- <span
                                        class="timeread color-gray-500 font-sm">4 Mins read</span> --}}
                                </div>
                                <div class="image-feature"><img src="{{ asset('ecom/imgs/page/blog/blog-1.jpg') }}"
                                        alt="artikel {{ $article->title ?? '' }}"></div>
                                <div class="content-text">
                                    {!! $article->content ?? '' !!}
                                </div>
                                <div class="border-bottom-4 mt-20"></div>
                                {{-- <div class="row">
                                    <div class="col-lg-6">
                                        <div class="box-tags"><a class="btn btn-tags mr-10 hover-up">Technology</a><a
                                                class="btn btn-tags mr-10 hover-up">Devices</a><a
                                                class="btn btn-tags mr-10 hover-up">AI</a></div>
                                    </div>
                                    <div class="col-lg-6 text-end">
                                        <div class="d-inline-block pt-5 pb-5">
                                            <div class="share-link"><span
                                                    class="font-md-bold color-brand-3 mr-15">Share</span><a
                                                    class="facebook hover-up" href="#"> </a><a
                                                    class="printest hover-up" href="#"></a><a class="twitter hover-up"
                                                    href="#"></a><a class="instagram hover-up" href="#"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <div class="border-bottom-4 mt-20 mb-30"></div>
                                <div class="comment-box">
                                    <div class="comment-item">
                                        <div class="top-comment">
                                            <div class="image-author"> <img
                                                    src="{{ asset('ecom/imgs/page/blog/author.png') }}" alt="Ecom">
                                            </div>
                                            <div class="author-name"> <span class="font-md-bold color-gray-900">Sugar
                                                    Rosie</span>
                                                <div class="info-author"><span class="font-sm color-gray-500">306
                                                        posts</span><span class="font-sm color-gray-500">Since 2012</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment-content font-md">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</div>
                                    </div>
                                </div>
                                <div class="border-bottom-4 mt-40 mb-90"></div>
                                <h5 class="font-md-bold mb-30">Tinggalkan komentar</h5>
                                <div class="form-comment">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <textarea class="form-control" placeholder="Tulis Komentar" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input class="form-control" type="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input class="btn btn-buy w-auto" type="submit" value="Kirim">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="font-md-bold mb-30 mt-20">Semua Komentar</h5>
                                <div class="comment-box mb-60">
                                    <div class="comment-item comment-item-small">
                                        <div class="top-comment">
                                            <div class="image-author"> <img
                                                    src="{{ asset('ecom/imgs/page/blog/author.png') }}" alt="Ecom">
                                            </div>
                                            <div class="author-name"> <span class="font-md-bold color-gray-900 mr-20">Siena
                                                    Kim</span><span class="font-sm color-gray-500">August 30, 2022</span>
                                            </div>
                                        </div>
                                        <div class="comment-content font-md">
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur. Nibiru, a new crypto derivatives protocol co-founded by
                                            Tribe Capital GP Arjun Sethi, has raised $7.5 million in seed funding at a
                                            valuation of $100 million, two sources familiar with the matter told TechCrunch.
                                        </div>
                                    </div>
                                    <div class="comment-item comment-item-small">
                                        <div class="top-comment">
                                            <div class="image-author"> <img
                                                    src="{{ asset('ecom/imgs/page/blog/author.png') }}" alt="Ecom">
                                            </div>
                                            <div class="author-name"> <span
                                                    class="font-md-bold color-gray-900 mr-20">Siena Kim</span><span
                                                    class="font-sm color-gray-500">August 30, 2022</span></div>
                                        </div>
                                        <div class="comment-content font-md">
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur. Nibiru, a new crypto derivatives protocol co-founded by
                                            Tribe Capital GP Arjun Sethi, has raised $7.5 million in seed funding at a
                                            valuation of $100 million, two sources familiar with the matter told TechCrunch.
                                        </div>
                                    </div>
                                    <div class="comment-item comment-item-small">
                                        <div class="top-comment">
                                            <div class="image-author"> <img
                                                    src="{{ asset('ecom/imgs/page/blog/author.png') }}" alt="Ecom">
                                            </div>
                                            <div class="author-name"> <span
                                                    class="font-md-bold color-gray-900 mr-20">Siena Kim</span><span
                                                    class="font-sm color-gray-500">August 30, 2022</span></div>
                                        </div>
                                        <div class="comment-content font-md">
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur. Nibiru, a new crypto derivatives protocol co-founded by
                                            Tribe Capital GP Arjun Sethi, has raised $7.5 million in seed funding at a
                                            valuation of $100 million, two sources familiar with the matter told TechCrunch.
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-3">
                        <div class="sidebar-border">
                            <div class="sidebar-head">
                                <h6 class="color-gray-900">Kategori</h6>
                            </div>
                            <div class="sidebar-content">
                                <ul class="list-nav-arrow">
                                    <li><a href="blog.html">Technology Trending<span class="number">09</span></a></li>
                                    <li><a href="blog.html">Entertainment<span class="number">12</span></a></li>
                                    <li><a href="blog.html">Tech Reviews<span class="number">24</span></a></li>
                                    <li><a href="blog.html">Gaming Blog<span class="number">34</span></a></li>
                                    <li><a href="blog.html">Crypto news<span class="number">65</span></a></li>
                                    <li><a href="blog.html">Software Development<span class="number">15</span></a></li>
                                    <li><a href="blog.html">FinTech<span class="number">76</span></a></li>
                                    <li><a href="blog.html">Health Tech<span class="number">89</span></a></li>
                                    <li><a href="blog.html">Tips and Tricks<span class="number">23</span></a></li>
                                    <li><a href="blog.html">Make money online<span class="number">98</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="box-slider-item mb-30">
                            <div class="head pb-15 border-brand-2">
                                <h5 class="color-gray-900">Artikel Trending</h5>
                            </div>
                            <div class="content-slider">
                                <div class="box-swiper slide-shop">
                                    <div class="swiper-container swiper-best-seller">
                                        <div class="swiper-wrapper pt-5">
                                            <div class="swiper-slide">
                                                <div class="card-grid-style-2 card-none-border mb-30 pb-5 mh-auto">
                                                    <div class="image-box mw-84"><a href="blog-single.html"><img
                                                                src="{{ asset('ecom/imgs/page/blog/blog-1.jpg') }}"
                                                                alt="Ecom"></a></div>
                                                    <div class="info-right"><a class="color-brand-3 font-sm"
                                                            href="blog-single.html">The latest technologies to be used for
                                                            VR in 2022</a>
                                                        <div class="row mt-5">
                                                            <div class="col-12"><span
                                                                    class="color-gray-500 font-xs mr-20">August 30,
                                                                    2022</span><span class="color-gray-500 font-xs">3<span
                                                                        class="color-gray-500 font-xs">Mins
                                                                        read</span></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card-grid-style-2 card-none-border mb-30 pb-5 mh-auto">
                                                    <div class="image-box mw-84"><a href="blog-single.html"><img
                                                                src="{{ asset('ecom/imgs/page/blog/blog-5.jpg') }}"
                                                                alt="Ecom"></a></div>
                                                    <div class="info-right"><a class="color-brand-3 font-sm"
                                                            href="blog-single.html">Apple unveils iPhone 14 at far out
                                                            event</a>
                                                        <div class="row mt-5">
                                                            <div class="col-12"><span
                                                                    class="color-gray-500 font-xs mr-20">August 30,
                                                                    2022</span><span class="color-gray-500 font-xs">3<span
                                                                        class="color-gray-500 font-xs">Mins
                                                                        read</span></span></div>
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
                    </div> --}}
                </div>
            </div>
        </section>
        {{-- <section class="section-box shop-template mt-30">
            <div class="container">
                <h3 class="color-brand-3">Artikel Terkait</h3>
                <div class="row mt-30">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-40">
                        <div class="card-grid-style-1">
                            <div class="image-box"><a href="blog-single.html"><img
                                        src="{{ asset('ecom/imgs/page/blog/blog-17.jpg') }}" alt="Ecom"></a></div><a
                                class="tag-dot font-xs" href="#">Technology</a><a class="color-gray-1100"
                                href="blog-single.html">
                                <h4 class="mb-10">Amazon’s ‘Safe’ New Robot Won’t Fix its Worker</h4>
                            </a>
                            <div class="row mt-20">
                                <div class="col-12"><span class="color-gray-500 font-xs mr-30">August 30, 2022</span><span
                                        class="color-gray-500 font-xs">4<span> Mins read</span></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-40">
                        <div class="card-grid-style-1">
                            <div class="image-box"><a href="blog-single.html"><img
                                        src="{{ asset('ecom/imgs/page/blog/blog-16.jpg') }}" alt="Ecom"></a></div><a
                                class="tag-dot font-xs" href="#">Technology</a><a class="color-gray-1100"
                                href="blog-single.html">
                                <h4 class="mb-10">When AI Makes Art, Humans Supply</h4>
                            </a>
                            <div class="row mt-20">
                                <div class="col-12"><span class="color-gray-500 font-xs mr-30">August 30, 2022</span><span
                                        class="color-gray-500 font-xs">4<span> Mins read</span></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-40">
                        <div class="card-grid-style-1">
                            <div class="image-box"><a href="blog-single.html"><img
                                        src="{{ asset('ecom/imgs/page/blog/blog-15.jpg') }}" alt="Ecom"></a></div><a
                                class="tag-dot font-xs" href="#">Technology</a><a class="color-gray-1100"
                                href="blog-single.html">
                                <h4 class="mb-10">How Do You Know a Cargo Ship Is Polluting?</h4>
                            </a>
                            <div class="row mt-20">
                                <div class="col-12"><span class="color-gray-500 font-xs mr-30">August 30, 2022</span><span
                                        class="color-gray-500 font-xs">4<span> Mins read</span></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-40">
                        <div class="card-grid-style-1">
                            <div class="image-box"><a href="blog-single.html"><img
                                        src="{{ asset('ecom/imgs/page/blog/blog-7.jpg') }}" alt="Ecom"></a></div><a
                                class="tag-dot font-xs" href="#">Technology</a><a class="color-gray-1100"
                                href="blog-single.html">
                                <h4 class="mb-10">The Summer's Best Read Is About AI, Surveillance</h4>
                            </a>
                            <div class="row mt-20">
                                <div class="col-12"><span class="color-gray-500 font-xs mr-30">August 30, 2022</span><span
                                        class="color-gray-500 font-xs">4<span> Mins read</span></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        @include('clients.buyer.layouts.benefit')
    </main>
@endsection
@push('importjs')
@endpush
