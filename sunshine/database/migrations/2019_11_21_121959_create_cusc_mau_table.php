<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuscMauTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Tạo bảng cusc_mau: Lưu info màu hoa
        Schema::create('cusc_mau', function (Blueprint $table) {
            $table->unsignedTinyInteger('m_ma')->autoIncrement()->comment('Mã màu hoa');            
            $table->string('m_ten', 50)->unique()->comment('Tên màu hoa');
            $table->timestamp('m_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo mới');
            $table->timestamp('m_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật');
            $table->unsignedTinyInteger('m_trangThai')->default('2')->comment('Trạng thái: 1-khoa, 2: khả dụng');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cusc_mau');
    }
}
