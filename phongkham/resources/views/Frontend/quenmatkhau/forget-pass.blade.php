@extends('Frontend.master1')
@section('content')

<div class="dichvu">
	<p><i class="ti-home"></i>Quên mật khẩu</p>
	<div class="vien"></div>
</div>
<div class="container">
	<div class="login" style="margin-top: -29px;margin-bottom: 205px;">
		<h3>Quên mật khẩu</h3>
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
			<form action="{{url('/recover-pass')}}" method="POST">
				@csrf
				<input type="text" class="form-control" name="email_user" placeholder="E-Mail">
			<!-- <input class="ip" type="checkbox"> -->
			<button type="submit" class="btn btn-primary" style="margin-left: 368px;">Gửi mail</button>
			<a href="{{url('/khachhang/dangnhap')}}" class="btn btn-danger" style="margin-top: 13px;">Back</a>
			</form>
	</div>
</div>

</div>
</div>
@endsection