<?php

use Illuminate\Database\Seeder;

class DosensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosens')->insert(
        	[
        	'nik' => 'd001',
        	'nama' => str_random(10),
        	'user_id' => 6
        	]
        );
        DB::table('dosens')->insert(
        	[
        	'nik' => 'd002',
        	'nama' => str_random(10),
        	'user_id' => 7
        	]
        );
        DB::table('dosens')->insert(
        	[
        	'nik' => 'd003',
        	'nama' => str_random(10),
        	'user_id' => 8
        	]
        );
        DB::table('dosens')->insert(
        	[
        	'nik' => 'd004',
        	'nama' => str_random(10),
        	'user_id' => 9
        	]
        );
        DB::table('dosens')->insert(
        	[
        	'nik' => 'd005',
        	'nama' => str_random(10),
        	'user_id' => 10
        	]
        );
    }
}
