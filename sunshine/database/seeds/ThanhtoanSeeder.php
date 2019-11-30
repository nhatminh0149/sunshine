<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ThanhtoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('vi_VN');
        $now = new Carbon('2019-11-28', 'Asia/Ho_Chi_Minh');
        $list=[];

        for($i = 1; $i <= 100; $i++) {
            $created = $now->copy()->addSeconds($faker->numberBetween(1, 259200));
            $updated = $now->copy()->addSeconds($faker->numberBetween(300, 172000));

            $data = [
                'tt_ten' => $faker->text(100),
                'tt_dienGiai' =>$faker->paragraph(),
                'tt_taoMoi'=> $created,
                'tt_capNhat' => $updated,
                'tt_trangThai'=> $faker->numberBetween(1,2) //chọn số ngẫu nhiên
            ];

            array_push($list, $data);
            $now = $updated->copy(); 
        }
        DB::table('thanhtoan')->insert($list);
    }
}
