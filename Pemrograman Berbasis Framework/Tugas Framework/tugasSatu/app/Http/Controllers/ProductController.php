<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($nilai)
    {
        if ($nilai % 2 == 0) {
            $pesan = "Nilai ini adalah genap";
            $type = "success";
        } else {
            $pesan = "Nilai ini adalah ganjil";
            $type = "warning";
        }
        return view('produk', compact('pesan', 'type'));
    }
}
