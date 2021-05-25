@extends('Frontend.master1')
@section('content')

<div class="dichvu">
	<p><i class="ti-home"></i>Điền mật khẩu mới</p>
	<div class="vien"></div>
</div>
<div class="container">
	<div class="login" style="margin-top: -29px;margin-bottom: 190px;">
		<h3>Điền mật khẩu mới</h3>
		 </thead>
        @if($errors->any())
              <div class="alert alert-danger">
                  <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
              </div>
        @endif
			 @if(session('success'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-check" ></i> Thông báo!</h4>
                            {{session('success')}}
                        </div>
                    @endif
                	<?php 
             			$token = $_GET['token'];
             			$email = $_GET['email']; 
             		 ?>
			<form action="{{url('/reset-new-pass')}}" method="POST">
				@csrf
				<input type="password" class="form-control" name="pass_user" placeholder="Nhập mật khẩu mới">
				<input type="hidden" class="form-control" name="email" value="{{$email}}">
				<input type="hidden" class="form-control" name="token" value="{{$token}}">
			<!-- <input class="ip" type="checkbox"> -->
			<button type="submit" class="btn btn-primary" style="margin-left: 368px;">Gửi</button>
			<a href="{{url('/khachhang/dangnhap')}}" class="btn btn-danger" style="margin-top: 13px;">Back</a>
			</form>
	</div>
</div>

</div>
</div>
@endsection