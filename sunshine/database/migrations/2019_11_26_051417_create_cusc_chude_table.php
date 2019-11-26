<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuscChudeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cusc_chude', function (Blueprint $table) {
            $table->unsignedTinyInteger('cd_ma')->autoIncrement()->comment('Mã chủ đề');
            $table->string('cd_ten', 50)->unique()->comment('Tên chủ đề');
            $table->timestamp('cd_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('cd_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedTinyInteger('cd_trangThai')->default('2')->comment('Trạng thái: 1-khóa, 2-khả dụng');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cusc_chude');
    }
}
