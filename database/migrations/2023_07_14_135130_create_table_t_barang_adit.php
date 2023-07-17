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
        Schema::create('table_t_barang_adit', function (Blueprint $table) {
            $table->id();
            $table->string('barangid_adit', 45);
            $table->string('namabarang_adit', 45);
            $table->string('satuan_adit', 45);
            $table->string('harga_adit', 45);
            $table->string('kategori_adit', 45);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_t_barang_adit');
    }
};
