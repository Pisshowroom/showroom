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
                                                href="{{ route('dashboard.detailOrder', ['identifier' => $order->payment_identifier ?? '1234']) }}">Detail</a>
                                            @if ($order->status == 'Pending' && $order->expired == false)
                                                <a class="btn btn-xs-success"
                                                    href="{{ route('dashboard.payment', ['identifier' => $order->payment_identifier ?? '1234']) }}">Cara
                                                    Bayar</a>
                                            @elseif ($order->status == 'Pending' && $order->expired == true)
                                                <a class="btn btn-xs-danger"
                                                    href="{{ route('deleteOrder', ['identifier' => $order->payment_identifier ?? '1234', 'page' => 'dashboard.myOrder']) }}">Hapus</a>
                                                {{-- <a class="btn btn-xs-danger"
                                                    href="{{ route('cancelOrder', ['identifier' => $order->payment_identifier ?? '1234', 'page' => 'dashboard.detailOrder']) }}">Batalkan</a> --}}
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
                var baseUrl = '{{ route('dashboard.myOrder') }}';
                var url = baseUrl;

                if (selectedStatus !== '') {
                    url += '?status=' + selectedStatus;
                }

                if (searchQuery !== '') {
                    url += (selectedStatus !== '' ? '&' : '?') + 'search=' + searchQuery;
                }
                window.location = url;
            }

            $('#searchOrder, #filterStatus').on('change', function() {
                updateURL();
            });

        });
    </script>
@endpush
