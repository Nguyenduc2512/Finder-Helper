<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            [
                'name' => 'Quận Cầu Giấy',
                'map_location' => 'Quận cầu giấy',
            ],
            [
                'name' => 'Quận Ba Đình',
                'map_location' => 'Quận ba đình',
            ],
            [
                'name' => 'Quận Hoàn Kiếm',
                'map_location' => 'Quận hoàn kiếm',
            ],
            [
                'name' => 'Quận Long Biên',
                'map_location' => 'Quận long biên',
            ],
            [
                'name' => 'Quận Đống Đa',
                'map_location' => 'Quận đống đa',
            ],
        ]);
    }
}
