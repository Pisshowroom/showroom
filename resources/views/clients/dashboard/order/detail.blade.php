@extends('clients.master-dashboard')
@section('title', 'Detail Pesanan')
@section('myOrder', 'active')
@section('dashboard')
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Detail Pesanan</h2>
                <p>Produk : {{ $order->order_items[0]->product ? $order->order_items[0]->product->name ?? '' : '' }}</p>
            </div>
        </div>
        <div class="card">
            <header class="card-header">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 mb-lg-0 mb-15"><span><i
                                class="material-icons md-calendar_today me-1"></i><b>{{ $order->date . ' WIB' ?? '' }}</b></span><br><small
                            class="text-muted">Kode Pesanan : {{ $order->payment_identifier ?? '' }}</small></div>
                    {{-- <div class="col-lg-6 col-md-6 ms-auto text-md-end">
                        <select class="form-select d-inline-block mb-lg-0 mb-15 mw-200">
                            <option>Change status</option>
                            <option>Awaiting payment</option>
                            <option>Confirmed</option>
                            <option>Shipped</option>
                            <option>Delivered</option>
                        </select><a class="btn btn-primary" href="#">Save</a><a class="btn btn-secondary print ms-2"
                            href="#"><i class="icon material-icons md-print"></i></a>
                    </div> --}}
                </div>
            </header>
            <div class="card-body">
                <div class="order-tracking mb-50 mt-20">
                    <div class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between">
                        <div class="step completed">
                            <div class="step-icon-wrap">
                                <div class="step-icon"><i class="material-icons md-shopping_cart"></i></div>
                            </div>
                            <h4 class="step-title">Konfirmasi Pesanan</h4><small class="text-muted text-sm">15 March
                                2022</small>
                        </div>
                        <div class="step completed">
                            <div class="step-icon-wrap">
                                <div class="step-icon"><i class="material-icons md-settings"></i></div>
                            </div>
                            <h4 class="step-title">Pesanan diproses</h4><small class="text-muted text-sm">16 March
                                2022</small>
                        </div>
                        <div class="step completed">
                            <div class="step-icon-wrap">
                                <div class="step-icon"><i class="material-icons md-shopping_bag"></i></div>
                            </div>
                            <h4 class="step-title">Cek kualitas</h4><small class="text-muted text-sm">17 March 2022</small>
                        </div>
                        <div class="step">
                            <div class="step-icon-wrap">
                                <div class="step-icon"><i class="material-icons md-local_shipping"></i></div>
                            </div>
                            <h4 class="step-title">Produk Dikirim</h4><small class="text-muted text-sm">18 March
                                2022</small>
                        </div>
                        <div class="step">
                            <div class="step-icon-wrap">
                                <div class="step-icon"><i class="material-icons md-check_circle"></i></div>
                            </div>
                            <h4 class="step-title">Produk Terkirim</h4><small class="text-muted text-sm">20 March
                                2022</small>
                        </div>
                    </div>
                </div>
                <div class="row mb-50 order-info-wrap">
                    <div class="col-md-4">
                        <article class="icontext align-items-start"><span
                                class="icon icon-sm rounded-circle bg-primary-light"><i
                                    class="text-primary material-icons md-person"></i></span>
                            <div class="text">
                                <h6 class="mb-1">Pembeli</h6>
                                <p class="mb-1">John Alexander<br> alex@example.com<br> +998 99 22123456</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="icontext align-items-start"><span
                                class="icon icon-sm rounded-circle bg-primary-light"><i
                                    class="text-primary material-icons md-local_shipping"></i></span>
                            <div class="text">
                                <h6 class="mb-1">Informasi pesanan</h6>
                                <p class="mb-1">Shipping: Fargo express<br> Pay method: card<br> Status: new</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="icontext align-items-start"><span
                                class="icon icon-sm rounded-circle bg-primary-light"><i
                                    class="text-primary material-icons md-place"></i></span>
                            <div class="text">
                                <h6 class="mb-1">Dikirim ke</h6>
                                <p class="mb-1">City: Tashkent, Uzbekistan<br>Block A, House 123, Floor 2<br> Po Box 10000
                                </p>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th width="40%">Produk</th>
                                    <th width="20%">Harga barang</th>
                                    <th width="20%">Jumlah barang</th>
                                    <th class="text-end" width="20%">Total Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($order->order_items) > 0)
                                    @foreach ($order->order_items as $key => $oi)
                                        <tr>
                                            <td><a class="itemside"
                                                    href="{{ route('buyer.detailProduct', ['slug' => $oi->product?->slug ?? '1234']) }}">
                                                    <div class="left">
                                                        <img class="img-xs"
                                                            src="{{ asset('ecom_dashboard/imgs/items/1.jpg') }}"
                                                            alt="Item" width="40" height="40">
                                                    </div>
                                                    <div class="info"> {{ $oi->product?->name ?? '' }}</div>
                                                </a></td>
                                            <td> {{ numbFormat($oi->subtotal) ?? '' }}</td>
                                            <td> {{ $oi->quantity ?? '' }}</td>
                                            <td class="text-end"> {{ numbFormat($oi->price) ?? '' }}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="8">No data Available</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    {{-- <a class="btn btn-primary" href="page-orders-tracking.html">View Order Tracking</a> --}}
                </div>
                <div class="col-12 mt-20">
                    <div class="box shadow-sm bg-light">
                        <h6 class="mb-15">Informasi pembayaran</h6>
                        <p><img class="border" src="{{ asset('ecom_dashboard/imgs/card-brands/2.png') }}" height="20">
                            Master Card **** **** 4768<br> Business name: Grand Market LLC<br>
                            Phone: +1 (800) 555-154-52</p>
                    </div>
                    {{-- <div class="h-25 pt-4">
                        <div class="mb-3">
                            <label for="notes">Catatan</label>
                            <textarea class="form-control" id="notes" name="notes" placeholder="Tulis pesan disini"></textarea>
                        </div>
                        <button class="btn btn-primary">Simpan catatan</button>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

@endsection
@push('importjs')
@endpush
