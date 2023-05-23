@extends('admin.dashboard')
@section('admin')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Thêm Sản Phẩm</h2>
        </div>
        <div class="panel-body">
            <form method="post" action="{{URL::to('/save-ThuongHieu')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Tên Sản Phẩm:</label>

                    <input required="true" name="TenPhim" type="text" class="form-control" id="title" name="title"
                        value=" ">
                </div>
                <div class="form-group">
                    <label for="name">Loại:</label>
                    <select name="TenTheLoai" id="" class="form-control">


                        <option value=" ">Chọn thể loại</option>
                        @foreach ( $Theloai as $data)
                        <option value="{{ $data->TenTheLoai }}">{{ $data->TenTheLoai }}</option>
                        @endforeach

                    </select>
                </div>
                <button name="add_ThuongHieu" class="btn btn-success">Lưu</button>
            </form>
        </div>
    </div>
</div>
@endsection