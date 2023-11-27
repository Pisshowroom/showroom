@extends('clients.master-dashboard')
@section('title', 'Dashboard Toko')
@section('dashboardSeller', 'active')
@section('dashboard')
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Dashboard</h2>
            </div>
            <div>
                @if (Auth::guard('web')->user()->balance != null && Auth::guard('web')->user()->balance > 0)
                    <a class="btn btn-primary"
                        href="{{ route('dashboardSeller.addWithdraw') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"
                        {{ Auth::guard('web')->user()->balance != null && Auth::guard('web')->user()->balance > 0 ? '' : 'disabled' }}>
                        <i class="text-muted material-icons md-post_add"></i>Cairkan
                        Uang</a>
                @else
                    <button class="btn btn-primary" disabled>
                        <i class="text-muted material-icons md-post_add"></i>Cairkan
                        Uang</button>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-body mb-4">
                    <article class="icontext"><span class="icon icon-sm rounded-circle bg-primary-light"><i
                                class="text-primary material-icons md-monetization_on"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Pendapatan</h6>
                            {{-- <span>{{ numbFormat($data['achievement']) ?? 0 }}</span> --}}
                            <span>{{ numbFormat(Auth::guard('web')->user()->balance) ?? 'Rp  0' }}</span>
                            <span class="text-sm">Hanya
                                pesanan yang telah sampai kepada konsumen</span>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-body mb-4">
                    <article class="icontext"><span class="icon icon-sm rounded-circle bg-success-light"><i
                                class="text-success material-icons md-local_shipping"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Pesanan</h6><span>{{ $data['orders_done'] ?? 0 }}</span><span
                                class="text-sm">hanya pesanan yang telah selesai</span>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-body mb-4">
                    <article class="icontext"><span class="icon icon-sm rounded-circle bg-warning-light"><i
                                class="text-warning material-icons md-qr_code"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Produk</h6><span>{{ $data['products'] ?? 0 }}</span><span
                                class="text-sm">Dalam
                                {{ $data['categories'] ?? 0 }}
                                Kategori</span>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-body mb-4">
                    <article class="icontext"><span class="icon icon-sm rounded-circle bg-info-light"><i
                                class="text-info material-icons md-account_balance_wallet"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Pencairan Uang</h6>
                            <span>{{ numbFormat($data['withdrawals']) ?? 0 }}</span><span class="text-sm">Total pencairan
                                yang sudah dilakukan</span>
                        </div>
                    </article>
                </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-xl-8 col-lg-12">
                <div class="card mb-4">
                    <article class="card-body">
                        <h5 class="card-title">Statistik penjualan</h5>
                        <canvas id="myChart" height="120px"></canvas>
                    </article>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12">
                <div class="card mb-4">
                    <article class="card-body">
                        <h5 class="card-title">Pendapatan Berdasarkan Wilayah</h5>
                        <canvas id="myChart2" height="217"></canvas>
                    </article>
                </div>
            </div>
        </div> --}}
        <div class="card mb-4">
            <header class="card-header">
                <h4 class="card-title">Semua Transaksi Pesanan</h4>
                <div class="row align-items-center">
                    <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                        <form method="GET"
                            action="{{ route('dashboardSeller.dashboard') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                            <input class="form-control" type="text" placeholder="Cari berdasarkan Identifikasi..."
                                name="search" value="{{ request()->input('search') ?? '' }}">
                        </form>
                    </div>
                </div>
            </header>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="align-middle">No</th>
                                    <th class="align-middle" scope="col">Identifikasi</th>
                                    <th class="align-middle" scope="col">Total</th>
                                    <th class="align-middle" scope="col">Status</th>
                                    <th class="align-middle" scope="col">Tanggal Pesanan</th>
                                    <th class="align-middle" scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($orders) > 0)
                                    @foreach ($orders as $key => $order)
                                        <tr>
                                            <td class="align-middle">{{ $key + 1 }}</td>
                                            <td class="align-middle">
                                                {{ $order->payment_identifier ?? '' }}
                                            </td>
                                            @if ($order->total_final)
                                                <td class="align-middle">
                                                    {{ $order->total_final ? numbFormat($order->total_final) : '' }}</td>
                                            @else
                                                <td class="align-middle">
                                                    {{ $order->total ? numbFormat($order->total) : '' }}</td>
                                            @endif
                                            <td class="align-middle">
                                                @include('clients.dashboard.order.status_order')
                                            </td>
                                            <td class="align-middle">{{ $order->date . ' WIB' }}</td>
                                            <td class="align-middle">
                                                <a class="btn btn-xs"
                                                    href="{{ route('dashboardSeller.detailTransaction', ['identifier' => $order->payment_identifier ?? '1234']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Detail</a>
                                                @if ($order->status == 'Paid' && $order->payment_status == 'PaymentPaid')
                                                    <a class="btn btn-xs-danger"
                                                        href="{{ route('cancelOrder', ['identifier' => $order->payment_identifier ?? '1234', 'page' => 'dashboardSeller.allTransaction']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                                        Batalkan</a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="8">No data Available</td>
                                    </tr>
                                @endif

                            </tbody>
                        </table>
                        @if (count($orders) > 0)
                            {{ $orders->onEachSide(3)->appends(request()->except('page'))->links() }}
                        @endif
                    </div>
                </div>
                <!-- table-responsive end//-->
            </div>
        </div>
    </section>

@endsection
@push('importjs')
@endpush
