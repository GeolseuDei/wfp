<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_matkul')->unsigned();
            $table->integer('id_dosen')->unsigned();
            $table->string('kp');
            $table->string('kapasitas');
            $table->string('jam');

            $table->foreign('id_matkul')->references('id')->on('matakuliah');
            $table->foreign('id_dosen')->references('id')->on('dosen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelas');
    }
}
