<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $cate = [];
        $faker = Faker\Factory::create();

        for ($i=0 ; $i<10 ; $i++) {
            $item = [
                'name' => $faker->name,
            ];
            $cate [] = $item;
        }
        DB::table('categories')->insert($cate);
    }
}
