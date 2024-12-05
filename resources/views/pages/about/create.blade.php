<!-- resources/views/about/create.blade.php -->

@extends('layouts.app')

@section('title', 'Tambah Data About')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Data About</h1>
            </div>

            <div class="section-body">
                <form action="{{ route('about.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-8 col-lg-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Input About</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>title judul</label>
                                        <input type="text" class="form-control" id="title_judul" name="title_judul"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label>title isi</label>
                                        <textarea class="form-control" id="title_isi" name="title_isi" required></textarea>
                                    </div>


                                    <button type="submit" class="btn btn-primary">Simpan</button>

                                </div>
                            </div>
                </form>
            </div>
        </section>
    </div>
@endsection
