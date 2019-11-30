<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\PhpVnDataGenerator\VnBase;
use Illuminate\PhpVnDataGenerator\VnFullname;
use Illuminate\PhpVnDataGenerator\VnPersonalInfo;

class SanphamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];
        $uFN = new VnFullname();
        $uPI = new VnPersonalInfo();
        $faker    = Faker\Factory::create('vi_VN');
        $photos = array('hoahong.jpg','hoalan.jpg','hoatuoi.jpg');

        //Lấy ds Loại sp 
        $dataLoaiSanPham = DB::select('SELECT l_ma FROM loai');
        $lstLoaiSanPhamIds=[];
        foreach($dataLoaiSanPham as $key => $value){
            $lstLoaiSanPhamIds[] = $value ->l_ma;
        }


        for ($i=1; $i <= 30; $i++) {
            $today = new DateTime();
            array_push($list, [
                'sp_ten'                  => $faker->text(100),
                'sp_giaGoc'               => $faker->numberBetween(10000, 100000000),
                'sp_giaBan'               => $faker->numberBetween(10000, 100000000),
                'sp_hinh'                 => "hoa-$i.jpg",
                'sp_thongTin'             => $faker->paragraph(),
                'sp_danhGia'              => $faker->text(50),
                'sp_taoMoi'               => $today->format('Y-m-d H:i:s'),
                'sp_capNhat'              => $today->format('Y-m-d H:i:s'),
                'sp_trangThai'            => $faker->numberBetween(1, 2), //sinh ngẫu nhiên từ 1 -> 2
                'l_ma'                    => $faker->randomElement($lstLoaiSanPhamIds) 
            ]);
        }
        DB::table('sanpham')->insert($list);
    }
}
