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
        @if (session('success'))
            <div class="alert alert-success" id="mydiv">
                {{ session('success') }}
            </div>
        @endif
        <div class="card mb-4">
            <header class="card-header">
                <div class="row gx-3">
                    <div class="col-lg-4 col-md-6 me-auto">
                        <input class="form-control" id="searchOrder" type="text"
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
                                        <td class="align-middle">{{ $key + 1 }}</td>
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
                                                href="{{ route('dashboard.detailOrder', ['identifier' => $order->payment_identifier ?? '1234']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Detail</a>
                                            @if ($order->status == 'Pending' && $order->expired == false)
                                                <a class="btn btn-xs-success"
                                                    href="{{ route('dashboard.payment', ['identifier' => $order->payment_identifier ?? '1234']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Cara
                                                    Bayar</a>
                                            @elseif ($order->status == 'Shipped')
                                                <a class="btn btn-xs-danger"
                                                    href="{{ route('dashboard.detailOrderForComplain', ['identifier' => $order->payment_identifier ?? '1234', 'status' => 'complaint']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                                    Komplain</a>
                                            @elseif ($order->status == 'Delivered')
                                                <a class="btn btn-xs-danger"
                                                    href="{{ route('dashboard.detailOrderForComplain', ['identifier' => $order->payment_identifier ?? '1234', 'status' => 'refund']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                                    Ajukan Pengembalian</a>
                                            @elseif ($order->status == 'ReturnAccepted')
                                                <a class="btn btn-xs-success"
                                                    href="{{ route('dashboard.sendProductBack', ['identifier' => $order->payment_identifier ?? '1234']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                                    Kirim Barang</a>
                                            @elseif ($order->status == 'Shipped' || $order->status == 'Delivered')
                                                <a class="btn btn-xs-success"
                                                    href="{{ route('dashboard.completedOrder', ['id' => $order->id ?? '1234']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                                    Selesai</a>
                                            @elseif ($order->status == 'RequestedRefund' || $order->status == 'Complaint')
                                                <a class="btn btn-xs-danger"
                                                    href="{{ route('dashboard.cancelRefundReturnComplaint', ['identifier' => $order->payment_identifier ?? '1234']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                                    Batalkan Pengajuan</a>
                                            @elseif ($order->status == 'Pending' && $order->expired == true)
                                                <a class="btn btn-xs-danger"
                                                    href="{{ route('deleteOrder', ['identifier' => $order->payment_identifier ?? '1234', 'page' => 'dashboard.myOrder']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Hapus</a>
                                                {{-- <a class="btn btn-xs-danger"
                                                    href="{{ route('cancelOrder', ['identifier' => $order->payment_identifier ?? '1234', 'page' => 'dashboard.detailOrder']) }}">Batalkan</a> --}}
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
    </section>
@endsection
@push('importjs')
    <script>
        setTimeout(function() {
            $('#mydiv').fadeOut('fast');
        }, 2000);
        $(document).ready(function() {
            function updateURL() {
                var searchQuery = $('#searchOrder').val();
                var selectedStatus = $('#filterStatus').val();
                var baseUrl = "{{ route('dashboard.myOrder') }}";
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

            $('#searchOrder, #filterStatus').on('change', function() {
                updateURL();
            });

        });
    </script>
@endpush
