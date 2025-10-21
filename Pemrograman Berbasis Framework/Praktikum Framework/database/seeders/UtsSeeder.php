<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Uts;

class UtsSeeder extends Seeder
{
    public function run()
    {
        Uts::create([
            'nama_matkul' => 'Pemrograman Web',
            'c_jumlah_sks' => 3,
            'd_keterangan' => 'Praktikum'
        ]);

        Uts::create([
            'nama_matkul' => 'Database',
            'c_jumlah_sks' => 2,
            'd_keterangan' => 'Teori + Praktik'
        ]);
    }
}
