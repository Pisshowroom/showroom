@extends('clients.buyer.master')
@section('title', 'Keranjang')

@section('childs')
    <main class="main">
        <div class="section-box">
            <div class="breadcrumbs-div">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a class="font-xs color-gray-1000" href="{{ route('buyer.home') }}">Beranda</a></li>
                        <li><a class="font-xs color-gray-1000" href="{{ route('buyer.allGridProduct') }}">Produk</a>
                        </li>
                        <li><a class="font-xs color-gray-500" href="{{ route('buyer.cart') }}">Keranjang</a>
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
                                <div class="col-lg-6 col-md-6 col-sm-6-col-6"><a class="btn btn-buy w-auto arrow-back mb-10"
                                        href="{{ route('buyer.allGridProduct') }}">Lanjutkan Belanja</a></div>
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
                    return (convertPiToRupiah(angka)) + " π";

                return prefix === undefined ? rupiah : (rupiah ? 'Rp ' + rupiah : '');
            }

            var carts = localStorage.getItem('cart');
            if (carts) {
                try {
                    var cart = JSON.parse(carts);
                    var html = '';
                    cart.forEach((element, i) => {
                        html += `<div class="item-wishlist">
                                    <div class="wishlist-product">
                                        <div class="product-wishlist">
                                            <div class="product-image"><a
                                                    href="{{ route('buyer.detailProduct', ['slug' => 'sd']) }}"><img
                                                        src=" {{ asset('ecom/imgs/page/product/img-sub.png') }}"
                                                        alt="${element.name}"></a></div>
                                            <div class="product-info">
                                                <a
                                                    href="{{ route('buyer.detailProduct', ['slug' => 'sd']) }}">
                                                    <h6 class="color-brand-3 line-2 text-start">${element.name}</h6>
                                                </a>
                                                <div class="rating"><img
                                                        src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                        alt="rating produk ${element.name}"><span class="font-xs color-gray-500">
                                                        (65)
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wishlist-price">
                                        <h5 class="color-brand-3">${formatRupiah(element.price, 'Rp ')}</h5>
                                    </div>
                                    <div class="wishlist-status">
                                        <div class="box-quantity">
                                            <div class="input-quantity">
                                                <input class="font-xl color-brand-3" type="text" value="${element.qty}"><span
                                                    class="minus-cart"></span><span class="plus-cart"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wishlist-remove">
                                        <button class="btn btn-delete" href="#" id="cart-"></button>
                                    </div>
                                </div>`
                        $('.content-wishlist').html(html);
                    });

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

                    // $('.subtotal').text(formatRupiah(checkout.total, 'Rp '));
                    // $('.total').text(formatRupiah(checkout.total, 'Rp '));
                    // if (checkout.delivery_services_info && checkout.delivery_services_info.results && checkout
                    //     .delivery_services_info.results.length > 0) {
                    //     var result = '';
                    //     checkout.delivery_services_info.results.forEach(element => {
                    //         if (element.costs && element.costs.length > 0 && element.costs[0].cost.length >
                    //             0 && element.costs[0].cost[0].etd) {
                    //             result +=
                    //                 `<option class="choose-packet packet-${element.code}" value="${element.code}">${element.name} | ${formatRupiah(element.costs[0].cost[0].value, 'Rp ')}
                //                     <input type="hidden" value="${element.name}" class="name">
                //                     <input type="hidden" value="${element.costs[0].cost[0].value}" class="cost">
                //                     <input type="hidden" value="${element.costs[0].cost[0].etd}" class="etd">
                //                     <input type="hidden" value="${element.costs[0].service}(${element.costs[0].description})" class="description">
                //                 </option>`;
                    //         }
                    //     });
                    //     $('#packet').append(result);
                    // }

                } catch (error) {
                    console.error('Error parsing JSON:', error);
                }
            } else {
                var html = '';
                html += `<div class="col-lg-12 text-center mt-40">
                        <img src="{{ asset('ecom/imgs/page/blog/blog-15.jpg') }}" alt="Tidak ada keranjang saat ini"></div>
                            <h4 class="mt-20">Tidak ada Produk saat ini</h4>
                        </div>`
                $('.content-wishlist').html(html);
            }
        });
    </script>
@endpush
