@extends('Frontend.master1')
@section('content')
<div class="dichvu">
	<p><i class="ti-home"></i>  Đăng Kí</p>
	<div class="vien"></div>
</div>
<div class="container">
	<div class="login" style="margin-top: -29px;">
		<h3>Đăng Kí</h3>
	
			 @if(session('success'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-check" ></i> Thông báo!</h4>
                            {{session('success')}}
                        </div>
                    @endif
			<form action="" method="POST">
				@csrf
				<input type="text" name="name" class="form-control" placeholder="Tên" value="{{ old('name') }}">
				@if($errors->first('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
				<input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
				@if($errors->first('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
				<input type="text" name="diachi" class="form-control" placeholder="Địa chỉ" value="{{ old('diachi') }}">
				@if($errors->first('diachi'))
                    <span class="text-danger">{{ $errors->first('diachi') }}</span>
                @endif
				<input type="text" name="sdt" class="form-control" placeholder="Số điện thoại" value="{{ old('sdt') }}">
				@if($errors->first('sdt'))
                    <span class="text-danger">{{ $errors->first('sdt') }}</span>
                @endif
				<input type="date" name="ngaysinh" class="form-control" placeholder="Ngày sinh" value="{{ old('ngaysinh') }}">
				@if($errors->first('ngaysinh'))
                    <span class="text-danger">{{ $errors->first('ngaysinh') }}</span>
                @endif
                <input type="password" name="password" class="form-control" placeholder="Mật khẩu" value="{{ old('password') }}">
				@if($errors->first('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
                <input type="password" name="password_confirmation" class="form-control" placeholder="Xác nhận mật khẩu">
			<!-- <input class="ip" type="checkbox"> -->
			<button type="submit" class="btn btn-primary" style="margin-left: 373px;">Đăng kí</button>
			<a href="{{url('/trangchu')}}" class="btn btn-danger" style="margin-top: 13px;">Quay lại</a>
			</form>
	</div>
</div>

</div>
</div>
@endsection