@extends('clients.buyer.master')
@section('title', 'Detail Produk')

@section('childs')
    <main class="main">
        <div class="section-box">
            <div class="breadcrumbs-div">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a class="font-xs color-gray-1000" href="{{ route('buyer.home') }}">Beranda</a></li>
                        <li><a class="font-xs color-gray-1000" href="{{ route('buyer.allGridProduct') }}">Semua Produk</a>
                        </li>
                        <li><a class="font-xs color-gray-500"
                                href="{{ route('buyer.detailProduct', ['slug' => $product->slug]) }}">Detail Produk</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div style="display:none" class="alert alert-warning" id="myDiv2">Minimal pembelian produk ini adalah 1 barang
        </div>
        @if (session('error'))
            <div class="alert alert-warning" id="mydiv">
                {{ session('error') }}
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success" id="mydiv">
                {{ session('success') }}
            </div>
        @endif
        <section class="section-box shop-template">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="gallery-image">
                            <div class="galleries">
                                <div class="detail-gallery">
                                    {{-- <label class="label">-17%</label> --}}
                                    <div class="product-image-slider">
                                        <figure class="border-radius-10"><img
                                                src="{{ asset('ecom/imgs/page/product/img-gallery-1.jpg') }}"
                                                alt="product image">
                                        </figure>
                                        <figure class="border-radius-10"><img
                                                src="{{ asset('ecom/imgs/page/product/img-gallery-2.jpg') }}"
                                                alt="product image">
                                        </figure>
                                        <figure class="border-radius-10"><img
                                                src="{{ asset('ecom/imgs/page/product/img-gallery-3.jpg') }}"
                                                alt="product image">
                                        </figure>
                                        <figure class="border-radius-10"><img
                                                src="{{ asset('ecom/imgs/page/product/img-gallery-4.jpg') }}"
                                                alt="product image">
                                        </figure>
                                        <figure class="border-radius-10"><img
                                                src="{{ asset('ecom/imgs/page/product/img-gallery-5.jpg') }}"
                                                alt="product image">
                                        </figure>
                                        <figure class="border-radius-10"><img
                                                src="{{ asset('ecom/imgs/page/product/img-gallery-6.jpg') }}"
                                                alt="product image">
                                        </figure>
                                        <figure class="border-radius-10"><img
                                                src="{{ asset('ecom/imgs/page/product/img-gallery-7.jpg') }}"
                                                alt="product image">
                                        </figure>
                                    </div>
                                </div>
                                <div class="slider-nav-thumbnails">
                                    <div>
                                        <div class="item-thumb"><img
                                                src="{{ asset('ecom/imgs/page/product/img-gallery-1.jpg') }}"
                                                alt="product image"></div>
                                    </div>
                                    <div>
                                        <div class="item-thumb"><img
                                                src="{{ asset('ecom/imgs/page/product/img-gallery-2.jpg') }}"
                                                alt="product image"></div>
                                    </div>
                                    <div>
                                        <div class="item-thumb"><img
                                                src="{{ asset('ecom/imgs/page/product/img-gallery-3.jpg') }}"
                                                alt="product image"></div>
                                    </div>
                                    <div>
                                        <div class="item-thumb"><img
                                                src="{{ asset('ecom/imgs/page/product/img-gallery-4.jpg') }}"
                                                alt="product image"></div>
                                    </div>
                                    <div>
                                        <div class="item-thumb"><img
                                                src="{{ asset('ecom/imgs/page/product/img-gallery-5.jpg') }}"
                                                alt="product image"></div>
                                    </div>
                                    <div>
                                        <div class="item-thumb"><img
                                                src="{{ asset('ecom/imgs/page/product/img-gallery-6.jpg') }}"
                                                alt="product image"></div>
                                    </div>
                                    <div>
                                        <div class="item-thumb"><img
                                                src="{{ asset('ecom/imgs/page/product/img-gallery-7.jpg') }}"
                                                alt="product image"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h3 class="color-brand-3 mb-25 line-2 text-start" style="overflow-wrap: break-word;">
                            {{ $product->name ?? '' }}</h3>
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-md-4 col-sm-3 mb-mobile"><a
                                    class="byAUthor color-gray-900 font-xs font-medium"
                                    href="{{ route('buyer.detailSeller', ['slug' => $product->seller ? $product->seller->seller_slug : 'bobsmith']) }}">
                                    {{ $product->seller ? $product->seller->seller_name ?? '-' : '-' }}</a>
                                <div class="rating mt-5"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="rating {{ $product->name ?? '' }}">
                                    <span class="font-xs color-gray-500 font-medium">
                                        {{ $product->reviews_avg_rating ? doubleval($product->reviews_avg_rating) : 0 }}
                                        ({{ $product->total_sell ? moneyFormat($product->total_sell) ?? 0 : 0 }}
                                        Terjual)</span>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-9 text-start text-sm-end"><a class="mr-20"
                                    href="{{ route('buyer.wishlist') }}"><span
                                        class="btn btn-wishlist mr-5 opacity-100 transform-none"></span><span
                                        class="font-md color-gray-900">Tambahkan ke Wishlist</span></a>
                            </div>
                        </div>
                        <div class="border-bottom pt-10 mb-20"></div>
                        <div class="box-product-price">
                            <h3 class="color-brand-3 price-main d-inline-block mr-10">
                                {{ $product->price > 0 ? numbFormat($product->price) : 'Rp 0' }}</h3>
                            {{-- <span
                                class="color-gray-500 price-line font-xl line-througt">$3225.6</span> --}}
                        </div>
                        {{-- <div class="product-description mt-20 color-gray-900">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <ul class="list-dot">
                                        <li>8k super steady video</li>
                                        <li>Nightography plus portait mode</li>
                                        <li>50mp photo resolution plus bright display</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <ul class="list-dot">
                                        <li>Adaptive color contrast</li>
                                        <li>premium design & craftmanship</li>
                                        <li>Long lasting battery plus fast charging</li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                        <div class="box-product-color mt-20">
                            <p class="font-sm color-gray-900">Color:<span class="color-brand-2 nameColor">Pink Gold</span>
                            </p>
                            <ul class="list-colors">
                                <li class="disabled"><img src="{{ asset('ecom/imgs/page/product/img-gallery-1.jpg') }}"
                                        alt="Ecom" title="Pink"></li>
                                <li><img src="{{ asset('ecom/imgs/page/product/img-gallery-2.jpg') }}" alt="Ecom"
                                        title="Gold">
                                </li>
                                <li><img src="{{ asset('ecom/imgs/page/product/img-gallery-3.jpg') }}" alt="Ecom"
                                        title="Pink Gold"></li>
                                <li><img src="{{ asset('ecom/imgs/page/product/img-gallery-4.jpg') }}" alt="Ecom"
                                        title="Silver">
                                </li>
                                <li class="active"><img src="{{ asset('ecom/imgs/page/product/img-gallery-5.jpg') }}"
                                        alt="Ecom" title="Pink Gold"></li>
                                <li class="disabled"><img src="{{ asset('ecom/imgs/page/product/img-gallery-6.jpg') }}"
                                        alt="Ecom" title="Black"></li>
                                <li class="disabled"><img src="{{ asset('ecom/imgs/page/product/img-gallery-7.jpg') }}"
                                        alt="Ecom" title="Red"></li>
                            </ul>
                        </div>
                        <div class="box-product-style-size mt-20">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 mb-20">
                                    <p class="font-sm color-gray-900">Style:<span
                                            class="color-brand-2 nameStyle">S22</span></p>
                                    <ul class="list-styles">
                                        <li class="disabled" title="S22 Ultra">S22 Ultra</li>
                                        <li class="active" title="S22">S22</li>
                                        <li title="S22 + Standing Cover">S22 + Standing Cover</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-20">
                                    <p class="font-sm color-gray-900">Size:<span
                                            class="color-brand-2 nameSize">512GB</span></p>
                                    <ul class="list-sizes">
                                        <li class="disabled" title="1GB">1GB</li>
                                        <li class="active" title="512 GB">512 GB</li>
                                        <li title="256 GB">256 GB</li>
                                        <li title="128 GB">128 GB</li>
                                        <li class="disabled" title="64GB">64GB</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="buy-product mt-30">
                            <div class="d-flex flex-row gap-sm-4 gap-2">
                                <div class="">

                                    <p class="font-sm mb-20 w-full">Kuantitas</p>
                                    <div class="box-quantity">
                                        <div class="input-quantity">
                                            @if ($product->stock > 0)
                                                <input class="font-xl color-brand-3"
                                                    onkeypress="return event.charCode>=48&&event.charCode<=57"
                                                    type="tel" name="quantity" min="1" value="1">
                                                <span class="minus-cart"></span>
                                                <span class="plus-cart"></span>
                                            @else
                                                <input class="font-xl color-brand-3"
                                                    onkeypress="return event.charCode>=48&&event.charCode<=57"
                                                    type="tel" name="quantity" disabled value="1"><span
                                                    class="minus-cart2"></span><span class="plus-cart2"></span>
                                            @endif
                                        </div>

                                    </div>
                                </div>
                                <div class="">
                                    <p class="font-sm mb-20  w-full">Stok</p>
                                    <div class="box-quantity">
                                        <p class="font-lg color-brand-3">
                                            {{ $product->stock . ' barang' ?? 'Stok Kosong' }}</p>

                                    </div>
                                </div>

                            </div>
                            <div class="button-buy mt-20 gap-2 gap-sm-5 d-flex flex-row">
                                <button class="btn btn-cart">Keranjang</button>
                                <button class="btn btn-buy">Beli Sekarang</button>
                            </div>
                        </div>
                        {{-- <div class="info-product mt-40">
                            <div class="row align-items-end">
                                <div class="col-lg-4 col-md-4 mb-20"><span
                                        class="font-sm font-medium color-gray-900">SKU:<span
                                            class="color-gray-500">iphone12pro128</span><br>Category:<span
                                            class="color-gray-500">Smartphones</span><br>Tags:<span
                                            class="color-gray-500">Blue, Smartphone</span></span></div>
                                <div class="col-lg-4 col-md-4 mb-20"><span class="font-sm font-medium color-gray-900">Free
                                        Delivery<br><span class="color-gray-500">Available for all
                                            locations.</span><br><span class="color-gray-500">Delivery Options &
                                            Info</span></span></div>
                                <div class="col-lg-4 col-md-4 mb-20 text-start text-md-end">
                                    <div class="d-inline-block">
                                        <div class="share-link"><span
                                                class="font-md-bold color-brand-3 mr-15">Share</span><a
                                                class="facebook hover-up" href="#"></a><a class="printest hover-up"
                                                href="#"></a><a class="twitter hover-up" href="#"></a><a
                                                class="instagram hover-up" href="#"></a></div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
        <section class="section-box shop-template">
            <div class="container">
                <div class="mb-10">
                    <ul class="nav nav-tabs nav-tabs-product" role="tablist">
                        <li><a class="active" href="#tab-description" data-bs-toggle="tab" role="tab"
                                aria-controls="tab-description" aria-selected="true">Deskripsi</a></li>
                        <li><a href="#tab-additional" data-bs-toggle="tab" role="tab" aria-controls="tab-additional"
                                aria-selected="true">Informasi tambahan</a></li>
                        <li><a href="#tab-reviews" data-bs-toggle="tab" role="tab" aria-controls="tab-reviews"
                                aria-selected="true">Ulasan ({{ $data['reviews']->total() ?? 0 }})</a></li>
                        @auth
                            <li><a href="#tab-create-reviews" data-bs-toggle="tab" role="tab"
                                    aria-controls="tab-create-reviews" aria-selected="true">Tulis Ulasan</a></li>
                        @endauth
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="tab-description" role="tabpanel"
                            aria-labelledby="tab-description">
                            <div class="display-text-short">
                                {!! $product->description !!}
                                {{-- <p><img src="{{ asset('ecom/imgs/page/product/product-banner.jpg') }}" alt="Ecom">
                                </p>
                                <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                                    Even the all-powerful Pointing has no control about the blind texts it is an almost
                                    unorthographic life One day however a small line of blind text by the name of Lorem
                                    Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do
                                    so, because there were thousands of bad Commas, wild Question Marks and devious
                                    Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put
                                    her initial into the belt and made herself on the way.</p>
                                <p><img src="{{ asset('ecom/imgs/page/product/product-banner-2.jpg') }}" alt="Ecom">
                                </p>
                                <p>When she reached the first hills of the Italic Mountains, she had a last view back on the
                                    skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline
                                    of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she
                                    continued her way. On her way she met a copy. The copy warned the Little Blind Text,
                                    that where it came from it would have been rewritten a thousand times and everything
                                    that was left from its origin would be the word “and” and the Little Blind Text should
                                    turn around and return to its own, safe country.</p> --}}
                            </div>
                            {{-- <div class="mt-20 text-center"><a
                                    class="btn btn-border font-sm-bold pl-80 pr-80 btn-expand-more">More Details</a></div> --}}
                        </div>
                        <div class="tab-pane fade" id="tab-additional" role="tabpanel" aria-labelledby="tab-additional">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>Nama</td>
                                            <td>
                                                <p class="line-2 text-start" style="overflow-wrap: break-word;">
                                                    {{ $product->name ?? '' }}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kategori</td>
                                            <td>
                                                <p>{{ $product->category ? $product->category->name ?? '' : '' }}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Stok</td>
                                            <td>
                                                <p>{{ $product->stock ?? Habis }}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Satuan</td>
                                            <td>
                                                <p>{{ $product->unit ?? '' }}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Diskon</td>
                                            <td>
                                                <p>{{ $product->discount ?? '-' }}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Harga</td>
                                            <td>
                                                <p>{{ $product->price > 0 ? numbFormat($product->price) : 'Rp 0' }}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Berat barang</td>
                                            <td>
                                                <p>1 kg</p>
                                                {{-- <p>{{ $product->weight ?? '-' }}</p> --}}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-reviews" role="tabpanel" aria-labelledby="tab-reviews">
                            <div class="comments-area">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="comment-list">
                                            @if (count($data['reviews']) > 0)
                                                @foreach ($data['reviews'] as $review)
                                                    <div
                                                        class="single-comment w-100 justify-content-between d-flex hover-up">
                                                        <div class="user w-100 d-flex">
                                                            <div class="thumb text-center"><img width="80px"
                                                                    height="80px"
                                                                    src="{{ $review->user ? $review->user->image ?? asset('ecom/imgs/users.svg') : asset('ecom/imgs/users.svg') }}"
                                                                    alt="ulasan dari {{ $review->user->name }}">
                                                                <p class="font-heading text-brand">
                                                                    {{ $review->user ? $review->user->name ?? '' : '' }}
                                                                </p>
                                                            </div>
                                                            <div class="desc w-100">
                                                                <div
                                                                    class="d-sm-flex d-block justify-content-between mb-10">
                                                                    <div class="d-flex align-items-center"><span
                                                                            class="font-xs color-gray-700">{{ $review->date }}</span>
                                                                    </div>
                                                                    <div class="product-rate d-inline-block">
                                                                        @if ($review->rating)
                                                                            @if ($review->rating == 1)
                                                                                <div class="product-rating"
                                                                                    style="width: 20%">
                                                                                </div>
                                                                            @elseif($review->rating == 2)
                                                                                <div class="product-rating"
                                                                                    style="width: 40%">
                                                                                </div>
                                                                            @elseif($review->rating == 3)
                                                                                <div class="product-rating"
                                                                                    style="width: 60%">
                                                                                </div>
                                                                            @elseif($review->rating == 4)
                                                                                <div class="product-rating"
                                                                                    style="width: 80%">
                                                                                </div>
                                                                            @elseif($review->rating == 5)
                                                                                <div class="product-rating"
                                                                                    style="width: 100%">
                                                                                </div>
                                                                            @else
                                                                            @endif
                                                                        @else
                                                                            <div class="product-rating" style="width: 0%">
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <p class="mb-10 font-sm color-gray-900">
                                                                    {!! $review->text ?? '' !!}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="col-lg-12 text-center mt-40">
                                                    <h4>Tidak ada ulasan saat ini</h4>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    {{-- <div class="col-lg-4">
                                        <h4 class="mb-30 title-question">Customer reviews</h4>
                                        <div class="d-flex mb-30">
                                            <div class="product-rate d-inline-block mr-15">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <h6>4.8 out of 5</h6>
                                        </div>
                                        <div class="progress"><span>5 star</span>
                                            <div class="progress-bar" role="progressbar" style="width: 50%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                        </div>
                                        <div class="progress"><span>4 star</span>
                                            <div class="progress-bar" role="progressbar" style="width: 25%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                        </div>
                                        <div class="progress"><span>3 star</span>
                                            <div class="progress-bar" role="progressbar" style="width: 45%"
                                                aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
                                        </div>
                                        <div class="progress"><span>2 star</span>
                                            <div class="progress-bar" role="progressbar" style="width: 65%"
                                                aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                                        </div>
                                        <div class="progress mb-30"><span>1 star</span>
                                            <div class="progress-bar" role="progressbar" style="width: 85%"
                                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                                        </div><a class="font-xs text-muted" href="#">How are ratings calculated?</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        @auth
                            <div class="tab-pane fade" id="tab-create-reviews" role="tabpanel"
                                aria-labelledby="tab-create-reviews">
                                <div class="comments-area">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <form class="form-comment" action="{{ route('buyer.addReview') }}"
                                                method="POST">
                                                @csrf
                                                <div class="row">
                                                    <input type="hidden" name="order_id" value="1">
                                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                    <input type="hidden" name="product_slug" value="{{ $product->slug }}">
                                                    <p class="font-lg mb-2">Rating barang ini menurut kamu</p>
                                                    <div class="stars">
                                                        <input class="star star-5" id="star-5" type="radio"
                                                            name="rating" value="5" checked />
                                                        <label class="star star-5" for="star-5"></label>
                                                        <input class="star star-4" id="star-4" type="radio"
                                                            name="rating" value="4" />
                                                        <label class="star star-4" for="star-4"></label>
                                                        <input class="star star-3" id="star-3" type="radio"
                                                            name="rating" value="3" />
                                                        <label class="star star-3" for="star-3"></label>
                                                        <input class="star star-2" id="star-2" type="radio"
                                                            name="rating" value="2" />
                                                        <label class="star star-2" for="star-2"></label>
                                                        <input class="star star-1" id="star-1" type="radio"
                                                            name="rating" value="1" />
                                                        <label class="star star-1" for="star-1"></label>
                                                    </div>
                                                    <div class="col-lg-12 mt-4">
                                                        <div class="form-group">
                                                            <textarea class="form-control" placeholder="Tulis Ulasan" rows="5" name="text" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 mt-4">
                                                        <div class="form-group">
                                                            <label for="image" class="form-label">Gambar</label>
                                                            <input class="form-control" type="file" id="image"
                                                                name="image" accept="image/*">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <button class="btn btn-buy w-auto" type="submit">Kirim</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        {{-- <div class="col-lg-4">
                                    <h4 class="mb-30 title-question">Customer reviews</h4>
                                    <div class="d-flex mb-30">
                                        <div class="product-rate d-inline-block mr-15">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <h6>4.8 out of 5</h6>
                                    </div>
                                    <div class="progress"><span>5 star</span>
                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>
                                    <div class="progress"><span>4 star</span>
                                        <div class="progress-bar" role="progressbar" style="width: 25%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                    </div>
                                    <div class="progress"><span>3 star</span>
                                        <div class="progress-bar" role="progressbar" style="width: 45%"
                                            aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
                                    </div>
                                    <div class="progress"><span>2 star</span>
                                        <div class="progress-bar" role="progressbar" style="width: 65%"
                                            aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                                    </div>
                                    <div class="progress mb-30"><span>1 star</span>
                                        <div class="progress-bar" role="progressbar" style="width: 85%"
                                            aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                                    </div><a class="font-xs text-muted" href="#">How are ratings calculated?</a>
                                </div> --}}
                                    </div>
                                </div>
                            </div>
                        @endauth
                        <div class="border-bottom pt-30 mb-50"></div>
                        <h4 class="color-brand-3">Produk terkait</h4>
                        @if (count($data['related_products']) > 0)
                            <div class="list-products-5 mt-20">
                                @foreach ($data['related_products'] as $prd)
                                    @include('clients.buyer.components.list_product1')
                                @endforeach
                            </div>
                        @else
                            <div class="col-lg-12 text-center mt-40">
                                <h4>Tidak ada Produk terkait saat ini</h4>
                            </div>
                        @endif
                        <div class="border-bottom pt-20 mb-40"></div>
                        <h4 class="color-brand-3">Produk lainnya untukmu</h4>
                        @if (count($data['same_products']) > 0)
                            <div class="list-products-5 mt-20">
                                @foreach ($data['same_products'] as $prd)
                                    @include('clients.buyer.components.list_product1')
                                @endforeach
                            </div>
                        @else
                            <div class="col-lg-12 text-center mt-40">
                                <h4>Tidak ada Produk saat ini</h4>
                            </div>
                        @endif
                        {{-- <div class="border-bottom pt-20 mb-40"></div>
                        <h4 class="color-brand-3">Barang yang baru-baru ini dilihat</h4>
                        <div class="row mt-40">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card-grid-style-2 card-grid-none-border hover-up">
                                    <div class="image-box"><a href="{{ route('buyer.detailProduct',['slug'=>'sd']) }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp1.png') }}"
                                                alt="Ecom"></a>
                                    </div>
                                    <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a
                                            class="color-brand-3 font-xs-bold"
                                            href="{{ route('buyer.detailProduct',['slug'=>'sd']) }}">SAMSUNG
                                            Galaxy Tab A7 Lite, 8.7&quot; Tablet 32GB</a>
                                        <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                                        <div class="price-info mt-1"><strong
                                                class="font-md-bold color-brand-3 price-main">$2556.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>  --}}
                    </div>
                </div>
            </div>
        </section>
        @include('clients.buyer.layouts.benefit')
    </main>

@endsection
@push('css')
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <style>
        .stars {
            padding: 0 20px;
            width: 100%;
            display: inline-block;
        }

        input.star {
            display: none;
        }

        label.star {
            float: right;
            padding: 10px;
            font-size: 36px;
            color: #444;
            transition: all .2s;
        }

        input.star:checked~label.star:before {
            content: '\f005';
            color: #FD4;
            transition: all .25s;
        }

        input.star-5:checked~label.star:before {
            color: #FE7;
            text-shadow: 0 0 20px #952;
        }

        input.star-1:checked~label.star:before {
            color: #F62;
        }

        label.star:hover {
            transform: rotate(-15deg) scale(1.3);
        }

        label.star:before {
            content: '\f006';
            font-family: FontAwesome;
        }
    </style>
@endpush
@push('importjs')
    <script type="text/javascript">
        setTimeout(function() {
            $('#mydiv').fadeOut('fast');
        }, 2000);
        $(document).ready(function() {
            $('.btn-cart').on('click', function() {
                // {{ route('buyer.cart') }}
            })
            $('.btn-buy').on('click', function() {
                // {{ route('buyer.checkout') }}
            })


            $('.input-quantity input').on('input', function() {
                var inputValue = $(this).val();
                var numericValue = parseInt(inputValue);

                if (numericValue < 1 || isNaN(numericValue)) {
                    $('.btn-cart').prop('disabled', true);
                    $('.btn-buy').prop('disabled', true);
                } else {
                    $('.btn-cart').prop('disabled', false);
                    $('.btn-buy').prop('disabled', false);
                }
                if (numericValue === 0) {
                    $('#myDiv2').css('display', 'block');
                    setTimeout(function() {
                        $('#myDiv2').fadeOut('fast');
                    }, 2000);
                }
            });
        });
    </script>
@endpush
