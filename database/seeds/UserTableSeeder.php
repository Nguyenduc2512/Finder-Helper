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

        DB::table('users')->insert([
            [
                'name'                     => 'User ',
                'avatar'                   => 'public/images/user/defaut-avatar.png',
                'email'                    => 'user@gmail.com',
                'password'                 =>  Hash::make('123456'),
                'date_of_birth'            =>  '12-09-1999',
                'identification_code'      =>  '12345678987',
                'identification'           => 'public/images/user/simple.png',
                'identification_back'      => 'public/images/user/simpleback.png',
                'phone'                    => '0987654567',
                'coin'                     => '0',
                'gender'                   => '1',
                'rules'                    => '1',
                'status'                   => '0',
                'provider'                 => '0',
                'provider_id'              => '0',
            ],
            [
                'name'                     => 'linh luu ',
                'avatar'                   => 'public/images/user/defaut-avatar.png',
                'email'                    => 'linh@gmail.com',
                'password'                 =>  Hash::make('123456'),
                'date_of_birth'            =>  '12-09-1999',
                'identification_code'      =>  '12345678987',
                'identification'           => 'public/images/user/simple.png',
                'identification_back'      => 'public/images/user/simpleback.png',
                'phone'                    => '0987654567',
                'coin'                     => '0',
                'gender'                   => '1',
                'rules'                    => '2',
                'status'                   => '0',
                'provider'                 => '0',
                'provider_id'              => '0',
            ],
            [
                'name'                     => 'Hải Phùng ',
                'avatar'                   => 'public/images/user/defaut-avatar.png',
                'email'                    => 'hai@gmail.com',
                'password'                 =>  Hash::make('123456'),
                'date_of_birth'            =>  '09-09-1999',
                'identification_code'      =>  '0987678987',
                'identification'           => 'public/images/user/simple.png',
                'identification_back'      => 'public/images/user/simpleback.png',
                'phone'                    => '0987654567',
                'coin'                     => '0',
                'gender'                   => '3',
                'rules'                    => '1',
                'status'                   => '0',
                'provider'                 => '0',
                'provider_id'              => '0',
            ],
            [
                'name'                     => 'Minh Đức ',
                'avatar'                   => 'public/images/user/defaut-avatar.png',
                'email'                    => 'duc@gmail.com',
                'password'                 =>  Hash::make('123456'),
                'date_of_birth'            =>  '21-09-1999',
                'identification_code'      =>  '4435678987',
                'identification'           => 'public/images/user/simple.png',
                'identification_back'      => 'public/images/user/simpleback.png',
                'phone'                    => '0987654567',
                'coin'                     => '10000',
                'gender'                   => '1',
                'rules'                    => '1',
                'status'                   => '0',
                'provider'                 => '0',
                'provider_id'              => '0',
            ],

        ]);
    }
}
