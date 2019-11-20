@extends('Admin.master')
@section('title','Thêm phim')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Phim</h1>
		</div>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">
			
			<div class="panel panel-primary">
				<div class="panel-heading">Thêm Phim</div>
				<div class="panel-body">
					<form method="post" enctype="multipart/form-data" action="{{route('postAddPhim')}}">
					@csrf
							
						<div class="row" style="margin-bottom:40px">
							<fieldset>
								@if(Session::has('flag'))
									<div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
								@endif
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Tên phim</label>
										<input required type="text" name="ten_phim" class="form-control">
									</div>
									<div class="form-group" >
										<label>Loại phim</label>
										<input required type="text" name="loai_phim" class="form-control">
									</div>
									<div class="form-group" >
										<label>Đạo diễn</label>
										<input required type="text" name="daodien" class="form-control">
									</div>
									<div class="form-group" >
										<label>Diễn viên</label>
										<input required type="text" name="dienvien" class="form-control">
									</div>
									<div class="form-group" >
										<label>Xuất Xứ</label>
										<input required type="text" name="xuatxu" class="form-control">
									</div>
									<div class="form-group" >
										<label>Thời lượng</label>
										<input required type="text" name="thoiluong" class="form-control">
									</div>
									<div class="form-group" >
										<label>Nội dung</label>
										<textarea required name="noidung" style="width:905px; height:100px"></textarea>
									</div>
									<div class="form-group" >
										<label>Ngày chiếu</label>
										<input required type="date" name="ngaychieu" class="form-control">
									</div>
									<div class="form-group" >
										<label>Hình Title </label>
										<input required type="file" name="hinh_title" class="form-control">
									</div>
									<div class="form-group" >
										<label>Hình Background </label>
										<input required type="file" name="hinh_background" class="form-control">
									</div>
									<div class="form-group" >
										<label>Hình Checkout </label>
										<input required type="file" name="hinh_checkout" class="form-control">
									</div>
									<div class="form-group" >
										<label>Video</label>
										<input required type="text" name="video" class="form-control">
									</div>
									<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
									<a href="#" class="btn btn-danger">Hủy bỏ</a>
								</div>
							</fieldset>
						</div>
					</form>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>	
<!-- /.main -->
@endSection
