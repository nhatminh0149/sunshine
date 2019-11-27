<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donhang', function (Blueprint $table) {
            $table->bigIncrements('dh_ma')->comment('Mã đơn hàng');            
            $table->unsignedBigInteger('kh_ma')->comment('Mã khách hàng');
            $table->dateTime('dh_thoiGianDatHang')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('dh_thoiGianNhanHang');
            $table->string('dh_nguoiNhan', 100);
            $table->string('dh_diaChi', 250);
            $table->string('dh_dienThoai', 11);
            $table->string('dh_nguoiGui', 100);
            $table->text('dh_loiChuc')->nullable();
            $table->unsignedTinyInteger('dh_daThanhToan')->default('0');
            $table->unsignedSmallInteger('nv_xuLy')->default('1');
            $table->dateTime('dh_ngayXuLy')->nullable()->default(NULL);
            $table->unsignedSmallInteger('nv_giaoHang')->default('1');
            $table->dateTime('dh_ngayLapPhieuGiao')->nullable()->default(NULL);
            $table->dateTime('dh_ngayGiaoHang')->nullable()->default(NULL);
            $table->timestamp('dh_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo mới');
            $table->timestamp('dh_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật');
            $table->unsignedTinyInteger('dh_trangThai')->default('1')->comment('Trạng thái đơn hàng: 1-nhận đơn, 2-xử lý đơn, 3-giao hàng, 4-hoàn tất, 5-đổi trả, 6-hủy');
            $table->unsignedTinyInteger('vc_ma')->comment('Mã vận chuyển');
            $table->unsignedTinyInteger('tt_ma')->comment('Mã thanh toán');

            $table->foreign('kh_ma')->references('kh_ma')->on('khachhang')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('nv_xuLy')->references('nv_ma')->on('nhanvien')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('nv_giaoHang')->references('nv_ma')->on('nhanvien')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('vc_ma')->references('vc_ma')->on('vanchuyen')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tt_ma')->references('tt_ma')->on('thanhtoan')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donhang');
    }
}
