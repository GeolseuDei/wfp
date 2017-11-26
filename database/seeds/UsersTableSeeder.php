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
            'username' => 'm001',
        	'password' => bcrypt('123456'),
        	'status' => 'mahasiswa'
        	]
        );
        DB::table('users')->insert(
        	[
        	'name' => str_random(8),
        	'email' => str_random(10) . "@email.com",
            'username' => 'm002',
        	'password' => bcrypt('123456'),
        	'status' => 'mahasiswa'
        	]
        );
        DB::table('users')->insert(
        	[
        	'name' => str_random(8),
        	'email' => str_random(10) . "@email.com",
            'username' => 'm003',
        	'password' => bcrypt('123456'),
        	'status' => 'mahasiswa'
        	]
        );
        DB::table('users')->insert(
        	[
        	'name' => str_random(8),
        	'email' => str_random(10) . "@email.com",
            'username' => 'm004',
        	'password' => bcrypt('123456'),
        	'status' => 'mahasiswa'
        	]
        );
        DB::table('users')->insert(
        	[
        	'name' => str_random(8),
        	'email' => str_random(10) . "@email.com",
            'username' => 'm005',
        	'password' => bcrypt('123456'),
        	'status' => 'mahasiswa'
        	]
        );

    /*DOSEN*/
        DB::table('users')->insert(
        	[
        	'name' => str_random(8),
        	'email' => str_random(10) . "@email.com",
            'username' => 'd001',
        	'password' => bcrypt('123456'),
        	'status' => 'dosen'
        	]
        );
        DB::table('users')->insert(
        	[
        	'name' => str_random(8),
        	'email' => str_random(10) . "@email.com",
            'username' => 'd002',
        	'password' => bcrypt('123456'),
        	'status' => 'dosen'
        	]
        );
        DB::table('users')->insert(
        	[
        	'name' => str_random(8),
        	'email' => str_random(10) . "@email.com",
            'username' => 'd003',
        	'password' => bcrypt('123456'),
        	'status' => 'dosen'
        	]
        );
        DB::table('users')->insert(
        	[
        	'name' => str_random(8),
        	'email' => str_random(10) . "@email.com",
            'username' => 'd004',
        	'password' => bcrypt('123456'),
        	'status' => 'dosen'
        	]
        );
        DB::table('users')->insert(
        	[
        	'name' => str_random(8),
        	'email' => str_random(10) . "@email.com",
            'username' => 'd005',
        	'password' => bcrypt('123456'),
        	'status' => 'dosen'
        	]
        );

    /*ADMIN*/
        DB::table('users')->insert(
        	[
        	'name' => str_random(8),
        	'email' => str_random(10) . "@email.com",
            'username' => 'a001',
        	'password' => bcrypt('123456'),
        	'status' => 'admin'
        	]
        );
        DB::table('users')->insert(
        	[
        	'name' => str_random(8),
        	'email' => str_random(10) . "@email.com",
            'username' => 'a002',
        	'password' => bcrypt('123456'),
        	'status' => 'admin'
        	]
        );
        DB::table('users')->insert(
        	[
        	'name' => str_random(8),
        	'email' => str_random(10) . "@email.com",
            'username' => 'a003',
        	'password' => bcrypt('123456'),
        	'status' => 'admin'
        	]
        );
        DB::table('users')->insert(
        	[
        	'name' => str_random(8),
        	'email' => str_random(10) . "@email.com",
            'username' => 'a004',
        	'password' => bcrypt('123456'),
        	'status' => 'admin'
        	]
        );
        DB::table('users')->insert(
        	[
        	'name' => str_random(8),
        	'email' => str_random(10) . "@email.com",
            'username' => 'a005',
        	'password' => bcrypt('123456'),
        	'status' => 'admin'
        	]
        );
    }
}
