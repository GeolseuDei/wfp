<?php

use Illuminate\Database\Seeder;

class JurusanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('jurusans')->insert(
    		[
    			'nama' => str_random(5)
    		]
    	);
    	DB::table('jurusans')->insert(
    		[
    			'nama' => str_random(5)
    		]
    	);
    	DB::table('jurusans')->insert(
    		[
    			'nama' => str_random(5)
    		]
    	);
    	DB::table('jurusans')->insert(
    		[
    			'nama' => str_random(5)
    		]
    	);
    	DB::table('jurusans')->insert(
    		[
    			'nama' => str_random(5)
    		]
    	);
    }
}
