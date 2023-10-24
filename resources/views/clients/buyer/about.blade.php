@extends('clients.buyer.master')
@section('title', 'Tentang Kami')

@section('childs')
    <main class="main">
        <div class="section-box">
            <div class="breadcrumbs-div">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a class="font-xs color-gray-1000" href="{{ route('buyer.home') }}">Beranda</a></li>
                        <li><a class="font-xs color-gray-500" href="{{ route('buyer.about') }}">Tentang Kami</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="section-box shop-template mt-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <h5 class="color-gray-500 mb-10">About us</h5>
                        <h2>Global Leading Online Shop</h2>
                        <div class="row mt-20">
                            <div class="col-lg-6">
                                <p class="font-sm font-medium color-gray-700 mb-15">Ecom expands global footprint,
                                    delivering entertaining experiences customised to each user. Branches are expanding both
                                    in size and number.</p>
                                <p class="font-sm font-medium color-gray-700 mb-15">Nunc vel risus commodo viverra maecenas
                                    accumsan lacus vel facilisis. Lacus vel facilisis volutpat est velit. Urna neque viverra
                                    justo nec. Suspendisse faucibus interdum posuere lorem ipsum dolor. Ut aliquam purus sit
                                    amet luctus venenatis lectus magna fringilla. Tortor vitae purus faucibus ornare.</p>
                                <p class="font-sm font-medium color-gray-700 mb-15">Tempus iaculis urna id volutpat lacus
                                    laoreet. Id neque aliquam vestibulum morbi blandit. Lacinia quis vel eros donec ac odio
                                    tempor orci. Lectus sit amet est placerat in egestas erat imperdiet. Nunc congue nisi
                                    vitae suscipit. Sed adipiscing diam donec adipiscing tristique risus.</p>
                                <ul class="list-services mt-20">
                                    <li class="hover-up">We provide qualified & expert</li>
                                    <li class="hover-up">Modern tools & technology use</li>
                                    <li class="hover-up">Neat & cleaning top Services</li>
                                    <li class="hover-up">We Develop Digital Future</li>
                                </ul>
                            </div>
                            <div class="col-lg-6"><img src="{{ asset('ecom/imgs/page/about/img.png') }}" alt="Ecom">
                            </div>
                        </div>
                        <div class="box-contact-support pt-80 pb-50 pl-50 pr-50 background-gray-50 mt-50 mb-90">
                            <div class="row">
                                <div class="col-lg-3 mb-30 text-center text-lg-start">
                                    <h4 class="mb-5">12 Years</h4>
                                    <p class="font-md color-gray-700">We’ve more than 12 years working experience.</p>
                                </div>
                                <div class="col-lg-3 mb-30 text-center text-lg-start">
                                    <h4 class="mb-5">2000+ Employee</h4>
                                    <p class="font-md color-gray-700 mb-5">We’ve more than 2000 employees working near you.
                                    </p>
                                </div>
                                <div class="col-lg-3 mb-30 text-center text-lg-start">
                                    <h4 class="mb-5">68 Branches</h4>
                                    <p class="font-md color-gray-700 mb-5">We have 68 branches across the country and are
                                        expanding</p>
                                </div>
                                <div class="col-lg-3 mb-30 text-center text-lg-start">
                                    <h4 class="mb-5">15 Countries</h4>
                                    <p class="font-md color-gray-700 mb-5">We are present in 15 countries around the world
                                    </p>
                                </div>
                            </div>
                        </div>
                        <h5 class="color-gray-500 mb-10">Behind The Brands</h5>
                        <h2 class="mb-40">The people who work at Ecom share the vision and values of our community.</h2>
                        <div class="row mb-50">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="card-staff hover-up">
                                    <div class="image-staff"><img src="{{ asset('ecom/imgs/page/about/staft1.png') }}"
                                            alt="Ecom">
                                    </div>
                                    <div class="info-staff">
                                        <h5>Ronald Richards</h5>
                                        <p class="font-md color-gray-500">Chief Executive Officer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="card-staff hover-up">
                                    <div class="image-staff"><img src="{{ asset('ecom/imgs/page/about/staft2.png') }}"
                                            alt="Ecom">
                                    </div>
                                    <div class="info-staff">
                                        <h5>Jenny Wilson</h5>
                                        <p class="font-md color-gray-500">Chief Financial Officer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="card-staff hover-up">
                                    <div class="image-staff"><img src="{{ asset('ecom/imgs/page/about/staft3.png') }}"
                                            alt="Ecom">
                                    </div>
                                    <div class="info-staff">
                                        <h5>Cody Fisher</h5>
                                        <p class="font-md color-gray-500">Chief Operating Officer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="card-staff hover-up">
                                    <div class="image-staff"><img src="{{ asset('ecom/imgs/page/about/staft4.png') }}"
                                            alt="Ecom">
                                    </div>
                                    <div class="info-staff">
                                        <h5>Jacob Jones</h5>
                                        <p class="font-md color-gray-500">Chief Technology Officer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="card-staff hover-up">
                                    <div class="image-staff"><img src="{{ asset('ecom/imgs/page/about/staft5.png') }}"
                                            alt="Ecom">
                                    </div>
                                    <div class="info-staff">
                                        <h5>Leslie Alexander</h5>
                                        <p class="font-md color-gray-500">Chief Marketing Officer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="card-staff hover-up">
                                    <div class="image-staff"><img src="{{ asset('ecom/imgs/page/about/staft6.png') }}"
                                            alt="Ecom">
                                    </div>
                                    <div class="info-staff">
                                        <h5>Ralph Edwards</h5>
                                        <p class="font-md color-gray-500">Chief Human Resources Officer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="card-staff hover-up">
                                    <div class="image-staff"><img src="{{ asset('ecom/imgs/page/about/staft7.png') }}"
                                            alt="Ecom">
                                    </div>
                                    <div class="info-staff">
                                        <h5>Eleanor Pena</h5>
                                        <p class="font-md color-gray-500">Chief Legal Officer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="card-staff hover-up">
                                    <div class="image-staff"><img src="{{ asset('ecom/imgs/page/about/staft8.png') }}"
                                            alt="Ecom">
                                    </div>
                                    <div class="info-staff">
                                        <h5>Theresa Webb</h5>
                                        <p class="font-md color-gray-500">Chief Product Officer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="color-gray-500 mb-10">Our Partners</h5>
                        <h2 class="mb-40">Trusted by 18.000+ Vendors</h2>
                        <div class="box-images-logo"><a class="hover-up" href="shop-vendor-single.html"><img
                                    src="{{ asset('ecom/imgs/page/about/microsoft.svg') }}" alt="Ecom"></a><a
                                class="hover-up" href="shop-vendor-single.html"><img
                                    src="{{ asset('ecom/imgs/page/about/sony.svg') }}" alt="Ecom"></a><a
                                class="hover-up" href="shop-vendor-single.html"><img
                                    src="{{ asset('ecom/imgs/page/about/acer.svg') }}" alt="Ecom"></a><a
                                class="hover-up" href="shop-vendor-single.html"><img
                                    src="{{ asset('ecom/imgs/page/about/nokia.svg') }}" alt="Ecom"></a><a
                                class="hover-up" href="shop-vendor-single.html"><img
                                    src="{{ asset('ecom/imgs/page/about/asus.svg') }}" alt="Ecom"></a><a
                                class="hover-up" href="shop-vendor-single.html"><img
                                    src="{{ asset('ecom/imgs/page/about/casio.svg') }}" alt="Ecom"></a><a
                                class="hover-up" href="shop-vendor-single.html"><img
                                    src="{{ asset('ecom/imgs/page/about/dell.svg') }}" alt="Ecom"></a><a
                                class="hover-up" href="shop-vendor-single.html"><img
                                    src="{{ asset('ecom/imgs/page/about/panasonic.svg') }}" alt="Ecom"></a><a
                                class="hover-up" href="shop-vendor-single.html"><img
                                    src="{{ asset('ecom/imgs/page/about/vaio.svg') }}" alt="Ecom"></a><a
                                class="hover-up" href="shop-vendor-single.html"><img
                                    src="{{ asset('ecom/imgs/page/about/sharp.svg') }}" alt="Ecom"></a></div>
                        <div class="border-1 mb-80 mt-50"></div>
                        <h2 class="mb-5">Visit our stores</h2>
                        <p class="font-sm color-gray-700">Find us at these locations</p>
                        <div class="box-contact-address pt-30 pb-50">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-30">
                                        <h4>Melbourne</h4>
                                        <p class="font-sm color-gray-700">205 North Michigan Avenue, Suite 810<br>Chicago,
                                            60601, USA</p>
                                    </div>
                                    <div class="mb-30">
                                        <h4>San Francisco</h4>
                                        <p class="font-sm color-gray-700">205 North Michigan Avenue, Suite 810<br>Chicago,
                                            60601, USA</p>
                                    </div>
                                    <div class="mb-30">
                                        <h4>Byron Bay</h4>
                                        <p class="font-sm color-gray-700">205 North Michigan Avenue, Suite 810<br>Chicago,
                                            60601, USA</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-30">
                                        <h4>Sydney</h4>
                                        <p class="font-sm color-gray-700">205 North Michigan Avenue, Suite 810<br>Chicago,
                                            60601, USA</p>
                                    </div>
                                    <div class="mb-30">
                                        <h4>Sweden</h4>
                                        <p class="font-sm color-gray-700">205 North Michigan Avenue, Suite 810<br>Chicago,
                                            60601, USA</p>
                                    </div>
                                    <div class="mb-30">
                                        <h4>Ha Noi</h4>
                                        <p class="font-sm color-gray-700">205 North Michigan Avenue, Suite 810<br>Chicago,
                                            60601, USA</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-30">
                                        <h4>Bangkok</h4>
                                        <p class="font-sm color-gray-700">205 North Michigan Avenue, Suite 810<br>Chicago,
                                            60601, USA</p>
                                    </div>
                                    <div class="mb-30">
                                        <h4>Seoul</h4>
                                        <p class="font-sm color-gray-700">205 North Michigan Avenue, Suite 810<br>Chicago,
                                            60601, USA</p>
                                    </div>
                                    <div class="mb-30">
                                        <h4>Paris</h4>
                                        <p class="font-sm color-gray-700">205 North Michigan Avenue, Suite 810<br>Chicago,
                                            60601, USA</p>
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
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10">
                            <div class="row">
                                <div class="col-lg-3 mb-30 text-center text-lg-start">
                                    <h3 class="mb-5">We‘d love to here from you</h3>
                                    <p class="font-sm color-gray-700">Chat with our friendly team</p>
                                </div>
                                <div class="col-lg-3 text-center mb-30">
                                    <div class="box-image mb-20"><img
                                            src="{{ asset('ecom/imgs/page/contact/chat.svg') }}" alt="Ecom"></div>
                                    <h4 class="mb-5">Chat to sales</h4>
                                    <p class="font-sm color-gray-700 mb-5">Speak to our team.</p><a
                                        class="font-sm color-gray-900" href="mailto:sales@ecom.com">sales@ecom.com</a>
                                </div>
                                <div class="col-lg-3 text-center mb-30">
                                    <div class="box-image mb-20"><img
                                            src="{{ asset('ecom/imgs/page/contact/call.svg') }}" alt="Ecom"></div>
                                    <h4 class="mb-5">Call us</h4>
                                    <p class="font-sm color-gray-700 mb-5">Mon-Fri from 8am to 5pm</p><a
                                        class="font-sm color-gray-900" href="tel:+1(555)000-0000">+1(555)000-0000</a>
                                </div>
                                <div class="col-lg-3 text-center mb-30">
                                    <div class="box-image mb-20"><img src="{{ asset('ecom/imgs/page/contact/map.svg') }}"
                                            alt="Ecom"></div>
                                    <h4 class="mb-5">Visit us</h4>
                                    <p class="font-sm color-gray-700 mb-5">Visit our office</p><span
                                        class="font-sm color-gray-900">205 North Michigan Avenue, Suite 810<br>Chicago,
                                        60601, USA</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-box mt-90 mb-50">
            <div class="container">
                <ul class="list-col-5">
                    <li>
                        <div class="item-list">
                            <div class="icon-left"><img src="{{ asset('ecom/imgs/template/delivery.svg') }}"
                                    alt="Ecom"></div>
                            <div class="info-right">
                                <h5 class="font-lg-bold color-gray-100">Free Delivery</h5>
                                <p class="font-sm color-gray-500">From all orders over $10</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-list">
                            <div class="icon-left"><img src="{{ asset('ecom/imgs/template/support.svg') }}"
                                    alt="Ecom"></div>
                            <div class="info-right">
                                <h5 class="font-lg-bold color-gray-100">Support 24/7</h5>
                                <p class="font-sm color-gray-500">Shop with an expert</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-list">
                            <div class="icon-left"><img src="{{ asset('ecom/imgs/template/voucher.svg') }}"
                                    alt="Ecom"></div>
                            <div class="info-right">
                                <h5 class="font-lg-bold color-gray-100">Gift voucher</h5>
                                <p class="font-sm color-gray-500">Refer a friend</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-list">
                            <div class="icon-left"><img src="{{ asset('ecom/imgs/template/return.svg') }}"
                                    alt="Ecom"></div>
                            <div class="info-right">
                                <h5 class="font-lg-bold color-gray-100">Return &amp; Refund</h5>
                                <p class="font-sm color-gray-500">Free return over $200</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-list">
                            <div class="icon-left"><img src="{{ asset('ecom/imgs/template/secure.svg') }}"
                                    alt="Ecom"></div>
                            <div class="info-right">
                                <h5 class="font-lg-bold color-gray-100">Secure payment</h5>
                                <p class="font-sm color-gray-500">100% Protected</p>
                            </div>
                        </div>
                    </li>
                </ul>
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
