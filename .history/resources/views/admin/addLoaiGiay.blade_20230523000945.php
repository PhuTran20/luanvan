@extends('admin.dashboard')
@section('admin')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Thêm Loại Giày</h2>
        </div>
        <div class="panel-body">
            <form method="post" action="{{URL::to('/save-Product')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Tên Thương Hiệu:</label>
                    <select name="tenthuonghieu" id="" class="form-control">


                        <option value=" ">Chọn Thương Hiệu</option>
                        @foreach ( $ThuongHieu as $data)
                        <option value="{{ $data->tenthuonghieu }}">{{ $data->tenthuonghieu }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="form-group">

                    <label for="name">Tên loại giày :</label>
                    <input type="text" name="id" value=" " hidden="true">

                    <input required="true" type="text" class="form-control" id=" " name="name_category" value=" ">
                </div>
                <button name="add_Product" class="btn btn-success">Lưu</button>
            </form>
        </div>
    </div>
</div>
@endsection