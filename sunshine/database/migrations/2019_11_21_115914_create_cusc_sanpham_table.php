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
            $table->string('sp_ten');
            $table->bigInteger('sp_giaGoc')->default('0');
            $table->bigInteger('sp_giaBan')->default('0');
            $table->string('sp_hinh');
            $table->string('sp_thongTin');
            $table->string('sp_danhGia');
            $table->timestamp('sp_taoMoi')->nullable();
            $table->timestamp('sp_capNhat')->nullable();
            $table->TinyInteger('sp_trangThai')->default('2')->comment('Trạng thái:1, 2');;
            $table->string('l_ma');

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
