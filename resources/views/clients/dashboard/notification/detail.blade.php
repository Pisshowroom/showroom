@extends('clients.master-dashboard')
@section('title', 'Detail Notifikasi')
@section('dashboard')
    <section class="content-main">
        <div class="content-header">
            <h2 class="content-title">Detail Notifikasi</h2>
        </div>
        <div class="card">
            <header class="card-header">
                <div class="row align-items-center">
                    <div class="col-12 mb-lg-0 mb-15">
                        <h3>{{ $notif->title ?? '' }}</h3>
                        <h6>{{ $notif->subtitle ?? '' }}</h6>

                        <span>
                            <i class="material-icons md-calendar_today"></i>
                            <b>{{ $notif['date'] . ' WIB' ?? '' }}</b>
                        </span>
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
    </section>
@endsection
@push('importcss')
@endpush
@push('importjs')
@endpush
