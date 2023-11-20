@extends('clients.buyer.master')
@section('title', 'Keranjang')

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
                                href="{{ route('buyer.cart') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Keranjang</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="section-box shop-template">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box-carts">
                            <div class="head-wishlist">
                                <div class="item-wishlist">
                                    <div class="wishlist-product"><span class="font-md-bold color-brand-3">Produk</span>
                                    </div>
                                    <div class="wishlist-price"><span class="font-md-bold color-brand-3">Harga</span>
                                    </div>
                                    <div class="wishlist-status"><span class="font-md-bold color-brand-3">Kuantitas</span>
                                    </div>
                                    <div class="wishlist-remove"><span class="font-md-bold color-brand-3">Hapus</span>
                                    </div>
                                </div>
                            </div>
                            <div class="content-wishlist mb-20">
                                {{-- <div class="item-wishlist">
                                    <div class="wishlist-product">
                                        <div class="product-wishlist">
                                            <div class="product-image"><a
                                                    href="{{ route('buyer.detailProduct', ['slug' => 'sd']) }}"><img
                                                        src="{{ asset('ecom/imgs/page/product/img-sub.png') }}"
                                                        alt="Ecom"></a></div>
                                            <div class="product-info"><a
                                                    href="{{ route('buyer.detailProduct', ['slug' => 'sd']) }}">
                                                    <h6 class="color-brand-3 text-start line-2">Dell Optiplex 9020 Small
                                                        Form Business Desktop
                                                        Tower PC</h6>
                                                </a>
                                                <div class="rating"><img
                                                        src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                        alt="Ecom"><span class="font-xs color-gray-500"> (65)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wishlist-price">
                                        <h4 class="color-brand-3">$2.51</h4>
                                    </div>
                                    <div class="wishlist-status">
                                        <div class="box-quantity">
                                            <div class="input-quantity">
                                                <input class="font-xl color-brand-3" type="text" value="1"><span
                                                    class="minus-cart"></span><span class="plus-cart"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wishlist-remove"><a class="btn btn-delete" href="#"></a></div>
                                </div> --}}
                            </div>
                            <div class="row mb-40">
                                <div class="col-lg-6 col-md-6 col-sm-6-col-6"><a class="btn btn-cart w-auto mb-10"
                                        href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Lanjutkan
                                        Belanja</a></div>
                                <div class="col-lg-6 col-md-6 col-sm-6-col-6 text-md-end">
                                    <button class="btn btn-buy w-auto update-cart mb-10" id="update-cart">Checkout</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-3">
                        <div class="summary-cart">
                            <div class="border-bottom mb-10">
                                <div class="row">
                                    <div class="col-6"><span class="font-md-bold color-gray-500">Subtotal</span></div>
                                    <div class="col-6 text-end">
                                        <h4> $2.51</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom mb-10">
                                <div class="row">
                                    <div class="col-6"><span class="font-md-bold color-gray-500">Shipping</span></div>
                                    <div class="col-6 text-end">
                                        <h4> Free</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom mb-10">
                                <div class="row">
                                    <div class="col-6"><span class="font-md-bold color-gray-500">Perkiraan untuk</span>
                                    </div>
                                    <div class="col-6 text-end">
                                        <h6>United Kingdom</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-10">
                                <div class="row">
                                    <div class="col-6"><span class="font-md-bold color-gray-500">Total</span></div>
                                    <div class="col-6 text-end">
                                        <h4> $2.51</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="box-button"><a class="btn btn-buy"
                                    href="{{ route('buyer.cart') }}">Lanjutkan ke
                                    pembayaran</a></div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        @include('clients.buyer.layouts.benefit')

    </main>
@endsection
@push('importjs')
    <script>
        $(document).ready(function() {
            function formatRupiah(angka, prefix) {
                var number_string = angka.toString(),
                    split = number_string.split(','),
                    sisa = split[0].length % 3,
                    rupiah = split[0].substr(0, sisa),
                    ribuan = split[0].substr(sisa).match(/\d{3}/g);
                let userAgent = navigator.userAgent;
                let isPi = false

                if (ribuan) {
                    separator = sisa ? '.' : '';
                    rupiah += separator + ribuan.join('.');
                }

                rupiah = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;

                if (userAgent) {
                    if (userAgent.match(/PiBrowser/))
                        isPi = true
                }

                if (isPi)
                    return (convertRupiahToPi(angka)) + " π";

                return prefix === undefined ? rupiah : (rupiah ? 'Rp ' + rupiah : '');
            }

            function convertRupiahToPi(price) {
                var value = {{ $setting->value ?? 558647.95 }}

                return (1 / value) * (price);
            }

            var carts = localStorage.getItem('cart');
            if (carts) {
                try {
                    var cart = JSON.parse(carts);
                    cartss(cart);

                    function cartss(crt) {
                        $('.content-wishlist').empty();
                        var html = '';
                        crt.forEach((element, i) => {
                            var urlSeller =
                                "{{ route('buyer.detailSeller', ['slug' => ':slug']) }}";
                            urlSeller = urlSeller.replace(':slug', element.seller?.seller_slug);
                            var url =
                                "{{ route('buyer.detailProduct', ['slug' => ':slug']) }}";
                            url = url.replace(':slug', element.slug);
                            html += `<div class="item-wishlist" id="item-wishlist-${element.id}">
                                            <div class="wishlist-product">
                                                <div class="product-wishlist">
                                                    <div class="product-image"><a
                                                            href="${url}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"><img
                                                                src=" {{ asset('ecom/imgs/page/product/img-sub.png') }}"
                                                                alt="${element.name}"></a></div>
                                                    <div class="product-info">
                                                        <a
                                                            href="${url}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                                            <h6 class="color-brand-3 line-2 text-start" style="word-wrap:break-word;">${element.name}</h6>
                                                        </a>
                                                        <a class="w-100"
                                                            href="${urlSeller}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                                            <p class="color-brand-3 line-2 text-start" style="word-wrap:break-word;">${element.seller?.seller_name??'-'}</p>
                                                        </a>
                                                        <div class="rating"><img
                                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                                alt="rating produk ${element.name}"><span class="font-xs color-gray-500">${element.reviews_avg_rating?parseFloat(element.reviews_avg_rating):0}
                                                                (${formatRupiah(element.reviews_count)} ulasan)
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wishlist-price">
                                                <h6 class="color-brand-3 font-md-bold">${element.price_discount&&element.price_discount>0?formatRupiah(element.price_discount, 'Rp '):formatRupiah(element.price, 'Rp ')}</h6>
                                                        <p class="color-brand-3 font-sm" style="text-decoration: line-through;">${element.price_discount&&element.price_discount>0?formatRupiah(element.price, 'Rp '):''}</p>

                                            </div>
                                            <div class="wishlist-status">
                                                <div class="box-quantity">
                                                    <div class="input-quantity" id="item-input-quantity-${element.id}">
                                                        <input class="font-xl color-brand-3" id="element-qty-${element.id}" type="text" value="${element.qty}"><span
                                                            class="minus-cart"></span><span class="plus-cart"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wishlist-remove">
                                                <button class="btn btn-delete" id="btn-delete-${element.id}">
                                                    <input type="hidden" value="${element.id}"
                                                </button>
                                            </div>
                                        </div>`
                        });
                        $('.content-wishlist').html(html);

                        $(".btn-delete").on("click", function(event) {
                            event.stopPropagation();

                            var product_idToDelete = $(this).find('input').val();
                            var existingProductIndex = cart.findIndex(function(item) {
                                return item.id == product_idToDelete;
                            });

                            if (existingProductIndex != -1) {
                                cart.splice(existingProductIndex, 1);

                                if (cart.length == 0) {
                                    localStorage.removeItem('cart');
                                    window.location.replace(
                                        "{{ route('buyer.home') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"
                                    );
                                } else {
                                    // Membersihkan tampilan sebelum menambahkan kembali elemen-elemen yang diperbarui

                                    localStorage.setItem('cart', JSON.stringify(cart));
                                    var cartsNew = localStorage.getItem('cart');
                                    var cartNew = JSON.parse(cartsNew);
                                    console.log(cartNew);
                                    console.log('cartNew');
                                    cartss(cartNew);
                                }

                                $('#myDivHandleSuccess').text('Berhasil menghapus barang dari keranjang');
                                $('#myDivHandleSuccess').css('display', 'block');
                                setTimeout(function() {
                                    $('#myDivHandleSuccess').fadeOut('fast');
                                }, 2000);
                            } else {
                                $('#myDivHandleError').text('Barang tidak ditemukan di keranjang');
                                $('#myDivHandleError').css('display', 'block');
                                setTimeout(function() {
                                    $('#myDivHandleError').fadeOut('fast');
                                }, 2000);
                            }
                        });

                        $(".minus-cart").on("click", function() {
                            var _parent = $(this).parents(".input-quantity");
                            var _currentInput = _parent.find("input");
                            var _number = parseInt(_currentInput.val());
                            if (_number > 1) {
                                _number = _number - 1;
                            }
                            _currentInput.val(_number);
                        });

                        $(".plus-cart").on("click", function() {
                            var _parent = $(this).parents(".input-quantity");
                            var _currentInput = _parent.find("input");
                            var _number = parseInt(_currentInput.val());
                            if (_number >= 0) {
                                _number = _number + 1;
                            }
                            _currentInput.val(_number);
                        });

                    }

                    $('.input-quantity input').on('input', function() {
                        var inputValue = $(this).val();
                        var numericValue = parseInt(inputValue);

                        if (numericValue < 1 || isNaN(numericValue) || inputValue == '') {
                            $('#update-cart').prop('disabled', true);
                        } else {
                            $('#update-cart').prop('disabled', false);
                        }
                        if (numericValue === 0) {
                            $('#myDivHandleError').text('Minimal pembelian produk ini adalah 1 barang');
                            $('#myDivHandleError').css('display', 'block');
                            setTimeout(function() {
                                $('#myDivHandleError').fadeOut('fast');
                            }, 2000);
                        }
                    });

                    $("#update-cart").on("click", function() {
                        // Iterate through each item-wishlist
                        $(".item-wishlist").each(function() {
                            var productId = parseInt($(this).find(".btn-delete input").val());
                            var quantity = parseInt($(this).find(".box-quantity input").val());

                            var existingProductIndex = cart.findIndex(function(item) {
                                return item.product_id === productId;
                            });

                            if (existingProductIndex !== -1) {
                                cart[existingProductIndex].qty = quantity;
                            }
                        });
                        var firstSellerId = cart.length > 0 ? cart[0].seller_id : null;

                        var isSameSeller = cart.every(function(item) {
                            return item.seller_id === firstSellerId;
                        });

                        if (isSameSeller) {
                            if (
                                "{{ $data['addresses'] && $data['addresses'] != null && $data['addresses']->id }}"
                            ) {
                                $('.loading').removeClass('d-none').addClass('show-modal');
                                $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }
                                });
                                $.ajax({
                                    type: "post",
                                    url: "{{ route('buyer.preCheckEarly') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}",
                                    data: {
                                        order_items: JSON.stringify(cart)
                                    },
                                    xhr: function() {
                                        // get the native XmlHttpRequest object
                                        var xhr = $.ajaxSettings.xhr()
                                        // set the onprogress event handler
                                        xhr.upload.onprogress = function(evt) {}
                                        return xhr
                                    },
                                    success: function(response) {
                                        console.log(response);
                                        $('.loading').removeClass('show-modal')
                                            .addClass('d-none');

                                        if (response) {
                                            $.ajaxSetup({
                                                headers: {
                                                    'X-CSRF-TOKEN': $(
                                                            'meta[name="csrf-token"]')
                                                        .attr(
                                                            'content')
                                                }
                                            });
                                            $.ajax({
                                                type: "post",
                                                url: "{{ route('buyer.preCheck') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}",
                                                data: {
                                                    order_items: JSON.stringify(cart),
                                                    seller_id: cart[0].seller_id,
                                                    address_id: "{{ $data['addresses']->id ?? '' }}",
                                                },
                                                xhr: function() {
                                                    // get the native XmlHttpRequest object
                                                    var xhr = $.ajaxSettings.xhr()
                                                    // set the onprogress event handler
                                                    xhr.upload.onprogress =
                                                        function(
                                                            evt) {}
                                                    return xhr
                                                },
                                                success: function(response) {
                                                    if (response) {
                                                        if (response
                                                            .delivery_services_info &&
                                                            response
                                                            .delivery_services_info
                                                            .results &&
                                                            response
                                                            .delivery_services_info
                                                            .results
                                                            .length > 0) {
                                                            var results = response
                                                                .delivery_services_info
                                                                .results;
                                                            var filteredResults =
                                                                results
                                                                .filter(function(
                                                                    item) {
                                                                    return (
                                                                        item
                                                                        .costs
                                                                        .length >
                                                                        0 &&
                                                                        item
                                                                        .costs[
                                                                            0
                                                                        ]
                                                                        .cost
                                                                        .length >
                                                                        0 &&
                                                                        typeof item
                                                                        .costs[
                                                                            0
                                                                        ]
                                                                        .cost[
                                                                            0
                                                                        ]
                                                                        .value !==
                                                                        'undefined' &&
                                                                        typeof item
                                                                        .costs[
                                                                            0
                                                                        ]
                                                                        .cost[
                                                                            0
                                                                        ]
                                                                        .etd !==
                                                                        'undefined'
                                                                    );
                                                                });
                                                            if (filteredResults) {
                                                                localStorage
                                                                    .setItem(
                                                                        'seller_id',
                                                                        cart[
                                                                            0]
                                                                        .seller_id
                                                                    );
                                                                localStorage
                                                                    .setItem(
                                                                        'checkout',
                                                                        JSON
                                                                        .stringify(
                                                                            response
                                                                        ));
                                                                window.location
                                                                    .replace(
                                                                        "{{ route('buyer.checkout') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"
                                                                    );
                                                            } else {
                                                                $('#myDivHandleError')
                                                                    .text(
                                                                        'Paket Pengiriman tidak tersedia'
                                                                    );
                                                                $('#myDivHandleError')
                                                                    .css(
                                                                        'display',
                                                                        'block');
                                                                setTimeout(
                                                                    function() {
                                                                        $('#myDivHandleError')
                                                                            .fadeOut(
                                                                                'fast'
                                                                            );
                                                                    }, 2000);
                                                            }
                                                        } else {
                                                            $('#myDivHandleError')
                                                                .text(
                                                                    'Paket Pengiriman tidak tersedia'
                                                                );
                                                            $('#myDivHandleError')
                                                                .css(
                                                                    'display',
                                                                    'block');
                                                            setTimeout(function() {
                                                                $('#myDivHandleError')
                                                                    .fadeOut(
                                                                        'fast'
                                                                    );
                                                            }, 2000);
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
                                                    if (error && error
                                                        .responseJSON &&
                                                        error
                                                        .responseJSON.message) {
                                                        $('#myDivHandleError').text(
                                                            error
                                                            .responseJSON
                                                            .message);
                                                        $('#myDivHandleError').css(
                                                            'display',
                                                            'block');
                                                        setTimeout(function() {
                                                            $('#myDivHandleError')
                                                                .fadeOut(
                                                                    'fast');
                                                        }, 2000);
                                                    }
                                                    $('.loading').removeClass(
                                                            'show-modal')
                                                        .addClass('d-none');

                                                    console.log('error');
                                                    console.log(error);
                                                }
                                            });
                                        } else {
                                            $('.loading').removeClass('show-modal')
                                                .addClass('d-none');
                                        }
                                    },

                                    error: function(error) {
                                        console.log('error');
                                        console.log(error);
                                        if (error && error.responseJSON && error
                                            .responseJSON.message) {
                                            $('#myDivHandleError').text(error
                                                .responseJSON.message);
                                            $('#myDivHandleError').css('display',
                                                'block');
                                            setTimeout(function() {
                                                $('#myDivHandleError')
                                                    .fadeOut(
                                                        'fast');
                                            }, 2000);
                                        }
                                        $('.loading').removeClass('show-modal')
                                            .addClass('d-none');

                                    }
                                });
                            } else {
                                $('#myDivAddress').css('display', 'block');
                                setTimeout(function() {
                                    $('#myDivAddress').fadeOut('fast');
                                }, 2000);
                            }

                            console.log("Semua item memiliki seller_id yang sama:", firstSellerId);
                        } else {
                            $('#myDivHandleError').text(
                                'Transaksi hanya bisa 1 Toko'
                            );
                            $('#myDivHandleError').css(
                                'display',
                                'block');
                            setTimeout(function() {
                                $('#myDivHandleError')
                                    .fadeOut(
                                        'fast');
                            }, 2000);
                        }
                        localStorage.setItem("cart", JSON.stringify(cart));

                    });


                } catch (error) {
                    console.error('Error parsing JSON:', error);
                }
            } else {
                var html = '';
                html += `<div class="col-lg-12 text-center mt-40">
                        <img width="50%" src="{{ asset('ecom/imgs/page/blog/blog-15.jpg') }}" alt="Tidak ada keranjang saat ini"></div>
                            <h4 class="mt-20 mb-30 text-center">Tidak ada Produk saat ini</h4>
                        </div>`
                $('.content-wishlist').html(html);
            }
        });
    </script>
@endpush
