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
                    <div class="mt-15"> <a class="btn btn-buy w-auto arrow-back" href="{{ route('buyer.home') }}">Kembali ke Beranda</a></div>
                </div>
            </div>
        </section>
        <section class="section-box box-newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7 col-sm-12">
                        <h3 class="color-white">Subscrible &amp; Get <span class="color-warning">10%</span> Discount</h3>
                        <p class="font-lg color-white">Get E-mail updates about our latest shop and <span
                                class="font-lg-bold">special offers.</span></p>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-12">
                        <div class="box-form-newsletter mt-15">
                            <form class="form-newsletter">
                                <input class="input-newsletter font-xs" value="" placeholder="Your email Address">
                                <button class="btn btn-brand-2">Sign Up</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@push('importjs')
@endpush
