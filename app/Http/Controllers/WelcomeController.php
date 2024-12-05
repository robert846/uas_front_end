<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Header;
use App\Models\Footer;  // Sesuaikan dengan model Anda

class WelcomeController extends Controller
{
    public function index()
    {
        // Ambil data dari tabel 'abouts'
        $aboutData = About::all();
        $headerData = Header::all();
        $footerData = Footer::all();

        // Kirim data ke view 'welcome'
        return view('welcome', compact('aboutData', 'headerData', 'footerData'));
    }
}
