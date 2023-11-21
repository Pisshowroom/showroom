<div class="card">
    <header class="card-header">
        <div class="row align-items-center">
            <div class="col-12 mb-lg-0 mb-15">
                <span>
                    <i class="material-icons md-calendar_today"></i>
                    <b>Tanggal Pesanan : {{ $order->date . ' WIB' ?? '' }}</b>
                </span><br>
                <small class="text-muted">Nomor Identifikasi :
                    {{ $order->payment_identifier ?? '' }}</small>
                <p class="mt-15"><span>Status:</span>
                    @include('clients.dashboard.order.status_order')
                </p>
            </div>
        </div>
    </header>
    <div class="card-body">
        <div class="order-tracking mb-50 mt-20">
            <div class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between">
                <div class="step {{ $order->paid_at ? 'completed' : '' }}">
                    <div class="step-icon-wrap">
                        <div class="step-icon"><i class="material-icons md-shopping_cart"></i></div>
                    </div>
                    <h4 class="step-title">Konfirmasi Pesanan</h4><small
                        class="text-muted text-sm">{{ $order->date_paid_at }}</small>
                </div>
                <div class="step {{ $order->packing_due ? 'completed' : '' }}">
                    <div class="step-icon-wrap">
                        <div class="step-icon"><i class="material-icons md-settings"></i></div>
                    </div>
                    <h4 class="step-title">Pesanan diproses</h4><small
                        class="text-muted text-sm">{{ $order->date_packing_due }}</small>
                </div>
                <div class="step {{ $order->packing_due ? 'completed' : '' }}">
                    <div class="step-icon-wrap">
                        <div class="step-icon"><i class="material-icons md-shopping_bag"></i></div>
                    </div>
                    <h4 class="step-title">Cek kualitas</h4><small
                        class="text-muted text-sm">{{ $order->date_packing_due }}</small>
                </div>
                <div class="step {{ $order->delivered_at ? 'completed' : '' }}">
                    <div class="step-icon-wrap">
                        <div class="step-icon"><i class="material-icons md-local_shipping"></i></div>
                    </div>
                    <h4 class="step-title">Produk Dikirim</h4><small
                        class="text-muted text-sm">{{ $order->date_delivered_at }}</small>
                </div>
                <div class="step {{ $order->arrived_at ? 'completed' : '' }}">
                    <div class="step-icon-wrap">
                        <div class="step-icon"><i class="material-icons md-check_circle"></i></div>
                    </div>
                    <h4 class="step-title">Produk Terkirim</h4><small
                        class="text-muted text-sm">{{ $order->date_arrived_at }}</small>
                </div>
            </div>
        </div>
        <div class="row mb-50 order-info-wrap">
            <div class="col-lg-4">
                <article class="icontext align-items-start"><span
                        class="icon icon-sm rounded-circle bg-primary-light"><i
                            class="text-primary material-icons md-person"></i></span>
                    <div class="text">
                        <h6 class="mb-1">
                            {{ Route::currentRouteName() == 'dashboardSeller.detailTransaction' ? 'Pembeli' : 'Penjual' }}
                        </h6>
                        @if (Route::currentRouteName() == 'dashboardSeller.detailTransaction')
                            <p class="mb-1">{{ $order->user?->name ?? 'Nama : -' }}<br>
                                {{ $order->user?->email ?? 'Email : -' }}<br></p>
                        @else
                            <p class="mb-1">{{ $order?->seller?->seller_name ?? 'Nama : -' }}<br>
                                {{ $order?->seller?->email ?? 'Email : -' }}<br></p>
                        @endif
                    </div>
                </article>
            </div>
            <div class="col-lg-4">
                <article class="icontext align-items-start"><span
                        class="icon icon-sm rounded-circle bg-primary-light"><i
                            class="text-primary material-icons md-local_shipping"></i></span>
                    <div class="text">
                        <h6 class="mb-1">Informasi pesanan</h6>
                        <p class="mb-1">{{ $order->delivery_service_name ?? 'Nama Paket : -' }}<br>
                            {{ $order->delivery_estimation_day ? $order->delivery_estimation_day . ' hari' : 'Estimasi sampai : -' }}
                        </p>
                    </div>
                </article>
            </div>
            <div class="col-lg-4">
                <article class="icontext align-items-start"><span
                        class="icon icon-sm rounded-circle bg-primary-light"><i
                            class="text-primary material-icons md-place"></i></span>
                    <div class="text">
                        <h6 class="mb-1">Dikirim ke</h6>
                        @if ($order->address && $order->address->id)
                            <p class="mb-1">{{ $order->address->disctrict ?? 'Kecamatan : -' }},
                                {{ $order->address->city ?? 'Kota : -' }}<br>{{ $order->address->person_name ?? 'Nama : -' }}<br>
                                @if ($order->address->lat && $order->address->long)
                                    <a target="_blank"
                                        href="{{ 'https://www.google.com/maps/@' . $order->address->lat . ',' . $order->address->long ?? '' . '?entry=ttu' }}">gmaps
                                        :
                                        {{ 'https://www.google.com/maps/@' . $order->address->lat . ',' . $order->address->long ?? '' . '?entry=ttu' }}</a>
                                @else
                                    Tidak ada gmaps
                                @endif
                            </p>
                        @else
                            <p class="mb-1">Kota: -<br>-<br> -
                            </p>
                        @endif
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
                                    <td width="40%"> <a class="itemside"
                                            href="{{ route('buyer.detailProduct', ['slug' => $oi->product?->slug ?? '1234']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                            <div class="left">
                                                <img class="img-xs"
                                                    src="{{ $oi?->product?->images && count($oi?->product?->images) > 0 ? $oi?->product?->images[0] : asset('ecom_dashboard/imgs/items/1.jpg') }}"
                                                    alt="Item" width="40" height="40">
                                            </div>
                                            <div class="info">
                                                {{ $oi?->product?->name ?? '' }}
                                            </div>
                                        </a></td>
                                    <td width="20%"> {{ numbFormat($oi->subtotal) ?? '' }}</td>
                                    <td width="20%"> {{ $oi->quantity ?? '' }}</td>
                                    <td width="20%" class="text-end"> {{ numbFormat($oi->price) ?? '' }}</td>
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
                <p><img class="border"
                        src="{{ $order?->master_account?->image ? $order?->master_account?->image : asset('ecom_dashboard/imgs/card-brands/2.png') }}"
                        height="20">
                    {{ $order?->master_account?->name ?? '-' }}<br> Harga :
                    {{ $order->discount_product && $order->discount_product > 0 ? $order->total_final : $order->total }}<br>
                    Tipe: {{ $order?->master_account?->type ?? '-' }}</p>
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
