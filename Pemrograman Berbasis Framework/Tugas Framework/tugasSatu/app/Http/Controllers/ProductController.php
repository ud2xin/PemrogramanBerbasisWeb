<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($angka)
    {
        $hasil = $angka + 5;   // contoh tambah angka
        return view('products.index', compact('hasil'));
    }
}
