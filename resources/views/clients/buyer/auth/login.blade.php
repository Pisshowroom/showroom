@extends('clients.buyer.master')
@section('title', 'Masuk sebagai Pembeli')

@section('childs')
    <main class="main">
        <section class="section-box shop-template mt-60">
            <div class="container">
                <div class="row mb-100">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                        <h3>Masuk</h3>
                        <p class="font-md color-gray-500">Selamat Datang!</p>
                        <div class="form-register mt-30 mb-30">
                            <div class="form-group">
                                <label class="mb-5 font-sm color-gray-700">Username *</label>
                                <input class="form-control" type="text" placeholder="stevenjob">
                            </div>
                            <div class="form-group">
                                <label class="mb-5 font-sm color-gray-700">Password *</label>
                                <input class="form-control" type="password" placeholder="******************">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="color-gray-500 font-xs">
                                            <input class="checkagree" type="checkbox">Ingat aku
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="font-md-bold btn btn-buy" type="submit" value="Masuk">
                            </div>
                            <div class="mt-20"><span class="font-xs color-gray-500 font-medium">Belum punya akun?</span><a
                                    class="font-xs color-brand-3 font-medium"
                                    href="{{ route('buyer.register') }}"> Daftar</a></div>
                                    <div class="box-login-social pt-65">
                                        <h5 class="text-center">Gunakan Akun Sosmed</h5>
                                        <div class="box-button-login mt-25"><a
                                                class="btn btn-login font-md-bold color-brand-3 mb-15">Masuk Menggunakan<img
                                                    src="{{ asset('ecom/imgs/page/account/google.svg') }}" alt="Ecom"></a>
                                            {{-- <a
                                                        class="btn btn-login font-md-bold color-brand-3 mb-15">Sign up with<span
                                                            class="color-blue font-md-bold">Facebook</span></a><a
                                                        class="btn btn-login font-md-bold color-brand-3 mb-15">Sign up with<img
                                                            src="{{ asset('ecom/imgs/page/account/amazon.svg') }}" alt="Ecom"></a></div>
                                                <div class="mt-10 text-center"><span class="font-xs color-gray-900">Buying for work?</span><a
                                                        class="color-brand-1 font-xs" href="#">Create a free business account</a> --}}
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('clients.buyer.layouts.subscribe')
    </main>
@endsection
@push('importjs')
@endpush
