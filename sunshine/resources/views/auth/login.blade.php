@extends('backend.layouts.master-fullpage') //kế thua tu trang nay

@section('content') //them vao lo content cua trang master-fullpage
<br><br><br>
<form name="frmdangnhap" id="frmdangnhap" method="post" action="{{ route('login') }}">
    {{ csrf_field() }} 
    <div class="container mt-4">
                <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-group">
                    <div class="card p-4">
                        <div class="card-body">
                            <h1>Đăng nhập</h1>
                            <p class="text-muted">Nhập thông tin Tài khoản</p>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon-user"></i>
                                    </span>
                                </div>
                                <input class="form-control" type="text" name="nv_taiKhoan" placeholder="Tên đăng nhập">
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon-lock"></i>
                                    </span>
                                </div>
                                <input class="form-control" type="password" name="nv_matKhau" placeholder="Mật khẩu">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                    </div>
                                
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button class="btn btn-primary px-4" name="btnDangNhap">Đăng nhập</button>
                                </div>
                                <div class="col-6 text-right">
                                    <!-- <button class="btn btn-link px-0" type="button">Quên mật khẩu?</button> -->
                                    <a class="btn btn-link px-0" href="{{ route('password.request') }}">Quên mật khẩu?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                        <div class="card-body text-center">
                            <div>
                                <h2>Đăng ký</h2>
                                <p>Đăng ký để làm thành viên của Trang web bán hàng. Bạn sẽ được một số quyền lợi nhất
                                    định khi làm thành viên của Chúng tôi.</p>
                                <a class="btn btn-primary active mt-3" href="{{ route('register') }}">Đăng
                                    ký ngay!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>