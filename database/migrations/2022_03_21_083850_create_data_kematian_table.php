<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKematianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kematian', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_surat');
            $table->date('tgl_surat');
            $table->integer('penduduk_id')->length(10)->unsigned();
            $table->foreign('penduduk_id')->references('id')->on('penduduk');
            $table->date('tgl_meninggal');
            $table->string('keterangan');
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
