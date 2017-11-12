<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Matkuldiambil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matkuldiambil', function (Blueprint $table) {
            $table->integer('id_mahasiswa')->unsigned();
            $table->integer('id_matkul')->unsigned();
            $table->integer('status');

            $table->foreign('id_mahasiswa')->references('id')->on('mahasiswa');
            $table->foreign('id_matkul')->references('id')->on('matakuliah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matkuldiambil');
    }
}
