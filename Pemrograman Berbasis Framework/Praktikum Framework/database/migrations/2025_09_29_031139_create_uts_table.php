<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtsTable extends Migration
{
    public function up()
    {
        Schema::create('uts', function (Blueprint $table) {
            $table->increments('uts_id');                // sesuai permintaan: Uts_id
            $table->string('nama_matkul');              // nama_matkul
            $table->integer('c_jumlah_sks');            // c_jumlah_sks (pakai nama kolom sesuai tugas)
            $table->text('d_keterangan')->nullable();   // d_keterangan
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('uts');
    }
}
