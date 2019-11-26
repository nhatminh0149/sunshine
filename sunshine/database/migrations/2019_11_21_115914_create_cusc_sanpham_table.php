<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuscSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cusc_sanpham', function (Blueprint $table) {
            $table->bigIncrements('sp_ma');
            $table->string('sp_ten', 200)->unique();
            $table->unsignedInteger('sp_giaGoc')->default('0');
            $table->unsignedInteger('sp_giaBan')->default('0');
            $table->string('sp_hinh', 200);
            $table->text('sp_thongTin');
            $table->string('sp_danhGia', 50);
            $table->timestamp('sp_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('sp_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedTinyInteger('sp_trangThai')->default('2')->comment('Trạng thái: 1-khóa, 2-khả dụng');
            $table->unsignedTinyInteger('l_ma');
            $table->foreign('l_ma')->references('l_ma')->on('cusc_loai')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cusc_sanpham');
    }
}
