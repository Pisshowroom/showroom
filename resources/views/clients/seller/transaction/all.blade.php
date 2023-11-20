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
                        <input class="form-control" id="searchTransaction" type="text"
                            placeholder="Cari berdasarkan Nomor Resi..." name="search"
                            value="{{ request()->input('search') ?? '' }}">
                    </div>
                    <div class="col-lg-2 col-6 col-md-3">
                        <select name="status" id="filterStatus" class="form-select">
                            <option {{ !request()->input('status') ? 'selected' : '' }} disabled>Filter</option>
                            <option value="all"
                                {{ request()->input('status') && request()->input('status') == 'all' ? 'selected' : '' }}>
                                Semua
                            </option>
                            <option
                                {{ request()->input('status') && request()->input('status') == 'Pending' ? 'selected' : '' }}
                                value="Pending">Belum dibayar</option>
                            <option
                                {{ request()->input('status') && request()->input('status') == 'ProcessedBySeller' ? 'selected' : '' }}
                                value="ProcessedBySeller">Sedang dikemas</option>
                            <option
                                {{ request()->input('status') && request()->input('status') == 'Shipped' ? 'selected' : '' }}
                                value="Shipped">Dikirim</option>
                            <option
                                {{ request()->input('status') && request()->input('status') == 'Completed' ? 'selected' : '' }}
                                value="Completed">Selesai</option>
                            <option
                                {{ request()->input('status') && request()->input('status') == 'Cancelled' ? 'selected' : '' }}
                                value="Cancelled">Dibatalkan</option>
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
                                <th class="align-middle" scope="col">Nomor Resi</th>
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
                                        <td class="align-middle">{{ $order->total ? numbFormat($order->total) : '' }}</td>
                                        <td class="align-middle">
                                            @include('clients.dashboard.order.status_order')
                                        </td>
                                        <td class="align-middle">{{ $order->date . ' WIB' }}</td>
                                        <td class="align-middle">
                                            <a class="btn btn-xs"
                                                href="{{ route('dashboardSeller.detailTransaction', ['identifier' => $order->payment_identifier ?? '1234']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Detail</a>

                                            @if ($order->status == '')
                                                <button type="button" class="btn btn-xs-danger" data-bs-toggle="modal"
                                                    data-bs-target="#cancelTransaction">
                                                    Batalkan
                                                </button>
                                            @else
                                                <button type="button" class="btn btn-xs-danger" data-bs-toggle="modal"
                                                    data-bs-target="#cancelTransaction">
                                                    Batalkan
                                                </button>
                                            @endif
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
        <div class="modal fade" id="cancelTransaction" tabindex="-1" aria-labelledby="cancelTransactionLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0">
                        <h1 class="modal-title fs-5 text-dark" id="cancelTransactionLabel">Batalkan Transaksi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5 class="text-dark">Apakah kamu yakin ingin membatalkan transaksi ini ?</h5>
                    </div>
                    <div class="modal-footer border-top-0">
                        <button type="button" class="btn btn-xs" data-bs-dismiss="modal">Tutup</button>
                        <a class="btn btn-xs-danger"
                            href="{{ route('cancelOrder', ['order' => $order->id ?? '1234']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                            Batalkan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('importjs')
    <script>
        $(document).ready(function() {
            function updateURL() {
                var searchQuery = $('#searchTransaction').val();
                var selectedStatus = $('#filterStatus').val();
                var baseUrl = "{{ route('dashboardSeller.allTransaction') }}";
                var url = baseUrl;

                if (selectedStatus !== '') {
                    url += '?status=' + selectedStatus;
                }

                if (searchQuery !== '') {
                    url += (selectedStatus !== '' ? '&' : '?') + 'search=' + searchQuery;
                }
                window.location = url +
                    "{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}";
            }

            $('#searchTransaction, #filterStatus').on('change', function() {
                updateURL();
            });

        });
    </script>
@endpush
