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
        Schema::create('petugasadit', function (Blueprint $table) {
            $table->id();
            $table->string('petugasid_adit', 45);
            $table->string('namapetugas_adit', 45);
            $table->string('alamat_adit', 45);
            $table->string('handphone_adit', 45);
            $table->string('password_adit', 45);
            $table->string('level_adit', 45);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_t_petugas_adit');
    }
};
