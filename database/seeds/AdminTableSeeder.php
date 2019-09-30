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
	    		'password' => Hash::make('123456'),
                'avatar'   => 'public/images/user/defaut-avatar.png',
            ],
            [
                'name' => 'Admin ',
                'email' => 'admin1@gmail.com',
                'password' => Hash::make('123456'),
                'avatar'   => 'public/images/user/defaut-avatar.png',
            ],
        ]);
    }
}
