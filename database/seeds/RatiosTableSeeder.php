<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ratios')->insert([
            [
                'money' => '1000',
                'coin' => '1',
            ]
        ]);
    }
}
