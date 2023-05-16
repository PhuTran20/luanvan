@extends('admin.dashboard')
@section('admin')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Thêm loại phim</h2>
        </div>
        <div class="panel-body">
            <form method="post" action="{{URL::to('/save-Category')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">

                    <label for="name">Tên Loại:</label>
                    <input type="text" name="tenthuonghieu" value=" " hidden="true">

                    <input required="true" type="text" class="form-control" id=" " name="TenTheLoai" value=" ">
                </div>
                <button name="add_Category" class="btn btn-success">Lưu</button>
            </form>
        </div>
    </div>
</div>
@endsection