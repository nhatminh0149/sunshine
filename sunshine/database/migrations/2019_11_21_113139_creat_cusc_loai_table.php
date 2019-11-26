<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatCuscLoaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cusc_loai', function(Blueprint $table){
            $table->unsignedTinyInteger('l_ma')->autoIncrement()->comment('Ma loai san pham');
            $table->string('l_ten', 50)->comment('Tên loại sản phẩm');
            $table->timestamp('l_ngaytaoMoi')->nullable()->comment('Time tạo loại sản phẩm');
            $table->timestamp('l_ngaycapNhat')->nullable()->comment('Time cập nhật loại sản phẩm');
            $table->tinyInteger('l_trangThai')->default('2')->comment('Trạng thái:1-khóa, 2-khả dụng');
            $table->unique(['l_ten']);              
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cusc_loai');
    }
}
