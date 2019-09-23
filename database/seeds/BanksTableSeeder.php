<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banks')->insert([
            [
                'name' => 'Ngân hàng Á Châu (ACB)',
            ],
            [
                'name' => 'Nông nghiệp và Phát triển Nông thôn (Agribank)',
            ],
            [
                'name' => 'Ngân hàng Tiền Phong (TPBANK)',
            ],
            [
                'name' => 'Ngân hàng Kỹ thương Việt Nam (Techcombank)',
            ],
            [
                'name' => 'Ngân hàng Việt Nam Thịnh Vượng (TPBank)',
            ],
            [
                'name' => 'Ngân hàng Phát triển nhà Thành phố Hồ Chín Minh (HDBank)',
            ],
            [
                'name' => 'Ngân hàng Quốc tế (VIBBank)',
            ],
            [
                'name' => 'Ngân hàng Ngoại thương Việt Nam (Vietcombank)',
            ],
            [
                'name' => 'Ngân hàng Công thương Việt Nam (VietinBank)',
            ],
            [
                'name' => 'Ngân hàng Đầu tư và phát triển Việt Nam (BIDV)',
            ],
        ]);
    }
}
