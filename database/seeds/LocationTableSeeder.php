<?php

use Illuminate\Database\Seeder;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locat = [];
        $faker = Faker\Factory::create();

        for ($i=0 ; $i<10 ; $i++){
            $item = [
                'name'         => $faker->name,
                'map_location' => $faker->realText($maxNbChars =70,$indexSize=2)
            ];
            $locat[] = $item;
        }
        DB::table('locations')->insert($locat);
    }
}
