<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonanPindahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonan_pindah', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jenis_surat', 30);
            $table->string('kk_lama');
            $table->string('kepala_keluarga_lama');
            $table->string('alamat_lama');
            $table->string('banjar_lama');
            $table->string('kelurahan_lama');
            $table->string('kode_pos');
            $table->string('telepon');
            $table->string('telepon_baru');
            $table->string('nik_pemohon');
            $table->string('nama_pemohon');
            $table->string('kk_baru');
            $table->string('nik_kepala_keluarga_baru');
            $table->string('kepala_keluarga_baru');
            $table->date('tgl_kedatangan');
            $table->string('alamat_baru');
            $table->string('banjar_baru');
            $table->string('kelurahan_baru');
            $table->enum('status', ['proses', 'disetujui', 'ditolak'])->default('proses');
            $table->string('status_kk',30);
            $table->string('keterangan_surat',30);
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
        Schema::dropIfExists('permohonan_pindah');
    }
}
