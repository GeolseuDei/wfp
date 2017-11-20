<?php

use Illuminate\Database\Seeder;

class MahasiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert(
        	[
        	'nrp' => 'm001',
        	'nama' => str_random(10),
        	'ips' => 3.300,
        	'ipk' => 2.821,
        	'maxsks' => 24,
        	'asdos' => 0,
        	'angkatan' => 2016,
        	'user_id' => 1
        	]
        );
        DB::table('mahasiswas')->insert(
        	[
        	'nrp' => 'm002',
        	'nama' => str_random(10),
        	'ips' => 3.254,
        	'ipk' => 3.5,
        	'maxsks' => 24,
        	'asdos' => 1,
        	'angkatan' => 2015,
        	'user_id' => 2
        	]
        );
        DB::table('mahasiswas')->insert(
        	[
        	'nrp' => 'm003',
        	'nama' => str_random(10),
        	'ips' => 2.613,
        	'ipk' => 2.348,
        	'maxsks' => 24,
        	'asdos' => 0,
        	'angkatan' => 2014,
        	'user_id' => 3
        	]
        );
        DB::table('mahasiswas')->insert(
        	[
        	'nrp' => 'm004',
        	'nama' => str_random(10),
        	'ips' => 3.254,
        	'ipk' => 3.5,
        	'maxsks' => 24,
        	'asdos' => 0,
        	'angkatan' => 2015,
        	'user_id' => 4
        	]
        );
        DB::table('mahasiswas')->insert(
        	[
        	'nrp' => 'm005',
        	'nama' => str_random(10),
        	'ips' => 2.254,
        	'ipk' => 2.5,
        	'maxsks' => 24,
        	'asdos' => 0,
        	'angkatan' => 2016,
        	'user_id' => 5
        	]
        );
    }
}
