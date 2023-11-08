@extends('clients.buyer.master')
@section('title', 'Semua Penjual')

@section('childs')
    <main class="main">
        <div class="section-box">
            <div class="breadcrumbs-div">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a class="font-xs color-gray-1000" href="{{ route('buyer.home') }}">Beranda</a></li>
                        <li><a class="font-xs color-gray-500" href="{{ route('buyer.allSeller') }}">Semua Penjual</a></li>
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
                                href="{{ route('buyer.login') }}">Menjadi Penjual</a></div>
                    @endif
                </div>
                <div class="border-bottom pt-0 mb-30"></div>
                <div class="row">
                    <div class="col-12 order-first order-lg-last">
                        <div class="box-filters mt-0 pb-5 border-bottom">
                            <div class="row">
                                <div class="col-xl-2 col-lg-3 mb-10 text-lg-start"><a
                                        class="btn btn-filter font-sm color-brand-3 font-medium" href="#ModalFiltersForm"
                                        data-bs-toggle="modal">Filter</a></div>
                                <div class="col-xl-10 col-lg-9 mb-10 text-lg-end"><span
                                        class="font-sm color-gray-900 font-medium border-1-right span">Menampilkan
                                        {{ count($sellers) > 0 ? count($sellers) : 0 }} hasil</span>
                                    <div class="d-inline-block"><span
                                            class="font-sm color-gray-500 font-medium">Berdasarkan:</span>
                                        <div class="dropdown dropdown-sort border-1-right">
                                            <button class="btn dropdown-toggle font-sm color-gray-900 font-medium"
                                                id="dropdownSort" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">Rating Tertinggi</button>
                                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort"
                                                style="margin: 0px;">
                                                <li><a class="dropdown-item active" href="#">Rating Tertinggi</a></li>
                                                <li><a class="dropdown-item" href="#">Rating Terendah</a></li>
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
                                        <a href="{{ route('buyer.detailSeller', ['slug' => $seller->seller_slug]) }}">
                                            <div class="card-vendor">
                                                <div class="card-top-vendor mb-0 pb-0 border-0">
                                                    <div class="card-top-vendor-left"><img
                                                            src="{{ asset('ecom/imgs/page/vendor/futur.png') }}"
                                                            alt="Ecom">
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
                                                                (65)
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="card-top-vendor-right"><a class="btn btn-gray"
                                                            href="{{ route('buyer.detailSeller', ['slug' => $seller->seller_slug]) }}">{{ $seller->products_count ?? 0 }}
                                                            Produk</a>
                                                        <p class="font-xs color-gray-500 mt-10">sejak 2012</p>
                                                    </div>
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
                                    <h4>Tidak ada data Produk saat ini</h4>
                                </div>
                            @endif
                        </div>
                        @if (count($sellers) > 0)
                            {{ $sellers->onEachSide(3)->links() }}
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
                                    <li><a href="{{ route('buyer.allSeller') }}">Electric accessories<span
                                                class="number">12</span></a></li>
                                    <li><a href="{{ route('buyer.allSeller') }}">Fashion & Beauty<span
                                                class="number">24</span></a>
                                    </li>
                                    <li><a href="{{ route('buyer.allSeller') }}">Furniture & Appliances<span
                                                class="number">34</span></a></li>
                                    <li><a href="{{ route('buyer.allSeller') }}">Sports and Outdoors<span
                                                class="number">65</span></a></li>
                                    <li><a href="{{ route('buyer.allSeller') }}">Food, condiments<span
                                                class="number">15</span></a>
                                    </li>
                                    <li><a href="{{ route('buyer.allSeller') }}">Book, Office supplies<span
                                                class="number">76</span></a></li>
                                    <li><a href="{{ route('buyer.allSeller') }}">Children and mothers<span
                                                class="number">89</span></a></li>
                                    <li><a href="{{ route('buyer.allSeller') }}">Cars, motorbikes<span
                                                class="number">23</span></a>
                                    </li>
                                    <li><a href="{{ route('buyer.allSeller') }}">Other<span class="number">98</span></a>
                                    </li>
                                </ul>
                                <div>
                                    <div class="collapse" id="moreMenu">
                                        <ul class="list-nav-arrow">
                                            <li><a href="{{ route('buyer.allSeller') }}">Home theater<span
                                                        class="number">98</span></a></li>
                                            <li><a href="{{ route('buyer.allSeller') }}">Cameras & drones<span
                                                        class="number">124</span></a></li>
                                            <li><a href="{{ route('buyer.allSeller') }}">PC gaming<span
                                                        class="number">56</span></a></li>
                                            <li><a href="{{ route('buyer.allSeller') }}">Smart home<span
                                                        class="number">87</span></a></li>
                                            <li><a href="{{ route('buyer.allSeller') }}">Networking<span
                                                        class="number">36</span></a></li>
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

        <div class="modal fade" id="ModalFiltersForm" tabindex="-1" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-xl">
                <div class="modal-content apply-job-form">
                    <div class="modal-header">
                        <h5 class="modal-title color-gray-1000 filters-icon">Filter Tingkat Lanjut
                        </h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-30">
                        <div class="row">
                            {{-- <div class="col-w-1">
                                <h6 class="color-gray-900 mb-0">Brands</h6>
                                <ul class="list-checkbox">
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox" checked="checked"><span
                                                class="text-small">Apple</span><span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Samsung</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Baseus</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Remax</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Handtown</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Elecom</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Razer</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Auto Focus</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Nillkin</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Logitech</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">ChromeBook</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div> --}}
                            <div class="col-w-1">
                                <h6 class="color-gray-900 mb-0">Penawaran khusus</h6>
                                <ul class="list-checkbox">
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Di jual</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox" checked="checked"><span class="text-small">Bebas
                                                biaya kirim</span><span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Big deals</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Shop Mall</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                                <h6 class="color-gray-900 mb-0 mt-40">Ready to ship in</h6>
                                <ul class="list-checkbox">
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">1 business day</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox" checked="checked"><span class="text-small">1&ndash;3
                                                business days</span><span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">in 1 week</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Shipping now</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-w-1">
                                {{-- <h6 class="color-gray-900 mb-0">Ordering options</h6>
                                <ul class="list-checkbox">
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Accepts gift
                                                cards</span><span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Customizable</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox" checked="checked"><span class="text-small">Can be
                                                gift-wrapped</span><span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Installment 0%</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul> --}}
                                <h6 class="color-gray-900 mb-0 mt-40">Rating</h6>
                                <ul class="list-checkbox">
                                    <li class="mb-5"><a href="#"><img
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
                                                class="ml-10 font-xs color-gray-500 d-inline-block align-top">(5
                                                stars)</span></a></li>
                                    <li class="mb-5"><a href="#"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><span
                                                class="ml-10 font-xs color-gray-500 d-inline-block align-top">(4
                                                stars)</span></a></li>
                                    <li class="mb-5"><a href="#"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><span
                                                class="ml-10 font-xs color-gray-500 d-inline-block align-top">(3
                                                stars)</span></a></li>
                                    <li class="mb-5"><a href="#"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><span
                                                class="ml-10 font-xs color-gray-500 d-inline-block align-top">(2
                                                stars)</span></a></li>
                                    <li class="mb-5"><a href="#"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><span
                                                class="ml-10 font-xs color-gray-500 d-inline-block align-top">(1
                                                star)</span></a></li>
                                </ul>
                            </div>
                            {{-- <div class="col-w-2">
                                <h6 class="color-gray-900 mb-0">Material</h6>
                                <ul class="list-checkbox">
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Nylon (8)</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Tempered Glass
                                                (5)</span><span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox" checked="checked"><span class="text-small">Liquid
                                                Silicone Rubber (5)</span><span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Aluminium Alloy
                                                (3)</span><span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                                <h6 class="color-gray-900 mb-20 mt-40">Product tags</h6>
                                <div><a class="btn btn-border mr-5" href="#">Games</a><a
                                        class="btn btn-border mr-5" href="#">Electronics</a><a
                                        class="btn btn-border mr-5" href="#">Video</a><a
                                        class="btn btn-border mr-5" href="#">Cellphone</a><a
                                        class="btn btn-border mr-5" href="#">Indoor</a><a
                                        class="btn btn-border mr-5" href="#">VGA Card</a><a
                                        class="btn btn-border mr-5" href="#">USB</a><a
                                        class="btn btn-border mr-5" href="#">Lightning</a><a
                                        class="btn btn-border mr-5" href="#">Camera</a></div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="modal-footer justify-content-start pl-30"><a class="btn btn-buy w-auto"
                            href="#">Terapkan Filter</a><a class="btn font-sm-bold color-gray-500"
                            href="#">Setel Ulang Filter</a></div>
                </div>
            </div>
        </div>
    </main>
@endsection
@push('importjs')
@endpush
