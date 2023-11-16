@extends('clients.master-dashboard')
@section('title', 'Detail Transaksi')
@section('transaction', 'active')
@section('dashboard')
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Detail Transaksi</h2>
            </div>
        </div>
        @include('clients.dashboard.order.detail_order')
    </section>

@endsection
@push('importjs')
@endpush
