@extends('clients.master-dashboard')
@section('title', 'Detail Pembayaran')
@section('myOrder', 'active')
@section('dashboard')
    <section class="content-main">
        <div class="alert alert-success" role=alert style=display:none id=mydiv2>
            Berhasil disalin.
        </div>
        <div class="content-header">
            <div>
                <h2 class="content-title">Detail Pembayaran</h2>
            </div>
            <div> <a href="{{ route('dashboard.myOrder') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}" class="btn btn-xs">
                    Kembali ke Pesanan
                </a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <header class="card-header2">
                            <div class="row align-items-center">
                                <div class="col-lg-12 mb-lg-0 mb-15">
                                    <span><i class="material-icons md-calendar_today"></i>
                                        <b>Batas Pembayaran : {{ $order->due }} WIB
                                        </b>
                                    </span>
                                    <br>
                                    <small class="text-muted">Nomor Identifikasi : {{ $order->payment_identifier ?? '' }}</small>

                                    <p class="mt-15"><span>Status:</span>
                                        <span class="badge rounded-pill alert-warning alert-link px-3 py-2">Menunggu
                                            Pembayaran</span>
                                    </p>
                                </div>
                            </div>
                        </header>
                        <!-- card-header end//-->

                        <h5 class="mt-5 mb-1">Pembayaran</h5>
                        <div class="d-flex flex-row gap-3">
                            <div class="w-67">
                                <p class="line-1 text-start font-md fw-700">
                                    {{ $order->master_account?->provider_name ?? '' }}</p>
                            </div>
                            {{-- <div class="w-33 text-end"><img width="30px" src="{{ $order->master_account?->image ?? '' }}"
                                    alt="{{ $order->master_account?->provider_name ?? '' }}" srcset=""></div> --}}
                        </div>
                        @if (isset($order->master_account) && $order->master_account?->type == 'Retail-Outlet')
                            <div class="d-flex flex-row mt-2 mb-3 align-items-center justify-content-between">
                                <div class="d-flex flex-column">
                                    <p class="textGrey2 mb-0 fw-500 virtual-account fs-15">Kode Pembayaran</p>
                                    <p class="textPrimary mb-1 fw-700" id=number-virtual-account>
                                        {{ $order->outlet_payment_code }}</p>
                                </div>
                                <p class="textSecondary mb-1 fw-600 textCopy" role=button>Salin</p>
                            </div>
                        @elseif (isset($order->master_account) && $order->master_account?->type == 'Virtual-Account')
                            <div class="d-flex flex-row mt-2 mb-3 align-items-center justify-content-between">
                                <div class="d-flex flex-column">
                                    <p class="textGrey2 mb-0 fw-500 virtual-account fs-15">Nomor Virtual Account</p>
                                    <p class="textPrimary mb-1 fw-700" id=number-virtual-account>{{ $order->va_number }}
                                    </p>
                                </div>
                                <p class="textSecondary mb-1 fw-600 textCopy" role=button>Salin</p>
                            </div>
                        @elseif (isset($order->master_account) && $order->master_account?->type == 'E-Wallet')

                        @elseif (isset($order->master_account) && $order->master_account?->type == 'PI')
                            <button id="piButton" class="btn btn-md mb-3">
                                Proceed to PI Network
                            </button>
                        @endif
                        @if (isset($order->qr_string))
                            <div class="py-4 text-center">
                                {!! QrCode::size(300)->generate($order->qr_string) !!}
                            </div>
                        @endif
                        {{-- <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, veritatis at.
                            Dolore facilis repellat numquam cum, id, iste sint libero odio atque a quam ducimus cumque quis
                            enim reiciendis repellendus?</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('importjs')
    <script>
        $(document).ready(function() {
            $("#piButton").click(async function() {
                $('.loading').removeClass('d-none').addClass('show-modal');

                const scopes = ['username', 'payments'];
                const authResults = await Pi.authenticate(scopes, onIncompletePaymentFound);

                const paymentData = {
                    amount: {{ $order->pi_total }},
                    memo: "{{ $order->payment_identifier }}",
                    metadata: {
                        order_id: {{ $order->id }},
                        user_id: {{ Auth::guard('web')->user()->id }}
                    }
                }

                const callbacks = {
                    onReadyForServerApproval,
                    onReadyForServerCompletion,
                    onCancel,
                    onError
                }
                $('.loading').removeClass('show-modal').addClass('d-none');
                const payment = await Pi.createPayment(paymentData, callbacks);
            });

            function onIncompletePaymentFound(payment) {
                console.log(payment);
                $.post("/pi/incomplete{{ Auth::check() && preg_match('/PiBrowser/i',request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}", {
                        payment_id: paymentId,
                    },
                    function(data, textStatus, jqXHR) {
                        console.log(data, 'approval');
                    },
                    "json"
                );
            }

            function onReadyForServerApproval(paymentId) {
                console.log("onReadyForServerApproval", paymentId);
                $.post("/pi/approve{{ Auth::check() && preg_match('/PiBrowser/i',request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}", {
                        payment_id: paymentId,
                    },
                    function(data, textStatus, jqXHR) {
                        console.log(data, 'approval');
                    },
                    "json"
                );
            }

            function onReadyForServerCompletion(paymentId, txid) {
                console.log("onReadyForServerCompletion", paymentId, txid);
                $.post("/pi/complete{{ Auth::check() && preg_match('/PiBrowser/i',request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}", {
                        payment_id: paymentId,
                        txid
                    },
                    function(data, textStatus, jqXHR) {
                        console.log(data, 'complete');
                        window.location.replace("/pembeli/pesananku{{ Auth::check() && preg_match('/PiBrowser/i',request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}");
                    },
                    "json"
                );
            }

            function onCancel(paymentId) {
                console.log("onCancel", paymentId);
                return $.post(
                    "/pi/cancelled_payment{{ Auth::check() && preg_match('/PiBrowser/i',request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}", {
                        payment_id: paymentId,
                    },
                    function(data, textStatus, jqXHR) {
                        console.log(data, 'cancel');
                        window.location.replace("/pembeli/pesananku{{ Auth::check() && preg_match('/PiBrowser/i',request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}");
                    },
                    "json"
                );
            }

            function onError(error, payment) {
                console.log("onError", error);
                if (payment) {
                    console.log(payment);
                    alert(payment)
                }
            }
        });
    </script>
    <script type="text/javascript">
        $(".textCopy").click(function(e) {
            e.preventDefault();
            copyToClipboard($("#number-virtual-account"));
            $("#mydiv2").css("display", "block");
            setTimeout((function() {
                $("#mydiv2").fadeOut("fast")
            }), 2000);
        })

        function copyToClipboard(a) {
            var e = $("<input>");
            $("body").append(e), e.val($(a).text()).select();
            document.execCommand("copy");
            e.remove();
        }
    </script>
@endpush
