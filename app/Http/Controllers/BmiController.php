<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class BmiController extends Controller
{
    public function index()
    {
        // Pass data ke view 'about.index'
        return view('bmi-calculator');
    }
}
