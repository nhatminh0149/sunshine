<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuscMauSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         //Tạo bảng cusc_mau_sanpham: Lưu số lượng sp ứng với từng màu
        Schema::create('cusc_mau_sanpham', function (Blueprint $table) {
            $table->unsignedBigInteger('sp_ma')->comment('Mã sp');
            $table->unsignedTinyInteger('m_ma')->comment('Mã màu');
            $table->unsignedSmallInteger('msp_soLuong')->default('0')->comment('Số lượng sp của từng màu');

            $table->primary(['sp_ma', 'm_ma']);
            $table->foreign('sp_ma')->references('sp_ma')->on('cusc_sanpham')->onDelete('cascade')->onUpdate('cascade'); 
            $table->foreign('m_ma')->references('m_ma')->on('cusc_mau')->onDelete('cascade')->onUpdate('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cusc_mau_sanpham');
    }
}
