@extends('admin_material_design.admin')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
      <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
      <!-- /.modal -->
      <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->     <!-- BEGIN PAGE HEADER-->
      <h3 class="page-title">
      Coolorganic <small>thực phẩm sạch</small>
      </h3>
      <div class="page-bar">
        <ul class="page-breadcrumb">
          <li>
            <i class="fa fa-home"></i>
            <a href="{{route('homeadmin')}}">Trang chủ</a>
            <i class="fa fa-angle-right"></i>
          </li>
          <li>
            <a href="{{route('adminsuper')}}">Sản phẩm</a>
          </li>
        </ul>
      </div>
      <!-- END PAGE HEADER-->
      <!-- BEGIN DASHBOARD STATS -->
		<div class="row">
			<div class="portlet light">
				<div class="portlet-title">
					<div class="caption font-red-sunglo">
						<span class="caption-subject bold uppercase">Thêm sản phẩm</span>
					</div>
					
				</div>
				<div class="portlet-body form" style="height: auto;">
					<form action="{{route('user.add')}}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="form-body">
							<div class="form-group form-md-line-input has-success form-md-floating-label">
								<div class="input-icon right">
									<input type="text" name="name" value="" class="form-control">
									<label for="form_control_1">Tên tài khoản</label>
									<span class="help-block">Mời bạn nhập tên tài khoản</span>
									 
								</div>
							</div>
							<div class="form-group form-md-line-input ">
								<div class="row">
									<div class="col-md-6">
										<div class="input-icon right">
											<input type="file" id="product_image" name="image" value="" class="form-control">
										</div>
										@if($errors->first('image'))
											<span class="text-danger">{{$errors->first('image')}}</span>
										@endif
									</div>
									<div class="col-md-6">
										<div class="input-icon right">
											<img id="imageTarget" class="img-responsive" src="{{ asset('admins/assets/admin/layout/img/default.png')}}" style="height: 200px;">
										</div>
									</div>
								</div>
							</div>
							<div class="form-group form-md-line-input has-success form-md-floating-label">
								<div class="input-icon right">
									<input type="text" name="email" value="" class="form-control">
									<label for="form_control_1">Email</label>
									<span class="help-block">Mời bạn nhập email</span>
									  
								</div>
							</div>
							<div class="form-group form-md-line-input has-success form-md-floating-label">
								<div class="input-icon right">
									<input type="password" name="password" value="" class="form-control">
									<label for="form_control_1">Mật khẩu</label>
									<span class="help-block">Mời bạn nhập mật khẩu</span>
									  
								</div>
							</div>
							<div class="form-group form-md-line-input has-success form-md-floating-label">
								<div class="input-icon right">
									<input type="password" name="cf_password" value="" class="form-control">
									<label for="form_control_1">Nhập lại mật khẩu</label>
									<span class="help-block">Mời bạn nhập lại mật khẩu</span>
									  
								</div>
							</div>
							{{-- <div class="form-group form-md-line-input has-success form-md-floating-label">
								<div class="input-icon right">
									<label for="form_control_1">Quyền</label>
									<select name="role" class="form-control">
										<option value="Editor">Editor</option>
										<option value="Shipper">Shipper</option>
									</select>
									  
								</div>
							</div> --}}
						</div>
						<div class="form-actions noborder">
							<button type="submit" class="btn btn-primary">Gửi thông tin</button>
							<button type="button" class="btn btn-danger"><a href="{{route('adminsuper')}}" style="text-decoration: none; color: #fff;">Quay lại</a></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
 
	function getBase64(file, selector) {
	   var reader = new FileReader();
	   reader.readAsDataURL(file);
	   reader.onload = function () {
		$(selector).attr('src', reader.result);
	   };
	   reader.onerror = function (error) {
		 console.log('Error: ', error);
	   };
	}
	var img = document.querySelector('#product_image');
	img.onchange = function(){
	  var file = this.files[0];
	  if(file == undefined){
		$('#imageTarget').attr('src', "{{ asset('admins/assets/admin/layout/img/default.png')}}");
	  }else{
		getBase64(file, '#imageTarget');
	  }
	}
  </script>
@endsection();

