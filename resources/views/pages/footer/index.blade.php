@extends('layouts.app')

@section('title', 'Blank Page')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Halaman Footer</h1>
            </div>

            <div class="section-body">

                <div class="section-body">
                    <h2 class="section-title">Table Footer</h2>

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <a href="{{ route('footer.create') }}" class="btn btn-primary">Tambah Data </a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-md">
                                            <tr>
                                                <th>#</th>
                                                <th>Title Judul</th>
                                                <th>Title Isi</th>
                                                <th>Copyright</th>
                                                <th>Action</th>
                                            </tr>
                                            <tbody>
                                                @foreach ($footers as $footer)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $footer->title_judul }}</td>
                                                        <td>{{ $footer->title_isi }}</td>
                                                        <td>
                                                            {{ $footer->copyright }}
                                                        </td>
                                                        <td>
                                                            <!-- Add action buttons if needed -->
                                                            <a href="{{ route('footer.edit', $footer->id) }}"
                                                                class="btn btn-primary">Edit</a>
                                                            <form action="{{ route('footer.destroy', $footer->id) }}"
                                                                method="POST" style="display:inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger"
                                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>



                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <nav class="d-inline-block">
                                        {{ $footers->links('pagination::bootstrap-4') }}
                                    </nav>
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
