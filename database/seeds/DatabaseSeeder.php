<?php

//use ServiceTableSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(ServiceTableSeeder::class);
        $this->call(RoleTableSeeder::class);
    }
}
