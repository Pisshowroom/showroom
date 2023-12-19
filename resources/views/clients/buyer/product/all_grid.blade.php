@extends('clients.buyer.master')
@section('title', 'Semua Produk')
@section('allProduct', 'actived')
@section('childs')
    <main class="main">
        <div class="section-box">
            <div class="breadcrumbs-div">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a class="font-xs color-gray-1000"
                                href="{{ route('buyer.home') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Beranda</a>
                        </li>
                        <li><a class="font-xs color-gray-500"
                                href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Semua
                                Produk</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-box shop-template mt-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 order-first order-lg-last">
                        <div class="banner-ads-top mb-30">
                            <a
                                href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"><img
                                    src="{{ $data['ads1'] && $data['ads1']->image ? $data['ads1']->image : asset('ecom/imgs/page/shop/banner.png') }}"
                                    alt="semua produk"></a>
                        </div>
                        <div class="box-filters mt-0 pb-5 border-bottom">
                            <div class="row">
                                <div class="col-xl-2 col-lg-3 mb-10 text-lg-start text-center"><a
                                        class="btn btn-filter font-sm color-brand-3 font-medium" href="#ModalFiltersForm"
                                        data-bs-toggle="modal">Filter</a></div>
                                <div class="col-xl-10 col-lg-9 mb-10 text-lg-end text-center"><span
                                        class="font-sm color-gray-900 font-medium border-1-right span">Menampilkan
                                        {{ $products->total() > 0 ? moneyFormat($products->total()) : 0 }} hasil</span>
                                    <div class="d-inline-block"><span
                                            class="font-sm color-gray-500 font-medium">Berdasarkan:</span>
                                        <div class="dropdown dropdown-sort border-1-right">
                                            <button class="btn dropdown-toggle font-sm color-gray-900 font-medium"
                                                id="dropdownSort" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">{{ !request()->input('orderBy') || (request()->input('orderBy') && request()->input('orderBy') == 'desc')
                                                    ? 'Produk Terbaru'
                                                    : 'Produk Terlama' }}</button>
                                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort"
                                                style="margin: 0px;">
                                                <li><button order-by="desc"
                                                        class="dropdown-item {{ !request()->input('orderBy') || (request()->input('orderBy') && request()->input('orderBy') == 'desc') ? 'active' : '' }}">Produk
                                                        Terbaru</button></li>
                                                <li><button order-by="asc"
                                                        class="dropdown-item {{ request()->input('orderBy') && request()->input('orderBy') == 'asc' ? 'active' : '' }}">Produk
                                                        Terlama</button></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-inline-block"><a class="view-type-grid mr-5 active"
                                            href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"></a><a
                                            class="view-type-list"
                                            href="{{ route('buyer.allListProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-20">
                            @if (count($products) > 0)
                                @foreach ($products as $prd)
                                    <div class="col-2xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                        @include('clients.buyer.components.list_product1')
                                    </div>
                                @endforeach
                            @else
                                <div class="col-lg-12 text-center mt-40">
                                    <h4>Tidak ada Produk saat ini</h4>
                                </div>
                            @endif
                        </div>
                        @if (count($products) > 0)
                            {{ $products->onEachSide(3)->appends(request()->except('page'))->links() }}
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
                    <div class="col-lg-3 order-last order-lg-first">
                        <div class="sidebar-border mb-0">
                            <div class="sidebar-head">
                                <h6 class="color-gray-900">Kategori Produk</h6>
                            </div>
                            <div class="sidebar-content">
                                @if (count($data['categories']) > 0)
                                    <ul class="list-nav-arrow">
                                        @foreach ($data['categories'] as $ct)
                                            <li data-category="{{ $ct->id }}"
                                                class="{{ request()->input('category_id') == $ct->id ? 'active' : '' }}">
                                                <a class="{{ request()->input('category_id') == $ct->id ? 'active' : '' }}"
                                                    style="display: flex !important;flex-direction: row;align-items: center;justify-content: space-between;gap:.5rem;"
                                                    href="javascript:void(0)">
                                                    {{ $ct->name ?? '' }}
                                                    <span
                                                        class="number">{{ $ct->products_count ? moneyFormat($ct->products_count) ?? 0 : 0 }}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <div class="col-lg-12 text-center">
                                        <p>Tidak ada kategori</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="sidebar-border mb-40">
                            <div class="sidebar-head">
                                <h6 class="color-gray-900">Filter Produk</h6>
                            </div>
                            <div class="sidebar-content">
                                <h6 class="color-gray-900 mt-20 mb-10">Penjual</h6>
                                <ul class="list-checkbox">
                                    @if ($data['sellers'] && count($data['sellers']) > 0)
                                        @foreach ($data['sellers'] as $seller)
                                            <li>
                                                <label class="cb-container">
                                                    <input type="checkbox" class="seller-checkbox"
                                                        {{ in_array($seller->id, explode(',', request()->input('seller_id'))) ? 'checked' : '' }}
                                                        data-seller-id="{{ $seller->id }}">
                                                    <span class="text-small">
                                                        {{ substr($seller->name ?? '', 0, 15) . (strlen($seller->name ?? '') > 15 ? '..' : '') }}
                                                    </span>
                                                    <span class="checkmark"></span>
                                                </label>
                                                <span class="number-item">
                                                    {{ $seller->products_count }}</span>
                                            </li>
                                        @endforeach
                                    @else
                                        <li>
                                            <label class="cb-container" style="padding-left: 0 !important;">
                                                Tidak ada list penjual
                                            </label>
                                        </li>
                                    @endif

                                </ul>
                                <a class="btn btn-filter font-sm color-brand-3 font-medium mt-10" href="#ModalFiltersForm"
                                    data-bs-toggle="modal">Semua Filter</a>
                            </div>
                        </div>
                        <div class="box-slider-item mb-30">
                            <div class="head pb-15 border-brand-2">
                                <h5 class="color-gray-900">Penjual Terbaik</h5>
                            </div>
                            <div class="content-slider">
                                <div class="box-swiper slide-shop">
                                    <div class="swiper-container swiper-best-seller">
                                        <div class="swiper-wrapper pt-5">
                                            <div class="swiper-slide">
                                                @foreach ($data['best_seller_product'] as $key => $prd)
                                                    @include('clients.buyer.components.list_product2')
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
                            @if ($data['ads2'] && $data['ads2']->image)
                                <a
                                    href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                    <img class="mb-30" src="{{ $data['ads2']->image }}" alt="iklan"
                                        style="border-radius: 5px">
                                </a>
                            @else
                                <span class="text-no font-11">No.9</span>
                                <h5 class="font-23 mt-20">Sensitive Touch<br class="d-none d-lg-block">without fingerprint
                                </h5>
                                <p class="text-desc font-16 mt-15">Smooth handle and accurate click</p><a
                                    href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">View
                                    Details</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                            <div class="col-w-1">
                                <h6 class="color-gray-900 mb-0">Harga</h6>
                                <ul class="list-checkbox setPrice">
                                    <li>
                                        <label class="cb-container">
                                            <input type="radio" name="price" value="desc"
                                                {{ request()->get('price') && request()->get('price') == 'desc' ? 'checked' : '' }}><span
                                                class="text-small">Harga Tertinggi</span>
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="radio" name="price" value="asc"
                                                {{ request()->get('price') && request()->get('price') == 'asc' ? 'checked' : '' }}><span
                                                class="text-small">Harga
                                                Terendah</span>
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-w-1">
                                <h6 class="color-gray-900 mb-0">Rating</h6>
                                <ul class="list-checkbox setRating">
                                    <li>
                                        <label class="cb-container">
                                            <input type="radio" name="rating" value="desc"
                                                {{ request()->get('rating') && request()->get('rating') == 'desc' ? 'checked' : '' }}><span
                                                class="text-small">Rating Tertinggi</span>
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="radio" name="rating" value="asc"
                                                {{ request()->get('rating') && request()->get('rating') == 'asc' ? 'checked' : '' }}><span
                                                class="text-small">Rating
                                                Terendah</span>
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-w-1">
                                <h6 class="color-gray-900 mb-0">Berdasarkan</h6>
                                <ul class="list-checkbox setOrderBy">
                                    <li>
                                        <label class="cb-container">
                                            <input type="radio" name="orderBy" value="desc"
                                                {{ !request()->input('orderBy') || (request()->input('orderBy') && request()->input('orderBy') == 'desc')
                                                    ? 'checked'
                                                    : '' }}><span
                                                class="text-small">Produk Terbaru</span>
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="radio" name="orderBy" value="asc"
                                                {{ request()->input('orderBy') && request()->input('orderBy') == 'asc' ? 'checked' : '' }}><span
                                                class="text-small">Produk Terlama</span>
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-start pl-30"><button class="btn btn-buy w-auto"
                            id="setFilter">Terapkan Filter</button><a class="btn font-sm-bold color-gray-500"
                            href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Setel
                            Ulang Filter</a></div>
                </div>
            </div>
        </div>
    </main>

@endsection
@push('importjs')
    <script>
        $(document).ready(function() {
            function updateURL() {
                var searchQuery = $('#searchProduct').val();
                var selectedOrderBy = $('#dropdownSort').parent().find('.active').attr('order-by');
                var selectedCategoryId = $('#navKategori').val() || $('.list-nav-arrow li.active').data('category');
                var baseUrl = "{{ route('buyer.allGridProduct') }}";
                var url = baseUrl;
                if (selectedCategoryId !== undefined && selectedCategoryId !== 'Semua kategori' &&
                    selectedOrderBy !== undefined) {
                    url += '?category_id=' + selectedCategoryId + '&orderBy=' + selectedOrderBy;
                } else if (selectedCategoryId === 'Semua kategori' &&
                    selectedOrderBy !== undefined) {
                    url += '?category_id=' + '&orderBy=' + selectedOrderBy;
                }

                if (searchQuery !== '') {
                    url += (selectedCategoryId !== undefined || selectedOrderBy !== undefined ? '&' : '?') +
                        'search=' + searchQuery;
                }
                var sellerIds = [];
                $('.seller-checkbox:checked').each(function() {
                    sellerIds.push($(this).data('seller-id'));
                });

                if (sellerIds.length > 0) {
                    url += (url.includes('?') ? '&' : '?') + 'seller_id=' + sellerIds.join(',');
                }
                auth =
                    "{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? 'auth=' . base64_encode(Auth::user()->uid) : '' }}"
                window.location = url + (url.includes('?') ? '&' : '?') + auth;
            }

            $('#searchProduct, #navKategori').on('change', function() {
                updateURL();
            });
            $('.seller-checkbox').on('change', function() {
                // Handle checkbox click event here
                updateURL();
            });
            $('.dropdown-menu li button').on('click', function(e) {
                e.preventDefault();
                if ($('.dropdown-menu li button').hasClass('active')) {
                    $('.dropdown-menu li button').removeClass('active');
                }
                $(this).addClass('active');
                updateURL();
            });
            $('.list-nav-arrow li').on('click', function() {
                $(this).addClass('active');
                $('#navKategori').val('');
                updateURL();
            });
            $('#setFilter').on('click', function(e) {
                e.preventDefault();
                var setRating = $('ul.setRating input[name="rating"]:checked').val();
                var setOrderBy = $('ul.setOrderBy input[name="orderBy"]:checked').val();
                var setPrice = $('ul.setPrice input[name="price"]:checked').val();

                updateFilter(setRating, setOrderBy, setPrice)
            })

            function updateFilter(rating, orderBy, price) {
                var searchQuery = $('#searchProduct').val();
                var selectedCategoryId = $('#navKategori').val() || $('.list-nav-arrow li.active').data('category');
                var baseUrl = "{{ route('buyer.allGridProduct') }}";
                var url = baseUrl;
                if (rating == undefined) {
                    rating = '';
                }
                if (orderBy == undefined) {
                    orderBy = '';
                }
                if (price == undefined) {
                    price = '';
                }
                if (selectedCategoryId !== undefined && selectedCategoryId !== 'Semua kategori') {
                    url += '?category_id=' + selectedCategoryId + '&orderBy=' + orderBy + '&rating=' +
                        rating + '&price=' + price;
                } else if (selectedCategoryId === 'Semua kategori') {
                    url += '?category_id=&orderBy=' + orderBy + '&rating=' +
                        rating + '&price=' + price;
                }
                if (searchQuery !== '') {
                    url += (selectedCategoryId !== undefined ? '?category_id=' + selectedCategoryId :
                            '?category_id=') +
                        '&orderBy=' + orderBy + '&rating=' +
                        rating + '&price=' + price +
                        '&search=' + searchQuery;
                }
                auth =
                    "{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? 'auth=' . base64_encode(Auth::user()->uid) : '' }}"
                window.location = url + (url.includes('?') ? '&' : '?') + auth;
            }
        });
    </script>
@endpush
