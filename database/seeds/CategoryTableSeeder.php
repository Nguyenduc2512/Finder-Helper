<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Giúp việc theo giờ',
            ],
            [
                'name' => 'Ship đồ nhanh',
            ],
            [
                'name' => 'Giúp việc dài hạn',
            ],
            [
                'name' => 'Trông em bé',
            ],
            [
                'name' => 'Đón đưa theo giờ',
            ],
        ]);
    }
}
