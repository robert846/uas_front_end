@extends('layouts.app')

@section('title', 'Blank Page')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Halaman Home</h1>
            </div>

            <div class="section-body">

                <div class="section-body">
                    <h2 class="section-title">Table Home</h2>

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <a href="{{ route('header.create') }}" class="btn btn-primary">Tambah Data </a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-md">
                                            <tr>
                                                <th>#</th>
                                                <th>Title Judul</th>
                                                <th>Title Isi</th>
                                                <th>Create at</th>
                                                <th>Action</th>
                                            </tr>
                                            <tbody>
                                                @foreach ($headers as $header)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $header->title_judul }}</td>
                                                        <td>{{ $header->title_isi }}</td>
                                                        <td>
                                                            @if ($header->created_at)
                                                                {{ $header->created_at->format('Y-m-d') }}
                                                            @else
                                                                Tanggal tidak tersedia
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <!-- Add action buttons if needed -->
                                                            <a href="{{ route('header.edit', $header->id) }}"
                                                                class="btn btn-primary">Edit</a>
                                                            <form action="{{ route('header.destroy', $header->id) }}"
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
                                        {{ $headers->links('pagination::bootstrap-4') }}
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
