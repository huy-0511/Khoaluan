@extends('Frontend.master1')
@section('content')
<div class="dichvu">
	<p><i class="ti-home"></i>  Trang chủ > Quản lý thông tin cá nhân</p>
	<div class="vien"></div>
</div>
 @if(session('success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-check" ></i> Thông báo!</h4>
        {{session('success')}}
    </div>
@endif
@foreach($user as $value)
<form role="form" action="" method="POST">
	@csrf
	<div class="datlich-kham">                  
	<div class="title1-datlich">Thông Tin Cá Nhân</div>
	<div class="form-datlich" > 
		<input type="text" name="name" class="date-datlich"  value="{{old('name',$value['name'])}}">
		 @if($errors->first('name'))
              <span class="text-danger">{{ $errors->first('name') }}</span>
         @endif
		
	</div>              
	<div class="form-select-dichvu" >
		<input type="text" name="ngaysinh" class="form-controll" value="{{old('ngaysinh',$value['ngaysinh'])}}">
		@if($errors->first('ngaysinh'))
              <span class="text-danger">{{ $errors->first('ngaysinh') }}</span>
         @endif
	</div>
	<div class="form-select-dichvu" >
		<input type="text" name="email" style="margin-bottom: 15px;"  id="DICHVU" class="form-controll" placeholder="Email" value="{{old('email',$value['email'])}}">
		@if($errors->first('email'))
              <span class="text-danger">{{ $errors->first('email') }}</span>
         @endif
		<input type="password" name="password" style="margin-bottom: 15px;" id="DICHVU" class="form-controll" placeholder="********" value="{{old('password',$value['password'])}}">
		@if($errors->first('email'))
              <span class="text-danger">{{ $errors->first('email') }}</span>
         @endif
		<input type="text" name="sdt"  id="DICHVU" style="margin-bottom: 15px;" class="form-controll" placeholder="Số điện thoại" value="{{old('sdt',$value['sdt'])}}">
		@if($errors->first('sdt'))
              <span class="text-danger">{{ $errors->first('sdt') }}</span>
         @endif
		<input type="text" name="diachi"  id="DICHVU" class="form-controll"  placeholder="Địa chỉ" value="{{old('diachi',$value['diachi'])}}">
		@if($errors->first('diachi'))
              <span class="text-danger">{{ $errors->first('diachi') }}</span>
         @endif
	</div>

	<button type="submit" class="btn btn-primary">Cập Nhật</button>
</div>
</div>
</form>
@endforeach
@endsection