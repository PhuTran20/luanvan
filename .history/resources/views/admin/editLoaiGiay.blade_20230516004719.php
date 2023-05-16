@extends('admin.dashboard')
@section('admin')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Cập nhật Loại Giày</h2>
        </div>
        <div class="panel-body">
            @foreach ($edit_LoaiGiay as $key => $edit_value)
            <form method="post" action="{{URL::to('/save-LoaiGiay')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Tên Thương Hiệu:</label>
                    <select name="tenthuonghieu" id="" class="form-control">
                         
                     
                        <option value="{{$edit_value->tenthuonghieu}}">{{$edit_value->tenthuonghieu}}</option>
                        @foreach ( $ThuongHieu as $data)
                        <option value="{{ $data->tenthuonghieu }}">{{ $data->tenthuonghieu }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">

                    <label for="name">Tên loại giày :</label>
                    <input type="text" name="id" value="{{$edit_value->idloaigiay}} " hidden="true">

                    <input required="true" type="text" class="form-control" id=" " name="name_category" value="{{$edit_value->name_category}} ">
                </div>
                <button name="add_LoaiGiay" class="btn btn-success">Lưu</button>
            </form>
            @endforeach
      
        </div>
    </div>
</div>
@endsection