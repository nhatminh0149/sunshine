<h1>HELLO LAVAREL</h1>

Tên bạn là: <span style="color: red">@{{ $hotenTrongView }}</span>

<ul>
    @foreach($dataLoai as $item)
    <li>{{ $item->l_ten }} - {{ $item->l_trangThai == 2 ? 'Khả dụng' : 'Khóa'}}</li>
    @endforeach
</ul>