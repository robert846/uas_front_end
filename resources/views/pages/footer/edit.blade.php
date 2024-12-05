<!-- resources/views/about/edit.blade.php -->

@extends('layouts.app')

@section('title', 'Edit Footer')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Footer</h1>
            </div>

            <div class="section-body">
                <form action="{{ route('footer.update', $footer->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12 col-md-8 col-lg-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Input Footer</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title_judul">Title Judul</label>
                                        <input type="text" id="title_judul" name="title_judul" class="form-control"
                                            value="{{ old('title_judul', $footer->title_judul) }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="title_isi">Title Isi</label>
                                        <textarea id="title_isi" name="title_isi" class="form-control" rows="5" required>{{ old('title_isi', $footer->title_isi) }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="title_judul">Copyright</label>
                                        <input type="text" id="copyright" name="copyright" class="form-control"
                                            value="{{ old('copyright', $footer->copyright) }}" required>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <a href="{{ route('footer.index') }}" class="btn btn-secondary">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </section>
    </div>
@endsection
