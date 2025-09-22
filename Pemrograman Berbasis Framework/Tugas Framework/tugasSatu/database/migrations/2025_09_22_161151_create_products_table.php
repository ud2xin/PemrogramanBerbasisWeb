<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('name');            // nama produk
        $table->text('description')->nullable(); // deskripsi produk (boleh kosong)
        $table->decimal('price', 10, 2);   // harga, contoh 99999999.99
        $table->integer('stock')->default(0); // stok produk
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
