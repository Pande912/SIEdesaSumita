<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKelahiranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kelahiran', function (Blueprint $table) {
            $table->id();
            $table->string('no_surat', 100);
            $table->date('tgl_surat');
            $table->string('nama', 255);
            $table->string('anak_ke', 20);
            $table->date('tgl_lahir');
            $table->string('tempat_lahir');
            $table->string('jenis_kelamin', 30);
            $table->string('nama_ayah');
            $table->string('nama_ibu');
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
        Schema::dropIfExists('data_kelahiran');
    }
}
