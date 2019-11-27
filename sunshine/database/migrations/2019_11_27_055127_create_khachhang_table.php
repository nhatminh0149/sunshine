<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhachhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khachhang', function (Blueprint $table) {
            $table->bigIncrements('kh_ma');
            $table->string('kh_taiKhoan', 50)->unique()->comment('Tài khoản kh');
            $table->string('kh_matKhau', 256)->comment('Mật khẩu kh');
            $table->string('kh_hoTen', 100)->comment('Họ tên kh');
            $table->unsignedTinyInteger('kh_gioiTinh')->default('1')->comment('Giới tính kh');
            $table->string('kh_email', 100)->unique()->comment('Email kh');
            $table->dateTime('kh_ngaySinh')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('kh_diaChi', 250)->nullable()->default(NULL)->comment('Địa chỉ kh');
            $table->string('kh_dienThoai', 11)->unique()->nullable()->default(NULL)->comment('Sdt kh');
            $table->timestamp('kh_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('kh_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedTinyInteger('kh_trangThai')->default('3')->comment('Trạng thái: 1-khóa, 2-khả dụng, 3-chưa kích hoạt');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khachhang');
    }
}
