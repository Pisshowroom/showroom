@extends('clients.buyer.master')
@section('title', 'Checkout')

@section('childs')
    <main class="main">
        <div class="section-box">
            <div class="breadcrumbs-div">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a class="font-xs color-gray-1000" href="{{ route('buyer.home') }}">Beranda</a></li>
                        <li><a class="font-xs color-gray-1000" href="{{ route('buyer.allGridProduct') }}">Produk</a>
                        </li>
                        <li><a class="font-xs color-gray-500" href="{{ route('buyer.checkout') }}">Checkout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="section-box shop-template">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="box-border">
                            <div class="box-payment"><a class="btn btn-gpay"><img
                                        src="{{ asset('ecom/imgs/page/checkout/gpay.svg') }}" alt="Ecom"></a><a
                                    class="btn btn-paypal"><img src="{{ asset('ecom/imgs/page/checkout/paypal.svg') }}"
                                        alt="Ecom"></a><a class="btn btn-amazon"><img
                                        src="{{ asset('ecom/imgs/page/checkout/amazon.svg') }}" alt="Ecom"></a></div>
                            <div class="border-bottom-4 text-center mb-20">
                                <div class="text-or font-md color-gray-500">Or</div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-20">
                                    <h5 class="font-md-bold color-brand-3 text-sm-start text-center">Kontak informasi</h5>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control font-sm" type="text" placeholder="Email*">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <h5 class="font-md-bold color-brand-3 mt-15 mb-20">Pengiriman dan Pembelian</h5>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label" for="packet">Pilih Kurir</label>
                                        <select class="form-control font-sm select-style1 color-gray-700" id="packet"
                                            name="packet">
                                            <option value="">Pilih salah satu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label" for="master_account_id">Pilih Pembayaran</label>
                                        <select class="form-control font-sm select-style1 color-gray-700"
                                            id="master_account_id" name="master_account_id">
                                            <option value="">Pilih salah satu</option>
                                            @foreach ($data['master_account'] as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-20">
                                <div class="col-lg-6 col-5 mb-20"><a class="btn font-sm-bold color-brand-1 arrow-back-1"
                                        href="{{ route('buyer.cart') }}">Kembali ke Keranjang</a></div>
                                <div class="col-lg-6 col-7 mb-20 text-end">
                                    <button class="btn btn-buy w-auto arrow-next">Pesan Sekarang</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-border">
                                <h5 class="font-md-bold mb-20">Pesanan mu</h5>
                                <div class="listCheckout">
                                    {{-- <div class="item-wishlist">
                                    <div class="wishlist-product">
                                        <div class="product-wishlist">
                                            <div class="product-image"><a
                                                    href="{{ route('buyer.detailProduct', ['slug' => 'sd']) }}"><img
                                                        src="{{ asset('ecom/imgs/page/product/img-sub.png') }}"
                                                        alt="Ecom"></a></div>
                                            <div class="product-info"><a
                                                    href="{{ route('buyer.detailProduct', ['slug' => 'sd']) }}">
                                                    <h6 class="color-brand-3">Gateway 23.8&quot; All-in-one Desktop,
                                                        Fully Adjustable Stand</h6>
                                                </a>
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
                                                    </span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wishlist-status">
                                        <h5 class="color-gray-500">x1</h5>
                                    </div>
                                    <div class="wishlist-price">
                                        <h4 class="color-brand-3 font-lg-bold">$2.51</h4>
                                    </div>
                                </div> --}}
                                </div>
                                <div class="form-group d-flex mt-15">
                                    <input class="form-control mr-15" placeholder="Masukkan Kupon">
                                    <button class="btn btn-buy w-auto">Kirim</button>
                                </div>
                                <div class="form-group mb-0">
                                    <div class="row mb-10">
                                        <div class="col-lg-6 col-6"><span class="font-md-bold color-brand-3">Subtotal</span>
                                        </div>
                                        <div class="col-lg-6 col-6 text-end"><span
                                                class="font-md-bold color-brand-3 subtotal">$6.51</span></div>
                                    </div>
                                    <div class="border-bottom mb-10 pb-5">
                                        <div class="row">
                                            <div class="col-lg-6 col-6"><span
                                                    class="font-md-bold color-brand-3">Pengiriman</span></div>
                                            <div class="col-lg-6 col-6 text-end"><span
                                                    class="font-md-bold color-brand-3 shipping">-</span></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-6"><span class="font-md-bold color-brand-3">Total</span>
                                        </div>
                                        <div class="col-lg-6 col-6 text-end"><span
                                                class="font-md-bold color-brand-3 total">$6.51</span></div>
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
    <script>
        $(document).ready(function() {
            function formatRupiah(angka, prefix) {
                var number_string = angka.toString(),
                    split = number_string.split(','),
                    sisa = split[0].length % 3,
                    rupiah = split[0].substr(0, sisa),
                    ribuan = split[0].substr(sisa).match(/\d{3}/g);

                if (ribuan) {
                    separator = sisa ? '.' : '';
                    rupiah += separator + ribuan.join('.');
                }

                rupiah = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
                return prefix === undefined ? rupiah : (rupiah ? 'Rp ' + rupiah : '');
            }
            var checkouts = localStorage.getItem('checkout');
            if (checkouts) {
                try {
                    var checkout = JSON.parse(checkouts);
                    var html = '';
                    checkout.products.forEach((element, i) => {
                        html += `<div class="item-wishlist">
                                    <div class="wishlist-product">
                                        <div class="product-wishlist">
                                            <div class="product-image"><a
                                                    href="{{ route('buyer.detailProduct', ['slug' => 'sd']) }}"><img
                                                        src=" {{ asset('ecom/imgs/page/product/img-sub.png') }}"
                                                        alt="Ecom"></a></div>
                                            <div class="product-info">
                                                <a
                                                    href="{{ route('buyer.detailProduct', ['slug' => 'sd']) }}">
                                                    <h6 class="color-brand-3 line-2 text-start">${element.name}</h6>
                                                </a>
                                                <div class="rating"><img
                                                        src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                        alt="Ecom"><span class="font-xs color-gray-500">
                                                        (65)
                                                    </span></div>
                                                        <h6 class="color-brand-3 font-md-bold">${formatRupiah(element.price, 'Rp ')}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>`
                        $('.listCheckout').html(html);
                    });
                    $('.subtotal').text(formatRupiah(checkout.total, 'Rp '));
                    $('.total').text(formatRupiah(checkout.total, 'Rp '));
                    if (checkout.delivery_services_info && checkout.delivery_services_info.results && checkout
                        .delivery_services_info.results.length > 0) {
                        var result = '';
                        checkout.delivery_services_info.results.forEach(element => {
                            if (element.costs && element.costs.length > 0 && element.costs[0].cost.length) {
                                result +=
                                    `<option class="choose-packet packet-${element.code}" value="${element.code}">${element.name} | ${formatRupiah(element.costs[0].cost[0].value, 'Rp ')}</option>`;
                            }
                        });
                        $('#packet').append(result);
                    }
                    checkout.delivery_services_info
                } catch (error) {
                    console.error('Error parsing JSON:', error);
                }
            } else {
                window.location.replace("{{ route('buyer.home') }}");
            }

            $('#packet').on('change', function() {
                console.log($(this).text());
            });
            $('.arrow-next').on('click', function() {

            })
        });
    </script>
@endpush
