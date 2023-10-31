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
              <div class="box-payment"><a class="btn btn-gpay"><img src="{{ asset('ecom/imgs/page/checkout/gpay.svg') }}" alt="Ecom"></a><a class="btn btn-paypal"><img src="{{ asset('ecom/imgs/page/checkout/paypal.svg') }}" alt="Ecom"></a><a class="btn btn-amazon"><img src="{{ asset('ecom/imgs/page/checkout/amazon.svg') }}" alt="Ecom"></a></div>
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
                  <h5 class="font-md-bold color-brand-3 mt-15 mb-20">Alamat pengiriman</h5>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input class="form-control font-sm" type="text" placeholder="Nama Lengkap*">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <input class="form-control font-sm" type="text" placeholder="Alamat*">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <select class="form-control font-sm select-style1 color-gray-700">
                      <option value="">Select an option...</option>
                      <option value="1">Option 1</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input class="form-control font-sm" type="text" placeholder="Kota*">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <input class="form-control font-sm" type="text" placeholder="Kode Pos*">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <input class="form-control font-sm" type="text" placeholder="No. Handphone*">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group mb-0">
                    <textarea class="form-control font-sm" placeholder="Informasi Tambahan" rows="5"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-20">
              <div class="col-lg-6 col-5 mb-20"><a class="btn font-sm-bold color-brand-1 arrow-back-1" href="{{ route('buyer.cart') }}">Kembali ke Keranjang</a></div>
              <div class="col-lg-6 col-7 mb-20 text-end"><a class="btn btn-buy w-auto arrow-next" href="{{ route('buyer.checkout') }}">Pesan Sekarang</a></div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="box-border">
              <h5 class="font-md-bold mb-20">Pesanan mu</h5>
              <div class="listCheckout">
                <div class="item-wishlist">
                  <div class="wishlist-product">
                    <div class="product-wishlist">
                      <div class="product-image"><a href="{{ route('buyer.detailProduct',['slug'=>'sd']) }}"><img src="{{ asset('ecom/imgs/page/product/img-sub.png') }}" alt="Ecom"></a></div>
                      <div class="product-info"><a href="{{ route('buyer.detailProduct',['slug'=>'sd']) }}">
                          <h6 class="color-brand-3">Gateway 23.8&quot; All-in-one Desktop, Fully Adjustable Stand</h6></a>
                        <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}" alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}" alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}" alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}" alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}" alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="wishlist-status">
                    <h5 class="color-gray-500">x1</h5>
                  </div>
                  <div class="wishlist-price">
                    <h4 class="color-brand-3 font-lg-bold">$2.51</h4>
                  </div>
                </div>
                <div class="item-wishlist">
                  <div class="wishlist-product">
                    <div class="product-wishlist">
                      <div class="product-image"><a href="{{ route('buyer.detailProduct',['slug'=>'sd']) }}"><img src="{{ asset('ecom/imgs/page/product/img-sub2.png') }}" alt="Ecom"></a></div>
                      <div class="product-info"><a href="{{ route('buyer.detailProduct',['slug'=>'sd']) }}">
                          <h6 class="color-brand-3">HP 24 All-in-One PC, Intel Core i3-1115G4, 4GB RAM</h6></a>
                        <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}" alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}" alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}" alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}" alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}" alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="wishlist-status">
                    <h5 class="color-gray-500">x1</h5>
                  </div>
                  <div class="wishlist-price">
                    <h4 class="color-brand-3 font-lg-bold">$1.51</h4>
                  </div>
                </div>
                <div class="item-wishlist">
                  <div class="wishlist-product">
                    <div class="product-wishlist">
                      <div class="product-image"><a href="{{ route('buyer.detailProduct',['slug'=>'sd']) }}"><img src="{{ asset('ecom/imgs/page/product/img-sub3.png') }}" alt="Ecom"></a></div>
                      <div class="product-info"><a href="{{ route('buyer.detailProduct',['slug'=>'sd']) }}">
                          <h6 class="color-brand-3">Dell Optiplex 9020 Small Form Business Desktop Tower PC</h6></a>
                        <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}" alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}" alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}" alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}" alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}" alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="wishlist-status">
                    <h5 class="color-gray-500">x1</h5>
                  </div>
                  <div class="wishlist-price">
                    <h4 class="color-brand-3 font-lg-bold">$3.51</h4>
                  </div>
                </div>
              </div>
              <div class="form-group d-flex mt-15">
                <input class="form-control mr-15" placeholder="Masukkan Kupon">
                <button class="btn btn-buy w-auto">Kirim</button>
              </div>
              <div class="form-group mb-0">
                <div class="row mb-10">
                  <div class="col-lg-6 col-6"><span class="font-md-bold color-brand-3">Subtotal</span></div>
                  <div class="col-lg-6 col-6 text-end"><span class="font-lg-bold color-brand-3">$6.51</span></div>
                </div>
                <div class="border-bottom mb-10 pb-5">
                  <div class="row">
                    <div class="col-lg-6 col-6"><span class="font-md-bold color-brand-3">Pengiriman</span></div>
                    <div class="col-lg-6 col-6 text-end"><span class="font-lg-bold color-brand-3">-</span></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6 col-6"><span class="font-md-bold color-brand-3">Total</span></div>
                  <div class="col-lg-6 col-6 text-end"><span class="font-lg-bold color-brand-3">$6.51</span></div>
                </div>
              </div>
            </div>
          </div>
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
                                        <input type="checkbox" checked="checked"><span
                                            class="text-small">1&ndash;3 business days</span><span
                                            class="checkmark"></span>
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
