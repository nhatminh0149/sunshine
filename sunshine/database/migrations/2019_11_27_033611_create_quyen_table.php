<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuyenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quyen', function (Blueprint $table) {
            $table->unsignedTinyInteger('q_ma')->autoIncrement()->comment('Mã quyền: 1-Giám đốc, 2-Quản trị, 3-Quản lý kho, 4-Kế toán, 5-Nv bán hàng, 6-Nv giao hàng');
            $table->string('q_ten', 30)->unique()->comment('Tên quyền');
            $table->string('q_dienGiai', 250)->nullable()->comment('Diễn giải về quyền');
            $table->timestamp('q_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('q_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedTinyInteger('q_trangThai')->default('2')->comment('Trạng thái: 1-khóa, 2-khả dụng');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quyen');
    }
}
