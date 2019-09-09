<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $users = [];
        $faker = Faker\Factory::create();

        for ($i=0 ; $i<20 ; $i++) {
            $item = [
                'name'                => $faker->name,
                'avatar'              => 'images/'.$faker->image('public/images/user', 400, 300, 'people', false),
                'email'               => $faker->email,
                'password'            => $faker->password,
                'date_of_birth'       => $faker->date('Y-m-d', '1566950400'),
                'identification_code' => mt_rand(),
                'identification'      => 'public/images/user/simple.png',
                'identification_back' => 'public/images/user/simpleback.png',
                'phone'               => mt_rand(),
                'gender'              => rand(1, 3),
                'coin'                => '0',
                'rules'               => rand(1, 2),
                'status'              => '0',
            ];
            $users[] = $item;
        }
        DB::table('users')->insert($users);
    }
}
