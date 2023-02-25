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
        Schema::create('siswa', function (Blueprint $table) {
            $table->string('nisn')->unique();
            $table->primary('nisn');
            $table->string('nis')->unique();
            $table->string('nama');
            $table->bigInteger('id_kelas')->unsigned();
            $table->foreign('id_kelas')->references('id_kelas')->on('kelas');
            $table->text('alamat');
            $table->string('no_telp');
            $table->bigInteger('id_spp')->unsigned();
            $table->foreign('id_spp')->references('id_spp')->on('spp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
};
