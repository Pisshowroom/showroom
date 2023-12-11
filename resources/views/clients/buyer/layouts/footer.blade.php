<footer class="footer">
    <div class="footer-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 width-25 mb-30">
                    <h4 class="mb-30 color-gray-1000">Kontak</h4>
                    <div class="font-md mb-20 color-gray-900"><strong class="font-md-bold">Alamat:</strong> 502
                        New Design Str, Melbourne, San Francisco, CA 94110, United States</div>
                    <div class="font-md mb-20 color-gray-900"><strong class="font-md-bold">No. Handphone:</strong> (+01)
                        123-456-789</div>
                    <div class="font-md mb-20 color-gray-900"><strong class="font-md-bold">E-mail:</strong>
                        contact@ecom-market.com</div>
                    {{-- <div class="font-md mb-20 color-gray-900"><strong class="font-md-bold">Hours:</strong> 8:00
                        - 17:00, Mon - Sat</div> --}}
                    <div class="mt-30"><a class="icon-socials icon-facebook" href="#"></a><a
                            class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-twitter"
                            href="#"></a><a class="icon-socials icon-linkedin" href="#"></a></div>
                </div>
                {{-- <div class="col-lg-3 width-20 mb-30">
                    <h4 class="mb-30 color-gray-1000">Hasilkan Uang bersama Kami</h4>
                    <ul class="menu-footer">
                        <li><a href="{{ route('buyer.about') }}">Mission &amp; Vision</a></li>
                        <li><a href="{{ route('buyer.about') }}">Our Team</a></li>
                        <li><a href="#">Press &amp; Media</a></li>
                        <li><a href="#">Advertising</a></li>
                        <li><a href="#">Testimonials</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 width-16 mb-30">
                    <h4 class="mb-30 color-gray-1000">Company</h4>
                    <ul class="menu-footer">
                        <li><a href="blog-2.html">Our Blog</a></li>
                        <li><a href="#">Plans &amp; Pricing</a></li>
                        <li><a href="#">Knowledge Base</a></li>
                        <li><a href="#">Cookie Policy</a></li>
                        <li><a href="#">Office Center</a></li>
                        <li><a href="blog.html">News &amp; Events</a></li>
                    </ul>
                </div> --}}
                <div class="col-lg-4 mb-30">
                    <h4 class="mb-30 color-gray-1000">Selengkapnya</h4>
                    <ul class="menu-footer">
                        <li><a href="{{ route('buyer.privacy') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Kebijakan Privasi</a></li>
                        <li><a href="{{ route('buyer.contact') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Kontak Kami</a></li>
                        <li><a href="{{ route('buyer.about') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Tentang Kami</a></li>
                        <li><a href="{{ route('buyer.term') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Syarat & Ketentuan</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h4 class="mb-30 color-gray-1000">Aplikasi &amp; Pembayaran</h4>
                    <div>
                        <p class="font-md color-gray-900">Unduh Aplikasi kami di Appstore dan Playstore&mldr;!</p>
                        <div class="mt-20"><a class="mr-10" href="#"><img
                                    src="{{ asset('ecom/imgs/template/appstore.png') }}" alt="appstore"></a><a
                                href="#"><img src="{{ asset('ecom/imgs/template/google-play.png') }}"
                                    alt="google play"></a></div>
                        <p class="font-md color-gray-900 mt-20 mb-10">Pembayaran Aman</p><img
                            src="{{ asset('ecom/imgs/template/payment-method.png') }}" alt="Pembayaran Aman">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-2">
        <div class="footer-bottom-1">
            <div class="container">
                <div class="footer-2-top mb-20"><a href="{{ route('buyer.home') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"><img alt="Logo Pishop"
                            src="{{ asset('ecom/imgs/pshop.png') }}" style="max-width:100px"></a>
                    {{-- <a class="font-xs color-gray-1000" href="#">EcomMarket.com</a><a
                        class="font-xs color-gray-1000" href="#">Ecom
                        Partners</a><a class="font-xs color-gray-1000" href="#">Ecom
                        Bussiness</a><a class="font-xs color-gray-1000" href="#">Ecom Factory</a> --}}
                </div>
            </div>
        </div>
        <div class="container">
            <div class="footer-bottom mt-20">
                <div class="row">
                    <div class="col-lg-6 col-md-12 text-center text-lg-start"><span
                            class="color-gray-900 font-sm">Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear())
                            </script> <a href="https://hotama.co.id/" target="_blank"
                                rel="noopener noreferrer">PT.Kreasi Putra Hotama.</a> All rights
                            reserved.
                        </span></div>
                    <div class="col-lg-6 col-md-12 text-center text-lg-end">
                        <ul class="menu-bottom">
                            <li><a class="font-sm color-gray-900" href="{{ route('buyer.term') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Syarat dan
                                    Ketentuan</a>
                            </li>
                            {{-- <li><a class="font-sm color-gray-900" href="{{ route('buyer.term') }}">Privacy Notice</a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
