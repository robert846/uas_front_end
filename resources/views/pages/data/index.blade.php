@extends('layouts.app')

@section('title', 'Blank Page')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Daftar Transfer</h1>
            </div>

            <div class="section-body">
                <h2 class="section-title">Mutasi Rekening</h2>
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
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nomor Rekening</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Transaksi</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="form-control selectric">
                                            <option>Semua</option>
                                            <option>Uang Keluar</option>
                                            <option>Uang Masuk</option>
                                        </select>
                                    </div>
                                </div>
                                   <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Dari Tanggal</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="date"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Sampai Tanggal</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="date"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button class="btn btn-primary">Simpan</button>
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
