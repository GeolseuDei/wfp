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
        	'nama' => 'mahasiswa1',
        	'ips' => 3.300,
        	'ipk' => 2.821,
        	'maxsks' => 24,
        	'asdos' => 0,
        	'angkatan' => 2016,
            'jurusan' => 1,
        	'user_id' => 1
        	]
        );
        DB::table('mahasiswas')->insert(
        	[
        	'nrp' => 'm002',
        	'nama' => 'mahasiswa2',
        	'ips' => 3.254,
        	'ipk' => 3.5,
        	'maxsks' => 24,
        	'asdos' => 1,
        	'angkatan' => 2015,
            'jurusan' => 2,
        	'user_id' => 2
        	]
        );
        DB::table('mahasiswas')->insert(
        	[
        	'nrp' => 'm003',
        	'nama' => 'mahasiswa3',
        	'ips' => 2.613,
        	'ipk' => 2.348,
        	'maxsks' => 24,
        	'asdos' => 0,
        	'angkatan' => 2014,
            'jurusan' => 3,
        	'user_id' => 3
        	]
        );
        DB::table('mahasiswas')->insert(
        	[
        	'nrp' => 'm004',
        	'nama' => 'mahasiswa4',
        	'ips' => 3.254,
        	'ipk' => 3.5,
        	'maxsks' => 24,
        	'asdos' => 0,
        	'angkatan' => 2015,
            'jurusan' => 4,
        	'user_id' => 4
        	]
        );
        DB::table('mahasiswas')->insert(
        	[
        	'nrp' => 'm005',
        	'nama' => 'mahasiswa5',
        	'ips' => 2.254,
        	'ipk' => 2.5,
        	'maxsks' => 24,
        	'asdos' => 0,
        	'angkatan' => 2016,
            'jurusan' => 5,
        	'user_id' => 5
        	]
        );
    }
}
