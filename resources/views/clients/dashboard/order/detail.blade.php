@extends('clients.master-dashboard')
@section('title', 'Detail Pesanan')
@section('myOrder', 'active')
@section('dashboard')
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Detail Pesanan</h2>
            </div>
        </div>
        @include('clients.dashboard.order.detail_order')
    </section>

@endsection
@push('importjs')
@endpush
