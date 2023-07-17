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
        Schema::create('pengeluaranadit', function (Blueprint $table) {
            $table->id();
            $table->string('nobk_adit', 45);
            $table->string('tanggal_adit', 45);
            $table->string('noreff_adit', 45);
            $table->string('bagianid_adit', 45);
            $table->string('petugasid_adit', 45);
            $table->string('keterangan_adit', 45);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_t_pengeluaran_adit');
    }
};
