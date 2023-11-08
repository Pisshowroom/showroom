@extends('clients.master-dashboard')
@section('title', 'Dashboard')
@section('dashboardBuyer', 'active')
@section('dashboard')

    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Dashboard</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-body mb-4">
                    <article class="icontext"><span class="icon icon-sm rounded-circle bg-primary-light"><i
                                class="text-primary material-icons  md-shopping_cart"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Keranjang</h6><span>{{ $data['cart'] ?? 0 }}</span><span
                                class="text-sm">Berdasarkan produk yang belum checkout </span>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-body mb-4">
                    <article class="icontext"><span class="icon icon-sm rounded-circle bg-warning-light"><i
                                class="text-warning material-icons md-local_shipping"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Total Pesanan</h6>
                            <span>{{ $data['all_order'] ?? 0 }}</span><span class="text-sm">Total semua pesanan</span>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-body mb-4">
                    <article class="icontext"><span class="icon icon-sm rounded-circle bg-success-light"><i
                                class="text-success material-icons md-qr_code"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Barang</h6><span>{{ $data['orders_done'] ?? 0 }}</span><span
                                class="text-sm">Produk berhasil
                                sampai</span>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-body mb-4">
                    <article class="icontext"><span class="icon icon-sm rounded-circle bg-info-light"><i
                                class="text-info material-icons md-favorite"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Wishlist</h6><span>{{ $data['wishlist'] ?? 0 }}</span><span
                                class="text-sm">Berdasarkan produk yang belum checkout.</span>
                        </div>
                    </article>
                </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <article class="card-body">
                        <h5 class="card-title">Statistik Pembelian</h5>
                        <canvas id="myChart" height="120px"></canvas>
                    </article>
                </div>
            </div>
        </div> --}}
        <div class="card mb-4">
            <header class="card-header">
                <h4 class="card-title">Semua Pesanan</h4>
                <div class="row align-items-center">
                    <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                        <form action="{{ route('dashboard.dashboard') }}">
                            <input class="form-control" type="text" placeholder="Cari produk..." name="search"
                                value="{{ request()->input('search') ?? '' }}">
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
                                    <th class="align-middle" scope="col">No</th>
                                    <th class="align-middle" scope="col">Produk</th>
                                    <th class="align-middle" scope="col">Total</th>
                                    <th class="align-middle" scope="col">Status</th>
                                    <th class="align-middle" scope="col">Tanggal</th>
                                    <th class="align-middle" scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($orders) > 0)
                                    @foreach ($orders as $key => $order)
                                        <tr>
                                            <td class="align-middle">{{ $key + 1 }}</td>
                                            <td class="align-middle">
                                                {{ $order->order_items[0]->product ? $order->order_items[0]->product->name ?? '' : '' }}
                                            </td>
                                            <td class="align-middle">{{ $order->total ? numbFormat($order->total) : '' }}
                                            </td>
                                            <td class="align-middle">
                                                @if ($order->status == 'pending')
                                                    <span class="badge rounded-pill alert-warning fw-normal">Pending</span>
                                                @elseif ($order->status == 'done')
                                                    <span class="badge rounded-pill alert-success fw-normal">Selesai</span>
                                                @else
                                                    <span class="badge rounded-pill alert-warning fw-normal">Pending</span>
                                                @endif
                                            </td>
                                            <td class="align-middle">{{ $order->date . ' WIB' }}</td>
                                            <td class="align-middle">
                                                <a class="btn btn-xs"
                                                    href="{{ route('dashboard.detailOrder', ['identifier' => $order->payment_identifier ?? '1234']) }}">Detail</a>
                                                {{-- <a class="btn btn-xs-danger"
                                                    href="{{ route('cancelOrder', ['identifier' => $order->payment_identifier ?? '1234', 'page' => 'dashboard.detailOrder']) }}">Batalkan</a> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                    {{ $orders->links() }}
                                @else
                                    <tr>
                                        <td colspan="8">No data Available</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@push('importjs')
@endpush
