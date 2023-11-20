@extends('clients.buyer.master')
@section('title', 'Kontak Kami')
@section('more', 'actived')
@section('contact', 'actived')
@section('childs')
    <main class="main">
        <div class="section-box">
            <div class="breadcrumbs-div mb-0">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a class="font-xs color-gray-1000" href="{{ route('buyer.home') }}{{ Auth::check() && preg_match('/Chrome/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Beranda</a></li>
                        <li><a class="font-xs color-gray-500" href="{{ route('buyer.contact') }}{{ Auth::check() && preg_match('/Chrome/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Kontak Kami</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="section-box shop-template mt-0">
            <div class="container">
                <div class="box-contact">
                    <div class="row">
                        <div class="col-12">
                            <div class="contact-form">
                                <h3 class="color-brand-3 mt-60">Kontak Kami</h3>
                                <p class="font-sm color-gray-700 mb-30">Tim kami akan senang mendengar pendapat Anda!</p>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Nama Lengkap">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" type="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" type="tel" placeholder="No. Handphone">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Pesan" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="btn btn-buy w-auto" type="submit" value="Kirim Pesan">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-contact-support pt-80 pb-50 background-gray-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mb-30 text-center text-lg-start">
                            <h3 class="mb-5">Kami ingin sekali menerima tanggapan Anda</h3>
                            <p class="font-sm color-gray-700">Hubungi tim kami yang ramah</p>
                        </div>
                        <div class="col-lg-3 text-center mb-30">
                            <div class="box-image mb-20"><img src="{{ asset('ecom/imgs/page/contact/chat.svg') }}"
                                    alt="Ecom"></div>
                            <h4 class="mb-5">Kontak</h4>
                            <p class="font-sm color-gray-700 mb-5">Bicaralah dengan tim kami.</p><a class="font-sm color-gray-900"
                                href="mailto:sales@ecom.com">sales@ecom.com</a>
                        </div>
                        <div class="col-lg-3 text-center mb-30">
                            <div class="box-image mb-20"><img src="{{ asset('ecom/imgs/page/contact/call.svg') }}"
                                    alt="Ecom"></div>
                            <h4 class="mb-5">Hubungi</h4>
                            <p class="font-sm color-gray-700 mb-5">Mon-Fri from 8am to 5pm</p><a
                                class="font-sm color-gray-900" href="tel:+1(555)000-0000">+1(555)000-0000</a>
                        </div>
                        {{-- <div class="col-lg-3 text-center mb-30">
                            <div class="box-image mb-20"><img src="{{ asset('ecom/imgs/page/contact/map.svg') }}"
                                    alt="Ecom"></div>
                            <h4 class="mb-5">Kunjungi kami</h4>
                            <p class="font-sm color-gray-700 mb-5">Kunjungi kantor kami</p><span
                                class="font-sm color-gray-900">205 North Michigan Avenue, Suite 810<br>Chicago, 60601,
                                USA</span>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>

        @include('clients.buyer.layouts.benefit')
    </main>
@endsection
@push('importjs')
@endpush
