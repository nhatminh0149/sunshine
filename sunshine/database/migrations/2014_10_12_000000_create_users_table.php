<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //bảng users có sẵn trong Laravel
        Schema::create('users', function (Blueprint $table) { //Sử dung Schema Builder để tạo bảng users
            $table->increments('id'); //thêm cột id là khóa chính có kiểu int và tự động tăng
            $table->string('name'); //thêm cột name có kiểu varchar
            $table->string('email')->unique();// thêm cột email có kiểu varchar và chứa giá trị ko trùng nhau
            $table->string('password');// thêm cột password có kiểu varchar
            $table->rememberToken();//thêm remember_token như VARCHAR(100) NULL
            $table->timestamps();//thêm vào hai cột created_at và updated_at,  lưu trữ cả hai thông tin ngày tháng và thời gian
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
