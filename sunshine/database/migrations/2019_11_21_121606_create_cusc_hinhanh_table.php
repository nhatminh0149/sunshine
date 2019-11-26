<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuscHinhanhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cusc_hinhanh', function (Blueprint $table) {
            $table->bigInteger('sp_ma');            
            $table->tinyIncrements('ha_stt')->comment('stt hinh anh');
            $table->string('ha_ten')->comment('ten hinh anh');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cusc_hinhanh');
    }
}
