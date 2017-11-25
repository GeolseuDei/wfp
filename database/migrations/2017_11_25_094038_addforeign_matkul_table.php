<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddforeignMatkulTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('matkuls', function (Blueprint $table) {
            $table->foreign('id_jurusan')->references('id')->on('jurusans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('matkuls', function (Blueprint $table) {
            $table->dropForeign(['jurusan']);
            $table->dropColumn('jurusan');
        });
    }
}
