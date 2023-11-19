@extends('clients.buyer.master')
@section('title', 'Semua Penjual')

@section('childs')
    <main class="main">
        <div class="section-box">
            <div class="breadcrumbs-div">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a class="font-xs color-gray-1000" href="{{ route('buyer.home') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Beranda</a></li>
                        <li><a class="font-xs color-gray-500" href="{{ route('buyer.allSeller') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Semua Penjual</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="section-box shop-template mt-0">
            <div class="container">
                <h2>Daftar Penjual</h2>
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-30">
                        <p class="font-md color-gray-500">Kami mempunyai<span class="font-md-bold color-brand-3">
                                {{ $sellers->total() ?? 0 }}</span><span>
                                penjual sekarang</span></p>
                    </div>
                    @if (Auth::guard('web')->user() && Auth::guard('web')->user()->is_seller == 0)
                        <div class="col-lg-6 mb-30 text-end"><a class="btn btn-buy w-auto font-sm-bold"
                                href="{{ route('dashboard.settings') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Menjadi Penjual</a></div>
                    @endif
                </div>
                <div class="border-bottom pt-0 mb-30"></div>
                <div class="row">
                    <div class="col-12 order-first order-lg-last">
                        <div class="box-filters mt-0 pb-5 border-bottom">
                            <div class="row">
                                <div class="col-xl-2 col-lg-3 mb-10 text-lg-start">
                                    {{-- <a
                                        class="btn btn-filter font-sm color-brand-3 font-medium" href="#ModalFiltersForm"
                                        data-bs-toggle="modal">Filter</a> --}}
                                </div>
                                <div class="col-xl-10 col-lg-9 mb-10 text-lg-end"><span
                                        class="font-sm color-gray-900 font-medium border-1-right span">Menampilkan
                                        {{ count($sellers) > 0 ? count($sellers) : 0 }} hasil</span>
                                    <div class="d-inline-block"><span
                                            class="font-sm color-gray-500 font-medium">Berdasarkan:</span>
                                        <div class="dropdown dropdown-sort border-1-right">
                                            <button class="btn dropdown-toggle font-sm color-gray-900 font-medium"
                                                id="dropdownSort" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">{{ !request()->get('rating') || (request()->get('rating') && request()->get('rating') == 'desc') ? 'Rating Tertinggi' : 'Rating Terendah' }}</button>
                                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort"
                                                style="margin: 0px;">
                                                <li><a class="dropdown-item {{ !request()->get('rating') || (request()->get('rating') && request()->get('rating') == 'desc') ? 'active' : '' }}"
                                                        href="{{ route('buyer.allSeller', ['rating' => 'desc']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Rating
                                                        Tertinggi</a></li>
                                                <li><a class="dropdown-item {{ request()->get('rating') && request()->get('rating') == 'asc' ? 'active' : '' }}"
                                                        href="{{ route('buyer.allSeller', ['rating' => 'asc']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Rating
                                                        Terendah</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    {{-- <div class="d-inline-block"><span
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
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="row mt-20">
                            @if (count($sellers) > 0)
                                @foreach ($sellers as $seller)
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                        <a href="{{ route('buyer.detailSeller', ['slug' => $seller->seller_slug]) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                            <div class="card-vendor">
                                                <div class="card-top-vendor mb-0 pb-0 border-0">
                                                    <div class="card-top-vendor-left"><img
                                                            src="{{ $seller->seller_image ? asset($seller->seller_image) ?? asset('ecom/imgs/page/vendor/futur.png') : asset('ecom/imgs/page/vendor/futur.png') }}"
                                                            alt="penjual {{ $seller->name ?? '' }}">
                                                        <div class="rating gap-1 d-flex align-items-center"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="rating penjual {{ $seller->name ?? '' }}"><span
                                                                class="font-xs color-gray-500">
                                                                {{ $seller->rating_seller ?? 0 }}
                                                                (65 Terjual)
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="card-top-vendor-right"><a class="btn btn-gray"
                                                            href="{{ route('buyer.detailSeller', ['slug' => $seller->seller_slug]) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">{{ $seller->products_count ? moneyFormat($seller->products_count) ?? 0 : 0 }}
                                                            Produk</a>
                                                        <p class="font-xs color-gray-500 mt-10">sejak 2012</p>
                                                    </div>
                                                </div>
                                                <div class="price-info mt-1 d-flex flex-row gap-1 align-items-center">
                                                    {!! file_get_contents('ecom/imgs/page/product/icon-location.svg') !!}
                                                    <strong class="font-md color-gray-500 price-main">
                                                        Jakarta</strong>
                                                </div>
                                                {{-- <div class="card-bottom-vendor">
                                                    <p class="font-sm color-gray-500 location mb-10">5171 W Campbell Ave
                                                        undefined Kent,
                                                        Utah 53127 United States</p>
                                                    <p class="font-sm color-gray-500 phone">(+91) - 540-025-124553</p>
                                                </div> --}}
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-lg-12 text-center mt-40">
                                    <h4>Tidak ada Produk saat ini</h4>
                                </div>
                            @endif
                        </div>
                        @if (count($sellers) > 0)
                            {{ $sellers->onEachSide(3)->appends(request()->except('page'))->links() }}
                        @endif
                        {{-- <nav>
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
                        </nav> --}}
                    </div>
                    {{-- <div class="col-lg-3 order-last order-lg-first">
                        <div class="sidebar-border">
                            <div class="sidebar-head">
                                <h6 class="color-gray-900">Penjual menurut industri</h6>
                            </div>
                            <div class="sidebar-content">
                                <ul class="list-nav-arrow">
                                    <li><a href="{{ route('buyer.allSeller') }}">Computers & Laptop<span
                                                class="number">09</span></a></li>
                                </ul>
                                <div>
                                    <div class="collapse" id="moreMenu">
                                        <ul class="list-nav-arrow">
                                            <li><a href="{{ route('buyer.allSeller') }}">Home theater<span
                                                        class="number">98</span></a></li>
                                        </ul>
                                    </div><a class="link-see-more mt-5" data-bs-toggle="collapse" href="#moreMenu"
                                        role="button" aria-expanded="false" aria-controls="moreMenu">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        @include('clients.buyer.layouts.benefit')

        {{-- <div class="modal fade" id="ModalFiltersForm" tabindex="-1" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-xl">
                <div class="modal-content apply-job-form">
                    <div class="modal-header">
                        <h5 class="modal-title color-gray-1000 filters-icon">Filter Tingkat Lanjut
                        </h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-30">
                        <div class="row"> </div>
                    </div>
                    <div class="modal-footer justify-content-start pl-30"><a class="btn btn-buy w-auto"
                            href="#">Terapkan Filter</a><a class="btn font-sm-bold color-gray-500"
                            href="#">Setel Ulang Filter</a></div>
                </div>
            </div>
        </div> --}}
    </main>
@endsection
@push('importjs')
@endpush
