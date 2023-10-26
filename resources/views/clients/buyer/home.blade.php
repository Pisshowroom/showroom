@extends('clients.buyer.master')
@section('title', 'Beranda')

@section('childs')
    <main class="main">
        <section class="section-box">
            <div class="banner-hero banner-1 pt-10">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-12 col-md-12 mb-30">
                            <div class="box-swiper">
                                <div class="swiper-container swiper-group-1">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="banner-big banner-big-3 bg-22"
                                                style="background-image: url({{ asset('ecom/imgs/page/homepage4/bg-banner.png') }})">
                                                <h1 class="color-gray-100 text-uppercase text-shadow">Enjoy<br
                                                        class="d-none d-lg-block"> The Music</h1>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <ul class="list-disc">
                                                            <li class="font-lg color-brand-3">Free Shipping. Secure
                                                                Payment</li>
                                                            <li class="font-lg color-brand-3">Kontak Kami 24hrs a day
                                                            </li>
                                                            <li class="font-lg color-brand-3">Support gift service</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="mt-30"><a class="btn btn-brand-2 btn-gray-1000"
                                                        href="{{route('buyer.allGridProduct')}}">Belanja</a>
                                                    {{-- <a
                                                        class="btn btn-link text-underline" href="{{route('buyer.allGridProduct')}}">Learn
                                                        more</a> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="banner-big banner-big-3 bg-22"
                                                style="background-image: url({{ asset('ecom/imgs/page/homepage4/bg-banner-2.png') }})">
                                                <h1 class="color-gray-100 text-uppercase text-shadow">360 DEGREE<br
                                                        class="d-none d-lg-block"> VIRTUAL REALITY</h1>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <ul class="list-disc">
                                                            <li class="font-lg color-brand-3">Free Shipping. Secure
                                                                Payment</li>
                                                            <li class="font-lg color-brand-3">Kontak Kami 24hrs a day
                                                            </li>
                                                            <li class="font-lg color-brand-3">Support gift service</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="mt-30"><a class="btn btn-brand-2 btn-gray-1000"
                                                        href="{{route('buyer.allGridProduct')}}">Belanja</a>
                                                    {{-- <a
                                                            class="btn btn-link text-underline" href="{{route('buyer.allGridProduct')}}">Learn
                                                            more</a> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="banner-big banner-big-3 bg-22"
                                                style="background-image: url({{ asset('ecom/imgs/page/homepage4/bg-banner-3.png') }})">
                                                <h1 class="color-gray-100 text-uppercase text-shadow">Enjoy<br
                                                        class="d-none d-lg-block"> The Music</h1>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <ul class="list-disc">
                                                            <li class="font-lg color-brand-3">Free Shipping. Secure
                                                                Payment</li>
                                                            <li class="font-lg color-brand-3">Kontak Kami 24hrs a day
                                                            </li>
                                                            <li class="font-lg color-brand-3">Support gift service</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="mt-30"><a class="btn btn-brand-2 btn-gray-1000"
                                                        href="{{route('buyer.allGridProduct')}}">Belanja</a>
                                                    {{-- <a
                                                    class="btn btn-link text-underline" href="{{route('buyer.allGridProduct')}}">Learn
                                                    more</a> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination swiper-pagination-1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-12 col-md-12">
                            <div class="row">
                                <div class="col-12 mb-30">
                                    <div class="bg-metaverse bg-22 pt-25 mb-20 pl-20 h-175">
                                        <h3 class="mb-10 font-32">Metaverse</h3>
                                        <p class="font-16">The Future of Creativity</p>
                                        <div class="mt-10"><a class="btn btn-link-brand-2 btn-arrow-brand-2"
                                                href="{{route('buyer.allGridProduct')}}">Selengkapnya</a></div>
                                    </div>
                                    <div class="bg-4 box-bdrd-4 bg-headphone pt-20 mh-307"><span
                                            class="font-md color-brand-3">Headphone</span>
                                        <h4 class="font-32 color-gray-1000 mb-10 mt-5">Rockez 547</h4>
                                        <p class="color-brand-1 font-sm">MUSIC EVERYWHERE<br
                                                class="d-none d-lg-block">ANYTIME</p>
                                        <div class="mt-35"><a class="btn btn-brand-2 btn-arrow-right"
                                                href="{{route('buyer.allGridProduct')}}">Belanja</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="section-box">
            <div class="container">
                <div class="row mt-10">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card-grid-style-2 card-grid-style-2-small">
                            <div class="image-box"><a href="{{ route('buyer.allGridProduct') }}"><img
                                        src="{{ asset('ecom/imgs/page/homepage1/smartphone.png') }}" alt="Ecom"></a>
                                <div class="mt-10 text-center"><a class="btn btn-gray" href="{{ route('buyer.allGridProduct') }}">View
                                        all</a></div>
                            </div>
                            <div class="info-right"><a class="color-brand-3 font-sm-bold" href="{{ route('buyer.allGridProduct') }}">
                                    <h6>Smart Phone</h6>
                                </a>
                                <ul class="list-links-disc">
                                    <li><a class="font-sm" href="{{ route('buyer.allGridProduct') }}">Phone Accessories</a></li>
                                    <li><a class="font-sm" href="{{ route('buyer.allGridProduct') }}">Phone Cases</a></li>
                                    <li><a class="font-sm" href="{{ route('buyer.allGridProduct') }}">Postpaid Phones</a></li>
                                    <li><a class="font-sm" href="{{ route('buyer.allGridProduct') }}">Refurbished Phones</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card-grid-style-2 card-grid-style-2-small">
                            <div class="image-box"><a href="{{ route('buyer.allGridProduct') }}"><img
                                        src="{{ asset('ecom/imgs/page/homepage1/television.png') }}" alt="Ecom"></a>
                                <div class="mt-10 text-center"><a class="btn btn-gray" href="{{ route('buyer.allGridProduct') }}">View
                                        all</a></div>
                            </div>
                            <div class="info-right"><a class="color-brand-3 font-sm-bold" href="{{ route('buyer.allGridProduct') }}">
                                    <h6>Television</h6>
                                </a>
                                <ul class="list-links-disc">
                                    <li><a class="font-sm" href="{{ route('buyer.allGridProduct') }}">HD DVD Players</a></li>
                                    <li><a class="font-sm" href="{{ route('buyer.allGridProduct') }}">Projection Screens</a></li>
                                    <li><a class="font-sm" href="{{ route('buyer.allGridProduct') }}">Television Accessories</a></li>
                                    <li><a class="font-sm" href="{{ route('buyer.allGridProduct') }}">TV-DVD Combos</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card-grid-style-2 card-grid-style-2-small">
                            <div class="image-box"><a href="{{ route('buyer.allGridProduct') }}"><img
                                        src="{{ asset('ecom/imgs/page/homepage1/computer.png') }}" alt="Ecom"></a>
                                <div class="mt-10 text-center"><a class="btn btn-gray" href="{{ route('buyer.allGridProduct') }}">View
                                        all</a></div>
                            </div>
                            <div class="info-right"><a class="color-brand-3 font-sm-bold" href="{{ route('buyer.allGridProduct') }}">
                                    <h6>Computers</h6>
                                </a>
                                <ul class="list-links-disc">
                                    <li><a class="font-sm" href="{{ route('buyer.allGridProduct') }}">Computer Components</a></li>
                                    <li><a class="font-sm" href="{{ route('buyer.allGridProduct') }}">Computer Accessories</a></li>
                                    <li><a class="font-sm" href="{{ route('buyer.allGridProduct') }}">Desktops</a></li>
                                    <li><a class="font-sm" href="{{ route('buyer.allGridProduct') }}">Monitors</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card-grid-style-2 card-grid-style-2-small">
                            <div class="image-box"><a href="{{ route('buyer.allGridProduct') }}"><img
                                        src="{{ asset('ecom/imgs/page/homepage1/electric.png') }}" alt="Ecom"></a>
                                <div class="mt-10 text-center"><a class="btn btn-gray" href="{{ route('buyer.allGridProduct') }}">View
                                        all</a></div>
                            </div>
                            <div class="info-right"><a class="color-brand-3 font-sm-bold" href="{{ route('buyer.allGridProduct') }}">
                                    <h6>Electronics</h6>
                                </a>
                                <ul class="list-links-disc">
                                    <li><a class="font-sm" href="{{ route('buyer.allGridProduct') }}">Office Electronics</a></li>
                                    <li><a class="font-sm" href="{{ route('buyer.allGridProduct') }}">Portable Audio &amp; Video</a>
                                    </li>
                                    <li><a class="font-sm" href="{{ route('buyer.allGridProduct') }}">Washing Machine</a></li>
                                    <li><a class="font-sm" href="{{ route('buyer.allGridProduct') }}">Accessories &amp; Supplies</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="section-box mt-30">
            <div class="container">
                <div class="head-main bd-gray-200">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <ul class="nav nav-tabs text-start" role="tablist">
                                <li class="pl-0"><a class="active pl-0" href="#tab-1-featured" data-bs-toggle="tab"
                                        role="tab" aria-controls="tab-1-featured" aria-selected="true"
                                        data-index="1">
                                        <h4>Unggulan</h4>
                                    </a></li>
                                <li><a href="#tab-1-bestseller" data-bs-toggle="tab" role="tab"
                                        aria-controls="tab-1-bestseller" aria-selected="false" data-index="2">
                                        <h4>Penjualan terbaik</h4>
                                    </a></li>
                                <li><a href="#tab-1-mostviewed" data-bs-toggle="tab" role="tab"
                                        aria-controls="tab-1-mostviewed" aria-selected="false" data-index="3">
                                        <h4>Paling banyak dilihat</h4>
                                    </a></li>
                            </ul>
                            <!-- Button slider-->
                            <div class="box-button-slider">
                                <div class="button-slider-nav" id="tab-1-featured-nav">
                                    <div class="swiper-button-next swiper-button-next-tab-1"></div>
                                    <div class="swiper-button-prev swiper-button-prev-tab-1"></div>
                                </div>
                                <div class="button-slider-nav" id="tab-1-bestseller-nav" style="display: none;">
                                    <div class="swiper-button-next swiper-button-next-tab-2"></div>
                                    <div class="swiper-button-prev swiper-button-prev-tab-2"></div>
                                </div>
                                <div class="button-slider-nav" id="tab-1-mostviewed-nav" style="display: none;">
                                    <div class="swiper-button-next swiper-button-next-tab-3"></div>
                                    <div class="swiper-button-prev swiper-button-prev-tab-3"></div>
                                </div>
                            </div>
                            <!-- End Button slider-->
                        </div>
                    </div>
                </div>
                <div class="tab-content tab-content-slider">
                    <div class="tab-pane fade active show" id="tab-1-featured" role="tabpanel"
                        aria-labelledby="tab-1-featured">
                        <div class="box-swiper">
                            <div class="swiper-container swiper-tab-1">
                                <div class="swiper-wrapper pt-5">
                                    <div class="swiper-slide">
                                        <div class="list-products-5">
                                            <div class="card-grid-style-3">
                                                <div class="card-grid-inner">
                                                    <div class="tools">
                                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                                            href="{{ route('buyer.wishlist') }}"
                                                            aria-label="Tambahkan ke Wishlist"></a>
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
                                                            href="{{ route('buyer.detailSeller') }}">Dell</a><br><a
                                                            class="color-brand-3 font-sm-bold"
                                                            href="{{ route('buyer.detailProduct') }}">Dell Optiplex 9020
                                                            Small
                                                            Form Business Desktop Tower PC</a>
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
                                                                alt="Ecom"><span
                                                                class="font-xs color-gray-500">(65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                class="color-gray-500 price-line">$3225.6</span></div>
                                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-grid-style-3">
                                                <div class="card-grid-inner">
                                                    <div class="tools">
                                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                                            href="{{ route('buyer.wishlist') }}"
                                                            aria-label="Tambahkan ke Wishlist"></a>
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
                                                            href="{{ route('buyer.detailSeller') }}">HP</a><br><a
                                                            class="color-brand-3 font-sm-bold"
                                                            href="{{ route('buyer.detailProduct') }}">HP 24 All-in-One PC,
                                                            Intel
                                                            Core i3-1115G4, 4GB RAM</a>
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
                                                                alt="Ecom"><span
                                                                class="font-xs color-gray-500">(65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                class="color-gray-500 price-line">$3225.6</span></div>
                                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-grid-style-3">
                                                <div class="card-grid-inner">
                                                    <div class="tools">
                                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                                            href="{{ route('buyer.wishlist') }}"
                                                            aria-label="Tambahkan ke Wishlist"></a>
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
                                                            href="{{ route('buyer.detailSeller') }}">Gateway</a><br><a
                                                            class="color-brand-3 font-sm-bold"
                                                            href="{{ route('buyer.detailProduct') }}">Gateway 23.8&quot;
                                                            All-in-one Desktop, Fully Adjustable Stand</a>
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
                                                                alt="Ecom"><span
                                                                class="font-xs color-gray-500">(65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                class="color-gray-500 price-line">$3225.6</span></div>
                                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-grid-style-3">
                                                <div class="card-grid-inner">
                                                    <div class="tools">
                                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                                            href="{{ route('buyer.wishlist') }}"
                                                            aria-label="Tambahkan ke Wishlist"></a>
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
                                                            href="{{ route('buyer.detailSeller') }}">HP</a><br><a
                                                            class="color-brand-3 font-sm-bold"
                                                            href="{{ route('buyer.detailProduct') }}">HP 22 All-in-One PC,
                                                            Intel
                                                            Pentium Silver J5040, 4GB RAM</a>
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
                                                                alt="Ecom"><span
                                                                class="font-xs color-gray-500">(65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                class="color-gray-500 price-line">$3225.6</span></div>
                                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-grid-style-3">
                                                <div class="card-grid-inner">
                                                    <div class="tools">
                                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                                            href="{{ route('buyer.wishlist') }}"
                                                            aria-label="Tambahkan ke Wishlist"></a>
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
                                                            href="{{ route('buyer.detailSeller') }}">HP</a><br><a
                                                            class="color-brand-3 font-sm-bold"
                                                            href="{{ route('buyer.detailProduct') }}">HP Slim Desktop,
                                                            Intel
                                                            Celeron J4025, 4GB RAM, 256GB SSD</a>
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
                                                                alt="Ecom"><span
                                                                class="font-xs color-gray-500">(65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                class="color-gray-500 price-line">$3225.6</span></div>
                                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="list-products-5">
                                            <div class="card-grid-style-3">
                                                <div class="card-grid-inner">
                                                    <div class="tools">
                                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                                            href="{{ route('buyer.wishlist') }}"
                                                            aria-label="Tambahkan ke Wishlist"></a>
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
                                                            href="{{ route('buyer.detailSeller') }}">Dell</a><br><a
                                                            class="color-brand-3 font-sm-bold"
                                                            href="{{ route('buyer.detailProduct') }}">Dell Optiplex 9020
                                                            Small
                                                            Form Business Desktop Tower PC</a>
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
                                                                alt="Ecom"><span
                                                                class="font-xs color-gray-500">(65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                class="color-gray-500 price-line">$3225.6</span></div>
                                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-grid-style-3">
                                                <div class="card-grid-inner">
                                                    <div class="tools">
                                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                                            href="{{ route('buyer.wishlist') }}"
                                                            aria-label="Tambahkan ke Wishlist"></a>
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
                                                            href="{{ route('buyer.detailSeller') }}">HP</a><br><a
                                                            class="color-brand-3 font-sm-bold"
                                                            href="{{ route('buyer.detailProduct') }}">HP 24 All-in-One PC,
                                                            Intel
                                                            Core i3-1115G4, 4GB RAM</a>
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
                                                                alt="Ecom"><span
                                                                class="font-xs color-gray-500">(65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                class="color-gray-500 price-line">$3225.6</span></div>
                                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-grid-style-3">
                                                <div class="card-grid-inner">
                                                    <div class="tools">
                                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                                            href="{{ route('buyer.wishlist') }}"
                                                            aria-label="Tambahkan ke Wishlist"></a>
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
                                                            href="{{ route('buyer.detailSeller') }}">Gateway</a><br><a
                                                            class="color-brand-3 font-sm-bold"
                                                            href="{{ route('buyer.detailProduct') }}">Gateway 23.8&quot;
                                                            All-in-one Desktop, Fully Adjustable Stand</a>
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
                                                                alt="Ecom"><span
                                                                class="font-xs color-gray-500">(65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                class="color-gray-500 price-line">$3225.6</span></div>
                                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-grid-style-3">
                                                <div class="card-grid-inner">
                                                    <div class="tools">
                                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                                            href="{{ route('buyer.wishlist') }}"
                                                            aria-label="Tambahkan ke Wishlist"></a>
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
                                                            href="{{ route('buyer.detailSeller') }}">HP</a><br><a
                                                            class="color-brand-3 font-sm-bold"
                                                            href="{{ route('buyer.detailProduct') }}">HP 22 All-in-One
                                                            PC, Intel
                                                            Pentium Silver J5040, 4GB RAM</a>
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
                                                                alt="Ecom"><span
                                                                class="font-xs color-gray-500">(65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                class="color-gray-500 price-line">$3225.6</span></div>
                                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-grid-style-3">
                                                <div class="card-grid-inner">
                                                    <div class="tools">
                                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                                            href="{{ route('buyer.wishlist') }}"
                                                            aria-label="Tambahkan ke Wishlist"></a>
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
                                                            href="{{ route('buyer.detailSeller') }}">HP</a><br><a
                                                            class="color-brand-3 font-sm-bold"
                                                            href="{{ route('buyer.detailProduct') }}">HP Slim Desktop,
                                                            Intel
                                                            Celeron J4025, 4GB RAM, 256GB SSD</a>
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
                                                                alt="Ecom"><span
                                                                class="font-xs color-gray-500">(65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                class="color-gray-500 price-line">$3225.6</span></div>
                                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-1-bestseller" role="tabpanel" aria-labelledby="tab-1-bestseller">
                        <div class="box-swiper">
                            <div class="swiper-container swiper-tab-2">
                                <div class="swiper-wrapper pt-5">
                                    <div class="swiper-slide">
                                        <div class="list-products-5">
                                            <div class="card-grid-style-3">
                                                <div class="card-grid-inner">
                                                    <div class="tools">
                                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                                            href="{{ route('buyer.wishlist') }}"
                                                            aria-label="Tambahkan ke Wishlist"></a>
                                                        {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                                    </div>
                                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                            href="{{ route('buyer.detailProduct') }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp1.png') }}"
                                                                alt="Ecom"></a></div>
                                                    <div class="info-right"><a class="font-xs color-gray-500"
                                                            href="{{ route('buyer.detailSeller') }}">Roku</a><br><a
                                                            class="color-brand-3 font-sm-bold"
                                                            href="{{ route('buyer.detailProduct') }}">Class 4K UHD
                                                            (2160P) LED
                                                            Roku Smart TV HDR</a>
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
                                                                alt="Ecom"><span
                                                                class="font-xs color-gray-500">(65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                class="color-gray-500 price-line">$3225.6</span></div>
                                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-grid-style-3">
                                                <div class="card-grid-inner">
                                                    <div class="tools">
                                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                                            href="{{ route('buyer.wishlist') }}"
                                                            aria-label="Tambahkan ke Wishlist"></a>
                                                        {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                                    </div>
                                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                            href="{{ route('buyer.detailProduct') }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp2.png') }}"
                                                                alt="Ecom"></a></div>
                                                    <div class="info-right"><a class="font-xs color-gray-500"
                                                            href="{{ route('buyer.detailSeller') }}">SAMSUNG</a><br><a
                                                            class="color-brand-3 font-sm-bold"
                                                            href="{{ route('buyer.detailProduct') }}">SAMSUNG Galaxy Tab
                                                            S7 Plus
                                                            12.4&quot; 128GB Mystic Black</a>
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
                                                                alt="Ecom"><span
                                                                class="font-xs color-gray-500">(65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                class="color-gray-500 price-line">$3225.6</span></div>
                                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-grid-style-3">
                                                <div class="card-grid-inner">
                                                    <div class="tools">
                                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                                            href="{{ route('buyer.wishlist') }}"
                                                            aria-label="Tambahkan ke Wishlist"></a>
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
                                                            href="{{ route('buyer.detailSeller') }}">HP</a><br><a
                                                            class="color-brand-3 font-sm-bold"
                                                            href="{{ route('buyer.detailProduct') }}">HP 11.6&quot;
                                                            Chromebook,
                                                            AMD A4, 4GB RAM, 32GB Storage</a>
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
                                                                alt="Ecom"><span
                                                                class="font-xs color-gray-500">(65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                class="color-gray-500 price-line">$3225.6</span></div>
                                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-grid-style-3">
                                                <div class="card-grid-inner">
                                                    <div class="tools">
                                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                                            href="{{ route('buyer.wishlist') }}"
                                                            aria-label="Tambahkan ke Wishlist"></a>
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
                                                            href="{{ route('buyer.detailProduct') }}">2022 Apple iMac
                                                            with
                                                            Retina 5K Display 8GB RAM, 256GB SSD</a>
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
                                                                alt="Ecom"><span
                                                                class="font-xs color-gray-500">(65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                class="color-gray-500 price-line">$3225.6</span></div>
                                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-grid-style-3">
                                                <div class="card-grid-inner">
                                                    <div class="tools">
                                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                                            href="{{ route('buyer.wishlist') }}"
                                                            aria-label="Tambahkan ke Wishlist"></a>
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
                                                            href="{{ route('buyer.detailSeller') }}">SAMSUNG</a><br><a
                                                            class="color-brand-3 font-sm-bold"
                                                            href="{{ route('buyer.detailProduct') }}">SAMSUNG Galaxy Tab
                                                            A7
                                                            Lite, 8.7&quot; Tablet 32GB</a>
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
                                                                alt="Ecom"><span
                                                                class="font-xs color-gray-500">(65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                class="color-gray-500 price-line">$3225.6</span></div>
                                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="list-products-5">
                                            <div class="card-grid-style-3">
                                                <div class="card-grid-inner">
                                                    <div class="tools">
                                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                                            href="{{ route('buyer.wishlist') }}"
                                                            aria-label="Tambahkan ke Wishlist"></a>
                                                        {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                                    </div>
                                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                            href="{{ route('buyer.detailProduct') }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp1.png') }}"
                                                                alt="Ecom"></a></div>
                                                    <div class="info-right"><a class="font-xs color-gray-500"
                                                            href="{{ route('buyer.detailSeller') }}">Roku</a><br><a
                                                            class="color-brand-3 font-sm-bold"
                                                            href="{{ route('buyer.detailProduct') }}">Class 4K UHD
                                                            (2160P) LED
                                                            Roku Smart TV HDR</a>
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
                                                                alt="Ecom"><span
                                                                class="font-xs color-gray-500">(65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                class="color-gray-500 price-line">$3225.6</span></div>
                                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-grid-style-3">
                                                <div class="card-grid-inner">
                                                    <div class="tools">
                                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                                            href="{{ route('buyer.wishlist') }}"
                                                            aria-label="Tambahkan ke Wishlist"></a>
                                                        {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                                    </div>
                                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                            href="{{ route('buyer.detailProduct') }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp2.png') }}"
                                                                alt="Ecom"></a></div>
                                                    <div class="info-right"><a class="font-xs color-gray-500"
                                                            href="{{ route('buyer.detailSeller') }}">SAMSUNG</a><br><a
                                                            class="color-brand-3 font-sm-bold"
                                                            href="{{ route('buyer.detailProduct') }}">SAMSUNG Galaxy Tab
                                                            S7 Plus
                                                            12.4&quot; 128GB Mystic Black</a>
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
                                                                alt="Ecom"><span
                                                                class="font-xs color-gray-500">(65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                class="color-gray-500 price-line">$3225.6</span></div>
                                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-grid-style-3">
                                                <div class="card-grid-inner">
                                                    <div class="tools">
                                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                                            href="{{ route('buyer.wishlist') }}"
                                                            aria-label="Tambahkan ke Wishlist"></a>
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
                                                            href="{{ route('buyer.detailSeller') }}">HP</a><br><a
                                                            class="color-brand-3 font-sm-bold"
                                                            href="{{ route('buyer.detailProduct') }}">HP 11.6&quot;
                                                            Chromebook,
                                                            AMD A4, 4GB RAM, 32GB Storage</a>
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
                                                                alt="Ecom"><span
                                                                class="font-xs color-gray-500">(65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                class="color-gray-500 price-line">$3225.6</span></div>
                                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-grid-style-3">
                                                <div class="card-grid-inner">
                                                    <div class="tools">
                                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                                            href="{{ route('buyer.wishlist') }}"
                                                            aria-label="Tambahkan ke Wishlist"></a>
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
                                                            href="{{ route('buyer.detailProduct') }}">2022 Apple iMac
                                                            with
                                                            Retina 5K Display 8GB RAM, 256GB SSD</a>
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
                                                                alt="Ecom"><span
                                                                class="font-xs color-gray-500">(65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                class="color-gray-500 price-line">$3225.6</span></div>
                                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-grid-style-3">
                                                <div class="card-grid-inner">
                                                    <div class="tools">
                                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                                            href="{{ route('buyer.wishlist') }}"
                                                            aria-label="Tambahkan ke Wishlist"></a>
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
                                                            href="{{ route('buyer.detailSeller') }}">SAMSUNG</a><br><a
                                                            class="color-brand-3 font-sm-bold"
                                                            href="{{ route('buyer.detailProduct') }}">SAMSUNG Galaxy Tab
                                                            A7
                                                            Lite, 8.7&quot; Tablet 32GB</a>
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
                                                                alt="Ecom"><span
                                                                class="font-xs color-gray-500">(65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                class="color-gray-500 price-line">$3225.6</span></div>
                                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-1-mostviewed" role="tabpanel"
                        aria-labelledby="tab-1-mostviewed">
                        <div class="box-swiper">
                            <div class="swiper-container swiper-tab-3">
                                <div class="swiper-wrapper pt-5">
                                    <div class="swiper-slide">
                                        <div class="list-products-5">
                                            <div class="card-grid-style-3">
                                                <div class="card-grid-inner">
                                                    <div class="tools">
                                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                                            href="{{ route('buyer.wishlist') }}"
                                                            aria-label="Tambahkan ke Wishlist"></a>
                                                        {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                                    </div>
                                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                            href="{{ route('buyer.detailProduct') }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp2.png') }}"
                                                                alt="Ecom"></a></div>
                                                    <div class="info-right"><a class="font-xs color-gray-500"
                                                            href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                                                            class="color-brand-3 font-sm-bold"
                                                            href="{{ route('buyer.detailProduct') }}">MSI Optix G272
                                                            27&quot;
                                                            Full HD LED Gaming LCD Monitor</a>
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
                                                                alt="Ecom"><span
                                                                class="font-xs color-gray-500">(65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                class="color-gray-500 price-line">$3225.6</span></div>
                                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-grid-style-3">
                                                <div class="card-grid-inner">
                                                    <div class="tools">
                                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                                            href="{{ route('buyer.wishlist') }}"
                                                            aria-label="Tambahkan ke Wishlist"></a>
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
                                                            href="{{ route('buyer.detailProduct') }}">LG 65&quot; Class
                                                            4K UHD
                                                            Smart TV OLED A1 Series </a>
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
                                                                alt="Ecom"><span
                                                                class="font-xs color-gray-500">(65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                class="color-gray-500 price-line">$3225.6</span></div>
                                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-grid-style-3">
                                                <div class="card-grid-inner">
                                                    <div class="tools">
                                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                                            href="{{ route('buyer.wishlist') }}"
                                                            aria-label="Tambahkan ke Wishlist"></a>
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
                                                            href="{{ route('buyer.detailProduct') }}">2022 Apple iMac
                                                            with
                                                            Retina 5K Display 8GB RAM, 256GB SSD</a>
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
                                                                alt="Ecom"><span
                                                                class="font-xs color-gray-500">(65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                class="color-gray-500 price-line">$3225.6</span></div>
                                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-grid-style-3">
                                                <div class="card-grid-inner">
                                                    <div class="tools">
                                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                                            href="{{ route('buyer.wishlist') }}"
                                                            aria-label="Tambahkan ke Wishlist"></a>
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
                                                            href="{{ route('buyer.detailProduct') }}">Chromecast with
                                                            Google TV
                                                            - Streaming Entertainment</a>
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
                                                                alt="Ecom"><span
                                                                class="font-xs color-gray-500">(65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                class="color-gray-500 price-line">$3225.6</span></div>
                                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-grid-style-3">
                                                <div class="card-grid-inner">
                                                    <div class="tools">
                                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                                            href="{{ route('buyer.wishlist') }}"
                                                            aria-label="Tambahkan ke Wishlist"></a>
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
                                                            href="{{ route('buyer.detailProduct') }}">Apple Watch Series
                                                            7 GPS +
                                                            Cellular, 41mm Midnight</a>
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
                                                                alt="Ecom"><span
                                                                class="font-xs color-gray-500">(65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                class="color-gray-500 price-line">$3225.6</span></div>
                                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="list-products-5">
                                            <div class="card-grid-style-3">
                                                <div class="card-grid-inner">
                                                    <div class="tools">
                                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                                            href="{{ route('buyer.wishlist') }}"
                                                            aria-label="Tambahkan ke Wishlist"></a>
                                                        {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                                    </div>
                                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                            href="{{ route('buyer.detailProduct') }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp2.png') }}"
                                                                alt="Ecom"></a></div>
                                                    <div class="info-right"><a class="font-xs color-gray-500"
                                                            href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                                                            class="color-brand-3 font-sm-bold"
                                                            href="{{ route('buyer.detailProduct') }}">MSI Optix G272
                                                            27&quot;
                                                            Full HD LED Gaming LCD Monitor</a>
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
                                                                alt="Ecom"><span
                                                                class="font-xs color-gray-500">(65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                class="color-gray-500 price-line">$3225.6</span></div>
                                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-grid-style-3">
                                                <div class="card-grid-inner">
                                                    <div class="tools">
                                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                                            href="{{ route('buyer.wishlist') }}"
                                                            aria-label="Tambahkan ke Wishlist"></a>
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
                                                            href="{{ route('buyer.detailProduct') }}">LG 65&quot; Class
                                                            4K UHD
                                                            Smart TV OLED A1 Series </a>
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
                                                                alt="Ecom"><span
                                                                class="font-xs color-gray-500">(65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                class="color-gray-500 price-line">$3225.6</span></div>
                                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-grid-style-3">
                                                <div class="card-grid-inner">
                                                    <div class="tools">
                                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                                            href="{{ route('buyer.wishlist') }}"
                                                            aria-label="Tambahkan ke Wishlist"></a>
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
                                                            href="{{ route('buyer.detailProduct') }}">2022 Apple iMac
                                                            with
                                                            Retina 5K Display 8GB RAM, 256GB SSD</a>
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
                                                                alt="Ecom"><span
                                                                class="font-xs color-gray-500">(65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                class="color-gray-500 price-line">$3225.6</span></div>
                                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-grid-style-3">
                                                <div class="card-grid-inner">
                                                    <div class="tools">
                                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                                            href="{{ route('buyer.wishlist') }}"
                                                            aria-label="Tambahkan ke Wishlist"></a>
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
                                                            href="{{ route('buyer.detailProduct') }}">Chromecast with
                                                            Google TV
                                                            - Streaming Entertainment</a>
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
                                                                alt="Ecom"><span
                                                                class="font-xs color-gray-500">(65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                class="color-gray-500 price-line">$3225.6</span></div>
                                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-grid-style-3">
                                                <div class="card-grid-inner">
                                                    <div class="tools">
                                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                                            href="{{ route('buyer.wishlist') }}"
                                                            aria-label="Tambahkan ke Wishlist"></a>
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
                                                            href="{{ route('buyer.detailProduct') }}">Apple Watch Series
                                                            7 GPS +
                                                            Cellular, 41mm Midnight</a>
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
                                                                alt="Ecom"><span
                                                                class="font-xs color-gray-500">(65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                class="color-gray-500 price-line">$3225.6</span></div>
                                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="section-box pt-60 pb-60 bg-gray-50 mt-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8">
                        <div class="box-content">
                            <div class="head-main bd-gray-200">
                                <div class="row">
                                    <div class="col-xl-7 col-lg-6">
                                        <h4 class="mb-5">Produk yang Sedang Tren</h4>
                                    </div>
                                    <div class="col-xl-5 col-lg-6">
                                        <!-- Button slider-->
                                        <div class="box-button-slider-normal">
                                            <div class="button-slider-nav" id="tab-1-all-nav">
                                                <div class="swiper-button-prev swiper-button-prev-tab-4"></div>
                                                <div class="swiper-button-next swiper-button-next-tab-4"></div>
                                            </div>
                                        </div>
                                        <!-- End Button slider-->
                                    </div>
                                </div>
                            </div>
                            <div class="box-swiper">
                                <div class="swiper-container swiper-tab-4">
                                    <div class="swiper-wrapper pt-5">
                                        <div class="swiper-slide">
                                            <div class="row">
                                                <div class="col-xl-3 col-lg-6 col-md-6">
                                                    <div class="card-grid-style-3">
                                                        <div class="card-grid-inner">
                                                            <div class="tools">
                                                                {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                                <a class="btn btn-wishlist btn-tooltip mb-10"
                                                                    href="{{ route('buyer.wishlist') }}"
                                                                    aria-label="Tambahkan ke Wishlist"></a>
                                                                {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                                            </div>
                                                            <div class="image-box"><span
                                                                    class="label bg-brand-2">-17%</span><a
                                                                    href="{{ route('buyer.detailProduct') }}"><img
                                                                        src="{{ asset('ecom/imgs/page/homepage1/imgsp3.png') }}"
                                                                        alt="Ecom"></a></div>
                                                            <div class="info-right"><a class="font-xs color-gray-500"
                                                                    href="{{ route('buyer.detailSeller') }}">SAMSUNG</a><br><a
                                                                    class="color-brand-3 font-sm-bold"
                                                                    href="{{ route('buyer.detailProduct') }}">SAMSUNG
                                                                    Galaxy Tab
                                                                    A7 Lite, 8.7&quot; Tablet 32GB</a>
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
                                                                        alt="Ecom"><span
                                                                        class="font-xs color-gray-500">(65)</span>
                                                                </div>
                                                                <div class="price-info"><strong
                                                                        class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                        class="color-gray-500 price-line">$3225.6</span>
                                                                </div>
                                                                <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                        href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-md-6">
                                                    <div class="card-grid-style-3">
                                                        <div class="card-grid-inner">
                                                            <div class="tools">
                                                                {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                                <a class="btn btn-wishlist btn-tooltip mb-10"
                                                                    href="{{ route('buyer.wishlist') }}"
                                                                    aria-label="Tambahkan ke Wishlist"></a>
                                                                {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                                            </div>
                                                            <div class="image-box"><span
                                                                    class="label bg-brand-2">-17%</span><a
                                                                    href="{{ route('buyer.detailProduct') }}"><img
                                                                        src="{{ asset('ecom/imgs/page/homepage1/imgsp4.png') }}"
                                                                        alt="Ecom"></a></div>
                                                            <div class="info-right"><a class="font-xs color-gray-500"
                                                                    href="{{ route('buyer.detailSeller') }}">Dell</a><br><a
                                                                    class="color-brand-3 font-sm-bold"
                                                                    href="{{ route('buyer.detailProduct') }}">Dell
                                                                    Optiplex 9020
                                                                    Small Form Business Desktop</a>
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
                                                                        alt="Ecom"><span
                                                                        class="font-xs color-gray-500">(65)</span>
                                                                </div>
                                                                <div class="price-info"><strong
                                                                        class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                        class="color-gray-500 price-line">$3225.6</span>
                                                                </div>
                                                                <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                        href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-md-6">
                                                    <div class="card-grid-style-3">
                                                        <div class="card-grid-inner">
                                                            <div class="tools">
                                                                {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                                <a class="btn btn-wishlist btn-tooltip mb-10"
                                                                    href="{{ route('buyer.wishlist') }}"
                                                                    aria-label="Tambahkan ke Wishlist"></a>
                                                                {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                                            </div>
                                                            <div class="image-box"><span
                                                                    class="label bg-brand-2">-17%</span><a
                                                                    href="{{ route('buyer.detailProduct') }}"><img
                                                                        src="{{ asset('ecom/imgs/page/homepage1/imgsp5.png') }}"
                                                                        alt="Ecom"></a></div>
                                                            <div class="info-right"><a class="font-xs color-gray-500"
                                                                    href="{{ route('buyer.detailSeller') }}">Gateway</a><br><a
                                                                    class="color-brand-3 font-sm-bold"
                                                                    href="{{ route('buyer.detailProduct') }}">Gateway
                                                                    23.8&quot;
                                                                    All-in-one Desktop, Fully Adjustable</a>
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
                                                                        alt="Ecom"><span
                                                                        class="font-xs color-gray-500">(65)</span>
                                                                </div>
                                                                <div class="price-info"><strong
                                                                        class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                        class="color-gray-500 price-line">$3225.6</span>
                                                                </div>
                                                                <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                        href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-md-6">
                                                    <div class="card-grid-style-3">
                                                        <div class="card-grid-inner">
                                                            <div class="tools">
                                                                {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                                <a class="btn btn-wishlist btn-tooltip mb-10"
                                                                    href="{{ route('buyer.wishlist') }}"
                                                                    aria-label="Tambahkan ke Wishlist"></a>
                                                                {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                                            </div>
                                                            <div class="image-box"><span
                                                                    class="label bg-brand-2">-17%</span><a
                                                                    href="{{ route('buyer.detailProduct') }}"><img
                                                                        src="{{ asset('ecom/imgs/page/homepage1/imgsp6.png') }}"
                                                                        alt="Ecom"></a></div>
                                                            <div class="info-right"><a class="font-xs color-gray-500"
                                                                    href="{{ route('buyer.detailSeller') }}">HP</a><br><a
                                                                    class="color-brand-3 font-sm-bold"
                                                                    href="{{ route('buyer.detailProduct') }}">HP 22
                                                                    All-in-One
                                                                    PC, Intel Pentium J5040, 4GB RAM</a>
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
                                                                        alt="Ecom"><span
                                                                        class="font-xs color-gray-500">(65)</span>
                                                                </div>
                                                                <div class="price-info"><strong
                                                                        class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                        class="color-gray-500 price-line">$3225.6</span>
                                                                </div>
                                                                <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                        href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-md-6">
                                                    <div class="card-grid-style-3">
                                                        <div class="card-grid-inner">
                                                            <div class="tools">
                                                                {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                                <a class="btn btn-wishlist btn-tooltip mb-10"
                                                                    href="{{ route('buyer.wishlist') }}"
                                                                    aria-label="Tambahkan ke Wishlist"></a>
                                                                {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                                            </div>
                                                            <div class="image-box"><span
                                                                    class="label bg-brand-2">-17%</span><a
                                                                    href="{{ route('buyer.detailProduct') }}"><img
                                                                        src="{{ asset('ecom/imgs/page/homepage1/imgsp7.png') }}"
                                                                        alt="Ecom"></a></div>
                                                            <div class="info-right"><a class="font-xs color-gray-500"
                                                                    href="{{ route('buyer.detailSeller') }}">Roku</a><br><a
                                                                    class="color-brand-3 font-sm-bold"
                                                                    href="{{ route('buyer.detailProduct') }}">Class 4K
                                                                    UHD
                                                                    (2160P) LED Roku Smart TV HDR</a>
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
                                                                        alt="Ecom"><span
                                                                        class="font-xs color-gray-500">(65)</span>
                                                                </div>
                                                                <div class="price-info"><strong
                                                                        class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                        class="color-gray-500 price-line">$3225.6</span>
                                                                </div>
                                                                <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                        href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-md-6">
                                                    <div class="card-grid-style-3">
                                                        <div class="card-grid-inner">
                                                            <div class="tools">
                                                                {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                                <a class="btn btn-wishlist btn-tooltip mb-10"
                                                                    href="{{ route('buyer.wishlist') }}"
                                                                    aria-label="Tambahkan ke Wishlist"></a>
                                                                {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                                            </div>
                                                            <div class="image-box"><span
                                                                    class="label bg-brand-2">-17%</span><a
                                                                    href="{{ route('buyer.detailProduct') }}"><img
                                                                        src="{{ asset('ecom/imgs/page/homepage1/imgsp3.png') }}"
                                                                        alt="Ecom"></a></div>
                                                            <div class="info-right"><a class="font-xs color-gray-500"
                                                                    href="{{ route('buyer.detailSeller') }}">SAMSUNG</a><br><a
                                                                    class="color-brand-3 font-sm-bold"
                                                                    href="{{ route('buyer.detailProduct') }}">SAMSUNG
                                                                    Galaxy Tab
                                                                    S7 Plus 12.4&quot; 128GB Mystic Black</a>
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
                                                                        alt="Ecom"><span
                                                                        class="font-xs color-gray-500">(65)</span>
                                                                </div>
                                                                <div class="price-info"><strong
                                                                        class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                        class="color-gray-500 price-line">$3225.6</span>
                                                                </div>
                                                                <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                        href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-md-6">
                                                    <div class="card-grid-style-3">
                                                        <div class="card-grid-inner">
                                                            <div class="tools">
                                                                {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                                <a class="btn btn-wishlist btn-tooltip mb-10"
                                                                    href="{{ route('buyer.wishlist') }}"
                                                                    aria-label="Tambahkan ke Wishlist"></a>
                                                                {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                                            </div>
                                                            <div class="image-box"><span
                                                                    class="label bg-brand-2">-17%</span><a
                                                                    href="{{ route('buyer.detailProduct') }}"><img
                                                                        src="{{ asset('ecom/imgs/page/homepage1/imgsp4.png') }}"
                                                                        alt="Ecom"></a></div>
                                                            <div class="info-right"><a class="font-xs color-gray-500"
                                                                    href="{{ route('buyer.detailSeller') }}">MSI</a><br><a
                                                                    class="color-brand-3 font-sm-bold"
                                                                    href="{{ route('buyer.detailProduct') }}">MSI Optix
                                                                    G272
                                                                    27&quot; Full HD LED Gaming LCD Monitor</a>
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
                                                                        alt="Ecom"><span
                                                                        class="font-xs color-gray-500">(65)</span>
                                                                </div>
                                                                <div class="price-info"><strong
                                                                        class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                        class="color-gray-500 price-line">$3225.6</span>
                                                                </div>
                                                                <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                        href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-md-6">
                                                    <div class="card-grid-style-3">
                                                        <div class="card-grid-inner">
                                                            <div class="tools">
                                                                {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                                <a class="btn btn-wishlist btn-tooltip mb-10"
                                                                    href="{{ route('buyer.wishlist') }}"
                                                                    aria-label="Tambahkan ke Wishlist"></a>
                                                                {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                                            </div>
                                                            <div class="image-box"><span
                                                                    class="label bg-brand-2">-17%</span><a
                                                                    href="{{ route('buyer.detailProduct') }}"><img
                                                                        src="{{ asset('ecom/imgs/page/homepage1/imgsp5.png') }}"
                                                                        alt="Ecom"></a></div>
                                                            <div class="info-right"><a class="font-xs color-gray-500"
                                                                    href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                                                                    class="color-brand-3 font-sm-bold"
                                                                    href="{{ route('buyer.detailProduct') }}">Apple
                                                                    AirPods Pro
                                                                    with MagSafe Charging Case</a>
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
                                                                        alt="Ecom"><span
                                                                        class="font-xs color-gray-500">(65)</span>
                                                                </div>
                                                                <div class="price-info"><strong
                                                                        class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                        class="color-gray-500 price-line">$3225.6</span>
                                                                </div>
                                                                <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                        href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-20"><a href="{{ route('buyer.detailProduct') }}"><img
                                        src="{{ asset('ecom/imgs/page/homepage4/banner-ads.png') }}"
                                        alt="Ecom"></a></div>
                        </div>
                        <div class="box-content mt-45">
                            <div class="head-main bd-gray-200">
                                <div class="row">
                                    <div class="col-xl-7 col-lg-6">
                                        <h4 class="mb-5">Produk Rating Tinggi</h4>
                                    </div>
                                    <div class="col-xl-5 col-lg-6">
                                        <!-- Button slider-->
                                        <div class="box-button-slider-normal">
                                            <div class="button-slider-nav" id="tab-2-all-nav">
                                                <div class="swiper-button-prev swiper-button-prev-tab-5"></div>
                                                <div class="swiper-button-next swiper-button-next-tab-5"></div>
                                            </div>
                                        </div>
                                        <!-- End Button slider-->
                                    </div>
                                </div>
                            </div>
                            <div class="box-swiper">
                                <div class="swiper-container swiper-tab-5">
                                    <div class="swiper-wrapper pt-5">
                                        <div class="swiper-slide">
                                            <div class="row">
                                                <div class="col-xl-3 col-lg-6 col-md-6">
                                                    <div class="card-grid-style-3">
                                                        <div class="card-grid-inner">
                                                            <div class="tools">
                                                                {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                                <a class="btn btn-wishlist btn-tooltip mb-10"
                                                                    href="{{ route('buyer.wishlist') }}"
                                                                    aria-label="Tambahkan ke Wishlist"></a>
                                                                {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                                            </div>
                                                            <div class="image-box"><span
                                                                    class="label bg-brand-2">-17%</span><a
                                                                    href="{{ route('buyer.detailProduct') }}"><img
                                                                        src="{{ asset('ecom/imgs/page/homepage1/imgsp3.png') }}"
                                                                        alt="Ecom"></a></div>
                                                            <div class="info-right"><a class="font-xs color-gray-500"
                                                                    href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                                                                    class="color-brand-3 font-sm-bold"
                                                                    href="{{ route('buyer.detailProduct') }}">Apple
                                                                    AirPods Pro
                                                                    with MagSafe Charging Case</a>
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
                                                                        alt="Ecom"><span
                                                                        class="font-xs color-gray-500">(65)</span>
                                                                </div>
                                                                <div class="price-info"><strong
                                                                        class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                        class="color-gray-500 price-line">$3225.6</span>
                                                                </div>
                                                                <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                        href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-md-6">
                                                    <div class="card-grid-style-3">
                                                        <div class="card-grid-inner">
                                                            <div class="tools">
                                                                {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                                <a class="btn btn-wishlist btn-tooltip mb-10"
                                                                    href="{{ route('buyer.wishlist') }}"
                                                                    aria-label="Tambahkan ke Wishlist"></a>
                                                                {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                                            </div>
                                                            <div class="image-box"><span
                                                                    class="label bg-brand-2">-17%</span><a
                                                                    href="{{ route('buyer.detailProduct') }}"><img
                                                                        src="{{ asset('ecom/imgs/page/homepage1/imgsp4.png') }}"
                                                                        alt="Ecom"></a></div>
                                                            <div class="info-right"><a class="font-xs color-gray-500"
                                                                    href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                                                                    class="color-brand-3 font-sm-bold"
                                                                    href="{{ route('buyer.detailProduct') }}">2022 Apple
                                                                    iMac
                                                                    with Retina 5K Display 8GB RAM, 256GB</a>
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
                                                                        alt="Ecom"><span
                                                                        class="font-xs color-gray-500">(65)</span>
                                                                </div>
                                                                <div class="price-info"><strong
                                                                        class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                        class="color-gray-500 price-line">$3225.6</span>
                                                                </div>
                                                                <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                        href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-md-6">
                                                    <div class="card-grid-style-3">
                                                        <div class="card-grid-inner">
                                                            <div class="tools">
                                                                {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                                <a class="btn btn-wishlist btn-tooltip mb-10"
                                                                    href="{{ route('buyer.wishlist') }}"
                                                                    aria-label="Tambahkan ke Wishlist"></a>
                                                                {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                                            </div>
                                                            <div class="image-box"><span
                                                                    class="label bg-brand-2">-17%</span><a
                                                                    href="{{ route('buyer.detailProduct') }}"><img
                                                                        src="{{ asset('ecom/imgs/page/homepage1/imgsp5.png') }}"
                                                                        alt="Ecom"></a></div>
                                                            <div class="info-right"><a class="font-xs color-gray-500"
                                                                    href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                                                                    class="color-brand-3 font-sm-bold"
                                                                    href="{{ route('buyer.detailProduct') }}">Chromecast
                                                                    with
                                                                    Google TV - Streaming</a>
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
                                                                        alt="Ecom"><span
                                                                        class="font-xs color-gray-500">(65)</span>
                                                                </div>
                                                                <div class="price-info"><strong
                                                                        class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                        class="color-gray-500 price-line">$3225.6</span>
                                                                </div>
                                                                <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                        href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-md-6">
                                                    <div class="card-grid-style-3">
                                                        <div class="card-grid-inner">
                                                            <div class="tools">
                                                                {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                                <a class="btn btn-wishlist btn-tooltip mb-10"
                                                                    href="{{ route('buyer.wishlist') }}"
                                                                    aria-label="Tambahkan ke Wishlist"></a>
                                                                {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                                            </div>
                                                            <div class="image-box"><span
                                                                    class="label bg-brand-2">-17%</span><a
                                                                    href="{{ route('buyer.detailProduct') }}"><img
                                                                        src="{{ asset('ecom/imgs/page/homepage1/imgsp6.png') }}"
                                                                        alt="Ecom"></a></div>
                                                            <div class="info-right"><a class="font-xs color-gray-500"
                                                                    href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                                                                    class="color-brand-3 font-sm-bold"
                                                                    href="{{ route('buyer.detailProduct') }}">2HDR Smart
                                                                    Portable Projector - SP-LSP3BL</a>
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
                                                                        alt="Ecom"><span
                                                                        class="font-xs color-gray-500">(65)</span>
                                                                </div>
                                                                <div class="price-info"><strong
                                                                        class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                        class="color-gray-500 price-line">$3225.6</span>
                                                                </div>
                                                                <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                        href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-md-6">
                                                    <div class="card-grid-style-3">
                                                        <div class="card-grid-inner">
                                                            <div class="tools">
                                                                {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                                <a class="btn btn-wishlist btn-tooltip mb-10"
                                                                    href="{{ route('buyer.wishlist') }}"
                                                                    aria-label="Tambahkan ke Wishlist"></a>
                                                                {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                                            </div>
                                                            <div class="image-box"><span
                                                                    class="label bg-brand-2">-17%</span><a
                                                                    href="{{ route('buyer.detailProduct') }}"><img
                                                                        src="{{ asset('ecom/imgs/page/homepage1/imgsp7.png') }}"
                                                                        alt="Ecom"></a></div>
                                                            <div class="info-right"><a class="font-xs color-gray-500"
                                                                    href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                                                                    class="color-brand-3 font-sm-bold"
                                                                    href="{{ route('buyer.detailProduct') }}">SAMSUNG
                                                                    Galaxy Tab
                                                                    A7 Lite, 8.7&quot; Tablet 32GB</a>
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
                                                                        alt="Ecom"><span
                                                                        class="font-xs color-gray-500">(65)</span>
                                                                </div>
                                                                <div class="price-info"><strong
                                                                        class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                        class="color-gray-500 price-line">$3225.6</span>
                                                                </div>
                                                                <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                        href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-md-6">
                                                    <div class="card-grid-style-3">
                                                        <div class="card-grid-inner">
                                                            <div class="tools">
                                                                {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                                <a class="btn btn-wishlist btn-tooltip mb-10"
                                                                    href="{{ route('buyer.wishlist') }}"
                                                                    aria-label="Tambahkan ke Wishlist"></a>
                                                                {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                                            </div>
                                                            <div class="image-box"><span
                                                                    class="label bg-brand-2">-17%</span><a
                                                                    href="{{ route('buyer.detailProduct') }}"><img
                                                                        src="{{ asset('ecom/imgs/page/homepage1/imgsp3.png') }}"
                                                                        alt="Ecom"></a></div>
                                                            <div class="info-right"><a class="font-xs color-gray-500"
                                                                    href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                                                                    class="color-brand-3 font-sm-bold"
                                                                    href="{{ route('buyer.detailProduct') }}">Class 4K
                                                                    UHD
                                                                    (2160P) LED Roku Smart TV HDR</a>
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
                                                                        alt="Ecom"><span
                                                                        class="font-xs color-gray-500">(65)</span>
                                                                </div>
                                                                <div class="price-info"><strong
                                                                        class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                        class="color-gray-500 price-line">$3225.6</span>
                                                                </div>
                                                                <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                        href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-md-6">
                                                    <div class="card-grid-style-3">
                                                        <div class="card-grid-inner">
                                                            <div class="tools">
                                                                {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                                <a class="btn btn-wishlist btn-tooltip mb-10"
                                                                    href="{{ route('buyer.wishlist') }}"
                                                                    aria-label="Tambahkan ke Wishlist"></a>
                                                                {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                                            </div>
                                                            <div class="image-box"><span
                                                                    class="label bg-brand-2">-17%</span><a
                                                                    href="{{ route('buyer.detailProduct') }}"><img
                                                                        src="{{ asset('ecom/imgs/page/homepage1/imgsp4.png') }}"
                                                                        alt="Ecom"></a></div>
                                                            <div class="info-right"><a class="font-xs color-gray-500"
                                                                    href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                                                                    class="color-brand-3 font-sm-bold"
                                                                    href="{{ route('buyer.detailProduct') }}">HP 24
                                                                    All-in-One
                                                                    PC, Intel Core i3-1115G4, 4GB RAM</a>
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
                                                                        alt="Ecom"><span
                                                                        class="font-xs color-gray-500">(65)</span>
                                                                </div>
                                                                <div class="price-info"><strong
                                                                        class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                        class="color-gray-500 price-line">$3225.6</span>
                                                                </div>
                                                                <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                        href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 col-md-6">
                                                    <div class="card-grid-style-3">
                                                        <div class="card-grid-inner">
                                                            <div class="tools">
                                                                {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a> --}}
                                                                <a class="btn btn-wishlist btn-tooltip mb-10"
                                                                    href="{{ route('buyer.wishlist') }}"
                                                                    aria-label="Tambahkan ke Wishlist"></a>
                                                                {{--
                                    <a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a> --}}
                                                            </div>
                                                            <div class="image-box"><span
                                                                    class="label bg-brand-2">-17%</span><a
                                                                    href="{{ route('buyer.detailProduct') }}"><img
                                                                        src="{{ asset('ecom/imgs/page/homepage1/imgsp5.png') }}"
                                                                        alt="Ecom"></a></div>
                                                            <div class="info-right"><a class="font-xs color-gray-500"
                                                                    href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                                                                    class="color-brand-3 font-sm-bold"
                                                                    href="{{ route('buyer.detailProduct') }}">Dell
                                                                    Optiplex 9020
                                                                    Small Form Business Desktop</a>
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
                                                                        alt="Ecom"><span
                                                                        class="font-xs color-gray-500">(65)</span>
                                                                </div>
                                                                <div class="price-info"><strong
                                                                        class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                                        class="color-gray-500 price-line">$3225.6</span>
                                                                </div>
                                                                <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                                        href="{{ route('buyer.cart') }}">Keranjang</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="box-slider-item box-sidebar">
                            <div class="head">
                                <h4 class="d-inline-block">Penjualan Terbaik</h4>
                                <div class="box-button-control">
                                    <div
                                        class="swiper-button-prev swiper-button-prev-style-2 swiper-button-prev-bestseller">
                                    </div>
                                    <div
                                        class="swiper-button-next swiper-button-next-style-2 swiper-button-next-bestseller">
                                    </div>
                                </div>
                            </div>
                            <div class="content-slider pl-10 pr-10">
                                <div class="box-swiper">
                                    <div class="swiper-container swiper-best-seller">
                                        <div class="swiper-wrapper pt-5">
                                            <div class="swiper-slide">
                                                <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                            href="{{ route('buyer.detailProduct') }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage2/camera.png') }}"
                                                                alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                            href="{{ route('buyer.detailProduct') }}">LG 65&quot; Class
                                                            4K UHD
                                                            Smart TV OLED A1 Series </a>
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
                                                                alt="Ecom"><span class="font-xs color-gray-500">
                                                                (65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-md-bold color-brand-3 price-main">$2556.3</strong><span
                                                                class="color-gray-500 font-sm price-line">$3225.6</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                    <div class="image-box"><a
                                                            href="{{ route('buyer.detailProduct') }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage2/clock.png') }}"
                                                                alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                            href="{{ route('buyer.detailProduct') }}">Chromecast with
                                                            Google TV
                                                            - Streaming Entertainment</a>
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
                                                                alt="Ecom"><span class="font-xs color-gray-500">
                                                                (65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-md-bold color-brand-3 price-main">$2556.3</strong><span
                                                                class="color-gray-500 font-sm price-line">$3225.6</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                    <div class="image-box"><a
                                                            href="{{ route('buyer.detailProduct') }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage2/airpod.png') }}"
                                                                alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                            href="{{ route('buyer.detailProduct') }}">2022 Apple iMac
                                                            with
                                                            Retina 5K Display 8GB RAM, 256GB SSD</a>
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
                                                                alt="Ecom"><span class="font-xs color-gray-500">
                                                                (65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-md-bold color-brand-3 price-main">$2556.3</strong><span
                                                                class="color-gray-500 font-sm price-line">$3225.6</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                    <div class="image-box"><a
                                                            href="{{ route('buyer.detailProduct') }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage2/camera.png') }}"
                                                                alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                            href="{{ route('buyer.detailProduct') }}">RCA 43&quot; Class
                                                            4K
                                                            Ultra HD (2160P) HDR Roku Smart</a>
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
                                                                alt="Ecom"><span class="font-xs color-gray-500">
                                                                (65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-md-bold color-brand-3 price-main">$2556.3</strong><span
                                                                class="color-gray-500 font-sm price-line">$3225.6</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                    <div class="image-box"><a
                                                            href="{{ route('buyer.detailProduct') }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage2/clock.png') }}"
                                                                alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                            href="{{ route('buyer.detailProduct') }}">Apple Watch Series
                                                            7 GPS +
                                                            Cellular, 41mm Midnight</a>
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
                                                                alt="Ecom"><span class="font-xs color-gray-500">
                                                                (65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-md-bold color-brand-3 price-main">$2556.3</strong><span
                                                                class="color-gray-500 font-sm price-line">$3225.6</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                    <div class="image-box"><a
                                                            href="{{ route('buyer.detailProduct') }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage2/airpod.png') }}"
                                                                alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                            href="{{ route('buyer.detailProduct') }}">HP 11.6&quot;
                                                            Chromebook,
                                                            AMD A4, 4GB RAM, 32GB Storage</a>
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
                                                                alt="Ecom"><span class="font-xs color-gray-500">
                                                                (65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-md-bold color-brand-3 price-main">$2556.3</strong><span
                                                                class="color-gray-500 font-sm price-line">$3225.6</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-slider-item box-sidebar">
                            <div class="head">
                                <h4 class="d-inline-block">Produk Baru</h4>
                                <div class="box-button-control">
                                    <div
                                        class="swiper-button-prev swiper-button-prev-style-2 swiper-button-prev-featured">
                                    </div>
                                    <div
                                        class="swiper-button-next swiper-button-next-style-2 swiper-button-next-featured">
                                    </div>
                                </div>
                            </div>
                            <div class="content-slider pl-10 pr-10">
                                <div class="box-swiper">
                                    <div class="swiper-container swiper-featured">
                                        <div class="swiper-wrapper pt-5">
                                            <div class="swiper-slide">
                                                <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                            href="{{ route('buyer.detailProduct') }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage2/camera.png') }}"
                                                                alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                            href="{{ route('buyer.detailProduct') }}">2022 Apple iMac
                                                            with
                                                            Retina 5K Display 8GB RAM, 256GB SSD</a>
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
                                                                alt="Ecom"><span class="font-xs color-gray-500">
                                                                (65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-md-bold color-brand-3 price-main">$2556.3</strong><span
                                                                class="color-gray-500 font-sm price-line">$3225.6</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                    <div class="image-box"><a
                                                            href="{{ route('buyer.detailProduct') }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage2/clock.png') }}"
                                                                alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                            href="{{ route('buyer.detailProduct') }}">HP 11.6&quot;
                                                            Chromebook,
                                                            AMD A4, 4GB RAM, 32GB Storage</a>
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
                                                                alt="Ecom"><span class="font-xs color-gray-500">
                                                                (65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-md-bold color-brand-3 price-main">$2556.3</strong><span
                                                                class="color-gray-500 font-sm price-line">$3225.6</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                    <div class="image-box"><a
                                                            href="{{ route('buyer.detailProduct') }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage2/airpod.png') }}"
                                                                alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                            href="{{ route('buyer.detailProduct') }}">MSI Optix G272
                                                            27&quot;
                                                            Full HD LED Gaming LCD Monitor</a>
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
                                                                alt="Ecom"><span class="font-xs color-gray-500">
                                                                (65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-md-bold color-brand-3 price-main">$2556.3</strong><span
                                                                class="color-gray-500 font-sm price-line">$3225.6</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                    <div class="image-box"><a
                                                            href="{{ route('buyer.detailProduct') }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage2/camera.png') }}"
                                                                alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                            href="{{ route('buyer.detailProduct') }}">Apple Watch Series
                                                            7 GPS +
                                                            Cellular, 41mm Midnight</a>
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
                                                                alt="Ecom"><span class="font-xs color-gray-500">
                                                                (65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-md-bold color-brand-3 price-main">$2556.3</strong><span
                                                                class="color-gray-500 font-sm price-line">$3225.6</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                    <div class="image-box"><a
                                                            href="{{ route('buyer.detailProduct') }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage2/clock.png') }}"
                                                                alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                            href="{{ route('buyer.detailProduct') }}">LG 65&quot; Class
                                                            4K UHD
                                                            Smart TV OLED A1 Series D</a>
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
                                                                alt="Ecom"><span class="font-xs color-gray-500">
                                                                (65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-md-bold color-brand-3 price-main">$2556.3</strong><span
                                                                class="color-gray-500 font-sm price-line">$3225.6</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                    <div class="image-box"><a
                                                            href="{{ route('buyer.detailProduct') }}"><img
                                                                src="{{ asset('ecom/imgs/page/homepage2/airpod.png') }}"
                                                                alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                            href="{{ route('buyer.detailProduct') }}">2022 Apple iMac
                                                            with
                                                            Retina 5K Display 8GB RAM, 256GB SSD</a>
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
                                                                alt="Ecom"><span class="font-xs color-gray-500">
                                                                (65)</span></div>
                                                        <div class="price-info"><strong
                                                                class="font-md-bold color-brand-3 price-main">$2556.3</strong><span
                                                                class="color-gray-500 font-sm price-line">$3225.6</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="section-box pt-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-5 col-md-5 col-sm-12 mb-30">
                        <div class="bg-5 block-iphone"><span class="color-brand-3 font-sm-lh32">Starting from
                                $899</span>
                            <h3 class="font-xl mb-10">iPhone 12 Pro 128Gb</h3>
                            <p class="font-base color-brand-3 mb-10">Special Sale</p><a class="btn btn-arrow"
                                href="{{ route('buyer.allGridProduct') }}">Selengkapnya</a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-7 col-md-7 col-sm-12 mb-30">
                        <div class="bg-4 block-samsung"><span class="color-brand-3 font-sm-lh32">New Arrivals</span>
                            <h3 class="font-xl mb-10">Samsung 2022 Led TV</h3>
                            <p class="font-base color-brand-3 mb-20">Special Sale</p><a
                                class="btn btn-brand-2 btn-arrow-right"
                                href="{{ route('buyer.allGridProduct') }}">Selengkapnya</a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12">
                        <div class="bg-6 block-drone">
                            <h3 class="font-33 mb-20">Drone Quadcopter UAV - DJI Air 2S</h3>
                            <div class="mb-30"><strong class="font-18">Gimbal Camera, 5.4K Video</strong></div><a
                                class="btn btn-brand-2 btn-arrow-right"
                                href="{{ route('buyer.allGridProduct') }}">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-box mt-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="head-main">
                            <h3 class="mb-5">Produk Terlaris</h3>
                            <p class="font-base color-gray-500">Produk spesial di bulan ini.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card-grid-style-2">
                            <div class="image-box"><a href="#"><img
                                        src="{{ asset('ecom/imgs/page/homepage1/imgsp1.png') }}" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><span class="font-xs color-gray-500">SAMSUNG</span><br><a
                                    class="color-brand-3 font-sm-bold" href="#">SAMSUNG Galaxy Tab S7 Plus
                                    12.4&quot; 128GB Mystic Black</a>
                                <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                                <div class="price-info"><strong
                                        class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span
                                        class="color-gray-500 price-line">$3225.6</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card-grid-style-2">
                            <div class="image-box"><a href="#"><img
                                        src="{{ asset('ecom/imgs/page/homepage1/imgsp2.png') }}" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><span class="font-xs color-gray-500">HP</span><br><a
                                    class="color-brand-3 font-sm-bold" href="#">HP 11.6&quot; Chromebook, AMD
                                    A4, 4GB RAM, 32GB Storage</a>
                                <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                                <div class="price-info"><strong
                                        class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span
                                        class="color-gray-500 price-line">$3225.6</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card-grid-style-2">
                            <div class="image-box"><a href="#"><img
                                        src="{{ asset('ecom/imgs/page/homepage1/imgsp1.png') }}" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><span class="font-xs color-gray-500">RCA</span><br><a
                                    class="color-brand-3 font-sm-bold" href="#">RCA 43&quot; Class 4K Ultra HD
                                    (2160P) HDR Roku Smart</a>
                                <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                                <div class="price-info"><strong
                                        class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span
                                        class="color-gray-500 price-line">$3225.6</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card-grid-style-2">
                            <div class="image-box"><a href="#"><img
                                        src="{{ asset('ecom/imgs/page/homepage1/imgsp2.png') }}" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><span class="font-xs color-gray-500">ASUS</span><br><a
                                    class="color-brand-3 font-sm-bold" href="#">ASUS VivoBook 15.6&quot; 1080p
                                    PC Laptops, Intel Core i3</a>
                                <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                                <div class="price-info"><strong
                                        class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span
                                        class="color-gray-500 price-line">$3225.6</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card-grid-style-2">
                            <div class="image-box"><a href="#"><img
                                        src="{{ asset('ecom/imgs/page/homepage1/imgsp1.png') }}" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><span class="font-xs color-gray-500">LG</span><br><a
                                    class="color-brand-3 font-sm-bold" href="#">LG 65&quot; Class 4K UHD Smart
                                    TV OLED A1 Series </a>
                                <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                                <div class="price-info"><strong
                                        class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span
                                        class="color-gray-500 price-line">$3225.6</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card-grid-style-2">
                            <div class="image-box"><a href="#"><img
                                        src="{{ asset('ecom/imgs/page/homepage1/imgsp2.png') }}" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><span class="font-xs color-gray-500">SAMSUNG</span><br><a
                                    class="color-brand-3 font-sm-bold" href="#">SAMSUNG Galaxy Tab A7 Lite,
                                    8.7&quot; Tablet 32GB</a>
                                <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                                <div class="price-info"><strong
                                        class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span
                                        class="color-gray-500 price-line">$3225.6</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card-grid-style-2">
                            <div class="image-box"><a href="#"><img
                                        src="{{ asset('ecom/imgs/page/homepage1/imgsp2.png') }}" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a
                                    class="color-brand-3 font-sm-bold" href="#">2022 Apple iMac with Retina 5K
                                    Display 8GB RAM, 256GB SSD</a>
                                <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                                <div class="price-info"><strong
                                        class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span
                                        class="color-gray-500 price-line">$3225.6</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card-grid-style-2">
                            <div class="image-box"><a href="#"><img
                                        src="{{ asset('ecom/imgs/page/homepage1/imgsp1.png') }}" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a
                                    class="color-brand-3 font-sm-bold" href="#">Apple AirPods Pro with MagSafe
                                    Charging Case</a>
                                <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                                <div class="price-info"><strong
                                        class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span
                                        class="color-gray-500 price-line">$3225.6</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card-grid-style-2">
                            <div class="image-box"><a href="#"><img
                                        src="{{ asset('ecom/imgs/page/homepage1/imgsp2.png') }}" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><span class="font-xs color-gray-500">HP</span><br><a
                                    class="color-brand-3 font-sm-bold" href="#">HP Slim Desktop, Intel Celeron
                                    J4025, 4GB RAM</a>
                                <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                                <div class="price-info"><strong
                                        class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span
                                        class="color-gray-500 price-line">$3225.6</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="section-box pt-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-7 col-md-7 col-sm-12 mb-30">
                        <div class="bg-4 block-charge"><span class="color-brand-3 font-sm-lh32">Power Bank</span>
                            <h3 class="font-xl mb-10">Quick Charge</h3>
                            <p class="font-base color-brand-3 mb-20">Lightweight and Portable<br
                                    class="d-none d-lg-block"> Dual port fast charge</p><a
                                class="btn btn-brand-2 btn-arrow-right" href="{{ route('buyer.allGridProduct') }}">Belanja</a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 mb-30">
                        <div class="bg-6 block-player">
                            <h3 class="font-33 mb-20">Xbox Series XS Game Controller</h3>
                            <div class="mb-30"><strong class="font-16">Replacement Kit D-pad ABXY Keys</strong>
                            </div><a class="btn btn-brand-3 btn-arrow-right" href="{{ route('buyer.allGridProduct') }}">learn
                                more</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-5 col-md-5 col-sm-12 mb-30">
                        <div class="bg-5 block-iphone"><span class="color-brand-3 font-sm-lh32">Starting from
                                $899</span>
                            <h3 class="font-xl mb-10">iPhone 12 Pro 128Gb</h3>
                            <p class="font-base color-brand-3 mb-10">Special Sale</p><a class="btn btn-arrow"
                                href="{{ route('buyer.allGridProduct') }}">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        {{-- <section class="section-box mt-50">
            <div class="container">
                <div class="head-main">
                    <h3 class="mb-5">Latest News &amp; Events</h3>
                    <p class="font-base color-gray-500">From our blog, forum</p>
                    <div class="box-button-slider">
                        <div class="swiper-button-next swiper-button-next-group-4"></div>
                        <div class="swiper-button-prev swiper-button-prev-group-4"></div>
                    </div>
                </div>
            </div>
            <div class="container mt-10">
                <div class="box-swiper">
                    <div class="swiper-container swiper-group-4">
                        <div class="swiper-wrapper pt-5">
                            <div class="swiper-slide">
                                <div class="card-grid-style-1">
                                    <div class="image-box"><a href="blog-single-2.html"></a><img
                                            src="{{ asset('ecom/imgs/page/blog/blog-1.jpg') }}" alt="Ecom"></div>
                                    <a class="tag-dot font-xs" href="blog-list.html">Technology</a><a
                                        class="color-gray-1100" href="blog-single-2.html">
                                        <h4>The latest technologies to be used for VR in 2022</h4>
                                    </a>
                                    <div class="mt-20"><span class="color-gray-500 font-xs mr-30">September 02,
                                            2022</span><span class="color-gray-500 font-xs">4<span> Mins
                                                read</span></span></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-grid-style-1">
                                    <div class="image-box"><a href="blog-single.html"></a><img
                                            src="{{ asset('ecom/imgs/page/blog/blog-2.jpg') }}" alt="Ecom"></div>
                                    <a class="tag-dot font-xs" href="blog-list.html">Technology</a><a
                                        class="color-gray-1100" href="blog-single.html">
                                        <h4>How can Web 3.0 Bring Changes to the Gaming?</h4>
                                    </a>
                                    <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 30,
                                            2022</span><span class="color-gray-500 font-xs">5<span> Mins
                                                read</span></span></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-grid-style-1">
                                    <div class="image-box"><a href="blog-single-3.html"></a><img
                                            src="{{ asset('ecom/imgs/page/blog/blog-3.jpg') }}" alt="Ecom"></div>
                                    <a class="tag-dot font-xs" href="blog-list.html">Gaming</a><a
                                        class="color-gray-1100" href="blog-single-3.html">
                                        <h4>NFT Blockchain Games That Might Take Off</h4>
                                    </a>
                                    <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 25,
                                            2022</span><span class="color-gray-500 font-xs">3<span> Mins
                                                read</span></span></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-grid-style-1">
                                    <div class="image-box"><a href="blog-single-2.html"></a><img
                                            src="{{ asset('ecom/imgs/page/blog/blog-4.jpg') }}" alt="Ecom"></div>
                                    <a class="tag-dot font-xs" href="blog-list.html">Blockchain</a><a
                                        class="color-gray-1100" href="blog-single-2.html">
                                        <h4>Blockchain Gaming And Its Three Challenges</h4>
                                    </a>
                                    <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 15,
                                            2022</span><span class="color-gray-500 font-xs">7<span> Mins
                                                read</span></span></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-grid-style-1">
                                    <div class="image-box"><a href="blog-single-2.html"></a><img
                                            src="{{ asset('ecom/imgs/page/blog/blog-5.jpg') }}" alt="Ecom"></div>
                                    <a class="tag-dot font-xs" href="blog-list.html">Development</a><a
                                        class="color-gray-1100" href="blog-single-2.html">
                                        <h4>HTML5 – The Future of Mobile App Development</h4>
                                    </a>
                                    <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 12,
                                            2022</span><span class="color-gray-500 font-xs">9<span> Mins
                                                read</span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        @include('clients.buyer.layouts.benefit')
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
                                        <p class="font-sm mb-10">Kuantitas</p>
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
