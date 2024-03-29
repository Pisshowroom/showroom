@extends('clients.buyer.master')
@section('title', 'Detail Produk')

@section('childs')
    <main class="main">
        <div class="section-box">
            <div class="breadcrumbs-div">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a class="font-xs color-gray-1000"
                                href="{{ route('buyer.home') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Beranda</a>
                        </li>
                        <li><a class="font-xs color-gray-1000"
                                href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Semua
                                Produk</a>
                        </li>
                        <li><a class="font-xs color-gray-500"
                                href="{{ route('buyer.detailProduct', ['slug' => $product->slug]) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">Detail
                                Produk</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div style="display:none" class="alert alert-warning" id="myDiv2">
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
                                    @if ($product->discount && $product->discount > 0)
                                        <label class="label">{{ $product->discount ?? '' }}%</label>
                                    @endif


                                    <div class="product-image-slider">
                                        @if ($product && $product->images && count($product->images) > 0)
                                            @foreach ($product->images as $item)
                                                <figure class="border-radius-10"><img
                                                        src="{{ $item ?? asset('ecom/imgs/page/product/img-gallery-1.jpg') }}"
                                                        alt="produk {{ $product->name ?? '' }}">
                                                </figure>
                                            @endforeach
                                        @else
                                            <figure class="border-radius-10"><img
                                                    src="{{ asset('ecom/imgs/page/product/img-gallery-1.jpg') }}"
                                                    alt="produk {{ $product->name ?? '' }}">
                                            </figure>
                                        @endif
                                        @if ($product && $product->variants && count($product->variants) > 0)
                                            @foreach ($product->variants as $images)
                                                @if ($images && $images->images && is_array($images->images) && count($images->images) > 0)
                                                    @foreach ($images->images as $item)
                                                        @if (is_object($item))
                                                        @else
                                                            <figure class="border-radius-10"><img
                                                                    src="{{ $item ?? asset('ecom/imgs/page/product/img-gallery-1.jpg') }}"
                                                                    alt="produk {{ $images->name ?? '' }}">
                                                            </figure>
                                                        @endif
                                                    @endforeach
                                                @elseif ($images && $images->images && is_string($images->images) && $images->images != null)
                                                    <figure class="border-radius-10"><img
                                                            src="{{ $images->images ?? asset('ecom/imgs/page/product/img-gallery-1.jpg') }}"
                                                            alt="produk {{ $images->name ?? '' }}">
                                                    </figure>
                                                @endif
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div class="slider-nav-thumbnails">
                                    @if ($product && $product->images && count($product->images) > 0)
                                        @foreach ($product->images as $item)
                                            <div>
                                                <div class="item-thumb"><img
                                                        src="{{ $item ?? asset('ecom/imgs/page/product/img-gallery-1.jpg') }}"
                                                        alt="produk {{ $product->name ?? '' }}"></div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div>
                                            <div class="item-thumb"><img
                                                    src="{{ asset('ecom/imgs/page/product/img-gallery-1.jpg') }}"
                                                    alt="produk {{ $product->name ?? '' }}">
                                            </div>
                                        </div>
                                    @endif
                                    @if ($product && $product->variants && count($product->variants) > 0)
                                        @foreach ($product->variants as $images)
                                            @if ($images && $images->images && is_array($images->images) && count($images->images) > 0)
                                                @foreach ($images->images as $item)
                                                    @if (is_object($item))
                                                    @else
                                                        <div>
                                                            <div class="item-thumb"><img
                                                                    src="{{ $item ?? asset('ecom/imgs/page/product/img-gallery-1.jpg') }}"
                                                                    alt="produk {{ $product->name ?? '' }}">
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @elseif ($images && $images->images && is_string($images->images) && $images->images != null)
                                                <div>
                                                    <div class="item-thumb"><img
                                                            src="{{ $images->images ?? asset('ecom/imgs/page/product/img-gallery-1.jpg') }}"
                                                            alt="produk {{ $product->name ?? '' }}">
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h3 class="color-brand-3 mb-25 line-2 text-start" style="overflow-wrap: break-word;">
                            {{ $product->name ?? '' }}</h3>
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-md-4 col-sm-3 mb-mobile">
                                @if ($product?->seller && $product?->seller?->seller_slug)
                                    <a class="byAUthor color-gray-900 font-xs font-medium"
                                        href="{{ route('buyer.detailSeller', ['slug' => $product?->seller?->seller_slug]) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                        {{ $product->seller ? $product->seller->seller_name ?? '-' : '-' }}</a>
                                @else
                                    <p class="byAUthor color-gray-900 font-xs font-medium">-</p>
                                @endif
                                <div class="rating mt-5"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="rating {{ $product->name ?? '' }}">
                                    <span class="font-xs color-gray-500 font-medium">
                                        {{ $product->reviews_avg_rating ? doubleval($product->reviews_avg_rating) : 0 }}
                                        ({{ $product->reviews_count ? moneyFormat($product->reviews_count) ?? 0 : 0 }}
                                        ulasan)</span>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-9 text-start text-sm-end">
                                @if (Auth::guard('web')->user())
                                    @if ($product->is_wishlisted == false)
                                        <button class="mr-20 bg-transparent" style="border: none !important;"
                                            onclick="addWishlist('{{ $product->id }}','{{ $product->stock }}')">
                                            <span class="btn btn-wishlist mr-5 opacity-100 transform-none"></span>
                                            <span class="font-md color-gray-900">Tambahkan ke
                                                Wishlist</span></button>
                                    @else
                                        <a class="mr-20"
                                            href="{{ route('buyer.wishlist') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                                            <span class="btn btn-wishlist mr-5 opacity-100 transform-none"></span><span
                                                class="font-md color-gray-900">Lihat Wishlist</span></a>
                                    @endif
                                @else
                                    <a class="mr-20" href="{{ route('buyer.login') }}">
                                        <span class="btn btn-wishlist mr-5 opacity-100 transform-none"></span><span
                                            class="font-md color-gray-900">Tambahkan ke Wishlist</span></a>
                                @endif
                            </div>
                        </div>
                        <div class="border-bottom pt-10 mb-20"></div>
                        <div class="box-product-price">
                            @if (isset($product->price_discount) && $product->price_discount > 0)
                                <h3 class="color-brand-3 price-main d-inline-block mr-10">
                                    {{ $product->price_discount > 0 ? numbFormat($product->price_discount) : 'Rp 0' }}</h3>
                            @else
                                <h3 class="color-brand-3 price-main d-inline-block mr-10">
                                    {{ $product->price > 0 ? numbFormat($product->price) : 'Rp 0' }}</h3>
                            @endif
                            @if (isset($product->price_discount) && $product->price_discount > 0)
                                <span class="color-gray-500 price-line font-xl line-througt">
                                    {{ $product->price > 0 ? numbFormat($product->price) : 'Rp 0' }}
                                </span>
                            @endif
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
                            <p class="font-sm color-gray-900">Varian:
                                @if (
                                    $product &&
                                        $product->variants &&
                                        count($product->variants) > 0 &&
                                        $product->variants[0]?->images &&
                                        $product->variants[0]?->images[0]
                                )
                                    <span class="color-brand-2 nameColor">{{ $product->variants[0]?->name ?? '' }}</span>
                                @else
                                    <span class="color-brand-2 nameColor">Default</span>
                                @endif
                            </p>
                            <ul class="list-colors">
                                @if ($product && $product->variants && count($product->variants) > 0)
                                    @foreach ($product->variants as $kry => $images)
                                        @if ($images->stock && $images->stock > 0)
                                            @if ($images && $images->images && is_array($images->images) && count($images->images) > 0)
                                                @foreach ($images->images as $ks => $item)
                                                    @if (is_object($item))
                                                    @else
                                                        <li class="{{ $kry == 0 ? 'active' : '' }}"
                                                            style="max-width: 100px !important">
                                                            <img title="{{ $images->name ?? '' }}"
                                                                src="{{ $item ?? asset('ecom/imgs/page/product/img-gallery-1.jpg') }}"
                                                                alt="produk {{ $images->name ?? '' }}">
                                                            <input type="hidden" class="id"
                                                                value="{{ $images->id }}">
                                                            <input type="hidden" class="name"
                                                                value="{{ $images->name }}">
                                                            <input type="hidden" class="stock"
                                                                value="{{ $images->stock }}">

                                                        </li>
                                                    @endif
                                                @endforeach
                                            @elseif ($images && $images->images && is_string($images->images) && $images->images != null)
                                                <li class="{{ $kry == 0 ? 'active' : '' }}"
                                                    style="max-width: 100px !important">
                                                    <img title="{{ $images->name ?? '' }}"
                                                        src="{{ $images->images ?? asset('ecom/imgs/page/product/img-gallery-1.jpg') }}"
                                                        alt="produk {{ $images->name ?? '' }}">
                                                    <input type="hidden" class="id" value="{{ $images->id }}">
                                                    <input type="hidden" class="name" value="{{ $images->name }}">
                                                    <input type="hidden" class="stock" value="{{ $images->stock }}">

                                                </li>
                                            @endif
                                        @endif
                                    @endforeach
                                @elseif (
                                    $product &&
                                        $product->images &&
                                        count($product->images) > 0 &&
                                        (!$product->variants || count($product->variants) == 0))
                                    <li class="active" style="max-width: 100px !important"><img title="Default"
                                            src="{{ $product->images[0] ?? asset('ecom/imgs/page/product/img-gallery-1.jpg') }}"
                                            alt="produk {{ $product->name ?? '' }}">
                                        <input type="hidden" class="id" value="{{ $product->id }}">
                                        <input type="hidden" class="name" value="{{ $product->name }}">
                                        <input type="hidden" class="stock" value="{{ $product->stock }}">
                                    </li>
                                @else
                                    <li class="active" style="max-width: 100px !important"><img title="Default"
                                            src="{{ asset('ecom/imgs/page/product/img-gallery-7.jpg') }}"
                                            alt="produk {{ $product->name ?? '' }}">
                                        <input type="hidden" class="id" value="{{ $product->id }}">
                                        <input type="hidden" class="name" value="{{ $product->name }}">
                                        <input type="hidden" class="stock" value="{{ $product->stock }}">
                                    </li>
                                @endif
                            </ul>
                        </div>
                        {{-- <div class="box-product-style-size mt-20">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 mb-20">
                                    <p class="font-sm color-gray-900">Style:<span class="color-brand-2 nameStyle">S22</span>
                                    </p>
                                    <ul class="list-styles">
                                        <li class="disabled" title="S22 Ultra">S22 Ultra</li>
                                        <li class="active" title="S22">S22</li>
                                        <li title="S22 + Standing Cover">S22 + Standing Cover</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-20">
                                    <p class="font-sm color-gray-900">Size:<span class="color-brand-2 nameSize">512GB</span>
                                    </p>
                                    <ul class="list-sizes">
                                        <li class="disabled" title="1GB">1GB</li>
                                        <li class="active" title="512 GB">512 GB</li>
                                        <li title="256 GB">256 GB</li>
                                        <li title="128 GB">128 GB</li>
                                        <li class="disabled" title="64GB">64GB</li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                        <div class="buy-product mt-30">
                            <div class="d-flex flex-row gap-sm-4 gap-2">
                                <div class="">

                                    <p class="font-sm mb-20 w-full">Kuantitas</p>
                                    <div class="box-quantity">
                                        <div class="input-quantity">
                                            @if ($product->stock > 0)
                                                <input class="font-xl color-brand-3" id="quantity"
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
                                        <p class="font-lg color-brand-3 stock">
                                            {{ $product->stock . ' barang' ?? 'Stok Kosong' }}</p>
                                    </div>
                                </div>

                            </div>
                            <div class="button-buy mt-20 gap-2 gap-sm-5 d-flex flex-row">
                                @if (Auth::guard('web')->user() && Auth::guard('web')->user()->id)
                                    <button class="btn btn-cart btn-cart-detail" id="btn-cart"
                                        {{ Auth::guard('web')->user() && Auth::guard('web')->user()->id == $product->seller_id ? 'disabled' : '' }}>Keranjang</button>
                                    <button class="btn btn-buy btn-buy-detail" id="buy-now"
                                        {{ Auth::guard('web')->user() && Auth::guard('web')->user()->id == $product->seller_id ? 'disabled' : '' }}>Beli
                                        Sekarang</button>
                                @else
                                    <a href="{{ route('buyer.login') }}" class="btn btn-cart">Keranjang</a>
                                    <a href="{{ route('buyer.login') }}" class="btn btn-buy">Beli Sekarang</a>
                                @endif
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
                        @if ($product->review_user == 1 && $product->order_user == 1)
                            <li><a href="#tab-create-reviews" data-bs-toggle="tab" role="tab"
                                    aria-controls="tab-create-reviews" aria-selected="true">Tulis Ulasan</a></li>
                        @endif
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="tab-description" role="tabpanel"
                            aria-labelledby="tab-description">
                            <div class="display-text-short">
                                {{ $product->description ?? '' }}
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
                                                <p class="line-1 text-start" style="word-break: break-word;">
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
                                                <p>{{ $product->discount && $product->discount > 0 ? $product->discount . '%' : '-' }}
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Harga</td>
                                            <td>
                                                <p>{{ $product->price > 0 ? numbFormat($product->price) : 'Rp 0' }}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Harga setelah diskon</td>
                                            <td>
                                                <p>{{ $product->price_discount > 0 ? numbFormat($product->price_discount) : '-' }}
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Berat barang</td>
                                            <td>
                                                <p>{{ $product->weight && $product->weight > 0 ? convertWeight($product->weight) . ' kg' : '-' }}
                                                </p>
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
                                                                    src="{{ $review->user && $review->user->image ? $review->user->image ?? asset('ecom/imgs/users.svg') : asset('ecom/imgs/users.svg') }}"
                                                                    alt="ulasan dari {{ $review->user->name ?? '' }}">
                                                                <p class="font-heading text-brand line-2"
                                                                    style="word-break: break-word">
                                                                    {{ substr($review?->user?->name ?? '', 0, 15) . (strlen($review?->user?->name ?? '') > 15 ? '..' : '') }}
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
                                                                <div class="preview-container">
                                                                    @if ($review != null && $review->images && count($review->images) > 0)
                                                                        @foreach ($review->images as $k => $image)
                                                                            @if ($k < 2)
                                                                                <a class="preview-item"
                                                                                    href="{{ $image }}"
                                                                                    target="_blank">
                                                                                    <img src="{{ asset($image) }}"
                                                                                        alt="ulasan {{ $review?->user?->name ?? '' }}">
                                                                                </a>
                                                                            @endif
                                                                        @endforeach
                                                                    @endif
                                                                </div>
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
                        @if ($product->review_user == 1 && $product->order_user == 1)
                            <div class="tab-pane fade" id="tab-create-reviews" role="tabpanel"
                                aria-labelledby="tab-create-reviews">
                                <div class="comments-area">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <form class="form-comment" id="addReview" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    @if (isset($product->order_id) && $product->order_id != 0)
                                                        <input type="hidden" name="order_id" id="order_id"
                                                            value="{{ $product->order_id }}">
                                                    @endif
                                                    <input type="hidden" id="product_id" name="product_id"
                                                        value="{{ $product->id }}">
                                                    <input type="hidden" id="product_slug" name="product_slug"
                                                        value="{{ $product->slug }}">
                                                    <p class="font-lg mb-2">Rating barang ini menurut kamu*</p>
                                                    <div class="stars">
                                                        <input class="star star-5 tngs" id="star-5" type="radio"
                                                            name="rating" value="5" checked />
                                                        <label class="star star-5" for="star-5"></label>
                                                        <input class="star star-4 tngs" id="star-4" type="radio"
                                                            name="rating" value="4" />
                                                        <label class="star star-4" for="star-4"></label>
                                                        <input class="star star-3 tngs" id="star-3" type="radio"
                                                            name="rating" value="3" />
                                                        <label class="star star-3" for="star-3"></label>
                                                        <input class="star star-2 tngs" id="star-2" type="radio"
                                                            name="rating" value="2" />
                                                        <label class="star star-2" for="star-2"></label>
                                                        <input class="star star-1 tngs" id="star-1" type="radio"
                                                            name="rating" value="1" />
                                                        <label class="star star-1" for="star-1"></label>
                                                    </div>
                                                    <div class="col-lg-12 mt-4">
                                                        <div class="form-group">
                                                            <textarea class="form-control" placeholder="Tulis Ulasan*" id="text" rows="5" name="text" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 mt-4">
                                                        <div class="form-group">
                                                            <label for="image" class="form-label">Gambar</label>
                                                            <input class="form-control" type="file" id="image"
                                                                name="image[]" accept="image/*" multiple>
                                                        </div>
                                                        <div class="preview-container" id="imagePreviewContainer">
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <button class="btn btn-buy w-auto" id="btn-addReview"
                                                                type="submit">Kirim</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
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
                        <div class="border-bottom pt-20 mb-40"></div>
                        <h4 class="color-brand-3">Barang yang baru-baru ini dilihat</h4>
                        <div class="row mt-40">
                            @foreach ($data['best_seller_product'] as $prd)
                                <div class="col-xl-4 col-md-6 col-sm-12">
                                    @include('clients.buyer.components.list_product3')
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="mt-20">
            <div class="text-center">
                <a
                    href="{{ route('buyer.allGridProduct') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"><img
                        src="{{ $data['ads'] && $data['ads']->image ? $data['ads']->image : asset('ecom/imgs/page/product/banner-ads.png') }}" alt="banner produk">
                </a>
            </div>
        </div>

        @include('clients.buyer.layouts.benefit')
    </main>

@endsection
@push('css')
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <style>
        .preview-container {
            display: flex;
            flex-wrap: wrap;
            margin-top: 10px;
        }

        .preview-item {
            position: relative;
            margin-right: 10px;
            margin-bottom: 10px;
        }

        .preview-item img {
            width: 100px;
            height: 100px;
            object-fit: contain;
            border: 1px solid #ccc;
        }

        .remove-btn {
            position: absolute;
            top: 0;
            right: 0;
            cursor: pointer;
            background-color: white;
            border: none;
            padding: 0;
        }

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
            $('.list-colors li').each(function() {
                $(this).on('click', function(e) {
                    e.preventDefault();
                    if ($(this).hasClass('active')) {
                        var stock = $(this).find('.stock').val();
                        $('.box-quantity').find('p.stock').text(stock + ' barang');
                        $('.box-quantity').find('input#quantity').val(1);
                    }
                });
            })
            $('#image').on('change', function(e) {
                var files = e.target.files;

                // Display new previews
                for (var i = 0; i < files.length; i++) {
                    displayImagePreview(files[i]);
                }
            });
            $(document).on('click', '.remove-btn', function() {
                var removedIndex = $(this).parent().index();
                $(this).parent().remove();
                var imageArray = [];

                // Remove the corresponding array item
                if (removedIndex !== -1) {
                    // Assuming you have an array called imageArray
                    imageArray.splice(removedIndex, 1);
                }
            });

            function readAsDataURLAsync(file) {
                return new Promise((resolve, reject) => {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        resolve(e.target.result);
                    };

                    reader.onerror = function(e) {
                        reject(e);
                    };

                    reader.readAsDataURL(file);
                });
            }

            function displayImagePreview(file) {
                readAsDataURLAsync(file)
                    .then(dataURL => {
                        var previewItem = $(
                            '<div class="preview-item"><img src="' + dataURL +
                            '" alt="Image Preview">' +
                            '<button class="remove-btn" style="background:white !important;" type="button"><i class="fa fa-trash text-danger" aria-hidden="true"></i></button></div>'
                        );

                        var imageArray = [];

                        $('#imagePreviewContainer').append(previewItem);
                        // Assuming you have an array called imageArray
                        imageArray.push(file);

                        // Bind the click event handler to the remove button in the context of the button
                        previewItem.find('.remove-btn').on('click', function() {
                            var removedIndex = $(this).parent().index();
                            $(this).parent().remove();

                            // Remove the corresponding array item
                            if (removedIndex !== -1) {
                                // Assuming you have an array called imageArray
                                imageArray.splice(removedIndex, 1);
                            }
                        });
                    })
                    .catch(error => {
                        console.error(error);
                    });
            }

            var inputValue2 = $('.input-quantity input').val();
            var numericValue2 = parseInt(inputValue2);
            if (numericValue2 < 1 || isNaN(numericValue2)) {
                $('.btn-cart-detail').prop('disabled', true);
                $('.btn-buy-detail').prop('disabled', true);
            } else {
                if ("{{ Auth::guard('web')->user() && Auth::guard('web')->user()->id != $product->seller_id }}") {
                    $('.btn-cart-detail').prop('disabled', false);
                    $('.btn-buy-detail').prop('disabled', false);
                }
            }
            $('.input-quantity input').on('input', function() {
                var inputValue = $(this).val();
                var numericValue = parseInt(inputValue);
                if (numericValue < 1 || isNaN(numericValue) || inputValue == '') {
                    $('.btn-cart-detail').prop('disabled', true);
                    $('.btn-buy-detail').prop('disabled', true);
                } else {
                    if (
                        "{{ Auth::guard('web')->user() && Auth::guard('web')->user()->id != $product->seller_id }}"
                    ) {
                        $('.btn-cart-detail').prop('disabled', false);
                        $('.btn-buy-detail').prop('disabled', false);
                    }
                }
                if (numericValue === 0) {
                    messageError('Minimal pembelian produk ini adalah 1 barang');
                }
            });

            $('#btn-cart').on('click', function(e) {
                e.preventDefault();
                var cart = localStorage.getItem('cart');

                var productData = @json($product);
                productData.product_id = productData.id;
                productData.note = "Tolong ini hati-hati bawanya";
                productData.qty = $('#quantity').val();
                // {
                //     product_id: "{{ $product->id ?? '' }}",
                //     seller_id: "{{ $product->seller_id ?? '' }}",
                //     name: "{{ $product->name ?? '' }}",
                //     image: "{{ $product->images[0] ?? null }}",
                //     note: "Tolong ini hati-hati bawanya ",
                //     qty: $('#quantity').val(),
                //     stock: "{{ $product->stock ?? '' }}",
                //     price: "{{ $product->price ?? '' }}",
                //     reviews_avg_rating: "{{ $product->reviews_avg_rating ?? '0' }}",
                //     total_sell: "{{ $product->total_sell ?? '0' }}",
                // };

                if (cart) {
                    var existingCart = JSON.parse(cart);

                    var existingProductIndex = existingCart.findIndex(function(item) {
                        return item.product_id === productData.product_id;
                    });
                    if (existingProductIndex !== -1) {
                        messageError('barang sudah ada di keranjang');
                        existingCart[existingProductIndex].qty = parseInt(existingCart[existingProductIndex]
                            .qty) + parseInt(productData.qty);
                    } else {
                        messageSuccess('berhasil menambahkan barang kedalam keranjang');
                        existingCart.push(productData);
                    }

                    localStorage.setItem('cart', JSON.stringify(existingCart));
                } else {
                    messageSuccess('berhasil menambahkan barang kedalam keranjang');
                    localStorage.setItem('cart', JSON.stringify([productData]));
                }
            });

            function addWishlist(productId, stock) {
                if (stock > 0) {
                    $('.loading').removeClass('d-none').addClass('show-modal');
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: "post",
                        url: "{{ route('buyer.addWishlist') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}",
                        data: {
                            id: productId
                        },
                        xhr: function() {
                            // get the native XmlHttpRequest object
                            var xhr = $.ajaxSettings.xhr()
                            // set the onprogress event handler
                            xhr.upload.onprogress = function(evt) {}
                            return xhr
                        },
                        success: function(response) {
                            messageSuccess(response.message);
                            $('.loading').removeClass('show-modal').addClass('d-none')
                        },

                        error: function(error) {
                            if (error && error.responseJSON && error
                                .responseJSON.message) {
                                messageError(error.responseJSON.message);
                            }
                            $('.loading').removeClass('show-modal').addClass('d-none')
                        }
                    });
                } else {
                    messageError('Stok produk tidak mencukupi.');
                }
            };


            $('#buy-now').on('click', function(e) {
                e.preventDefault();
                var th = $('.list-colors li.active');
                var stock = th.find('input.stock').val();
                var id = th.find('input.id').val();
                if (id && stock) {
                    if (parseInt(stock) > 0) {
                        if (parseInt(stock) >= parseInt($('#quantity').val())) {
                            $('.loading').removeClass('d-none').addClass('show-modal');
                            var productData = [{
                                product_id: id,
                                note: "Tolong ini hati-hati bawanya ",
                                qty: $('#quantity').val(),
                            }];
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
                            $.ajax({
                                type: "post",
                                url: "{{ route('buyer.preCheckEarly') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}",
                                data: {
                                    order_items: JSON.stringify(productData)
                                },
                                xhr: function() {
                                    // get the native XmlHttpRequest object
                                    var xhr = $.ajaxSettings.xhr()
                                    // set the onprogress event handler
                                    xhr.upload.onprogress = function(evt) {}
                                    return xhr
                                },
                                success: function(response) {
                                    if (response) {
                                        if ("{{ $data['addresses']->id ?? '' }}" == null) {
                                            messageError('Kamu belum menginput alamat');
                                            $('.loading').removeClass(
                                                    'show-modal')
                                                .addClass('d-none');

                                        } else {
                                            $.ajaxSetup({
                                                headers: {
                                                    'X-CSRF-TOKEN': $(
                                                            'meta[name="csrf-token"]')
                                                        .attr(
                                                            'content')
                                                }
                                            });
                                            $.ajax({
                                                type: "post",
                                                url: "{{ route('buyer.preCheck') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}",
                                                data: {
                                                    order_items: JSON.stringify(
                                                        productData),
                                                    seller_id: "{{ $product->seller_id ?? '' }}",
                                                    address_id: "{{ $data['addresses']->id ?? '' }}",
                                                },
                                                xhr: function() {
                                                    // get the native XmlHttpRequest object
                                                    var xhr = $.ajaxSettings.xhr()
                                                    // set the onprogress event handler
                                                    xhr.upload.onprogress =
                                                        function(
                                                            evt) {}
                                                    return xhr
                                                },
                                                success: function(response) {
                                                    if (response) {
                                                        if (response
                                                            .delivery_services_info &&
                                                            response
                                                            .delivery_services_info
                                                            .results && response
                                                            .delivery_services_info
                                                            .results
                                                            .length > 0) {
                                                            var results = response
                                                                .delivery_services_info
                                                                .results;
                                                            var filteredResults =
                                                                results
                                                                .filter(function(
                                                                    item) {
                                                                    return (
                                                                        item
                                                                        .costs
                                                                        .length >
                                                                        0 &&
                                                                        item
                                                                        .costs[
                                                                            0
                                                                        ]
                                                                        .cost
                                                                        .length >
                                                                        0 &&
                                                                        typeof item
                                                                        .costs[
                                                                            0
                                                                        ]
                                                                        .cost[
                                                                            0
                                                                        ]
                                                                        .value !==
                                                                        'undefined' &&
                                                                        typeof item
                                                                        .costs[
                                                                            0
                                                                        ]
                                                                        .cost[
                                                                            0
                                                                        ]
                                                                        .etd !==
                                                                        'undefined'
                                                                    );
                                                                });
                                                            if (filteredResults) {
                                                                localStorage
                                                                    .setItem(
                                                                        'seller_id',
                                                                        "{{ $product->seller_id ?? '' }}"
                                                                    );
                                                                localStorage
                                                                    .setItem(
                                                                        'checkout',
                                                                        JSON
                                                                        .stringify(
                                                                            response
                                                                        )
                                                                    );
                                                                window.location
                                                                    .replace(
                                                                        "{{ route('buyer.checkout') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"
                                                                    );
                                                            } else {
                                                                messageError(
                                                                    'Paket Pengiriman tidak tersedia'
                                                                );
                                                            }
                                                        } else {
                                                            messageError(
                                                                'Paket Pengiriman tidak tersedia'
                                                            );
                                                        }
                                                        $('.loading').removeClass(
                                                                'show-modal')
                                                            .addClass('d-none');
                                                    } else {
                                                        $('.loading').removeClass(
                                                                'show-modal')
                                                            .addClass('d-none');
                                                    }
                                                },

                                                error: function(error) {
                                                    if (error && error
                                                        .responseJSON &&
                                                        error
                                                        .responseJSON.message) {
                                                        messageError(
                                                            error
                                                            .responseJSON
                                                            .message
                                                        );
                                                    }
                                                    $('.loading').removeClass(
                                                            'show-modal')
                                                        .addClass('d-none');
                                                }
                                            });
                                        }

                                    } else {
                                        $('.loading').removeClass(
                                                'show-modal')
                                            .addClass('d-none');

                                    }
                                },
                                error: function(error) {
                                    $('.loading').removeClass('show-modal').addClass('d-none');
                                    if (error && error.responseJSON && error
                                        .responseJSON.message) {
                                        messageError(
                                            error
                                            .responseJSON.message
                                        );
                                    }

                                }
                            });
                        } else {
                            messageError('Pesananmu melebihi stok yang ada');
                        }
                    } else {
                        $('#myDivCheckout').css('display', 'block');
                        setTimeout(function() {
                            $('#myDivCheckout').fadeOut('fast');
                        }, 2000);
                    }
                }

            });

            $('#addReview').on('submit', function(e) {
                e.preventDefault();

                var product_slug = $('#product_slug').val();
                var product_id = $('#product_id').val();
                var text = $('#text').val();
                var rating = $('.tngs:checked').val();
                var dataToSend = new FormData($(this)[0]); // Use FormData to handle files
                // Append additional data to FormData
                dataToSend.append('text', text);
                dataToSend.append('product_id', product_id);
                dataToSend.append('product_slug', product_slug);
                dataToSend.append('rating', rating);
                if ("{{ isset($product->order_id) && $product->order_id != 0 }}") {
                    var order_id = $('#order_id').val();
                    dataToSend.append('order_id', order_id);
                }

                $.ajaxSetup({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    },
                });

                $('.loading').removeClass('d-none').addClass('show-modal');

                $.ajax({
                    type: "POST",
                    processData: false, // important
                    contentType: false, // important
                    url: "{{ route('buyer.addReview') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}",
                    data: dataToSend,
                    success: function(data) {
                        if (data.status == "success") {
                            messageSuccess(data.message);
                            location.reload(true);
                        } else {
                            messageError(data.message);
                        }
                    },
                    error: function(error) {
                        if (error && error.message)
                            messageError(error.message);
                        else
                            messageError('Gagal mengisi ulasan.');
                    },
                    complete: function() {
                        $('.loading').addClass('d-none').removeClass('show-modal');
                    }
                });
            });


            function messageSuccess(res) {
                $('#myDivHandleSuccess').text('');
                $('#myDivHandleSuccess').text(res);
                $('#myDivHandleSuccess').css('display',
                    'block');
                setTimeout(function() {
                    $('#myDivHandleSuccess')
                        .fadeOut(
                            'fast');
                }, 2000);
            }

            function messageError(res) {
                $('#myDivHandleError').text('');
                $('#myDivHandleError').text(res);
                $('#myDivHandleError').css('display',
                    'block');
                setTimeout(function() {
                    $('#myDivHandleError')
                        .fadeOut(
                            'fast');
                }, 2000);
            }


        });
    </script>
@endpush
