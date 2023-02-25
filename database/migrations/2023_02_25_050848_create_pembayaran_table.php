<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->bigIncrements('id_pembayaran');
            $table->bigInteger('id_petugas')->unsigned();
            $table->foreign('id_petugas')->references('id_petugas')->on('petugas');
            $table->string('nisn');
            $table->foreign('nisn')->references('nisn')->on('siswa');
            $table->date('tgl_bayar');
            $table->string('bulan_dibayar');
            $table->string('tahun_dibayar');
            $table->bigInteger('id_spp')->unsigned();
            $table->foreign('id_spp')->references('id_spp')->on('spp');
            $table->integer('jumlah_bayar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayaran');
    }
};
