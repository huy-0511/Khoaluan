@extends('Backend.master')
@section('content')

	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     Danh sách tài khoản
    </div>
  <!--   <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div> -->
    <div class="table-responsive">
      <table class="table table-striped b-t b-light" id="myTable">
        <thead>

          <tr>
           
            <th>ID</th>
            <th>Họ tên</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Ngày sinh</th>
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
       <?php 
          $index = 0;
          for ($i=0; $i < $count; $i++) { 
            $index++;
          }
        ?>
        <tbody>
         @foreach($data as $value) 
          <tr>
            <td>{{$index++}}</td>
            <td>{{$value['name']}}</td>
            <td>{{$value['email']}}</td>
            <td>{{$value['diachi']}}</td>
            <td>{{$value['sdt']}}</td>
            <td>{{$value['ngaysinh']}}</td>

             <td>
              <a href="{{url('/quanlytaikhoan/edit/'.$value['idtaikhoan'])}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('Bạn có chắc là muốn xóa không?')" href="{{url('/quanlytaikhoan/delete/'.$value['idtaikhoan'])}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
              </a>
            </td>
          </tr>
          @endforeach
     
        </tbody>
        
      </table>
    </div>
  
  </div>
</div>
@endsection