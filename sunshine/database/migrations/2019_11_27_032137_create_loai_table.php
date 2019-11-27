<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loai', function (Blueprint $table) {
            $table->unsignedTinyInteger('l_ma')->autoIncrement()->comment('Mã loại sản phẩm'); //thêm cột l_ma kiểu số dương tinyint, khóa chính tự động tăng -> tạo chú thích cho cột là "Ma loai san pham"
            $table->string('l_ten', 50)->unique()->comment('Tên loại sản phẩm'); //thêm cột l_ten có kiểu varchar,độ dài tối đa là 50 -> chứa giá trị không trùng nhau-> tạo chú thích cho cột
            $table->timestamp('l_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Tgian tạo mới loại sản phẩm');//thêm cột l_ngaytaoMoi, gtri mặc định "current_timestamp"
            $table->timestamp('l_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Tgian cập nhật loại sản phẩm');//thêm cột l_ngaycapnha, gtri mặc định "current_timestamp"
            $table->tinyInteger('l_trangThai')->default('2')->comment('Trạng thái lsp: 1-khóa, 2-khả dụng');//thêm cột l_trangThai kiểu tinyint, gtri mặc định là 2 -> tạo chú thích: 1-khóa, 2-khả dụng     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loai');
    }
}
