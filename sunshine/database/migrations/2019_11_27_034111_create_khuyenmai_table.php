<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhuyenmaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khuyenmai', function (Blueprint $table) {
            $table->bigIncrements('km_ma')->comment('Mã chương trình khuyến mãi');
            $table->string('km_ten', 200);
            $table->text('km_noiDung');
            $table->dateTime('km_batDau')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('km_ketThuc')->nullable()->default(NULL);
            $table->string('km_giaTri', 50)->default('100;100');
            $table->unsignedSmallInteger('nv_nguoiLap')->comment('Người lập km');
            $table->dateTime('km_ngayLap')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedSmallInteger('nv_kyNhay')->default('1')->comment('Nv ký nháy');
            $table->dateTime('km_ngayKyNhay')->nullable()->default(NULL)->comment('Thời điểm ký nháy kế hoạch khuyến mãi');
            $table->unsignedSmallInteger('nv_kyDuyet')->default('1')->comment('Nv ký duyệt');
            $table->dateTime('km_ngayDuyet')->nullable()->default(NULL);
            $table->timestamp('km_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('km_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedTinyInteger('km_trangThai')->default('2')->comment('Trạng thái: 1-khóa, 2: khả dụng');

            $table->foreign('nv_nguoiLap')->references('nv_ma')->on('nhanvien')->onDelete('cascade')->onUpdate('cascade'); 
            $table->foreign('nv_kyNhay')->references('nv_ma')->on('nhanvien')->onDelete('cascade')->onUpdate('cascade'); 
            $table->foreign('nv_kyDuyet')->references('nv_ma')->on('nhanvien')->onDelete('cascade')->onUpdate('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khuyenmai');
    }
}
