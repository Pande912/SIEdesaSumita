<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonanLahirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonan_lahir', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 200);
            $table->date('tgl_lahir');
            $table->string('tempat_lahir', 200);
            $table->string('jenis_kelamin', 30);
            $table->string('alamat', 200);
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('nama_saksi_1', 200);
            $table->string('alamat_saksi_1', 200);
            $table->string('pekerjaan_saksi_1', 200);
            $table->string('nama_saksi_2', 200);
            $table->string('alamat_saksi_2', 200);
            $table->string('pekerjaan_saksi_2', 200);
            $table->string('anak_ke', 20);
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
        Schema::dropIfExists('permohonan_lahir');
    }
}
