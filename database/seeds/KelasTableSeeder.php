<?php

use Illuminate\Database\Seeder;

class KelasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i<=100; $i++) {
        	$kp = "";
        	$intrand = random_int(0, 2);
        	if($intrand == 0){
        		$kp = "-";
        	} else if($intrand == 1){
        		$kp = "A";
        	} else if($intrand == 2){
        		$kp = "B";
        	}
    		DB::table('kelas')->insert(
    			[
    				'hari' => 'Selasa',
    				'jam_masuk' => '08:50',
    				'jam_keluar' => '10:40',
    				'kp' => $kp,
    				'kapasitas' => random_int(1, 100),
    				'ruang' => 'TC 4A',
    				'matkul_id' => random_int(1, 100),
    				'dosen_id' => random_int(1, 5),
    			]
    		);
    	}
    }
}
