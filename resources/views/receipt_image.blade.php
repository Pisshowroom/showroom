<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Receipt</title>
</head>
<style>
    .box {
        border: 2px black solid
    }

    * {
        margin: 0px;
        padding: 0px;
    }

    body {
        padding: 30px;
        width: 660px;
        height: 536px;
    }

    .image-header {
        width: 106px;
        padding: 20px 30px;
    }

    hr.dashed {
        border-top: 3px dashed #bbb;
    }

    .content {
        width: 100%;
        padding: 20px 30px;
    }
</style>

@php
    $order = App\Models\Order::find(4);

@endphp

<body>
    <div class="box">
        <header>
            <img src="{{ asset('/ecom/imgs/pshop.png') }}" class="image-header" alt="">
        </header>
        <hr class="dashed">
        <div class="content">
            <table style="width:100%">
                <tr>
                    <td style="width:30%">Invoice</td>
                    <td style="width:60%">Ekspedisi</td>
                </tr>
                <tr>
                    <td style="width:30%;font-weight:bold">{{ $order->delivery_receipt_number }}</td>
                    {{-- <td style="width:30%;font-weight:bold">IN3294873HJK</td> --}}
                    <td style="width:60%;font-weight:bold">{{ $order->delivery_service_name }}</td>
                    {{-- <td style="width:60%;font-weight:bold">JNE - Reguler</td> --}}
                </tr>
                <tr>
                    {{-- <td style="width:30%;font-weight:bold">{{ $order->delivery_receipt_number }}</td> --}}
                    <td style="width:30%">Administrasi</td>
                    {{-- <td style="width:60%;font-weight:bold">{{ $order->delivery_service_name }}</td> --}}
                    <td style="width:50%;font-weight:bold;display:flex;justify-content:space-between">
                        <div>
                            <p>Ongkir</p>
                            <p style="font-weight:bold">{{ numbFormat($order->delivery_cost) }}</p>
                            {{-- <p style="font-weight:bold">Rp 13.000</p> --}}
                        </div>
                        <div>
                            <p>Berat</p>
                            <p style="font-weight:bold">{{ $order->weight }} kg</p>
                            {{-- <p style="font-weight:bold">0.06 kg</p> --}}
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="width:30%;vertical-align: top;">Kepada</td>
                    <td style="width:60%">
                        <div>
                            <p><b>{{ $order->user->name }}</b> - {{ $order->user->phone_number }}</p>
                            <p>{{ $order->address->address_description }}</p>
                            <p>{{ $order->district }}, {{ $order->city }},
                                {{ $order->address->ro_province->provice_name }}</p>
                            <p></p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="width:30%;vertical-align: top;">Dari</td>
                    <td style="width:60%">
                        <div>
                            <p><b>{{ $order->user->name }}</b> - {{ $order->user->phone_number }}</p>
                            <p>{{ $order->address->address_description }}</p>
                            <p>{{ $order->district }}, {{ $order->city }},
                                {{ $order->address->ro_province->provice_name }}</p>
                            <p></p>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <hr class="dashed">
        <div class="content">
            <table style="width:100%">
                <tr>
                    <td style="width:60%">Produk</td>
                    <td style="width:20%">Varian</td>
                    <td style="width:20%">Jumlah</td>
                </tr>
                @foreach ($order->order_items as $item)
                    <tr>
                        <td style="width:60%">{{ $item->product->name }}</td>
                        {{-- <td style="width:20%">{{ }}</td> --}}
                        <td style="width:20%">{{ $item->quantity }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>

</html>
