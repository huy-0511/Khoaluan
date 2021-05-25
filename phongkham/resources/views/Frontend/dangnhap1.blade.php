@extends('Frontend.master1')
@section('content')

<div class="dichvu">
	<p><i class="ti-home"></i>  Đăng nhập</p>
	<div class="vien"></div>
</div>
<div class="container">
	<div class="login" style="margin-top: -29px;margin-bottom: 190px;">
		<h3>Đăng Nhập</h3>
		 @if(session('alert'))

		    <section class='alert alert-danger'>{{session('alert')}}</section>
		  @endif
			 @if(session('success'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-check" ></i> Thông báo!</h4>
                            {{session('success')}}
                        </div>
                    @endif
			<form action="" method="POST">
				@csrf
				<input type="text" class="form-control" name="email" placeholder="E-Mail" value="{{old('email')}}"> 
				@if($errors->first('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
      			<input type="password" class="form-control" name="password" placeholder="password" value="{{old('password')}}">
      			@if($errors->first('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
			<!-- <input class="ip" type="checkbox"> -->
			<button type="submit" class="btn btn-primary" style="margin-left: 326px;">Đăng Nhập</button>
			<a href="{{url('/quenmatkhau')}}" class="btn btn-danger" style="margin-top: 13px;">Quên mật khẩu</a>
			</form>
	</div>
</div>

</div>
</div>
@endsection