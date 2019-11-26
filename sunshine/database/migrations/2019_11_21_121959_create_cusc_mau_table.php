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
        Schema::create('cusc_mau', function (Blueprint $table) {
            $table->tinyIncrements('m_ma');            
            $table->string('m_ten')->comment('ten mau');
            $table->timestamp('m_taoMoi')->nullable()->comment('thoi diem tao moi mauf');
            $table->timestamp('m_capNhat')->nullable()->comment('thoi diem cap nhat');
            $table->tinyInteger('m_trangThai')->default('2')->comment('2 trang  thai ');
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
