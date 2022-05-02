<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonanMeninggalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonan_meninggal', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('penduduk_id')->length(10)->unsigned();
            $table->foreign('penduduk_id')->references('id')->on('penduduk');
            $table->date('tgl_meninggal');
            $table->string('keterangan');
            $table->enum('status', ['proses', 'disetujui', 'ditolak'])->default('proses');
            $table->unsignedBigInteger('user_id')->length(10)->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_kematian');
    }
}
