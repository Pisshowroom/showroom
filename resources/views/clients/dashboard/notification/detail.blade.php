@extends('clients.master-dashboard')
@section('title', 'Detail Notifikasi')
@section('dashboard')
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title">Detail Notifikasi</h2>
            </div>
            <div> <button type="button" class="btn btn-xs-danger" data-bs-toggle="modal" data-bs-target="#deleteNotification">
                    Hapus Notifikasi
                </button>
            </div>
        </div>
        <div class="card">
            <header class="card-header">
                <div class="row align-items-center">
                    <div class="col-lg-8 mb-lg-0 mb-15">
                        <h3>{{ $notif->title ?? '' }}</h3>

                        <span>
                            <i class="material-icons md-calendar_today"></i>
                            <b>{{ $notif['date'] . ' WIB' ?? '' }}</b>
                        </span>
                        <h6 class="mt-2">{{ $notif->subtitle ?? '' }}</h6>
                    </div>
                    <div class="col-lg-4 mb-lg-0 mb-15 text-lg-end">
                        @if ($notif->link_web)
                            <a class="btn btn-xs" href="{{ $notif->link_web }}" target="_blank">Lihat Detail</a>
                        @endif
                    </div>
                </div>
            </header>

            <div class="card-body">
                <div class="row gx-5">
                    <div class="col-lg-12">
                        <section class="content-body p-xl-4">
                            <span>{!! $notif->content ?? '' !!}</span>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="deleteNotification" tabindex="-1" aria-labelledby="deleteNotificationLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0">
                        <h1 class="modal-title fs-5 text-dark" id="deleteNotificationLabel">Hapus Notifikasi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5 class="text-dark">Apakah kamu yakin ingin menghapus notifikasi ini ?</h5>
                    </div>
                    <div class="modal-footer border-top-0">
                        <button type="button" class="btn btn-xs" data-bs-dismiss="modal">Tutup</button>
                        <a class="btn btn-xs-danger" style="background-color:#dc3545 !important;"
                            href="{{ route('dashboard.deleteNotification', ['id' => $notif->id]) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Hapus
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
@push('importcss')
@endpush
@push('importjs')
@endpush
