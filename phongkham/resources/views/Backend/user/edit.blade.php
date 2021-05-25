@extends('Backend.master')
@section('content')

    <section class="wrapper">
    <div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
        <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                CHỈNH SỬA THÔNG TIN KHÁCH HÀNG
            </header>
            <div class="panel-body">
                <div class="position-center">
<!--                     @if($errors->any())
                          <div class="alert alert-danger">
                              <ul>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                              </ul>
                          </div>
                    @endif -->
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-check" ></i> Thông báo!</h4>
                            {{session('success')}}
                        </div>
                    @endif
                <form role="form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Họ tên</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Họ tên" value="{{old('name',$data['name'])}}">
                        @if($errors->first('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Mật khẩu</label>
                        <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="*******" value="{{old('password',$data['password'])}}">
                        @if($errors->first('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Họ tên" value="{{old('email',$data['email'])}}">
                        @if($errors->first('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Địa chỉ</label>
                        <input type="text" name="diachi" class="form-control" id="exampleInputEmail1" placeholder="Họ tên" value="{{old('diachi',$data['diachi'])}}">
                        @if($errors->first('diachi'))
                            <span class="text-danger">{{ $errors->first('diachi') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Sdt</label>
                        <input type="text" name="sdt" class="form-control" id="exampleInputEmail1" placeholder="Họ tên" value="{{old('sdt',$data['sdt'])}}">
                        @if($errors->first('sdt'))
                            <span class="text-danger">{{ $errors->first('sdt') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ngày sinh</label>
                        <input type="text" name="ngaysinh" class="form-control" id="exampleInputEmail1" placeholder="ngay sinh" value="{{old('ngaysinh',$data['ngaysinh'])}}">
                        @if($errors->first('ngaysinh'))
                            <span class="text-danger">{{ $errors->first('ngaysinh') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Level</label>
                        <input type="text" name="level" class="form-control" id="exampleInputEmail1" placeholder="ngay sinh" value="{{old('level',$data['level'])}}">
                        @if($errors->first('level'))
                            <span class="text-danger">{{ $errors->first('level') }}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-success">update</button>
                    <p><a href="{{url('/quanlytaikhoan')}}"  class="btn btn-small btn-danger">Back</a></p>
                </form>
            </div>
        </section>

        </div>
        </div>


        <!-- page end-->
        </div>
</section>
@endsection