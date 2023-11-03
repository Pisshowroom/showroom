@extends('clients.master-dashboard')
@section('title', 'Semua Pesanan')
@section('myOrder', 'active')
@section('dashboard')

    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">List Pesanan</h2>
            </div>
        </div>
        <div class="card mb-4">
            <header class="card-header">
                <div class="row gx-3">
                    <div class="col-lg-4 col-md-6 me-auto">
                        <form action="{{ route('dashboard.myOrder') }}">
                            <input class="form-control" type="text" placeholder="berdasarkan kode..." name="search"
                                value="{{ request()->input('search') ?? '' }}">
                        </form>
                    </div>
                    <div class="col-lg-2 col-6 col-md-3">
                        <select class="form-select">
                            <option>Status</option>
                            <option>Active</option>
                            <option>Disabled</option>
                            <option>Show all</option>
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
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th scope="col">Kode Pembayaran</th>
                                <th scope="col">Total</th>
                                <th scope="col">Status</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($orders) > 0)
                                @foreach ($orders as $key => $order)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><b>{{ $key + 1 }}</b></td>
                                        <td>{{ $order->total ? numbFormat($order->total) : '' }}</td>
                                        <td>
                                            @if ($order->status == 'pending')
                                                <span class="badge rounded-pill alert-warning">Pending</span>
                                            @elseif ($order->status == 'done')
                                                <span class="badge rounded-pill alert-success">Selesai</span>
                                            @else
                                                <span class="badge rounded-pill alert-warning">Pending</span>
                                            @endif
                                        </td>
                                        <td>{{ $order->date . ' WIB' }}</td>
                                        <td>
                                            <a class="btn btn-xs"
                                            href="{{ route('dashboard.detailOrder') }}">Detail</a>
                                            <a class="btn btn-danger btn-xs"
                                            href="#">Hapus</a>
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
    </section>
@endsection
@push('importjs')
@endpush
