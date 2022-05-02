<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendudukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('kartu_kk_id')->length(10)->unsigned();
            $table->foreign('kartu_kk_id')->references('id')->on('kartu_kk');
            $table->string('nik' ,100);
            $table->string('jenis kelamin');
            $table->string('hubungan_keluarga');
            $table->string('agama', 25);
            $table->string('pendidikan',25);
            $table->string('pekerjaan', 50);
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('status', 30)->default('aktif');
            $table->date('tgl_terdaftar');
            $table->date('tgl_pindah');
            $table->date('tgl_lahir');
            $table->string('tempat_lahir', 50);
            $table->date('tgl_meninggal');
            $table->integer('sts_kpl_keluarga')->unsigned();
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
        Schema::dropIfExists('penduduk');
    }
}
