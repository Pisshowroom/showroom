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
                            {{-- <div class="col-lg-12 display-list">
                                <h3 class="mt-15 mb-25">{{ $article->title ?? '' }}</h3>
                                <div class="box-author mb-5">
                                    <div class="img-author mr-30"><img src="{{ asset('ecom/imgs/page/blog/author.png') }}"
                                            alt="admin"><span class="font-md-bold">Admin</span></div>
                                    <span class="datepost color-gray-500 font-sm mr-30">{{ $article->date ?? '' }}</span>
                                    <span
                                        class="datepost color-gray-500 font-sm mr-30">{{ $article->view ? moneyFormat($article->view) . 'x dilihat' : '0 dilihat' }}</span>
                                </div>
                                <div class="content-text">
                                    {!! $article->content ?? '' !!}
                                </div>
                                <div class="border-bottom-4 mt-20"></div>
                            </div> --}}
                            <div class="col-lg-12 mb-50 display-list">
                                <h3 class="mt-15 mb-25">The latest technologies to be used for VR in 2022</h3>
                                <div class="box-author mb-5">
                                    <div class="img-author mr-30"><img src="{{ asset('ecom/imgs/page/blog/author.png') }}"
                                            alt="Ecom"><span class="font-md-bold">Admin</span></div><span
                                        class="datepost color-gray-500 font-sm mr-30">30 Agustus, 2022</span><span
                                        class="timeread color-gray-500 font-sm">3x dilihat</span>
                                </div>
                                <div class="image-feature"><img src="{{ asset('ecom/imgs/page/blog/img-big.png') }}"
                                        alt="Ecom">
                                </div>
                                <div class="content-text">
                                    <p>Nibiru, a new crypto derivatives protocol co-founded by Tribe Capital GP Arjun Sethi,
                                        has raised $7.5 million in seed funding at a valuation of $100 million, two sources
                                        familiar with the matter told TechCrunch.<br>Tribe Capital, Republic Crypto and
                                        Kraken invested in the seed round, a source said, requesting anonymity as the
                                        information is not public.<br>Sethi co-founded the startups with four industry
                                        veterans — including Sankha Banerjee, formerly with Credence Capital and Binance;
                                        and Boris Revsin, who co-founded Republic Capital. Nibiru has attracted nearly two
                                        dozen contributors from firms including Meta, Reddit, JP Morgan and Yahoo, an
                                        investor deck obtained by TechCrunch showed.</p>
                                    <p>The crypto market is flooded with centralized (Binance, FTX) and decentralized
                                        ETH-based perpetuals and options trading platforms (Dydx, Opyn, Perpetual Protocol).
                                        Nibiru is attempting to build the first mainstream decentralized multichain
                                        solution, according to its website.<br>Currently in private testnet, Nibiru’s
                                        decentralized protocol unifies derivatives trading, spot trading, staking and bonded
                                        liquidity, and aims to serve users across over 40 blockchains, it says on the
                                        website.<br>On its investor deck, Nibiru says it will provide customers with
                                        unlocked hedging opportunities, extremely low gas costs, MEV resistance and high
                                        futures volume. It is also creating composable yield in rising/falling regimes using
                                        decentralized perps and options, the deck added.Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Nibiru, a new crypto
                                        derivatives protocol co-founded by Tribe Capital GP Arjun Sethi, has raised $7.5
                                        million in seed funding at a valuation of $100 million, two sources familiar with
                                        the matter told TechCrunch. has raised $7.5 million in seed funding at a valuation
                                        of $100 million, two sources familiar with the matter told TechCrunch.</p>
                                    <h4 class="mt-20 mb-20">The FTC Is Closing in on Runaway AI</h4>
                                    <p>Nibiru, a new crypto derivatives protocol co-founded by Tribe Capital GP Arjun Sethi,
                                        has raised $7.5 million in seed funding at a valuation of $100 million, two sources
                                        familiar with the matter told TechCrunch.<br>Tribe Capital, Republic Crypto and
                                        Kraken invested in the seed round, a source said, requesting anonymity as the
                                        information is not public.<br>Sethi co-founded the startups with four industry
                                        veterans — including Sankha Banerjee, formerly with Credence Capital and Binance;
                                        and Boris Revsin, who co-founded Republic Capital. Nibiru has attracted nearly two
                                        dozen contributors from firms including Meta, Reddit, JP Morgan and Yahoo, an
                                        investor deck obtained by TechCrunch showed.</p>
                                    <div class="image-single"><img src="{{ asset('ecom/imgs/page/blog/img-single.png') }}"
                                            alt="Ecom"></div>
                                    <p>Nibiru, a new crypto derivatives protocol co-founded by Tribe Capital GP Arjun Sethi,
                                        has raised $7.5 million in seed funding at a valuation of $100 million, two sources
                                        familiar with the matter told TechCrunch.<br>Tribe Capital, Republic Crypto and
                                        Kraken invested in the seed round, a source said, requesting anonymity as the
                                        information is not public.<br>Sethi co-founded the startups with four industry
                                        veterans — including Sankha Banerjee, formerly with Credence Capital and Binance;
                                        and Boris Revsin, who co-founded Republic Capital. Nibiru has attracted nearly two
                                        dozen contributors from firms including Meta, Reddit, JP Morgan and Yahoo, an
                                        investor deck obtained by TechCrunch showed.</p>
                                    <p>The crypto market is flooded with centralized (Binance, FTX) and decentralized
                                        ETH-based perpetuals and options trading platforms (Dydx, Opyn, Perpetual Protocol).
                                        Nibiru is attempting to build the first mainstream decentralized multichain
                                        solution, according to its website.<br>Currently in private testnet, Nibiru’s
                                        decentralized protocol unifies derivatives trading, spot trading, staking and bonded
                                        liquidity, and aims to serve users across over 40 blockchains, it says on the
                                        website.<br>On its investor deck, Nibiru says it will provide customers with
                                        unlocked hedging opportunities, extremely low gas costs, MEV resistance and high
                                        futures volume. It is also creating composable yield in rising/falling regimes using
                                        decentralized perps and options, the deck added.Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Nibiru, a new crypto
                                        derivatives protocol co-founded by Tribe Capital GP Arjun Sethi, has raised $7.5
                                        million in seed funding at a valuation of $100 million, two sources familiar with
                                        the matter told TechCrunch. has raised $7.5 million in seed funding at a valuation
                                        of $100 million, two sources familiar with the matter told TechCrunch.</p>
                                </div>
                                <div class="border-bottom-4 mb-20"></div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 order-last order-lg-first">
                        <div class="box-slider-item mb-30">
                            <div class="head pb-15 border-brand-2">
                                <h5 class="color-gray-900">Artikel Lainnya</h5>
                            </div>
                            <div class="content-slider">
                                <div class="box-swiper slide-shop">
                                    <div class="swiper-container swiper-best-seller">
                                        <div class="swiper-wrapper pt-5">
                                            <div class="swiper-slide">
                                                <div class="card-grid-style-2 card-none-border mb-30 pb-5 mh-auto">
                                                    <div class="image-box mw-84">
                                                        <a href="blog-single.html"><img
                                                                src="{{ asset('ecom/imgs/page/blog/blog-1.jpg') }}"
                                                                alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right">
                                                        <a class="color-brand-3 font-sm" href="blog-single.html">The
                                                            latest
                                                            technologies to be used for
                                                            VR in 2022</a>
                                                        <div class="row mt-5">
                                                            <div class="col-12">
                                                                {!! file_get_contents('ecom/imgs/page/product/icon-eye.svg') !!}
                                                                <strong class="color-gray-500 font-xs mr-20">3x dilihat
                                                                    {{-- {{ $article->view ? moneyFormat($article->view) . 'x dilihat' : 'belum dilihat' }} --}}
                                                                </strong>

                                                                {{-- <span
                                                                    class="color-gray-500 font-xs mr-20">30 Agustus,
                                                                    2023</span><span class="color-gray-500 font-xs"></span> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card-grid-style-2 card-none-border mb-30 pb-5 mh-auto">
                                                    <div class="image-box mw-84"><a href="blog-single.html"><img
                                                                src="{{ asset('ecom/imgs/page/blog/blog-5.jpg') }}"
                                                                alt="Ecom"></a>
                                                    </div>
                                                    <div class="info-right"><a class="color-brand-3 font-sm"
                                                            href="blog-single.html">Apple unveils iPhone 14 at far out
                                                            event</a>
                                                        <div class="row mt-5">
                                                            <div class="col-12">
                                                                {!! file_get_contents('ecom/imgs/page/product/icon-eye.svg') !!}
                                                                <strong class="color-gray-500 font-xs mr-20">3x dilihat
                                                                    {{-- {{ $article->view ? moneyFormat($article->view) . 'x dilihat' : 'belum dilihat' }} --}}
                                                                </strong>
                                                            </div>
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
                        <div class="banner-right h-500 text-center mb-30"><span class="text-no font-11">No.9</span>
                            <h5 class="font-23 mt-20">Sensitive Touch<br class="d-none d-lg-block">without fingerprint
                            </h5>
                            <p class="text-desc font-16 mt-15">Smooth handle and accurate click</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="section-box shop-template mt-30">
            <div class="container">
                <h3 class="color-brand-3">Artikel Populer</h3>
                <div class="row mt-30">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-40">
                        <div class="card-grid-style-1">
                            <div class="image-box"><a href="blog-single.html"><img
                                        src="{{ asset('ecom/imgs/page/blog/blog-17.jpg') }}" alt="Ecom"></a></div>
                            <a class="color-gray-1100" href="blog-single.html">
                                <h4 class="mb-10">Amazon’s ‘Safe’ New Robot Won’t Fix its Worker</h4>
                            </a>
                            <div class="row">
                                <div class="col-12">
                                    {!! file_get_contents('ecom/imgs/page/product/icon-eye.svg') !!}
                                    <strong class="color-gray-500 font-xs mr-20">3x dilihat
                                    </strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-40">
                        <div class="card-grid-style-1">
                            <div class="image-box"><a href="blog-single.html"><img
                                        src="{{ asset('ecom/imgs/page/blog/blog-16.jpg') }}" alt="Ecom"></a></div><a
                                class="color-gray-1100" href="blog-single.html">
                                <h4 class="mb-10">When it comes to creating works of art, humans provide</h4>
                            </a>
                            <div class="row">
                                <div class="col-12">
                                    {!! file_get_contents('ecom/imgs/page/product/icon-eye.svg') !!}
                                    <strong class="color-gray-500 font-xs mr-20">3x dilihat
                                    </strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-40">
                        <div class="card-grid-style-1">
                            <div class="image-box"><a href="blog-single.html"><img
                                        src="{{ asset('ecom/imgs/page/blog/blog-15.jpg') }}" alt="Ecom"></a></div><a
                                class="color-gray-1100" href="blog-single.html">
                                <h4 class="mb-10">How Do You Know a Cargo Ship Is Polluting?</h4>
                            </a>
                            <div class="row">
                                <div class="col-12">
                                    {!! file_get_contents('ecom/imgs/page/product/icon-eye.svg') !!}
                                    <strong class="color-gray-500 font-xs mr-20">3x dilihat
                                    </strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-40">
                        <div class="card-grid-style-1">
                            <div class="image-box"><a href="blog-single.html"><img
                                        src="{{ asset('ecom/imgs/page/blog/blog-7.jpg') }}" alt="Ecom"></a></div><a
                                class="color-gray-1100" href="blog-single.html">
                                <h4 class="mb-10">The Summer's Best Read Is About AI, Surveillance</h4>
                            </a>
                            <div class="row">
                                <div class="col-12">
                                    {!! file_get_contents('ecom/imgs/page/product/icon-eye.svg') !!}
                                    <strong class="color-gray-500 font-xs mr-20">3x dilihat
                                    </strong>
                                </div>
                            </div>
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
