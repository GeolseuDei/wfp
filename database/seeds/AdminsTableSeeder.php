<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert(
        	[
        	'nik' => 'a001',
        	'nama' => str_random(10),
        	'user_id' => 11
        	]
        );
        DB::table('admins')->insert(
        	[
        	'nik' => 'a002',
        	'nama' => str_random(10),
        	'user_id' => 12
        	]
        );
        DB::table('admins')->insert(
        	[
        	'nik' => 'a003',
        	'nama' => str_random(10),
        	'user_id' => 13
        	]
        );
        DB::table('admins')->insert(
        	[
        	'nik' => 'a004',
        	'nama' => str_random(10),
        	'user_id' => 14
        	]
        );
        DB::table('admins')->insert(
        	[
        	'nik' => 'a005',
        	'nama' => str_random(10),
        	'user_id' => 15
        	]
        );
    }
}
