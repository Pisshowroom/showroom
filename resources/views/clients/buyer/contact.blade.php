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
                                <h3 class="color-brand-3 mt-60">Contact Us</h3>
                                <p class="font-sm color-gray-700 mb-30">Our team would love to hear from you!</p>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="First name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Last name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" type="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" type="tel" placeholder="Phone number">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Message" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="btn btn-buy w-auto" type="submit" value="Send message">
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
                            <h3 class="mb-5">Visit our stores</h3>
                            <p class="font-sm color-gray-700 mb-30">Find us at these locations</p><a
                                class="btn btn-buy w-auto">View map</a>
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
                            <h4 class="mb-5">Chat to sales</h4>
                            <p class="font-sm color-gray-700 mb-5">Speak to our team.</p><a class="font-sm color-gray-900"
                                href="mailto:sales@ecom.com">sales@ecom.com</a>
                        </div>
                        <div class="col-lg-3 text-center mb-30">
                            <div class="box-image mb-20"><img src="{{ asset('ecom/imgs/page/contact/call.svg') }}"
                                    alt="Ecom"></div>
                            <h4 class="mb-5">Call us</h4>
                            <p class="font-sm color-gray-700 mb-5">Mon-Fri from 8am to 5pm</p><a
                                class="font-sm color-gray-900" href="tel:+1(555)000-0000">+1(555)000-0000</a>
                        </div>
                        <div class="col-lg-3 text-center mb-30">
                            <div class="box-image mb-20"><img src="{{ asset('ecom/imgs/page/contact/map.svg') }}"
                                    alt="Ecom"></div>
                            <h4 class="mb-5">Visit us</h4>
                            <p class="font-sm color-gray-700 mb-5">Visit our office</p><span
                                class="font-sm color-gray-900">205 North Michigan Avenue, Suite 810<br>Chicago, 60601,
                                USA</span>
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
