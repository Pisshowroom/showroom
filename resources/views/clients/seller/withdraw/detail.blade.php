@extends('clients.master-dashboard')
@section('title', 'Detail Pencairan Uang')
@section('withdraw', 'active')
@section('dashboard')
    <section class="content-main">
        <div class="content-header">
            <h2 class="content-title">Detail Pencairan Uang</h2>
        </div>
        <div class="card">
            <header class="card-header">
                <div class="row align-items-center">
                    <div class="col-12 mb-lg-0 mb-15">
                        <span>
                            <i class="material-icons md-calendar_today"></i>
                            <b>Tanggal Pengajuan : {{ $withdraw->date . ' WIB' ?? '' }}</b>
                        </span><br>
                        <p class="mt-15"><span>Status:</span>
                            @if ($withdraw->status && $withdraw->status == 'Pending')
                                <p class="badge rounded-pill alert-primary fw-normal">Menunggu
                                    review</p>
                            @elseif ($withdraw->status && $withdraw->status == 'OnReview')
                                <p class="badge rounded-pill alert-primary fw-normal">Sedang
                                    direview</p>
                            @elseif ($withdraw->status && $withdraw->status == 'Approved')
                                <p class="badge rounded-pill alert-success fw-normal">Disetujui</p>
                            @elseif ($withdraw->status && $withdraw->status == 'Rejected')
                                <p class="badge rounded-pill alert-warning fw-normal">Ditolak</p>
                            @endif

                        </p>
                    </div>
                </div>
            </header>
            <div class="card-body">
                <div class="order-tracking mb-50 mt-20">
                    <div class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between">
                        <div
                            class="step {{ $withdraw->status == 'Pending' || $withdraw->status == 'OnReview' || $withdraw->status == 'Rejected' || $withdraw->status == 'Approved' ? 'completed' : '' }}">
                            <div class="step-icon-wrap">
                                <div class="step-icon"><i class="material-icons md-pending"></i></div>
                            </div>
                            <h4 class="step-title">Menunggu Review</h4>
                        </div>
                        <div
                            class="step {{ $withdraw->status == 'OnReview' || $withdraw->status == 'Rejected' || $withdraw->status == 'Approved' ? 'completed' : '' }}">
                            <div class="step-icon-wrap">
                                <div class="step-icon"><i class="material-icons md-remove_red_eye"></i></div>
                            </div>
                            <h4 class="step-title">Sedang direview</h4>
                        </div>
                        @if ($withdraw->status == 'Rejected')
                            <div class="step {{ $withdraw->status == 'Rejected' ? 'completed' : '' }}">
                                <div class="step-icon-wrap">
                                    <div class="step-icon"><i class="material-icons md-cancel"></i></div>
                                </div>
                                <h4 class="step-title">Pencairan uang ditolak</h4>
                            </div>
                        @else
                            <div class="step {{ $withdraw->status == 'Approved' ? 'completed' : '' }}">
                                <div class="step-icon-wrap">
                                    <div class="step-icon"><i class="material-icons md-check_circle"></i></div>
                                </div>
                                <h4 class="step-title">Pencairan uang berhasil</h4>

                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-12 mt-20">
                    <div class="box shadow-sm bg-light">
                        <h6 class="mb-15">Informasi pencairan</h6>
                        <p>
                            <img class="border"
                                src="{{ $withdraw?->master_account?->image ? $withdraw?->master_account?->image : asset('ecom_dashboard/imgs/card-brands/2.png') }}"
                                height="20">
                            {{ $withdraw->account_bank_name ?? '-' }}<br>
                            Tipe: {{ $withdraw?->master_account?->type ?? '-' }}<br>
                            Nomor: {{ $withdraw->account_bank_number ?? '-' }}<br>
                            Bukti Pembayaran: <a href="{{ $withdraw->proof_payment }}"
                                target="_blank">{{ $withdraw->proof_payment ?? '-' }} </a><br>
                            Nominal: {{ $withdraw->amount > 0 ? numbFormat($withdraw->amount) : '-' }}<br>

                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
@push('importjs')
@endpush
