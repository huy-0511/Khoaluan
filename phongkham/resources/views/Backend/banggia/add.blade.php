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
                THÊM BẢNG GIÁ
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
                <form role="form" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputPassword1">Tên dịch vụ</label> 
                        <select name="iddichvu" class="form-control input-lg m-bot15">
                        <option value="">Chọn dịch vụ</option>   
                        @foreach($dichvu as $value)                    
                            <option {{old('iddichvu') == $value['iddichvu'] ? 'selected' : '' }}  value="{{$value['iddichvu']}}">{{$value['tendichvu']}}</option>
                         @endforeach  
                        </select>
                        @if($errors->first('iddichvu'))
                            <span class="text-danger">{{ $errors->first('iddichvu') }}</span>
                        @endif
                    </div>                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Đơn vị</label>
                        <input type="text" name="donvi" class="form-control" id="exampleInputEmail1" placeholder="Đơn vị">
                        @if($errors->first('donvi'))
                            <span class="text-danger">{{ $errors->first('donvi') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Đơn giá</label>
                        <input type="text" name="dongia" class="form-control" id="exampleInputEmail1" placeholder="Đơn giá">
                        @if($errors->first('dongia'))
                            <span class="text-danger">{{ $errors->first('dongia') }}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-success">Add</button>
                    <p><a href="{{url('/quanlybanggia')}}"  class="btn btn-small btn-danger">Back</a></p>
                </form>
            </div>
        </section>

        </div>
        </div>


        <!-- page end-->
        </div>
</section>
@endsection