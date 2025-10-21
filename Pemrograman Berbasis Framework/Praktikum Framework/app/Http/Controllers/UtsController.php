<?php

namespace App\Http\Controllers;

use App\Models\Uts;
use Illuminate\Http\Request;

class UtsController extends Controller
{
    // halaman index: menampilkan menu & list
    public function index()
    {
        $uts = Uts::all();
        return view('uts.index', compact('uts'));
    }

    // view untuk menu "uts pemrograman web"
    public function pemrogramanWeb()
    {
        return view('uts.pemrograman-web');
    }

    // view untuk menu "uts database"
    public function database()
    {
        return view('uts.database');
    }

    // method store untuk tambah data lewat form
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_matkul' => 'required|string|max:100',
            'jumlah_sks'  => 'required|integer',
            'keterangan'  => 'nullable|string|max:255',
        ]);

        Uts::create($data);

        return redirect('/uts')->with('success', 'Data tersimpan');
    }
}
