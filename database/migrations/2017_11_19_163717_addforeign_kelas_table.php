<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddforeignKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kelas', function (Blueprint $table) {
            $table->integer('matkul_id')->unsigned();
            $table->foreign('matkul_id')->references('id')->on('matkuls');

            $table->integer('dosen_id')->unsigned();
            $table->foreign('dosen_id')->references('id')->on('dosens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kelas', function (Blueprint $table) {
            $table->dropForeign(['matkul_id']);
            $table->dropColumn('matkul_id');

            $table->dropForeign(['dosen_id']);
            $table->dropColumn('dosen_id');
        });
    }
}
