@extends('layouts.app')

@section('title', 'Blank Page')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Transfer Dana</h1>
            </div>

            <div class="section-body">
                <h2 class="section-title">M-Transfer</h2>
                <p class="section-lead">
                </p>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Informasi</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Dari Rekening</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text"
                                            class="form-control">
                                    </div>
                                </div>
                                   <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jumlah Uang</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="number"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Ke Rekening</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="form-control selectric">
                                            <option>Robert-55234500</option>
                                            <option>Om Iwan-553064230056</option>
                                            <option>Kevin-553065890045</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button class="btn btn-primary">simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
