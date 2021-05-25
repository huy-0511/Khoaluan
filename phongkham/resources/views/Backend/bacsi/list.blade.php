@extends('Backend.master')
@section('content')

	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     Danh sách bác sĩ
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light" id="myTable">
        <thead>
          <tr>      
            <th>ID</th>
            <th>Tên Bác sĩ</th>
            <th>Hình ảnh</th>
            <th style="width:30px;"></th>
          </tr>
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
       
        <tbody>
        @foreach($data as $value)
          <tr>
            <td>{{$value['idbacsi']}}</td>
            <td>{{$value['hoten']}}</td>
            <td><img src="{{pare_url_file($value['hinhanh'])}}" height="100px" width="100px"></td>
            <td ></td>
             <td>
              <a href="{{url('/hosobacsi/edit/'.$value['idbacsi'])}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('Bạn có chắc là muốn xóa không?')" href="{{url('/hosobacsi/delete/'.$value['idbacsi'])}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
              </a>
            </td>
          </tr>
     	@endforeach
        </tbody>
        
      </table>
      <p><a href="{{url('/hosobacsi/add')}}" class="btn btn-success" style="float: right;">Add</a></p>
    </div>
  
  </div>
</div>
@endsection