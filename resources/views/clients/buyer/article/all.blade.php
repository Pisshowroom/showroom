@extends('clients.buyer.master')
@section('title', 'Semua Artikel')
@section('article', 'actived')
@section('childs')
    <main class="main">
        <div class="section-box">
            <div class="breadcrumbs-div">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a class="font-xs color-gray-1000" href="{{ route('buyer.home') }}">Beranda</a></li>
                        <li><a class="font-xs color-gray-500" href="{{ route('buyer.allArticle') }}">Semua Artikel</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="section-box shop-template mt-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box-filters mt-0 pb-5 border-bottom">
                            <div class="row">
                                <div class="col-xl-2 col-lg-3 mb-0 text-lg-start text-center">
                                    <h5 class="color-brand-3 text-uppercase">Semua Artikel</h5>
                                </div>
                                <div class="col-xl-10 col-lg-9 mb-0 text-lg-end text-center"><span
                                        class="font-sm color-gray-900 font-medium border-1-right span">Munculkan 1&ndash;16
                                        of 17 hasil</span>
                                    <div class="d-inline-block"><span
                                            class="font-sm color-gray-500 font-medium">Berdasarkan:</span>
                                        <div class="dropdown dropdown-sort border-1-right">
                                            <button class="btn dropdown-toggle font-sm color-gray-900 font-medium"
                                                id="dropdownSort" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">Artikel Terbaru</button>
                                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort"
                                                style="margin: 0px;">
                                                <li><a class="dropdown-item active" href="#">Artikel Terbaru</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#">Artikel Terlama</a></li>
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
                    </div>
                </div>
                <div class="row mt-30">
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-40">
                        <div class="card-grid-style-1">
                            <div class="image-box"><a href="{{ route('buyer.detailArticle') }}"></a><img
                                    src="{{ asset('ecom/imgs/page/blog/blog-1.jpg') }}" alt="Ecom"></div><a
                                class="tag-dot font-xs" href="#">Technology</a><a class="color-gray-1100"
                                href="{{ route('buyer.detailArticle') }}">
                                <h4>Apple unveils iPhone 14 at far out event</h4>
                            </a>
                            <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 30, 2022</span><span
                                    class="color-gray-500 font-xs">4<span>Mins read</span></span></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-40">
                        <div class="card-grid-style-1">
                            <div class="image-box"><a href="{{ route('buyer.detailArticle') }}"></a><img
                                    src="{{ asset('ecom/imgs/page/blog/blog-2.jpg') }}" alt="Ecom"></div><a
                                class="tag-dot font-xs" href="#">Technology</a><a class="color-gray-1100"
                                href="{{ route('buyer.detailArticle') }}">
                                <h4>Walmart enters the metaverse with Roblox </h4>
                            </a>
                            <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 30, 2022</span><span
                                    class="color-gray-500 font-xs">4<span>Mins read</span></span></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-40">
                        <div class="card-grid-style-1">
                            <div class="image-box"><a href="{{ route('buyer.detailArticle') }}"></a><img
                                    src="{{ asset('ecom/imgs/page/blog/blog-3.jpg') }}" alt="Ecom"></div><a
                                class="tag-dot font-xs" href="#">Technology</a><a class="color-gray-1100"
                                href="{{ route('buyer.detailArticle') }}">
                                <h4>Take no prisoners: In the Feds inflation fight</h4>
                            </a>
                            <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 30, 2022</span><span
                                    class="color-gray-500 font-xs">4<span>Mins read</span></span></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-40">
                        <div class="card-grid-style-1">
                            <div class="image-box"><a href="{{ route('buyer.detailArticle') }}"></a><img
                                    src="{{ asset('ecom/imgs/page/blog/blog-4.jpg') }}" alt="Ecom"></div><a
                                class="tag-dot font-xs" href="#">Technology</a><a class="color-gray-1100"
                                href="{{ route('buyer.detailArticle') }}">
                                <h4>Amazon raising hourly pay for warehouse</h4>
                            </a>
                            <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 30, 2022</span><span
                                    class="color-gray-500 font-xs">4<span>Mins read</span></span></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-40">
                        <div class="card-grid-style-1">
                            <div class="image-box"><a href="{{ route('buyer.detailArticle') }}"></a><img
                                    src="{{ asset('ecom/imgs/page/blog/blog-5.jpg') }}" alt="Ecom"></div><a
                                class="tag-dot font-xs" href="#">Technology</a><a class="color-gray-1100"
                                href="{{ route('buyer.detailArticle') }}">
                                <h4>Who is who: Meet the Murdoch Family </h4>
                            </a>
                            <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 30, 2022</span><span
                                    class="color-gray-500 font-xs">4<span>Mins read</span></span></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-40">
                        <div class="card-grid-style-1">
                            <div class="image-box"><a href="{{ route('buyer.detailArticle') }}"></a><img
                                    src="{{ asset('ecom/imgs/page/blog/blog-6.jpg') }}" alt="Ecom"></div><a
                                class="tag-dot font-xs" href="#">Technology</a><a class="color-gray-1100"
                                href="{{ route('buyer.detailArticle') }}">
                                <h4>NFL has a new halftime show sponsor </h4>
                            </a>
                            <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 30, 2022</span><span
                                    class="color-gray-500 font-xs">4<span>Mins read</span></span></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-40">
                        <div class="card-grid-style-1">
                            <div class="image-box"><a href="{{ route('buyer.detailArticle') }}"></a><img
                                    src="{{ asset('ecom/imgs/page/blog/blog-7.jpg') }}" alt="Ecom"></div><a
                                class="tag-dot font-xs" href="#">Technology</a><a class="color-gray-1100"
                                href="{{ route('buyer.detailArticle') }}">
                                <h4>Actress details sexual harassment on sitcom set</h4>
                            </a>
                            <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 30, 2022</span><span
                                    class="color-gray-500 font-xs">4<span>Mins read</span></span></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-40">
                        <div class="card-grid-style-1">
                            <div class="image-box"><a href="{{ route('buyer.detailArticle') }}"></a><img
                                    src="{{ asset('ecom/imgs/page/blog/blog-8.jpg') }}" alt="Ecom"></div><a
                                class="tag-dot font-xs" href="#">Technology</a><a class="color-gray-1100"
                                href="{{ route('buyer.detailArticle') }}">
                                <h4>Selma Blair stuns in Dancing with the Stars</h4>
                            </a>
                            <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 30, 2022</span><span
                                    class="color-gray-500 font-xs">4<span>Mins read</span></span></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-40">
                        <div class="card-grid-style-1">
                            <div class="image-box"><a href="{{ route('buyer.detailArticle') }}"></a><img
                                    src="{{ asset('ecom/imgs/page/blog/blog-9.jpg') }}" alt="Ecom"></div><a
                                class="tag-dot font-xs" href="#">Technology</a><a class="color-gray-1100"
                                href="{{ route('buyer.detailArticle') }}">
                                <h4>Apple unveils iPhone 14 at far out event</h4>
                            </a>
                            <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 30, 2022</span><span
                                    class="color-gray-500 font-xs">4<span>Mins read</span></span></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-40">
                        <div class="card-grid-style-1">
                            <div class="image-box"><a href="{{ route('buyer.detailArticle') }}"></a><img
                                    src="{{ asset('ecom/imgs/page/blog/blog-10.jpg') }}" alt="Ecom"></div><a
                                class="tag-dot font-xs" href="#">Technology</a><a class="color-gray-1100"
                                href="{{ route('buyer.detailArticle') }}">
                                <h4>The Twitter-Musk trial is now on pause</h4>
                            </a>
                            <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 30, 2022</span><span
                                    class="color-gray-500 font-xs">4<span>Mins read</span></span></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-40">
                        <div class="card-grid-style-1">
                            <div class="image-box"><a href="{{ route('buyer.detailArticle') }}"></a><img
                                    src="{{ asset('ecom/imgs/page/blog/blog-11.jpg') }}" alt="Ecom"></div><a
                                class="tag-dot font-xs" href="#">Technology</a><a class="color-gray-1100"
                                href="{{ route('buyer.detailArticle') }}">
                                <h4>Binance blockchain hit by $570 million crypto</h4>
                            </a>
                            <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 30, 2022</span><span
                                    class="color-gray-500 font-xs">4<span>Mins read</span></span></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-40">
                        <div class="card-grid-style-1">
                            <div class="image-box"><a href="{{ route('buyer.detailArticle') }}"></a><img
                                    src="{{ asset('ecom/imgs/page/blog/blog-12.jpg') }}" alt="Ecom"></div><a
                                class="tag-dot font-xs" href="#">Technology</a><a class="color-gray-1100"
                                href="{{ route('buyer.detailArticle') }}">
                                <h4>Binance blockchain hit by $570 million crypto</h4>
                            </a>
                            <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 30, 2022</span><span
                                    class="color-gray-500 font-xs">4<span>Mins read</span></span></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-40">
                        <div class="card-grid-style-1">
                            <div class="image-box"><a href="{{ route('buyer.detailArticle') }}"></a><img
                                    src="{{ asset('ecom/imgs/page/blog/blog-13.jpg') }}" alt="Ecom"></div><a
                                class="tag-dot font-xs" href="#">Technology</a><a class="color-gray-1100"
                                href="{{ route('buyer.detailArticle') }}">
                                <h4>The Twitter-Musk trial is now on pause</h4>
                            </a>
                            <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 30, 2022</span><span
                                    class="color-gray-500 font-xs">4<span>Mins read</span></span></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-40">
                        <div class="card-grid-style-1">
                            <div class="image-box"><a href="{{ route('buyer.detailArticle') }}"></a><img
                                    src="{{ asset('ecom/imgs/page/blog/blog-14.jpg') }}" alt="Ecom"></div><a
                                class="tag-dot font-xs" href="#">Technology</a><a class="color-gray-1100"
                                href="{{ route('buyer.detailArticle') }}">
                                <h4>Apple unveils iPhone 14 at far out event</h4>
                            </a>
                            <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 30, 2022</span><span
                                    class="color-gray-500 font-xs">4<span>Mins read</span></span></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-40">
                        <div class="card-grid-style-1">
                            <div class="image-box"><a href="{{ route('buyer.detailArticle') }}"></a><img
                                    src="{{ asset('ecom/imgs/page/blog/blog-15.jpg') }}" alt="Ecom"></div><a
                                class="tag-dot font-xs" href="#">Technology</a><a class="color-gray-1100"
                                href="{{ route('buyer.detailArticle') }}">
                                <h4>Walmart enters the metaverse with Roblox</h4>
                            </a>
                            <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 30, 2022</span><span
                                    class="color-gray-500 font-xs">4<span>Mins read</span></span></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-40">
                        <div class="card-grid-style-1">
                            <div class="image-box"><a href="{{ route('buyer.detailArticle') }}"></a><img
                                    src="{{ asset('ecom/imgs/page/blog/blog-16.jpg') }}" alt="Ecom"></div><a
                                class="tag-dot font-xs" href="#">Technology</a><a class="color-gray-1100"
                                href="{{ route('buyer.detailArticle') }}">
                                <h4>Take no prisoners: In the Feds inflation fight</h4>
                            </a>
                            <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 30, 2022</span><span
                                    class="color-gray-500 font-xs">4<span>Mins read</span></span></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-40">
                        <div class="card-grid-style-1">
                            <div class="image-box"><a href="{{ route('buyer.detailArticle') }}"></a><img
                                    src="{{ asset('ecom/imgs/page/blog/blog-17.jpg') }}" alt="Ecom"></div><a
                                class="tag-dot font-xs" href="#">Technology</a><a class="color-gray-1100"
                                href="{{ route('buyer.detailArticle') }}">
                                <h4>Amazon raising hourly pay for warehouse</h4>
                            </a>
                            <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 30, 2022</span><span
                                    class="color-gray-500 font-xs">4<span>Mins read</span></span></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-40">
                        <div class="card-grid-style-1">
                            <div class="image-box"><a href="{{ route('buyer.detailArticle') }}"></a><img
                                    src="{{ asset('ecom/imgs/page/blog/blog-9.jpg') }}" alt="Ecom"></div><a
                                class="tag-dot font-xs" href="#">Technology</a><a class="color-gray-1100"
                                href="{{ route('buyer.detailArticle') }}">
                                <h4>Who is who: Meet the Murdoch Family </h4>
                            </a>
                            <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 30, 2022</span><span
                                    class="color-gray-500 font-xs">4<span>Mins read</span></span></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-40">
                        <div class="card-grid-style-1">
                            <div class="image-box"><a href="{{ route('buyer.detailArticle') }}"></a><img
                                    src="{{ asset('ecom/imgs/page/blog/blog-8.jpg') }}" alt="Ecom"></div><a
                                class="tag-dot font-xs" href="#">Technology</a><a class="color-gray-1100"
                                href="{{ route('buyer.detailArticle') }}">
                                <h4>NFL has a new halftime show sponsor </h4>
                            </a>
                            <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 30, 2022</span><span
                                    class="color-gray-500 font-xs">4<span>Mins read</span></span></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-40">
                        <div class="card-grid-style-1">
                            <div class="image-box"><a href="{{ route('buyer.detailArticle') }}"></a><img
                                    src="{{ asset('ecom/imgs/page/blog/blog-7.jpg') }}" alt="Ecom"></div><a
                                class="tag-dot font-xs" href="#">Technology</a><a class="color-gray-1100"
                                href="{{ route('buyer.detailArticle') }}">
                                <h4>The latest technologies to be used for VR in 2022</h4>
                            </a>
                            <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 30, 2022</span><span
                                    class="color-gray-500 font-xs">4<span>Mins read</span></span></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-40">
                        <div class="card-grid-style-1">
                            <div class="image-box"><a href="{{ route('buyer.detailArticle') }}"></a><img
                                    src="{{ asset('ecom/imgs/page/blog/blog-6.jpg') }}" alt="Ecom"></div><a
                                class="tag-dot font-xs" href="#">Technology</a><a class="color-gray-1100"
                                href="{{ route('buyer.detailArticle') }}">
                                <h4>Actress details sexual harassment on sitcom set</h4>
                            </a>
                            <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 30, 2022</span><span
                                    class="color-gray-500 font-xs">4<span>Mins read</span></span></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-40">
                        <div class="card-grid-style-1">
                            <div class="image-box"><a href="{{ route('buyer.detailArticle') }}"></a><img
                                    src="{{ asset('ecom/imgs/page/blog/blog-5.jpg') }}" alt="Ecom"></div><a
                                class="tag-dot font-xs" href="#">Technology</a><a class="color-gray-1100"
                                href="{{ route('buyer.detailArticle') }}">
                                <h4>Selma Blair stuns in Dancing with the Stars</h4>
                            </a>
                            <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 30, 2022</span><span
                                    class="color-gray-500 font-xs">4<span>Mins read</span></span></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-40">
                        <div class="card-grid-style-1">
                            <div class="image-box"><a href="{{ route('buyer.detailArticle') }}"></a><img
                                    src="{{ asset('ecom/imgs/page/blog/blog-4.jpg') }}" alt="Ecom"></div><a
                                class="tag-dot font-xs" href="#">Technology</a><a class="color-gray-1100"
                                href="{{ route('buyer.detailArticle') }}">
                                <h4>The Woman King surprises at the box office</h4>
                            </a>
                            <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 30, 2022</span><span
                                    class="color-gray-500 font-xs">4<span>Mins read</span></span></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-40">
                        <div class="card-grid-style-1">
                            <div class="image-box"><a href="{{ route('buyer.detailArticle') }}"></a><img
                                    src="{{ asset('ecom/imgs/page/blog/blog-3.jpg') }}" alt="Ecom"></div><a
                                class="tag-dot font-xs" href="#">Technology</a><a class="color-gray-1100"
                                href="{{ route('buyer.detailArticle') }}">
                                <h4>The fate of Elon Musks deal to buy Twitter</h4>
                            </a>
                            <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 30, 2022</span><span
                                    class="color-gray-500 font-xs">4<span>Mins read</span></span></div>
                        </div>
                    </div>
                </div>
                <div class="nav-center">
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
        </section>
        @include('clients.buyer.layouts.benefit')

    </main>
@endsection
@push('importjs')
@endpush
