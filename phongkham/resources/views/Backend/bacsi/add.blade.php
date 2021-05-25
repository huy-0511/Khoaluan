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
                THÊM HỒ SƠ BÁC SĨ
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
                        <label for="exampleInputEmail1">Họ tên</label>
                        <input type="text" name="hoten" class="form-control" id="exampleInputEmail1" placeholder="Tên bác sĩ" value="{{old('hoten')}}">
                        @if($errors->first('hoten'))
                            <span class="text-danger">{{ $errors->first('hoten') }}</span>
                        @endif
                    </div>                   
                    <div class="form-group">
                        <label for="exampleInputPassword1">Học vấn</label>
                        <textarea class="form-control" name="hocvan" placeholder="Học vấn">{{old('hocvan')}}
                        </textarea>
                        @if($errors->first('hocvan'))
                            <span class="text-danger">{{ $errors->first('hocvan') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Chứng chỉ</label>
                        <textarea class="form-control" name="cacchungchidacbiet" placeholder="Chứng chỉ">{{old('cacchungchidacbiet')}}
                        </textarea>
                        @if($errors->first('cacchungchidacbiet'))
                            <span class="text-danger">{{ $errors->first('cacchungchidacbiet') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hình ảnh</label>
                        <input type="file" name="hinhanh" class="form-control" id="exampleInputEmail1" >
                        @if($errors->first('hinhanh'))
                            <span class="text-danger">{{ $errors->first('hinhanh') }}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-success">Add</button>
                    <p><a href="{{url('/hosobacsi')}}"  class="btn btn-small btn-danger">Back</a></p>
                </form>
            </div>
        </section>

        </div>
        </div>


        <!-- page end-->
        </div>
</section>
@endsection