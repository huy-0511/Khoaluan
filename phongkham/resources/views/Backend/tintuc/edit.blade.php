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
                CHỈNH SỬA TIN TỨC
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
                <form role="form" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên tin tức</label>
                        <input type="text" name="tentintuc" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm" value="{{old('tentintuc',$tintuc['tentintuc'])}}">
                        @if($errors->first('tentintuc'))
                            <span class="text-danger">{{ $errors->first('tentintuc') }}</span>
                        @endif
                    </div>                   
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mô tả</label>
                        <textarea class="form-control" name="motatintuc" placeholder="Mô tả">{{old('motatintuc',$tintuc['motatintuc'])}}</textarea>
                        @if($errors->first('motatintuc'))
                            <span class="text-danger">{{ $errors->first('motatintuc') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nội dung</label>
                        <textarea class="form-control" name="noidungtintuc" placeholder="Nội dung">{{old('noidungtintuc',$tintuc['noidungtintuc'])}}</textarea>
                        @if($errors->first('noidungtintuc'))
                            <span class="text-danger">{{ $errors->first('noidungtintuc') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                        <input type="file" name="hinhanhtintuc" class="form-control" id="exampleInputEmail1" >
                         <img src="{{pare_url_file($tintuc['hinhanhtintuc'])}}" height="100" width="100">
                         
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                    <p><a href="{{url('/quanlytintuc')}}"  class="btn btn-success">Back</a></p>
                </form>
            </div>
        </section>

        </div>
        </div>


        <!-- page end-->
        </div>
</section>
@endsection