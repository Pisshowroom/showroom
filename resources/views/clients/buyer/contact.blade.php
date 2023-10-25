@extends('clients.buyer.master')
@section('title', 'Kontak Kami')

@section('childs')
    <main class="main">
        <div class="section-box">
            <div class="breadcrumbs-div mb-0">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a class="font-xs color-gray-1000" href="{{ route('buyer.home') }}">Beranda</a></li>
                        <li><a class="font-xs color-gray-500" href="{{ route('buyer.contact') }}">Kontak Kami</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="section-box shop-template mt-0">
            <div class="container">
                <div class="box-contact">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact-form">
                                <h3 class="color-brand-3 mt-60">Kontak Kami</h3>
                                <p class="font-sm color-gray-700 mb-30">Tim kami akan senang mendengar pendapat Anda!</p>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
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
                        <div class="col-lg-6">
                            <div class="map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d325467.51371614134!2d-73.98947743776016!3d40.72209526768085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m3!3e0!4m0!4m0!5e0!3m2!1svi!2s!4v1664373110059!5m2!1svi!2s"
                                    height="550" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-contact-address pt-80 pb-50">
                    <div class="row">
                        <div class="col-lg-3 mb-30">
                            <h3 class="mb-5">Kunjungi toko kami</h3>
                            <p class="font-sm color-gray-700 mb-30">Temukan kami di lokasi ini</p><a
                                class="btn btn-buy w-auto">Lihat map</a>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-30">
                                <h4>Melbourne</h4>
                                <p class="font-sm color-gray-700">205 North Michigan Avenue, Suite 810<br>Chicago, 60601,
                                    USA</p>
                            </div>
                            <div class="mb-30">
                                <h4>San Francisco</h4>
                                <p class="font-sm color-gray-700">205 North Michigan Avenue, Suite 810<br>Chicago, 60601,
                                    USA</p>
                            </div>
                            <div class="mb-30">
                                <h4>Byron Bay</h4>
                                <p class="font-sm color-gray-700">205 North Michigan Avenue, Suite 810<br>Chicago, 60601,
                                    USA</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-30">
                                <h4>Sydney</h4>
                                <p class="font-sm color-gray-700">205 North Michigan Avenue, Suite 810<br>Chicago, 60601,
                                    USA</p>
                            </div>
                            <div class="mb-30">
                                <h4>Sweden</h4>
                                <p class="font-sm color-gray-700">205 North Michigan Avenue, Suite 810<br>Chicago, 60601,
                                    USA</p>
                            </div>
                            <div class="mb-30">
                                <h4>Ha Noi</h4>
                                <p class="font-sm color-gray-700">205 North Michigan Avenue, Suite 810<br>Chicago, 60601,
                                    USA</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-30">
                                <h4>Bangkok</h4>
                                <p class="font-sm color-gray-700">205 North Michigan Avenue, Suite 810<br>Chicago, 60601,
                                    USA</p>
                            </div>
                            <div class="mb-30">
                                <h4>Seoul</h4>
                                <p class="font-sm color-gray-700">205 North Michigan Avenue, Suite 810<br>Chicago, 60601,
                                    USA</p>
                            </div>
                            <div class="mb-30">
                                <h4>Paris</h4>
                                <p class="font-sm color-gray-700">205 North Michigan Avenue, Suite 810<br>Chicago, 60601,
                                    USA</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-contact-support pt-80 pb-50 background-gray-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 mb-30 text-center text-lg-start">
                            <h3 class="mb-5">We‘d love to here from you</h3>
                            <p class="font-sm color-gray-700">Chat with our friendly team</p>
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
                        <div class="col-lg-3 text-center mb-30">
                            <div class="box-image mb-20"><img src="{{ asset('ecom/imgs/page/contact/map.svg') }}"
                                    alt="Ecom"></div>
                            <h4 class="mb-5">Kunjungi kami</h4>
                            <p class="font-sm color-gray-700 mb-5">Kunjungi kantor kami</p><span
                                class="font-sm color-gray-900">205 North Michigan Avenue, Suite 810<br>Chicago, 60601,
                                USA</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('clients.buyer.layouts.benefit')
        @include('clients.buyer.layouts.subscribe')
    </main>
@endsection
@push('importjs')
@endpush
