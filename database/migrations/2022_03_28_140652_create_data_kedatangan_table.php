<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKedatanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kedatangan', function (Blueprint $table) {
            $table->id();
            $table->string('no_surat', 100);
            $table->date('tgl_surat');
            $table->date('tgl_datang');
            $table->string('alamat_asal', 255);
            $table->string('keterangan', 255);
            $table->integer('penduduk_id')->length(10)->unsigned();
            $table->foreign('penduduk_id')->references('id')->on('penduduk');
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
        Schema::dropIfExists('data_kedatangan');
    }
}
