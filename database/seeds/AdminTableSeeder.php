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
        DB::table('admins')->insert([
            [
                'name' => 'linh luu ',
	    		'email' => 'admin@gmail.com',
                'avatar' => 'public/images/user/defaut-avatar.png',
	    		'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Admin ',
                'email' => 'admin1@gmail.com',
                'avatar' => 'public/images/user/defaut-avatar.png',
                'password' => Hash::make('123456')
            ],
        ]);
    }
}
