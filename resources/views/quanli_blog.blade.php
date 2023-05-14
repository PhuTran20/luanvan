@extends('admin.dashboard')
@section('admin')
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Bảng BLOG</strong>
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-outline-primary">
                                    <i class="fa fa-star"></i>
                                    Thêm user</button>
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Bài viết</th>
                                            <th>Ảnh</th>
                                            <th>Nút</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td style="width:500px">Giày tennis là một phụ kiện thể thao không thể thiếu khi chơi tennis. Bởi vậy, việc chọn được một đôi giày phù hợp để chơi tennis là vô cùng quan trọng. Trên thị trường hiện nay đang được bày bán nhiều sản phẩm giày tennis đến từ các nhãn hiệu nổi tiếng như adidas, Nike, Wilson, JGBL, v.v. dành cho sân cỏ nhân tạo, sân đất nện hay mọi mặt sân, có lẽ sẽ khiến bạn phân vân khi lựa chọn.
                                                Do vậy, dưới đây mybest sẽ giới thiệu cho các bạn cách chọn và top 10 giày tennis tốt nhất được ưa chuộng hiện nay. Hãy tham khảo bài viết để lựa chọn cho thật phù hợp nhé.</td>
                                            <td style="max-width:70px"><img src="{{url('backend')}}/img/giay2.jpg" alt="Logo"></td>
                                            <td><button type="button" class="btn btn-outline-secondary">
                                                <i class="fa fa-edit"></i>Sửa</button>
                                                <button type="button" class="btn btn-outline-danger">
                                                    <i class="ti-trash"></i>  Xóa</button>
                                            </td>
                                        </tr>
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        <div class="clearfix"></div>

     

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="{{url('backend')}}/js/main.js"></script>


    <script src="{{url('backend')}}/js/lib/data-table/datatables.min.js"></script>
    <script src="{{url('backend')}}/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="{{url('backend')}}/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="{{url('backend')}}/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="{{url('backend')}}/js/lib/data-table/jszip.min.js"></script>
    <script src="{{url('backend')}}/js/lib/data-table/vfs_fonts.js"></script>
    <script src="{{url('backend')}}/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="{{url('backend')}}/js/lib/data-table/buttons.print.min.js"></script>
    <script src="{{url('backend')}}/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="{{url('backend')}}/js/init/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>
@endsection
