<div class="card-grid-style-3">
    <div class="card-grid-inner">
        <div class="tools">
            <a class="btn btn-wishlist btn-tooltip mb-10"
                href="{{ Auth::guard('web')->user() ? route('buyer.wishlist') : route('buyer.login') }}"
                aria-label="Tambahkan ke Wishlist"></a>
        </div>
        <div class="image-box">
            @if ($prd->discount && $prd->discount > 0)
                <span class="label bg-brand-2">{{ $prd->discount }}%</span>
            @endif,
            @auth
                <a href="{{ route('buyer.detailProduct', ['slug' => $prd->slug ?? 'sd']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
            @endauth
            @guest
                <a href="{{ route('buyer.detailProduct', ['slug' => $prd->slug ?? 'sd']) }}">
            @endguest
                <img src="{{ asset('ecom/imgs/page/homepage1/imgsp3.png') }}" alt="produk {{ $prd->name ?? '' }}"></a>
        </div>
        <div class="info-right">
            @if ($prd?->seller && $prd?->seller?->seller_slug)
                <a class="font-xs color-gray-500 line-1 text-start"
                    href="{{ route('buyer.detailSeller', ['slug' => $prd?->seller?->seller_slug]) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                    {{ $prd->seller ? $prd->seller->seller_name ?? '-' : '-' }}</a>
            @else
                <p class="font-xs color-gray-500 line-1 text-start">-</p>
            @endif
            <a class="color-brand-3 font-sm-bold line-2 text-start"
                href="{{ route('buyer.detailProduct', ['slug' => $prd->slug ?? 'sd']) }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}">
                <p class="text-start">{{ $prd->name ?? '' }}</p>
            </a>
            <div class="rating">
                <img src="{{ asset('ecom/imgs/template/icons/star.svg') }}" alt="rating produk {{ $prd->name ?? '' }}">
                <span
                    class="font-xs color-gray-500">{{ $prd->reviews_avg_rating ? doubleval($prd->reviews_avg_rating) : 0 }}
                    ({{ $prd->total_sell ? moneyFormat($prd->total_sell) ?? 0 : 0 }}
                    Terjual)</span>
            </div>
            <div class="price-info mt-1">
                @if (isset($prd->price_discount) && $prd->price_discount > 0)
                    <strong class="font-md-bold color-brand-3 price-main">
                        {{ $prd->price_discount > 0 ? numbFormat($prd->price_discount) : 'Rp 0' }}</strong>
                @else
                    <strong class="font-md-bold color-brand-3 price-main">
                        {{ $prd->price > 0 ? numbFormat($prd->price) : 'Rp 0' }}</strong>
                @endif
                @if (isset($prd->price_discount) && $prd->price_discount > 0)
                    <span class="color-gray-500 font-sm price-line">
                        {{ $prd->price > 0 ? numbFormat($prd->price) : 'Rp 0' }}
                    </span>
                @endif

            </div>
            <div class="price-info mt-0 d-flex flex-row gap-1 align-items-center">
                {!! file_get_contents('ecom/imgs/page/product/icon-location.svg') !!}
                <strong class="font-md color-gray-500 price-main">
                    Jakarta</strong>
            </div>
            <div class="mt-10 box-btn-cart">
                @if (Route::currentRouteName() && Route::currentRouteName() == 'buyer.home')
                @else
                    <button class="btn btn-cart checkout-{{ $prd->id }}"
                        {{ Auth::guard('web')->user() && Auth::guard('web')->user()->id == $prd->seller_id ? 'disabled' : '' }}
                        onclick="checkout('{{ $prd->id }}','{{ $prd->stock }}',{{ $prd->seller_id }})">Beli
                        Sekarang
                    </button>
                @endif

            </div>
        </div>
    </div>
</div>

@push('importjs')
    <script>
        $(document).ready(function() {
            $('.info-right').each(function() {
                var text = $(this).find('.color-brand-3.font-sm-bold p').text();

                // Menghapus spasi ekstra dan memeriksa jumlah baris
                if (text.trim().split(/\r\n|\r|\n/).length < 2) {
                    $(this).find('.color-brand-3.font-sm-bold p').css('height', '40px');
                }
            });

        });

        function checkout(productId, stock, sellerId) {
            if (stock > 0) {
                $('.loading').removeClass('d-none').addClass('show-modal');
                var productData = [{
                    product_id: productId,
                    note: "Tolong ini hati-hati bawanya ",
                    qty: 1,
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
                            $.ajax({
                                type: "post",
                                url: "{{ route('buyer.preCheck') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}",
                                data: {
                                    order_items: JSON.stringify(productData),
                                    seller_id: sellerId,
                                    address_id: "{{ $data['addresses']->id ?? '' }}",
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
                                        if (response.delivery_services_info && response
                                            .delivery_services_info.results && response
                                            .delivery_services_info.results.length > 0) {
                                            var results = response.delivery_services_info.results;
                                            var filteredResults = results.filter(function(item) {
                                                return (
                                                    item.costs.length > 0 &&
                                                    item.costs[0].cost.length > 0 &&
                                                    typeof item.costs[0].cost[0]
                                                    .value !== 'undefined' &&
                                                    typeof item.costs[0].cost[0].etd !==
                                                    'undefined'
                                                );
                                            });
                                            if (filteredResults) {
                                                localStorage.setItem('seller_id', sellerId);
                                                localStorage.setItem('checkout', JSON
                                                    .stringify(response));
                                                window.location.replace(
                                                    "{{ route('buyer.checkout') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"
                                                );
                                            } else {
                                                $('#myDivHandleError').text(
                                                    'Paket Pengiriman tidak tersedia'
                                                );
                                                $('#myDivHandleError').css(
                                                    'display',
                                                    'block');
                                                setTimeout(function() {
                                                    $('#myDivHandleError')
                                                        .fadeOut(
                                                            'fast');
                                                }, 2000);
                                            }
                                        } else {
                                            $('#myDivHandleError').text(
                                                'Paket Pengiriman tidak tersedia'
                                            );
                                            $('#myDivHandleError').css(
                                                'display',
                                                'block');
                                            setTimeout(function() {
                                                $('#myDivHandleError')
                                                    .fadeOut(
                                                        'fast');
                                            }, 2000);
                                        }
                                        $('.loading').removeClass('show-modal').addClass('d-none')

                                    } else {
                                        $('.loading').removeClass('show-modal').addClass('d-none')
                                    }
                                },

                                error: function(error) {
                                    if (error && error.responseJSON && error
                                        .responseJSON.message) {
                                        $('#myDivHandleError').text(error
                                            .responseJSON.message);
                                        $('#myDivHandleError').css('display',
                                            'block');
                                        setTimeout(function() {
                                            $('#myDivHandleError')
                                                .fadeOut(
                                                    'fast');
                                        }, 2000);
                                    }
                                    $('.loading').removeClass('show-modal').addClass('d-none')
                                    console.log(error);
                                }
                            });
                        } else {
                            $('.loading').removeClass('show-modal').addClass('d-none')
                        }
                    },

                    error: function(error) {
                        console.log('error');
                        console.log(error);
                        if (error && error.responseJSON && error
                            .responseJSON.message) {
                            $('#myDivHandleError').text(error
                                .responseJSON.message);
                            $('#myDivHandleError').css('display',
                                'block');
                            setTimeout(function() {
                                $('#myDivHandleError')
                                    .fadeOut(
                                        'fast');
                            }, 2000);
                        }
                        $('.loading').removeClass('show-modal').addClass('d-none')
                        console.log(error);

                    }
                });
            } else {
                $('#myDivCheckout').css('display', 'block');
                setTimeout(function() {
                    $('#myDivCheckout').fadeOut('fast');
                }, 2000);
            }
        }
    </script>
@endpush
