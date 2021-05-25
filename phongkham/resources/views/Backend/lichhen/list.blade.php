@extends('Backend.master')
@section('content')

	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     Danh sách lịch hẹn
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
            <th>Họ tên</th>
            <th>SĐT</th>
            <th>Email</th>
            <th>Ngày</th>
            <th>Giờ</th>
            <th>Dịch vụ</th>
            <th>Mô tả</th>
            <th>Trang thái</th>
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
          @foreach($data as $lichhen)
            
            <tr>
              <td>
                @foreach($taikhoan as $value)
                  @if($lichhen['idtaikhoan'] == $value['idtaikhoan'])
                    <?php echo $value['name'] ?>
                  @endif
                @endforeach
              </td>
              <td>
                @foreach($taikhoan as $value)
                  @if($lichhen['idtaikhoan'] == $value['idtaikhoan'])
                    <?php echo $value['sdt'] ?>
                  @endif
                @endforeach
              </td>
              <td>
                @foreach($taikhoan as $value)
                  @if($lichhen['idtaikhoan'] == $value['idtaikhoan'])
                    <?php echo $value['email'] ?>
                  @endif
                @endforeach
              </td>
              <td>{{$lichhen['ngay']}}</td>
              <td>{{$lichhen['gio']}}</td>
              <td>{{$lichhen['iddichvu']}}</td>
              <td>{{$lichhen['mota']}}</td>
              <td>{{$lichhen['trangthai']}}</td>
              <td><a href="{{url('/chitietlichhen/'.$lichhen['id'])}}">Chi tiết</a></td>
            </tr>
           
          @endforeach
        </tbody>
        
      </table>
       {{ $data->links() }}
    </div>
   
  </div>
</div>

@endsection