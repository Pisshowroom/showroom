@extends('clients.master-dashboard')
@section('title', 'Cairkan Uang')
@section('withdraw', 'active')
@section('dashboard')
    <section class="content-main">
        <div class="row">
            <div class="col-12">
                <div class="content-header">
                    <h2 class="content-title">Cairkan Uang</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Form Pencairan</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-4">
                                <label class="form-label" for="bank">Bank</label>
                                <select class="form-select" id="bank" name="bank">
                                    <option>Pilih bank</option>
                                    <option value="BSI">Bank BSI</option>
                                    <option value="BNI">Bank BNI</option>
                                    <option value="BRI">Bank BRI</option>
                                    <option value="BCA">Bank BCA</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="nominal">Nominal</label>
                                <input class="form-control" id="nominal" type="tel" name="nominal"
                                    onkeypress="return event.charCode>=48&&event.charCode<=57"
                                    placeholder="Masukkan nominal">
                            </div>
                            <div class="mb-4 text-end">
                                <button type="submit" class="btn btn-md rounded font-sm hover-up">Ajukan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('importjs')
@endpush
