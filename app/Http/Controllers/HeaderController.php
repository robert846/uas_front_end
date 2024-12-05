<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Header;

class HeaderController extends Controller
{
    public function index()
    {
        $headers = Header::paginate(10);

        // Pass data ke view 'about.index'
        return view('pages.home.index', compact('headers'));
    }

    public function create()
    {
        return view('pages.home.create'); // Pastikan view `about.create` sudah ada
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'title_judul' => 'required|string|max:255',
            'title_isi' => 'required|string',
        ]);

        // Simpan data ke MongoDB
        Header::create([
            'title_judul' => $request->title_judul,
            'title_isi' => $request->title_isi,
        ]);

        // Redirect kembali ke halaman About dengan pesan sukses
        return redirect()->route('header.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function destroy(Header $header)
    {
        // Menghapus data berdasarkan ID
        $header->delete();

        // Redirect kembali ke halaman About dengan pesan sukses
        return redirect()->route('header.index')->with('success', 'Data berhasil dihapus!');
    }

    public function edit(Header $header)
    {
        return view('pages.home.edit', compact('header'));
    }

    // Memperbarui data setelah diubah
    public function update(Request $request, Header $header)
    {
        $request->validate([
            'title_judul' => 'required|string|max:255',
            'title_isi' => 'required|string',
        ]);

        // Memperbarui data
        $header->update([
            'title_judul' => $request->title_judul,
            'title_isi' => $request->title_isi,
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('header.index')->with('success', 'Data berhasil diperbarui!');
    }
}
