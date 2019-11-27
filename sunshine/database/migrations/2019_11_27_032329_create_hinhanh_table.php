<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHinhanhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinhanh', function (Blueprint $table) {
            $table->unsignedBigInteger('sp_ma')->comment('Mã sp');;                     
            $table->unsignedTinyInteger('ha_stt')->default('1')->comment('số thứ tự hình ảnh');
            $table->string('ha_ten', 150)->comment('Tên hình ảnh');

            $table->primary(['sp_ma', 'ha_stt']); //Thiết lập 2 khóa chính là sp_ma và ha_stt
            $table->foreign('sp_ma')->references('sp_ma')->on('sanpham')->onDelete('cascade')->onUpdate('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hinhanh');
    }
}
