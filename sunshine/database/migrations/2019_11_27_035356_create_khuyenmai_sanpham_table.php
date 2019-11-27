<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhuyenmaiSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khuyenmai_sanpham', function (Blueprint $table) {
            $table->unsignedBigInteger('km_ma')->comment('Mã km');
            $table->unsignedBigInteger('sp_ma')->comment('Mã sp');
            $table->unsignedTinyInteger('m_ma')->comment('Mã màu');
            $table->string('kmsp_giaTri', 50)->default('100;0')->comment('Giá trị km (giảm tiền/giảm % tiền, số lượng), định dạng: tien;soLuong (soLuong = 0, không giới hạn số lượng)');
            $table->unsignedTinyInteger('kmsp_trangThai')->default('2')->comment('Trạng thái km: 1-khóa, 2-khả dụng');
            
            $table->primary(['km_ma', 'sp_ma', 'm_ma']);
            $table->foreign('km_ma')->references('km_ma')->on('khuyenmai')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('m_ma')->references('m_ma')->on('mau')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('sp_ma')->references('sp_ma')->on('sanpham')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khuyenmai_sanpham');
    }
}
