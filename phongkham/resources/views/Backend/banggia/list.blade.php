@extends('Backend.master')
@section('content')

	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     Danh sách bảng giá
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light" id="myTable">
        <thead>
          <tr>
       
            <th>ID</th>
            <th>Loại dịch vụ</th>
            <th>Đơn vị</th>
            <th>Đơn giá</th>
            <th>Chức năng</th>

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
          @foreach($banggia as $value)
          <tr>  
            <td>{{$value['idbanggia']}}</td>
            <td>{{$value['tendichvu']}}</td>
            <td>{{$value['donvi']}}</td>
            <td>{{$value['dongia']}}</td>

             <td>
              <a href="{{url('quanlybanggia/edit/'.$value['idbanggia'])}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('Bạn có chắc là muốn xóa không?')" href="{{url('quanlybanggia/delete/'.$value['idbanggia'])}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
              </a>
            </td>
          </tr>
          @endforeach
     
        </tbody>
        
      </table>
      {{ $banggia->links() }}
      <p><a href="{{url('/quanlybanggia/them')}}" class="btn btn-success" style="float: right;">Add</a></p>
    </div>
  
  </div>
</div>
@endsection