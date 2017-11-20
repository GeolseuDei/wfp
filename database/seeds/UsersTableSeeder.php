<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    /*MAHASISWA*/
        DB::table('users')->insert(
        	[
        	'name' => str_random(8),
        	'email' => str_random(10) . "@email.com",
        	'password' => bcrypt('123456'),
        	'status' => 'mahasiswa'
        	]
        );
        DB::table('users')->insert(
        	[
        	'name' => str_random(8),
        	'email' => str_random(10) . "@email.com",
        	'password' => bcrypt('123456'),
        	'status' => 'mahasiswa'
        	]
        );
        DB::table('users')->insert(
        	[
        	'name' => str_random(8),
        	'email' => str_random(10) . "@email.com",
        	'password' => bcrypt('123456'),
        	'status' => 'mahasiswa'
        	]
        );
        DB::table('users')->insert(
        	[
        	'name' => str_random(8),
        	'email' => str_random(10) . "@email.com",
        	'password' => bcrypt('123456'),
        	'status' => 'mahasiswa'
        	]
        );
        DB::table('users')->insert(
        	[
        	'name' => str_random(8),
        	'email' => str_random(10) . "@email.com",
        	'password' => bcrypt('123456'),
        	'status' => 'mahasiswa'
        	]
        );

    /*DOSEN*/
        DB::table('users')->insert(
        	[
        	'name' => str_random(8),
        	'email' => str_random(10) . "@email.com",
        	'password' => bcrypt('123456'),
        	'status' => 'dosen'
        	]
        );
        DB::table('users')->insert(
        	[
        	'name' => str_random(8),
        	'email' => str_random(10) . "@email.com",
        	'password' => bcrypt('123456'),
        	'status' => 'dosen'
        	]
        );
        DB::table('users')->insert(
        	[
        	'name' => str_random(8),
        	'email' => str_random(10) . "@email.com",
        	'password' => bcrypt('123456'),
        	'status' => 'dosen'
        	]
        );
        DB::table('users')->insert(
        	[
        	'name' => str_random(8),
        	'email' => str_random(10) . "@email.com",
        	'password' => bcrypt('123456'),
        	'status' => 'dosen'
        	]
        );
        DB::table('users')->insert(
        	[
        	'name' => str_random(8),
        	'email' => str_random(10) . "@email.com",
        	'password' => bcrypt('123456'),
        	'status' => 'dosen'
        	]
        );

    /*ADMIN*/
        DB::table('users')->insert(
        	[
        	'name' => str_random(8),
        	'email' => str_random(10) . "@email.com",
        	'password' => bcrypt('123456'),
        	'status' => 'admin'
        	]
        );
        DB::table('users')->insert(
        	[
        	'name' => str_random(8),
        	'email' => str_random(10) . "@email.com",
        	'password' => bcrypt('123456'),
        	'status' => 'admin'
        	]
        );
        DB::table('users')->insert(
        	[
        	'name' => str_random(8),
        	'email' => str_random(10) . "@email.com",
        	'password' => bcrypt('123456'),
        	'status' => 'admin'
        	]
        );
        DB::table('users')->insert(
        	[
        	'name' => str_random(8),
        	'email' => str_random(10) . "@email.com",
        	'password' => bcrypt('123456'),
        	'status' => 'admin'
        	]
        );
        DB::table('users')->insert(
        	[
        	'name' => str_random(8),
        	'email' => str_random(10) . "@email.com",
        	'password' => bcrypt('123456'),
        	'status' => 'admin'
        	]
        );
    }
}
