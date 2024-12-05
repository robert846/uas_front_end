<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::paginate(10);

        // Pass data ke view 'about.index'
        return view('pages.about.index', compact('abouts'));

        // Ambil semua data dari tabel About
        $aboutData = About::all();

        // Kirim data ke view welcome.blade.php
        return view('welcome', compact('aboutData'));
    }

    public function create()
    {
        return view('pages.about.create'); // Pastikan view `about.create` sudah ada
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'title_judul' => 'required|string|max:255',
            'title_isi' => 'required|string',
        ]);

        // Simpan data ke MongoDB
        About::create([
            'title_judul' => $request->title_judul,
            'title_isi' => $request->title_isi,
        ]);

        // Redirect kembali ke halaman About dengan pesan sukses
        return redirect()->route('about.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function destroy(About $about)
    {
        // Menghapus data berdasarkan ID
        $about->delete();

        // Redirect kembali ke halaman About dengan pesan sukses
        return redirect()->route('about.index')->with('success', 'Data berhasil dihapus!');
    }

    public function edit(About $about)
    {
        return view('pages.about.edit', compact('about'));
    }

    // Memperbarui data setelah diubah
    public function update(Request $request, About $about)
    {
        $request->validate([
            'title_judul' => 'required|string|max:255',
            'title_isi' => 'required|string',
        ]);

        // Memperbarui data
        $about->update([
            'title_judul' => $request->title_judul,
            'title_isi' => $request->title_isi,
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('about.index')->with('success', 'Data berhasil diperbarui!');
    }
}
