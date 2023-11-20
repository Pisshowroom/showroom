@extends('clients.buyer.master')
@section('title', 'Tidak ditemukan')

@section('childs')

    <main class="main">
        <section class="section-box shop-template mt-60">
            <div class="container">
                <div class="text-center mb-150 mt-50">
                    <div class="image-404 mb-50"> <img src="{{ asset('ecom/imgs/page/account/404.png') }}" alt="Ecom">
                    </div>
                    <h3>404 halaman tidak ditemukan</h3>
                    <p class="font-md-bold color-gray-600">Sepertinya, halaman tidak ada</p>
                    <div class="mt-15"> <a class="btn btn-buy w-auto arrow-back" href="{{ route('buyer.home') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Kembali ke Beranda</a></div>
                </div>
            </div>
        </section>
    </main>
@endsection
@push('importjs')
@endpush
