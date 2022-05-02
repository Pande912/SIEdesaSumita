<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonanKtpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonan_ktp', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_pemohon');
            $table->string('nik');
            $table->string('alamat');
            $table->string('alasan');
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
        Schema::dropIfExists('permohonan_ktp');
    }
}
