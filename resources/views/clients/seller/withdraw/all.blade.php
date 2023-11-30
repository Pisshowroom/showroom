@extends('clients.master-dashboard')
@section('title', 'Semua Pencairan Uang')
@section('withdraw', 'active')
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
            <h2 class="content-title">Semua Pencairan Uang</h2>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <header class="border-bottom mb-4 pb-4">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 me-auto">
                                    <input class="form-control" type="search" placeholder="Cari sesuai nominal..."
                                        name="search" id="searchWithdraw" value="{{ request()->input('search') ?? '' }}">
                                </div>
                                <div class="col-lg-2 col-6 col-md-3">
                                    <select name="status" id="filterStatus" class="form-select">
                                        <option {{ !request()->input('status') ? 'selected' : '' }} disabled>Filter</option>
                                        <option
                                            {{ request()->input('status') && request()->input('status') == 'Pending' ? 'selected' : '' }}
                                            value="Pending">Menunggu Review</option>
                                        <option
                                            {{ request()->input('status') && request()->input('status') == 'OnReview' ? 'selected' : '' }}
                                            value="OnReview">Sedang direview</option>
                                        <option
                                            {{ request()->input('status') && request()->input('status') == 'Approved' ? 'selected' : '' }}
                                            value="Approved">Disetujui</option>
                                        <option
                                            {{ request()->input('status') && request()->input('status') == 'Rejected' ? 'selected' : '' }}
                                            value="Rejected">Ditolak</option>
                                    </select>
                                </div>
                            </div>
                        </header>
                        <!-- card-header end//-->
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead>
                                    <tr>
                                        <th class="align-middle">Jumlah</th>
                                        <th class="align-middle">Pembayaran</th>
                                        <th class="align-middle">Nomor</th>
                                        <th class="align-middle">Status</th>
                                        <th class="align-middle"> Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($withdraws) > 0)
                                        @foreach ($withdraws as $key => $w)
                                            <tr>
                                                <td class="align-middle">
                                                    {{ $w->amount && $w->amount > 0 ? numbFormat($w->amount) : 'Rp 0' }}
                                                </td>
                                                <td class="align-middle">
                                                    <div class="icontext">
                                                        @if ($w->master_account)
                                                            <img class="icon border"
                                                                src="{{ $w?->master_account && $w->master_account?->image ? $w->master_account?->image : asset('ecom_dashboard/imgs/card-brands/1.png') }}"
                                                                alt="pembayaran {{ $w?->master_account && $w->master_account?->provider_name ? $w->master_account?->provider_name : '-' }}">
                                                        @else
                                                            <img class="icon border"
                                                                src="{{ asset('ecom_dashboard/imgs/card-brands/1.png') }}"
                                                                alt="pembayaran">
                                                        @endif
                                                        <span class="text"
                                                            style="font-size:14px !important">{{ $w?->master_account && $w->master_account?->provider_name ? $w->master_account?->provider_name : '-' }}</span>
                                                    </div>
                                                </td>
                                                <td class="align-middle">{{ $w->account_bank_number??'' }}</td>
                                                <td class="align-middle">
                                                    @if ($w->status && $w->status == 'Pending')
                                                        <p class="badge rounded-pill alert-primary fw-normal">Menunggu
                                                            review</p>
                                                    @elseif ($w->status && $w->status == 'OnReview')
                                                        <p class="badge rounded-pill alert-primary fw-normal">Sedang
                                                            direview</p>
                                                    @elseif ($w->status && $w->status == 'Approved')
                                                        <p
                                                            class="badge rounded-pill alert-success fw-normal">Disetujui</p>
                                                    @elseif ($w->status && $w->status == 'Rejected')
                                                        <p
                                                            class="badge rounded-pill alert-warning fw-normal">Ditolak</p>
                                                    @endif


                                                </td>
                                                <td class="align-middle">
                                                    <a class="btn btn-xs btn-light font-sm rounded"
                                                        href="{{ route('dashboardSeller.detailWithdraw', ['id' => $w->id ?? 1]) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Detail</a>
                                                    @if ($w->status == 'Pending')
                                                        <a class="btn btn-xs-danger"
                                                            href="{{ route('dashboardSeller.deleteWithdraw', ['id' => $w->id ?? '1']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                                            Hapus</a>
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
                            @if (count($withdraws) > 0)
                                {{ $withdraws->onEachSide(3)->appends(request()->except('page'))->links() }}
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- card end//-->
    </section>
@endsection
@push('importjs')
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $('#mydiv').fadeOut('fast');
            }, 2000);

            function updateURL() {
                var searchQuery = $('#searchWithdraw').val();
                var selectedStatus = $('#filterStatus').val();
                var baseUrl = "{{ route('dashboardSeller.allWithdraw') }}";
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

            $('#searchWithdraw, #filterStatus').on('change', function() {
                updateURL();
            });

        })
    </script>
@endpush
