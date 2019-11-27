<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVanchuyenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vanchuyen', function (Blueprint $table) {
            $table->unsignedTinyInteger('vc_ma')->autoIncrement()->comment('Mã vận chuyển');            
            $table->string('vc_ten', 200)->unique()->comment('Tên vận chuyển');
            $table->unsignedInteger('vc_chiPhi')->default('0');
            $table->text('vc_dienGiai');
            $table->timestamp('vc_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo mới');
            $table->timestamp('vc_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật');
            $table->unsignedTinyInteger('vc_trangThai')->default('2')->comment('Trạng thái: 1-khóa, 2: khả dụng');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vanchuyen');
    }
}
