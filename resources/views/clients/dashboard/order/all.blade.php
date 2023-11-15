@extends('clients.master-dashboard')
@section('title', 'Semua Pesanan')
@section('myOrder', 'active')
@section('dashboard')

    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Semua Pesanan</h2>
            </div>
        </div>
        <div class="card mb-4">
            <header class="card-header">
                <div class="row gx-3">
                    <div class="col-lg-4 col-md-6 me-auto">
                        <form action="{{ route('dashboard.myOrder') }}">
                            <input class="form-control" type="text" placeholder="Cari produk..." name="search"
                                value="{{ request()->input('search') ?? '' }}">
                        </form>
                    </div>
                    <div class="col-lg-2 col-6 col-md-3">
                        <select class="form-select">
                            <option>Filter</option>
                            <option>Semua</option>
                            <option>Belum dibayar</option>
                            <option>Sedang dikemas</option>
                            <option>Dikirim</option>
                            <option>Selesai</option>
                            <option>Dibatalkan</option>
                        </select>
                    </div>
                    {{-- <div class="col-lg-2 col-6 col-md-3">
                        <select class="form-select">
                            <option>Show 20</option>
                            <option>Show 30</option>
                            <option>Show 40</option>
                        </select>
                    </div> --}}
                </div>
            </header>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th class="align-middle">No</th>
                                <th class="align-middle" scope="col">Nama</th>
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
                                            {{ substr($order?->order_items[0]?->product?->name ?? '', 0, 12) . (strlen($order?->order_items[0]?->product?->name ?? '') > 12 ? '..' : '') }}
                                        </td>
                                        <td class="align-middle">{{ $order->total ? numbFormat($order->total) : '' }}</td>
                                        <td class="align-middle">
                                            @if ($order->status == 'Pending')
                                                <span class="badge rounded-pill alert-warning fw-normal">Menunggu
                                                    Pembayaran</span>
                                            @elseif ($order->status == 'Completed')
                                                <span class="badge rounded-pill alert-success fw-normal">Selesai</span>
                                            @else
                                                <span class="badge rounded-pill alert-warning fw-normal">Menunggu
                                                    Pembayaran</span>
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
                                {{ $orders->onEachSide(3)->appends(request()->except('page'))->links() }}
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
    </section>
@endsection
@push('importjs')
@endpush
