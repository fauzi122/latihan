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
        Schema::create('sarana_prasaranas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_moda');
            $table->string('jenis');
            $table->string('nomor');
            $table->text('deskripsi');
            $table->string('lokasi');
            $table->integer('kapasitas');
            $table->string('satuan');
            $table->date('tanggal_pembelian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sarana_prasaranas');
    }
};
