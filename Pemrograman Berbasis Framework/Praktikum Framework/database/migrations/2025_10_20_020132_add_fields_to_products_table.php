<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // Tambahkan kolom jika belum ada
            if (!Schema::hasColumn('products', 'unit')) {
                $table->string('unit', 100)->nullable();
            }
            if (!Schema::hasColumn('products', 'qty')) {
                $table->integer('qty')->default(0);
            }
            if (!Schema::hasColumn('products', 'producer')) {
                $table->string('producer', 255)->nullable();
            }
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['unit', 'qty', 'producer']);
        });
    }
};
