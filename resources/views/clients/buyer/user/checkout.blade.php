@extends('clients.buyer.master')
@section('title', 'Checkout')

@section('childs')
    <main class="main">
        <div class="section-box">
            <div class="breadcrumbs-div">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a class="font-xs color-gray-1000" href="{{ route('buyer.home') }}{{ Auth::check() && preg_match('/Chrome/i',request()->header('User-Agent')) ?  '?auth='.base64_encode(Auth::user()->uid) : '' }}">Beranda</a></li>
                        <li><a class="font-xs color-gray-1000" href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/Chrome/i',request()->header('User-Agent')) ?  '?auth='.base64_encode(Auth::user()->uid) : '' }}">Produk</a>
                        </li>
                        <li><a class="font-xs color-gray-500" href="{{ route('buyer.checkout') }}{{ Auth::check() && preg_match('/Chrome/i',request()->header('User-Agent')) ?  '?auth='.base64_encode(Auth::user()->uid) : '' }}">Checkout</a>
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
                            {{-- <div class="form-group d-flex mt-15">
                                <input class="form-control mr-15" placeholder="Masukkan Kupon">
                                <button class="btn btn-buy w-auto">Kirim</button>
                            </div> --}}
                            <div class="form-group mb-0">
                                <div class="row mb-10">
                                    <div class="col-lg-6 col-6"><span class="font-md-bold color-brand-3">Subtotal</span>
                                    </div>
                                    <div class="col-lg-6 col-6 text-end"><span
                                            class="font-md-bold color-brand-3 subtotal">-</span></div>
                                </div>
                                <div class="border-bottom mb-10 pb-5">
                                    <div class="row">
                                        <div class="col-lg-6 col-6"><span class="font-md-bold color-brand-3">Biaya
                                                Pengiriman</span></div>
                                        <div class="col-lg-6 col-6 text-end"><span
                                                class="font-md-bold color-brand-3 shipping">-</span></div>
                                    </div>
                                </div>
                                <div class="border-bottom mb-10 pb-5">
                                    <div class="row">
                                        <div class="col-lg-6 col-6"><span class="font-md-bold color-brand-3">Biaya
                                                Jasa</span></div>
                                        <div class="col-lg-6 col-6 text-end"><span
                                                class="font-md-bold color-brand-3 fee">-</span></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-6"><span class="font-md-bold color-brand-3">Total</span>
                                    </div>
                                    <div class="col-lg-6 col-6 text-end"><span
                                            class="font-md-bold color-brand-3 total">-</span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="box-border">
                            {{-- <div class="box-payment"><a class="btn btn-gpay"><img
                                        src="{{ asset('ecom/imgs/page/checkout/gpay.svg') }}" alt="Ecom"></a><a
                                    class="btn btn-paypal"><img src="{{ asset('ecom/imgs/page/checkout/paypal.svg') }}"
                                        alt="Ecom"></a><a class="btn btn-amazon"><img
                                        src="{{ asset('ecom/imgs/page/checkout/amazon.svg') }}" alt="Ecom"></a></div>
                            <div class="border-bottom-4 text-center mb-20">
                                <div class="text-or font-md color-gray-500">Or</div>
                            </div> --}}
                            <div class="row">
                                <div class="col-12 mb-20">
                                    <h5 class="font-md-bold color-brand-3 text-sm-start text-center">Lokasi</h5>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label" for="address_id">Pilih Alamat</label>
                                        <select class="form-control font-sm select-style1" id="address_id"
                                            name="address_id">
                                            <option value="0">Pilih salah satu</option>
                                            @foreach ($data['address'] as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $item->main == 1 ? 'selected' : '' }}>
                                                    {{ $item->person_name }} ({{ $item->place_name }}) | No Handphone
                                                    {{ $item->phone_number }}, {{ $item->district }}, {{ $item->city }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if (count($data['address']) < 1)
                                            <h6 class="font-xs text-danger">Input alamat terlebih dahulu di <a
                                                    href="{{ route('dashboard.settings') }}{{ Auth::check() && preg_match('/Chrome/i',request()->header('User-Agent')) ?  '?auth='.base64_encode(Auth::user()->uid) : '' }}">Halaman Profil</a> </h6>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <h5 class="font-md-bold color-brand-3 mt-15 mb-20">Pengiriman dan Pembelian</h5>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label" for="master_account_id">Pilih Pembayaran</label>
                                        <select class="form-control font-sm select-style1"
                                            id="master_account_id" name="master_account_id">
                                            <option value="0">Pilih salah satu</option>
                                            @foreach ($data['master_account'] as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label" for="packet">Pilih Kurir</label>
                                        <select class="form-control font-sm select-style1" id="packet"
                                            disabled name="packet">
                                            <option value="0">Pilih salah satu</option>
                                        </select>
                                        <p class="font-xs text-danger d-none">Pilih alamat dan pembayaran terlebih dahulu
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-20">
                                <div class="col-lg-6 col-5 mb-20"><a class="btn font-sm-bold color-brand-1 arrow-back-1"
                                        href="{{ route('buyer.cart') }}{{ Auth::check() && preg_match('/Chrome/i',request()->header('User-Agent')) ?  '?auth='.base64_encode(Auth::user()->uid) : '' }}">Kembali ke Keranjang</a></div>
                                <div class="col-lg-6 col-7 mb-20 text-end">
                                    <button class="btn btn-buy w-auto arrow-next" disabled>Pesan Sekarang</button>
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

            var checkouts = localStorage.getItem('checkout');
            if (checkouts) {
                try {
                    var checkout = JSON.parse(checkouts);
                    var html = '';
                    checkout.products.forEach((element, i) => {
                        var url = "{{ route('buyer.detailProduct', ['slug' => ':slug']) }}";
                        url = url.replace(':slug', element.slug);

                        html += `<div class="item-wishlist">
                                    <div class="wishlist-product">
                                        <div class="product-wishlist">
                                            <div class="product-image"><a
                                                    href="${url}{{ Auth::check() && preg_match('/Chrome/i',request()->header('User-Agent')) ?  '?auth='.base64_encode(Auth::user()->uid) : '' }}"><img
                                                        src=" {{ asset('ecom/imgs/page/product/img-sub.png') }}"
                                                        alt="Ecom"></a></div>
                                            <div class="product-info">
                                                <a
                                                    href="${url}{{ Auth::check() && preg_match('/Chrome/i',request()->header('User-Agent')) ?  '?auth='.base64_encode(Auth::user()->uid) : '' }}">
                                                    <h6 class="color-brand-3 line-2 text-start" style="word-wrap:break-word;">${element.name}</h6>
                                                </a>
                                                <div class="rating"><img
                                                        src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                        alt="Ecom"><span class="font-xs color-gray-500">
                                                            ${element.rating} (${element.reviews_count} ulasan)
                                                    </span></div>
                                                        <h6 class="color-brand-3 font-md-bold">${element.price_discount&&element.price_discount>0?formatRupiah(element.price_discount, 'Rp '):formatRupiah(element.price, 'Rp ')}</h6>
                                                        <p class="color-brand-3 font-sm" style="text-decoration: line-through;">${element.price_discount&&element.price_discount>0?formatRupiah(element.price, 'Rp '):''}</p>
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
                            if (element.costs && element.costs.length > 0 && element.costs[0].cost.length >
                                0 && element.costs[0].cost[0].etd) {
                                result +=
                                    `<option class="choose-packet packet-${element.code}" value="${element.code}">${element.name} | ${formatRupiah(element.costs[0].cost[0].value, 'Rp ')}
                                        <input type="hidden" value="${element.name}" class="name">
                                        <input type="hidden" value="${element.costs[0].cost[0].value}" class="cost">
                                        <input type="hidden" value="${element.costs[0].cost[0].etd}" class="etd">
                                        <input type="hidden" value="${element.costs[0].service}(${element.costs[0].description})" class="description">
                                    </option>`;
                            }
                        });
                        $('#packet').append(result);
                    }

                } catch (error) {
                    console.error('Error parsing JSON:', error);
                }
            } else {
                window.location.replace("{{ route('buyer.home') }}{{ Auth::check() && preg_match('/Chrome/i',request()->header('User-Agent')) ?  '?auth='.base64_encode(Auth::user()->uid) : '' }}");
            }
            if ($('#address_id').find('option:selected').val() != 0 && $('#master_account_id').find(
                    'option:selected')
                .val() !=
                0 && $('#packet').find('option:selected').val() != 0) {
                $('.arrow-next').prop('disabled', false);
            }

            if ($('#address_id').find('option:selected')) {
                if ($(this).val() != 0) {
                    if ($('#master_account_id').find('option:selected').val() != 0) {
                        $('#packet').prop('disabled', false);
                        $('p.text-danger').addClass('d-none').removeClass('d-block');
                    } else {
                        $('#packet').prop('disabled', true);
                        $('p.text-danger').addClass('d-block').removeClass('d-none');
                    }
                } else if ($(this).val() == '') {
                    if ($('#master_account_id').find('option:selected').val() != 0) {
                        $('#packet').prop('disabled', false);
                        $('p.text-danger').addClass('d-none').removeClass('d-block');
                    } else {
                        $('#packet').prop('disabled', true);
                        $('p.text-danger').addClass('d-block').removeClass('d-none');
                    }
                } else {
                    $('p.text-danger').addClass('d-block').removeClass('d-none');
                }
            } else {
                $('p.text-danger').addClass('d-block').removeClass('d-none');
            }

            $('#address_id').on('change', function() {
                var selectedOption = $(this).find('option:selected');
                if (selectedOption.val() != 0) {
                    if ($('#master_account_id').find('option:selected').val() != 0) {
                        $('p.text-danger').addClass('d-none').removeClass('d-block');
                        $('#packet').prop('disabled', false);
                    }
                } else {
                    $('p.text-danger').addClass('d-block').removeClass('d-none');
                    $('#packet').prop('disabled', true);
                }
                if ($('#address_id').find('option:selected').val() != 0 && $('#master_account_id').find(
                        'option:selected')
                    .val() !=
                    0 && $('#packet').find('option:selected').val() != 0) {
                    $('.arrow-next').prop('disabled', false);
                } else if ($('#address_id').find(
                        'option:selected')
                    .val() ==
                    0) {
                    $('.arrow-next').prop('disabled', true);
                }
            });

            $('#master_account_id').on('change', function() {
                console.log($('#master_account_id').find('option:selected').val() != 0);
                if ($('#address_id').find('option:selected').val() != 0 && $('#master_account_id').find(
                        'option:selected')
                    .val() !=
                    0 && $('#packet').find('option:selected').val() == 0) {
                    console.log('asa');
                    $('p.text-danger').addClass('d-none').removeClass('d-block');
                    $('#packet').prop('disabled', false);
                } else if ($('#address_id').find('option:selected').val() != 0 && $('#master_account_id')
                    .find(
                        'option:selected')
                    .val() ==
                    0) {
                    console.log('asa');
                    $('p.text-danger').addClass('d-block').removeClass('d-none');
                    $('#packet').prop('disabled', true);
                } else if ($('#address_id').find('option:selected').val() != 0 && $('#master_account_id')
                    .find(
                        'option:selected')
                    .val() !=
                    0 && $('#packet').find('option:selected').val() != 0) {
                    $('.arrow-next').prop('disabled', false);
                } else if ($('#master_account_id').find(
                        'option:selected')
                    .val() ==
                    0) {
                    $('.arrow-next').prop('disabled', true);
                }
            })
            $('#packet').on('change', function() {
                if ($(this).find(
                        'option:selected').val() != 0) {
                    var selectedOption = $(this).find('option:selected');
                    var checkouts = localStorage.getItem('checkout');
                    var checkout = JSON.parse(checkouts);
                    if (checkout.products) {

                        const obj = {
                            order_items: JSON.stringify(checkout.products),
                            address_id: $('#address_id').find('option:selected').val(),
                            delivery_cost: $(selectedOption).find('.cost').val(),
                            delivery_code: $(selectedOption).val(),
                            delivery_name: $(selectedOption).find('.name').val(),
                            delivery_service: $(selectedOption).find('.description').val(),
                            delivery_estimation_day: $(selectedOption).find('.etd').val(),
                            master_account_id: $('#master_account_id').find('option:selected').val(),
                        }
                        $.ajaxSetup({
                            headers: {
                                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                                    "content"
                                ),
                            },
                        });
                        $('.loading').removeClass('d-none').addClass('show-modal');

                        $.ajax({
                            url: "{{ route('buyer.precheckWithDelivery') }}{{ Auth::check() && preg_match('/Chrome/i',request()->header('User-Agent')) ?  '?auth='.base64_encode(Auth::user()->uid) : '' }}",
                            type: "POST",
                            // dataType: "json",
                            data: obj,
                            success: function(data) {
                                $('.subtotal').text(formatRupiah(data.subtotal, 'Rp '));
                                $('.shipping').text(formatRupiah(data.delivery_cost, 'Rp '));
                                $('.fee').text(formatRupiah(data.payment_service_fee, 'Rp '));
                                $('.total').text(formatRupiah(data.total, 'Rp '));
                                console.log(data);
                                $('.loading').removeClass('show-modal')
                                    .addClass('d-none');

                            },
                            error: function(error) {
                                if (error && error.responseJSON && error.responseJSON.message) {
                                    $('#myDivHandleError').text(error.responseJSON.message);
                                    $('#myDivHandleError').css('display', 'block');
                                    setTimeout(function() {
                                        $('#myDivHandleError').fadeOut('fast');
                                    }, 2000);
                                }
                                console.log('error');
                                console.log(error);
                                $('.loading').removeClass('show-modal')
                                    .addClass('d-none');

                            },
                        });
                    } else {
                        console.log('error');
                        $('#myDivHandleError').text('error.responseJSON.message');
                        $('#myDivHandleError').css('display', 'block');
                        setTimeout(function() {
                            $('#myDivHandleError').fadeOut('fast');
                        }, 2000);
                    }
                } else if ($(this).find(
                        'option:selected')
                    .val() ==
                    0) {
                    $('.arrow-next').prop('disabled', true);
                }
                if ($('#address_id').find('option:selected').val() != 0 && $('#master_account_id').find(
                        'option:selected')
                    .val() !=
                    0 && $('#packet').find('option:selected').val() != 0) {
                    $('.arrow-next').prop('disabled', false);
                }
            });
            $('.arrow-next').on('click', function() {
                var selectedOption = $('#packet').find('option:selected');
                var checkouts = localStorage.getItem('checkout');
                var checkout = JSON.parse(checkouts);
                if (checkout.products) {
                    const obj = {
                        order_items: JSON.stringify(checkout.products),
                        address_id: $('#address_id').find('option:selected').val(),
                        delivery_cost: $(selectedOption).find('.cost').val(),
                        delivery_code: $(selectedOption).val(),
                        delivery_name: $(selectedOption).find('.name').val(),
                        master_account_id: $('#master_account_id').find('option:selected').val(),
                        delivery_service: $(selectedOption).find('.description').val(),
                        delivery_estimation_day: $(selectedOption).find('.etd').val()
                    }
                    $.ajaxSetup({
                        headers: {
                            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                                "content"
                            ),
                        },
                    });
                    $('.loading').removeClass('d-none').addClass('show-modal');

                    $.ajax({
                        url: "{{ route('buyer.preCheckout') }}{{ Auth::check() && preg_match('/Chrome/i',request()->header('User-Agent')) ?  '?auth='.base64_encode(Auth::user()->uid) : '' }}",
                        type: "POST",
                        // dataType: "json",
                        data: obj,
                        success: function(data) {
                            $('#myDivHandleSuccess').text('Berhasil memesan produk.');
                            $('#myDivHandleSuccess').css('display', 'block');
                            setTimeout(function() {
                                $('#myDivHandleSuccess').fadeOut('fast');
                                localStorage.removeItem('checkout');
                                if (data && data.order) {
                                    if (data.order.payment_identifier) {
                                        var route =
                                            "{{ route('dashboard.payment', ['identifier' => 'id']) }}";
                                        window.location.replace(route.replace(
                                            'id', data.order.payment_identifier
                                        )+"{{ Auth::check() && preg_match('/Chrome/i',request()->header('User-Agent')) ?  '?auth='.base64_encode(Auth::user()->uid) : '' }}");
                                    }
                                }
                            }, 2000);
                            $('.loading').removeClass('show-modal')
                                .addClass('d-none');

                        },
                        error: function(error) {
                            if (error && error.responseJSON && error.responseJSON.message) {
                                $('#myDivHandleError').text(error.responseJSON.message);
                                $('#myDivHandleError').css('display', 'block');
                                setTimeout(function() {
                                    $('#myDivHandleError').fadeOut('fast');
                                }, 2000);
                            }
                            $('.loading').removeClass('show-modal')
                                .addClass('d-none');

                            console.log('error');
                            console.log(error);
                        },
                    });
                } else {
                    console.log('error');
                    $('#myDivHandleError').text('error.responseJSON.message');
                    $('#myDivHandleError').css('display', 'block');
                    setTimeout(function() {
                        $('#myDivHandleError').fadeOut('fast');
                    }, 2000);
                }
            })
        });
    </script>
@endpush
