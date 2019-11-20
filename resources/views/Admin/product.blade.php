@extends('Admin.master')
@section('title','Danh sách phim')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Phim</h1>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="panel panel-primary">
                <div class="panel-heading">Danh sách Phim</div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <div class="table-responsive">
                            <a href="http://localhost/doan/public/Admin/phim/add" class="btn btn-primary">Thêm Phim</a>
                            <table class="table table-bordered" style="margin-top:20px;">
                                <thead>
                                    <tr class="bg-primary">
                                        <th>ID</th>
                                        <th width="10%">Tên Phim</th>
                                        <th width="10%">Đạo diễn</th>
                                        <th width="10%">Diễn viên</th>
                                        <th width="10%">Thời lượng</th>
                                        <th width="15%">Nội dung</th>
                                        <th width="15%">Ảnh Phim</th>
                                        <th width="10%">Video</th>
                                        <th width="10%">Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($phim as $value)
                                    <tr>
                                        <td>{{$value->id_phim}}</td>
                                        <td>{{$value->ten_phim}}</td>
                                        <td>{{$value->daodien}}</td>
                                        <td>{{$value->dienvien}}</td>
                                        <td>{{$value->thoiluong}}</td>
                                        <td>{{$value->noidung}}</td>
                                        <td>
                                            <img width="200px"
                                                src="source/images/list-film/dangchieu/{{$value->hinh_title}}"
                                                class="thumbnail">
                                        </td>
                                        <td>{{$value->video}}</td>
                                        <td>
                                            <a href="#" class="btn btn-warning"><i class="fa fa-pencil"
                                                    aria-hidden="true"></i> Sửa</a>
                                            <a href="#" class="btn btn-danger"><i class="fa fa-trash"
                                                    aria-hidden="true"></i> Xóa</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>
<!--/.main-->
@endSection