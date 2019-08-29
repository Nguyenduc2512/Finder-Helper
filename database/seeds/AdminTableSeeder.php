<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [];
        $faker = Faker\Factory::create();

        for ($i=0 ; $i<10 ; $i++) {
            $item = [
                'name'     => $faker->name,
                'avatar'   => 'images/'.$faker->image('public/images/admin',400,300, 'people', false),
                'email'    => $faker->email,
                'password' => $faker->password,
                ];
            $admin[] = $item;
        }
        DB::table('admins')->insert($admin);
    }
}
