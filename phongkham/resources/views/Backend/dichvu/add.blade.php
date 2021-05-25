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
                THÊM DỊCH VỤ
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <!-- @if($errors->any())
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
                        <label for="exampleInputEmail1">Tên dịch vụ</label>
                        <input type="text" name="tendichvu" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm" value="{{old('tendichvu')}}">
                        @if($errors->first('tendichvu'))
                            <span class="text-danger">{{ $errors->first('tendichvu') }}</span>
                        @endif
                    </div>                   
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mô tả</label>
                        <textarea class="form-control" name="motadichvu" placeholder="Mô tả">{{old('motadichvu')}}
                        </textarea>
                        @if($errors->first('motadichvu'))
                            <span class="text-danger">{{ $errors->first('motadichvu') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nội dung</label>
                        <textarea class="form-control" name="noidungdichvu" placeholder="Nội dung">{{old('noidungdichvu')}}
                        </textarea>
                        @if($errors->first('noidungdichvu'))
                            <span class="text-danger">{{ $errors->first('noidungdichvu') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hình ảnh</label>
                        <input type="file" name="hinhanhdichvu" class="form-control" id="exampleInputEmail1" >
                        @if($errors->first('hinhanhdichvu'))
                            <span class="text-danger">{{ $errors->first('hinhanhdichvu') }}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-success">Add</button>
                    <p><a href="{{url('/quanlydichvu')}}"  class="btn btn-small btn-danger">Back</a></p>
                </form>
            </div>
        </section>

        </div>
        </div>


        <!-- page end-->
        </div>
</section>
@endsection