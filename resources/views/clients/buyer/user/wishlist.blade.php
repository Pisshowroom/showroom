@extends('clients.buyer.master')
@section('title', 'Wishlist')

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
                                href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Produk</a>
                        </li>
                        <li><a class="font-xs color-gray-500"
                                href="{{ route('buyer.wishlist') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Wishlist</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="section-box shop-template">
            <div class="container">
                <div class="box-wishlist col-lg-10">
                    <div class="head-wishlist">
                        <div class="item-wishlist">
                            <div class="wishlist-product"><span class="font-md-bold color-brand-3">Produk</span></div>
                            <div class="wishlist-price"><span class="font-md-bold color-brand-3">Harga</span></div>
                            <div class="wishlist-action"><span class="font-md-bold color-brand-3">Aksi</span></div>
                            <div class="wishlist-remove"><span class="font-md-bold color-brand-3">Hapus</span></div>
                        </div>
                    </div>
                    <div class="content-wishlist">
                        @if ($products && count($products) > 0)
                            @foreach ($products as $prd)
                                <div class="item-wishlist item-wishl item-wishlists-{{ $prd->id }}"
                                    id="item-wishlist-{{ $prd->id }}">
                                    <div class="wishlist-product">
                                        <div class="product-wishlist">
                                            <div class="product-image">
                                                <a
                                                    href="{{ route('buyer.detailProduct', ['slug' => $prd->slug ?? 'sd']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                                    <img class="w-100" style="object-fit:cover;aspect-ratio:1/0.8"
                                                        src="{{ $prd?->images && count($prd?->images) > 0 ? $prd->images[0] : asset('ecom/imgs/page/product/img-sub.png') }}"
                                                        alt="produk {{ $prd->name ?? '' }}"></a>
                                            </div>
                                            <div class="product-info"><a
                                                    href="{{ route('buyer.detailProduct', ['slug' => $prd->slug ?? 'sd']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                                    <p class="color-brand-3 line-2 text-start"
                                                        style="word-break:break-word;">
                                                        {{ substr($prd->name ?? '', 0, 50) . (strlen($prd->name ?? '') > 50 ? '..' : '') }}
                                                    </p>
                                                </a>
                                                <div class="rating">
                                                    <img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                        alt="rating produk {{ $prd->name ?? '' }}">
                                                    <span
                                                        class="font-xs color-gray-500">{{ $prd->reviews_avg_rating ? doubleval($prd->reviews_avg_rating) : 0 }}
                                                        ({{ $prd->total_sell ? moneyFormat($prd->total_sell) ?? 0 : 0 }}
                                                        Terjual)
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wishlist-price">
                                        @if (isset($prd->price_discount) && $prd->price_discount > 0)
                                            <h6 class="color-brand-3">
                                                {{ $prd->price_discount > 0 ? numbFormat($prd->price_discount) : 'Rp 0' }}
                                            </h6>
                                        @else
                                            <h6 class="color-brand-3">
                                                {{ $prd->price > 0 ? numbFormat($prd->price) : 'Rp 0' }}
                                            </h6>
                                        @endif
                                        {{-- @if (isset($prd->price_discount) && $prd->price_discount > 0)
                                            <br>
                                            <span class="color-gray-500 font-sm price-line">
                                                {{ $prd->price > 0 ? numbFormat($prd->price) : 'Rp 0' }}
                                            </span>
                                        @else
                                            <br>
                                            <span class="color-gray-500 font-sm price-line">
                                            </span>
                                            <br>
                                        @endif --}}

                                    </div>
                                    {{-- <div class="wishlist-status">
                                        <span class="btn btn-gray font-md-bold color-brand-3">Persediaan</span>
                                    </div> --}}
                                    <div class="wishlist-action">
                                        <button class="btn btn-cart font-sm-bold" id="btn-buy-{{ $prd->id }}"
                                            onclick="buyNow('{{ $prd->id }}','{{ $prd->stock }}','{{ $prd->seller_id }}')"
                                            {{ Auth::guard('web')->user() && Auth::guard('web')->user()->id == $prd->seller_id ? 'disabled' : '' }}>Beli
                                            sekarang</button>
                                    </div>
                                    <div class="wishlist-remove">
                                        <button class="btn btn-delete btn-delete-wishlist"
                                            onclick="deleteWishlist('{{ $prd->id }}')"
                                            id="btn-delete-wishlist-{{ $prd->id }}"></button>
                                    </div>
                                </div>
                            @endforeach
                            <div class="container container-none d-none">
                                <div class="text-center mb-50 mt-50">
                                    <div class="image-404 mb-50"> <img src="{{ asset('ecom/imgs/page/account/404.png') }}"
                                            alt="halaman tidak ditemukan">
                                    </div>
                                    <h3>Tidak ada Wishlist</h3>
                                    <p class="font-md-bold color-gray-600">Belanja sekarang dan dapatkan harga terbaik.</p>
                                    <div class="mt-15"> <a class="btn btn-buy w-auto arrow-back"
                                            href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Lanjut
                                            Belanja</a></div>
                                </div>
                            </div>
                        @else
                            <div class="container">
                                <div class="text-center mb-50 mt-50">
                                    <div class="image-404 mb-50"> <img src="{{ asset('ecom/imgs/page/account/404.png') }}"
                                            alt="halaman tidak ditemukan">
                                    </div>
                                    <h3>Tidak ada Wishlist</h3>
                                    <p class="font-md-bold color-gray-600">Belanja sekarang dan dapatkan harga terbaik.</p>
                                    <div class="mt-15"> <a class="btn btn-buy w-auto arrow-back"
                                            href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Lanjut
                                            Belanja</a></div>
                                </div>
                            </div>
                        @endif
                        @if ($products && count($products) > 0)
                            {{ $products->onEachSide(3)->appends(request()->except('page'))->links() }}
                        @endif
                    </div>
                </div>
                <h4 class="color-brand-3">Kamu mungkin juga suka</h4>
                <div class="list-products-5 mt-20 mb-40">
                    @foreach ($data['best_seller_product'] as $prd)
                        @include('clients.buyer.components.list_product1')
                    @endforeach
                </div>
                <h4 class="color-brand-3">Barang yang direkomendasikan</h4>
                <div class="row mt-40">
                    @foreach ($data['recommended_products'] as $prd)
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            @include('clients.buyer.components.list_product3')
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
        $(document).ready(function() {});

        function deleteWishlist(id) {

            $('.loading').removeClass('d-none').addClass('show-modal');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "get",
                url: "{{ route('buyer.deleteWishlist') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}",
                data: {
                    id: id
                },
                xhr: function() {
                    // get the native XmlHttpRequest object
                    var xhr = $.ajaxSettings.xhr()
                    // set the onprogress event handler
                    xhr.upload.onprogress = function(evt) {}
                    return xhr
                },
                success: function(response) {
                    messageSuccess(response.message);
                    $(`.item-wishlists-${id}`).remove();
                    if ($(".item-wishl").hasClass("item-wishlist")) {} else {
                        $('.container-none').removeClass('d-none');
                    }

                    $('.loading').removeClass('show-modal').addClass('d-none')
                },

                error: function(error) {
                    if (error && error.responseJSON && error
                        .responseJSON.message) {
                        messageError(error.responseJSON.message);
                    }
                    $('.loading').removeClass('show-modal').addClass('d-none')
                }
            });

        }

        function buyNow(productId, stock, seller_id) {
            if (stock > 0) {
                if ("{{ $data['addresses']->id }}") {
                    $('.loading').removeClass('d-none').addClass('show-modal');
                    var productData = [{
                        product_id: productId,
                        note: "Tolong ini hati-hati bawanya ",
                        qty: 1,
                    }];
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: "post",
                        url: "{{ route('buyer.preCheckEarly') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}",
                        data: {
                            order_items: JSON.stringify(productData)
                        },
                        xhr: function() {
                            // get the native XmlHttpRequest object
                            var xhr = $.ajaxSettings.xhr()
                            // set the onprogress event handler
                            xhr.upload.onprogress = function(evt) {}
                            return xhr
                        },
                        success: function(response) {
                            if (response) {
                                if ("{{ $data['addresses']->id ?? '' }}" == null) {
                                    messageError('Kamu belum menginput alamat');
                                    $('.loading').removeClass(
                                            'show-modal')
                                        .addClass('d-none');

                                } else {
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                    $.ajax({
                                        type: "post",
                                        url: "{{ route('buyer.preCheck') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}",
                                        data: {
                                            order_items: JSON.stringify(productData),
                                            seller_id: seller_id,
                                            address_id: "{{ $data['addresses']->id ?? '' }}",
                                        },
                                        xhr: function() {
                                            // get the native XmlHttpRequest object
                                            var xhr = $.ajaxSettings.xhr()
                                            // set the onprogress event handler
                                            xhr.upload.onprogress = function(evt) {}
                                            return xhr
                                        },
                                        success: function(response) {
                                            if (response) {
                                                if (response
                                                    .delivery_services_info &&
                                                    response
                                                    .delivery_services_info
                                                    .results && response
                                                    .delivery_services_info.results
                                                    .length > 0) {
                                                    var results = response
                                                        .delivery_services_info
                                                        .results;
                                                    var filteredResults = results
                                                        .filter(function(item) {
                                                            return (
                                                                item.costs
                                                                .length >
                                                                0 &&
                                                                item.costs[
                                                                    0].cost
                                                                .length >
                                                                0 &&
                                                                typeof item
                                                                .costs[0]
                                                                .cost[0]
                                                                .value !==
                                                                'undefined' &&
                                                                typeof item
                                                                .costs[0]
                                                                .cost[0]
                                                                .etd !==
                                                                'undefined'
                                                            );
                                                        });
                                                    if (filteredResults) {
                                                        localStorage.setItem(
                                                            'seller_id',
                                                            seller_id
                                                        );
                                                        localStorage.setItem(
                                                            'checkout',
                                                            JSON
                                                            .stringify(response)
                                                        );
                                                        window.location.replace(
                                                            "{{ route('buyer.checkout') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"
                                                        );
                                                    } else {
                                                        messageError(
                                                            'Paket Pengiriman tidak tersedia'
                                                        );
                                                    }
                                                } else {
                                                    messageError(
                                                        'Paket Pengiriman tidak tersedia'
                                                    );
                                                }
                                                $('.loading').removeClass(
                                                        'show-modal')
                                                    .addClass('d-none');
                                            } else {
                                                $('.loading').removeClass(
                                                        'show-modal')
                                                    .addClass('d-none');
                                            }
                                        },

                                        error: function(error) {
                                            if (error && error.responseJSON && error
                                                .responseJSON.message) {
                                                messageError(
                                                    error
                                                    .responseJSON.message
                                                );
                                            }
                                            $('.loading').removeClass('show-modal')
                                                .addClass('d-none');
                                        }
                                    });
                                }
                            } else {
                                $('.loading').removeClass(
                                        'show-modal')
                                    .addClass('d-none');

                            }
                        },
                        error: function(error) {
                            $('.loading').removeClass('show-modal').addClass('d-none');
                            console.log('error');
                            console.log(error);
                            if (error && error.responseJSON && error
                                .responseJSON.message) {
                                messageError(
                                    error
                                    .responseJSON.message
                                );
                            }

                        }
                    });
                } else {
                    messageError('Kamu belum mengatur alamat utama');
                }
            } else {
                messageError('Stok sudah habis');
            }

        }

        function messageSuccess(res) {
            $('#myDivHandleSuccess').text('');
            $('#myDivHandleSuccess').text(res);
            $('#myDivHandleSuccess').css('display',
                'block');
            setTimeout(function() {
                $('#myDivHandleSuccess')
                    .fadeOut(
                        'fast');
            }, 2000);
        }

        function messageError(res) {
            $('#myDivHandleError').text('');
            $('#myDivHandleError').text(res);
            $('#myDivHandleError').css('display',
                'block');
            setTimeout(function() {
                $('#myDivHandleError')
                    .fadeOut(
                        'fast');
            }, 2000);
        }
    </script>
@endpush
