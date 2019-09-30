<?php

use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Location;

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
        $this->call(AdminTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(LocationTableSeeder::class);
        $this->call(BanksTableSeeder::class);
        $this->call(PostTableSeeder::class);
        $this->call(BanksTableSeeder::class);
        $this->call(RatiosTableSeeder::class);
    }
}

