<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Footer;

class FooterController extends Controller
{
    public function index()
    {
        $footers = Footer::paginate(10);

        // Pass data ke view 'about.index'
        return view('pages.footer.index', compact('footers'));
    }

    public function create()
    {
        return view('pages.footer.create'); // Pastikan view `about.create` sudah ada
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'title_judul' => 'required|string|max:255',
            'title_isi' => 'required|string',
            'copyright' => 'required|string',
        ]);

        // Simpan data ke MongoDB
        Footer::create([
            'title_judul' => $request->title_judul,
            'title_isi' => $request->title_isi,
            'copyright' => $request->copyright,
        ]);

        // Redirect kembali ke halaman About dengan pesan sukses
        return redirect()->route('footer.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function destroy(Footer $footer)
    {
        // Menghapus data berdasarkan ID
        $footer->delete();

        // Redirect kembali ke halaman About dengan pesan sukses
        return redirect()->route('footer.index')->with('success', 'Data berhasil dihapus!');
    }

    public function edit(Footer $footer)
    {
        return view('pages.footer.edit', compact('footer'));
    }

    // Memperbarui data setelah diubah
    public function update(Request $request, Footer $footer)
    {
        $request->validate([
            'title_judul' => 'required|string|max:255',
            'title_isi' => 'required|string',
            'copyright' => 'required|string',
        ]);

        // Memperbarui data
        $footer->update([
            'title_judul' => $request->title_judul,
            'title_isi' => $request->title_isi,
            'copyright' => $request->copyright,
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('footer.index')->with('success', 'Data berhasil diperbarui!');
    }
}
