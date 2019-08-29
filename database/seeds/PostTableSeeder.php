<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts    = [];
        $UserIDs  = DB::table('users')->pluck('id');
        $CateIDs  = DB::table('categories')->pluck('id');
        $LocaIDs  = DB::table('locations')->pluck('id');
        $AdminIDs = DB::table('admins')->pluck('id');
        $faker    = Faker\Factory::create();

        for ($i=0 ; $i<20 ; $i++) {
            $item =[
                'user_id'      => $faker->randomElement($UserIDs),
                'admin_id'     => $faker->randomElement($AdminIDs),
                'location_id'  => $faker->randomElement($LocaIDs),
                'category_id'  => $faker->randomElement($CateIDs),
                'price'        => rand(10,30),
                'amount'       => rand(1,10),
                'title'        => $faker->name,
                'date_of_hire' => $faker->dateTime($max = 'now', $timezone = null),
                'address'      => $faker->address,
                'detail'       => $faker->realText($maxNbChars = 200, $indexSize = 2),
                'status'       => '0',
            ]; 
            $posts[] = $item;
        }
        DB::table('posts')->insert($posts);
    }
}
