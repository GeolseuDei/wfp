<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(UsersTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(MahasiswasTableSeeder::class);
        $this->call(DosensTableSeeder::class);
        $this->call(JurusanTableSeeder::class);
        $this->call(MatkulTableSeeder::class);
        $this->call(KelasTableSeeder::class);

    }
}
