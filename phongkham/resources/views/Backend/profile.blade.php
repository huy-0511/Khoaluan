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
                Thông tin
            </header>
            <div class="panel-body">
                <div class="position-center">
                @if(session('success'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-check" ></i> Thông báo!</h4>
                            {{session('success')}}
                        </div>
                    @endif
                 @foreach($user as $value)
                <form role="form" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm" value="{{old('name',$value['name'])}}">
                        @if($errors->first('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>                   
                  	 <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm" value="{{old('email',$value['email'])}}">
                        @if($errors->first('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="******" value="{{old('password',$value['password'])}}">
                    
                    </div>     
                    <div class="form-group">
                        <label for="exampleInputEmail1">Level</label>
                        <input type="text" name="level" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm" value="{{old('level',$value['level'])}}">
                    </div>          
                    <button type="submit" class="btn btn-success">Cập nhật</button>
                    <p><a href="{{url('/dashboard')}}"  class="btn btn-danger">Back</a></p>
                </form>
                @endforeach
            </div>
        </section>

        </div>
        </div>


        <!-- page end-->
        </div>
</section>
@endsection