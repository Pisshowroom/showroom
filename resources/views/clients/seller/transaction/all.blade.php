@extends('clients.master-dashboard')
@section('title', 'Semua Transaksi')
@section('transaction', 'active')
@section('dashboard')

    <section class="content-main">
        @if (session('error'))
            <div class="alert alert-warning" id="mydiv">
                {{ session('error') }}
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success" id="mydiv">
                {{ session('success') }}
            </div>
        @endif
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
                            placeholder="Cari berdasarkan Identifikasi..." name="search"
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
                                        <td class="align-middle">
                                            {{ ($orders->currentPage() - 1) * $orders->perPage() + $loop->iteration }}</td>
                                        <td class="align-middle">
                                            {{ $order->payment_identifier ?? '' }}
                                        </td>
                                        @if ($order->total_final)
                                            <td class="align-middle">
                                                {{ $order->total_final ? numbFormat($order->total_final) : '' }}</td>
                                        @else
                                            <td class="align-middle">{{ $order->total ? numbFormat($order->total) : '' }}
                                            </td>
                                        @endif
                                        <td class="align-middle">
                                            @include('clients.dashboard.order.status_order')
                                        </td>
                                        <td class="align-middle">{{ $order->date . ' WIB' }}</td>
                                        <td class="align-middle">
                                            <a class="btn btn-xs"
                                                href="{{ route('dashboardSeller.detailTransaction', ['identifier' => $order->payment_identifier ?? '1234']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Detail</a>
                                            @if ($order->status == 'ProcessedBySeller' && $order->payment_status == 'PaymentPaid')
                                                <a class="btn btn-xs-danger"
                                                    href="{{ route('dashboardSeller.sellerRejectOrder', ['id' => $order->id ?? '1234']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                                    Tolak</a>
                                                <a class="btn btn-xs-success"
                                                    href="{{ route('dashboardSeller.sendResi', ['identifier' => $order->payment_identifier ?? '1234']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                                    Siap diantar</a>
                                                {{-- @elseif ($order->status == 'Complaint')
                                                <a class="btn btn-xs-success"
                                                    href="{{ route('dashboardSeller.acceptComplaint', ['id' => $order->id ?? '1234']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                                    Komplain disetujui</a>
                                                <a class="btn btn-xs-danger"
                                                    href="{{ route('dashboardSeller.rejectComplaint', ['id' => $order->id ?? '1234']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                                    Komplain ditolak</a>
                                            @elseif ($order->status == 'RequestedRefund')
                                                <a class="btn btn-xs-success"
                                                    href="{{ route('dashboardSeller.acceptRefund', ['id' => $order->id ?? '1234']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                                    Refund disetujui</a>
                                                <a class="btn btn-xs-danger"
                                                    href="{{ route('dashboardSeller.rejectRefund', ['id' => $order->id ?? '1234']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                                    Refund ditolak</a>
                                            @elseif ($order->status == 'RequestedReturn')
                                                <a class="btn btn-xs-success"
                                                    href="{{ route('dashboardSeller.acceptReturnBack', ['id' => $order->id ?? '1234']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                                    Pengembalian kembali disetujui</a>
                                                <a class="btn btn-xs-danger"
                                                    href="{{ route('dashboardSeller.rejectReturnBack', ['id' => $order->id ?? '1234']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                                    Pengembalian kembali ditolak</a> --}}
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
        </div>
        {{-- <div class="modal fade" id="cancelTransaction{{ $order->id }}" tabindex="-1"
            aria-labelledby="cancelTransactionLabel" aria-hidden="true">
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
                            href="{{ route('dashboardSeller.sellerRejectOrder', ['id' => $order->id ?? '1234']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                            Tolak</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="acceptTransaction{{ $order->id }}" tabindex="-1"
            aria-labelledby="acceptTransactionLabel{{ $order->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0">
                        <h1 class="modal-title fs-5 text-dark" id="acceptTransactionLabel{{ $order->id }}">Terima
                            Transaksi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5 class="text-dark">Apakah kamu yakin ingin menerima transaksi ini ?</h5>
                    </div>
                    <div class="modal-footer border-top-0">
                        <button type="button" class="btn btn-xs" data-bs-dismiss="modal">Tutup</button>
                        <a class="btn btn-xs-success"
                            href="{{ route('dashboardSeller.sellerAcceptOrder', ['id' => $order->id ?? '1234']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                            Terima</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="sendProductBySeller{{ $order->id }}" tabindex="-1"
            aria-labelledby="sendProductBySellerLabel{{ $order->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0">
                        <h1 class="modal-title fs-5 text-dark" id="sendProductBySellerLabel{{ $order->id }}">Produk
                            siap diantar</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5 class="text-dark">Apakah kamu yakin Produk ini siap diantar ?</h5>
                    </div>
                    <div class="modal-footer border-top-0">
                        <button type="button" class="btn btn-xs" data-bs-dismiss="modal">Tutup</button>
                        <a class="btn btn-xs-success"
                            href="{{ route('dashboardSeller.sellerSendOrder', ['id' => $order->id ?? '1234']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                            Ya</a>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>
@endsection
@push('importjs')
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $('#mydiv').fadeOut('fast');
            }, 2000);

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
                auth =
                    "{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? 'auth=' . base64_encode(Auth::user()->uid) : '' }}"
                window.location = url + (url.includes('?') ? '&' : '?') + auth;
            }

            $('#searchTransaction, #filterStatus').on('change', function() {
                updateURL();
            });

        });
    </script>
@endpush
