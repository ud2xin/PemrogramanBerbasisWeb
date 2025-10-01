<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uts extends Model
{
    use HasFactory;

    protected $table = 'uts';
    protected $primaryKey = 'uts_id';
    public $incrementing = true;
    public $timestamps = false; // tabel tidak ada created_at & updated_at

    protected $fillable = [
        'nama_matkul',
        'jumlah_sks',
        'keterangan'
    ];
}
