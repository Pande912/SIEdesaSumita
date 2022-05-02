<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKartuKkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kartu_kk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomer_KK', 50);
            $table->integer('banjar_id')->length(10)->unsigned();
            $table->foreign('banjar_id')->references('id')->on('banjar');
            $table->string('alamat_KK', 200);
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
        Schema::dropIfExists('kartu_kk');
    }
}
