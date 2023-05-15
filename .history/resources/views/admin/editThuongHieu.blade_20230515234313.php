@extends('admin.dashboard')
@section('admin')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Cập nhật Thương Hiệu</h2>
        </div>
        <div class="panel-body">
            @foreach ($edit_Category as $key => $edit_value)
            <form method="post" action="{{URL::to('/save-ThuongHieu')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">

                    <label for="name">Tên Thương Hiệu:</label>
                    <input type="text" name="idthuonghieu" value=" " hidden="true">

                    <input required="true" type="text" class="form-control" id=" " name="tenthuonghieu" value=" ">
                </div>
                <button name="add_ThuongHieu" class="btn btn-success">Lưu</button>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection