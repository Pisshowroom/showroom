@extends('clients.master-dashboard')
@section('title', 'Input Nomor Resi')
@section('product', 'active')
@section('dashboard')
    <section class="content-main">
        <form class="row"
            action="{{ route('dashboardSeller.sellerSendOrder') }}{{ Auth::check() && preg_match('/PiBrowser/i', request()->header('User-Agent')) ? '?auth=' . base64_encode(Auth::user()->uid) : '' }}"
            method="POST">
            @csrf
            <div class="col-12">
                <div class="content-header">
                    <h2 class="content-title">Input Nomor Resi</h2>
                    <div>
                        <button type="submit" class="btn btn-md rounded font-sm hover-up" id="btn-product">Simpan</button>
                    </div>
                </div>
            </div>
            <div class="row all">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Form</h4>
                        </div>
                        <div class="card-body">
                            <input type="hidden" name="id" value="{{ $order->id }}">
                            <div class="mb-4">
                                <label class="form-label" for="delivery_receipt_number">Nomor Resi*</label>
                                <input class="form-control" id="delivery_receipt_number" name="delivery_receipt_number"
                                    type="text" required placeholder="Masukkan nomor resi">
                            </div>
                            <div class="mb-4">
                                <div class="mb-3">
                                    <label for="delivery_service" class="form-label">Pilih Paket Perjalanan*</label>
                                    <select id="delivery_service" class="form-select delivery_service" name="delivery_service" required>
                                        <option style="color:#232323;background:#f5f5f5 !important" disabled>
                                            Pilih
                                        </option>
                                        <option value="jne" selected>JNE</option>
                                        <option value="jnt">JNT</option>
                                        <option value="sicepat">Sicepat</option>
                                        <option value="anteraja">Anteraja</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </section>

@endsection
@push('importjs')
@endpush
