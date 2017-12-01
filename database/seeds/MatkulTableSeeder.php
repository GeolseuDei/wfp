<?php

use Illuminate\Database\Seeder;

class MatkulTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i = 1; $i<=100; $i++) {
    		DB::table('matkuls')->insert(
    			[
    				'kode' => 'MK'.$i,
    				'nama' => str_random(10),
    				'sks' => random_int(1, 4),
    				'id_jurusan' => random_int(1, 5),
    				'status' => 1,
    				'semester' => random_int(1, 8),
    			]
    		);
    	}
    }
}
