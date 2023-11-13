@extends('clients.master-dashboard')
@section('title', 'Semua Transaksi')
@section('transaction', 'active')
@section('dashboard')

    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Semua Transaksi</h2>
            </div>
        </div>
        <div class="card mb-4">
            <header class="card-header">
                <div class="row gx-3">
                    <div class="col-lg-4 col-md-6 me-auto">
                        <input class="form-control" type="text" placeholder="Cari produk...">
                    </div>
                    <div class="col-lg-2 col-6 col-md-3">
                        <select class="form-select">
                            <option>Status</option>
                            <option>Active</option>
                            <option>Disabled</option>
                            <option>Show all</option>
                        </select>
                    </div>
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
                                                href="{{ route('dashboardSeller.detailTransaction', ['identifier' => $order->payment_identifier ?? '1234']) }}">Detail</a>
                                            <button type="button" class="btn btn-xs-danger" data-bs-toggle="modal"
                                                data-bs-target="#deleteTransaction">
                                                Batalkan
                                            </button>
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
        <div class="modal fade" id="deleteTransaction" tabindex="-1" aria-labelledby="deleteTransactionLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0">
                        <h1 class="modal-title fs-5 text-dark" id="deleteTransactionLabel">Batalkan Transaksi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5 class="text-dark">Apakah kamu yakin ingin membatalkan transaksi ini ?</h5>
                    </div>
                    <div class="modal-footer border-top-0">
                        <button type="button" class="btn btn-xs" data-bs-dismiss="modal">Tutup</button>
                        <a class="btn btn-xs-danger"
                            href="{{ route('cancelOrder', ['identifier' => $order->payment_identifier ?? '1234', 'page' => 'dashboardSeller.allTransaction']) }}">
                            Batalkan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('importjs')
@endpush
