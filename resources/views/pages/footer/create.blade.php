<!-- resources/views/about/create.blade.php -->

@extends('layouts.app')

@section('title', 'Tambah Data Footer')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Data Footer</h1>
            </div>

            <div class="section-body">
                <form action="{{ route('footer.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-8 col-lg-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Input Footer</h4>
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
                                    <div class="form-group">
                                        <label>Copyright</label>
                                        <input type="text" class="form-control" id="copyright" name="copyright" required>
                                    </div>


                                    <button type="submit" class="btn btn-primary">Simpan</button>

                                </div>
                            </div>
                </form>
            </div>
        </section>
    </div>
@endsection
