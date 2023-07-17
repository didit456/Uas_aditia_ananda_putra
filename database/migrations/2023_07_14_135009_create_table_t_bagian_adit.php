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
        Schema::create('table_t_bagian_adit', function (Blueprint $table) {
            $table->id();
            $table->string('bagianid_adit', 45);
            $table->string('namabagian_adit', 45);
            $table->string('kepalabagian_adit', 45);
            $table->string('telp_adit', 45);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_t_bagian_adit');
    }
};
