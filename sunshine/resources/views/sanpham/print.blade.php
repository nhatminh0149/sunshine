@extends('print.layout.paper')

@section('title')
Biểu mẫu Phiếu in danh sách sản phẩm
@endsection

@section('paper-size') A4 @endsection
@section('paper-class') A4 @endsection

@section('custom-paper-css')

//tu viet nha

@endsection

@section('content')
<section class="sheet padding-10mm">
    <article>
        <table border="0" align="center">
            <tr>
                <td class="companyInfo" align="center">
                    <b>Công ty TNHH Sunshine<br />
                    http://sunshine.com/<br />
                    (0292)3.888.999 # 01.222.888.999<br /> <b>
                    <img src="{{ asset('img/download.jpg') }}"  width="150" height="150"/>
                </td>
            </tr>
        </table>
       
        <?php 
        $tongSoTrang = ceil(count($danhsachsanpham)/5);
            ?>
        <table border="1" align="center" cellpadding="5">
            <caption><b>DANH SÁCH SẢN PHẨM</b></caption>
            <tr>
                <th colspan="6" align="center">Trang 1 / {{ $tongSoTrang }}</th>
            </tr>
            <tr>
                <th>STT</th>
                <th>Hình sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Giá gốc</th>
                <th>Giá bán</th>
                <th>Loại sản phẩm</th>
            </tr>
            @foreach ($danhsachsanpham as $sp)
            <tr>
                <td align="center">{{ $loop->index + 1 }}</td>
                <td align="center">
                    <img class="hinhSanPham" src="{{ asset('storage/photos/' . $sp->sp_hinh) }}"  width="150" height="150" />
                </td>
                <td align="center">{{ $sp->sp_ten }}</td>
                <td align="center">{{ $sp->sp_giaGoc }}</td>
                <td align="center">{{ $sp->sp_giaBan }}</td>
                @foreach ($danhsachloai as $l)
                @if ($sp->l_ma == $l->l_ma)
                <td align="center">{{ $l->l_ten }}</td>
                @endif
                @endforeach
            </tr>
            @if (($loop->index + 1) % 5 == 0)
        </table>
        <div class="page-break"></div>
        <table border="1" align="center" cellpadding="5">
            <tr>
                <th colspan="6" align="center">Trang {{ 1 + floor(($loop->index + 1) / 5) }} / {{ $tongSoTrang }}</th>
            </tr>
            <tr>
                <th>STT</th>
                <th>Hình sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Giá gốc</th>
                <th>Giá bán</th>
                <th>Loại sản phẩm</th>
            </tr>
            @endif
            @endforeach
        </table>
    </article>
</section>
@endsection