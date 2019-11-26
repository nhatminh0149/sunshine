<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuscNhanvienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cusc_nhanvien', function (Blueprint $table) {
            $table->unsignedTinyInteger('nv_ma')->autoIncrement()->comment('Mã nhân viên, 1-Chưa phân công');
            $table->string('nv_taiKhoan', 50)->unique()->comment('Tài khoản nv');
            $table->string('nv_matKhau', 32)->comment('Mật khẩu nv');
            $table->string('nv_hoTen', 100)->comment('Họ tên nv');
            $table->unsignedTinyInteger('nv_gioiTinh')->default('1')->comment('Giới tính');
            $table->string('nv_email', 100)->unique()->comment('Email nv');
            $table->dateTime('nv_ngaySinh')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('nv_diaChi', 250)->comment('Địa chỉ nv');
            $table->string('nv_dienThoai', 11)->unique()->comment('Đt nv');
            $table->timestamp('nv_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('nv_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedTinyInteger('nv_trangThai')->default('2')->comment('Trạng thái: 1-khóa, 2: khả dụng');
            $table->unsignedTinyInteger('q_ma')->comment('Mã quyền');

            $table->foreign('q_ma')->references('q_ma')->on('cusc_quyen')->onDelete('cascade')->onUpdate('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cusc_nhanvien');
    }
}
