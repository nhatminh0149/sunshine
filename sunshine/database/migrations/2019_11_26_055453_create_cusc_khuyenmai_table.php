<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuscKhuyenmaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cusc_khuyenmai', function (Blueprint $table) {
            $table->unsignedTinyInteger('km_ma')->autoIncrement()->comment('Mã km');
            $table->string('km_ten', 200);
            $table->text('km_noiDung');
            $table->dateTime('km_batDau')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('km_ketThuc')->nullable();
            $table->string('km_giaTri', 50)->default('100;100');
            $table->unsignedSmallInteger('nv_nguoiLap')->comment('Người lập km');
            $table->dateTime('km_ngayLap')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedSmallInteger('nv_kyNhan')->default('1')->comment('');
            $table->dateTime('km_ngayKyNhan')->nullable();
            $table->unsignedSmallInteger('nv_kyDuyet')->default('1')->comment('Nv ký duyệt');
            $table->dateTime('km_ngayDuyet')->nullable();
            $table->timestamp('km_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('km_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedTinyInteger('km_trangThai')->default('2')->comment('Trạng thái: 1-khóa, 2: khả dụng');

            $table->foreign('nv_nguoiLap')->references('nv_ma')->on('cusc_nhanvien')->onDelete('cascade')->onUpdate('cascade'); 
            $table->foreign('nv_kyNhan')->references('nv_ma')->on('cusc_nhanvien')->onDelete('cascade')->onUpdate('cascade'); 
            $table->foreign('nv_kyDuyet')->references('nv_ma')->on('cusc_nhanvien')->onDelete('cascade')->onUpdate('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cusc_khuyenmai');
    }
}
