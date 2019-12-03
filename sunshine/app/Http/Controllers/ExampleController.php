<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Loai;

class ExampleController extends Controller
{
    public function hello()
    {
        // khi gọi hàm view(), có một số lưu ý: 
        // - Mặc định thư mục gốc là `resources/views`
        // - Từ thư mục gốc, việc phân cách thư mục sẽ sử dụng dấu .
        // - Tên view không cần khai báo đuôi file (extension) `blade.php`
        //<script>alert("Hello JS");</script> 
        // => view được gọi hiển thị sẽ nằm trong thư mục `resources/views/example/hello.blade.php'
        $dataLoai = Loai::all();
        $hoten = 'Nhật Minh';
        
        $isAdmin = false;

        return view('pages.hello')
            ->with('isAdmin',$isAdmin)
            ->with('hotenTrongView',$hoten)
            ->with('dataLoai',$dataLoai);
        
    }
    public function gioithieubanthan()
    {
        return view('pages.gioithieubanthan');
        
    }
    public function php()
    {
        return view('pages.hoctap.php');
        
    }
}
