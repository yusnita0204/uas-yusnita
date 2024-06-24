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
        Schema::create('kota', function (Blueprint $table) {
            $table->increments('id_kota'); 
            $table->string('nama_kota', 15);
            $table->string('nama_pemimpin', 20);
            $table->date('tanggal_berdiri');
            $table->integer('jumlah_penduduk');
            $table->float('luas_wilayah');
            $table->enum('jenis_kota', ['istimawa', 'otonom', 'percontohan']);
            $table->text('keunggulan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kota');
    }
};
