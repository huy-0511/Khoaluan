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
						CHI TIẾT LICH HEN
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
                              @foreach($taikhoan as $value)
                                @if($value['id'] == $data['idtaikhoan'])
                            	<div class="form-group">
                            		<label for="exampleInputEmail1">Tên</label>
                            		<input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Họ tên" value="<?php echo $value['name'] ?>">
                            	</div>
                                @endif
                              @endforeach
                              <div class="form-group">
                                <label for="exampleInputEmail1">Mã lịch khám</label>
                                <input type="text" name="tendichvu" class="form-control" id="exampleInputEmail1" placeholder="Mã lịch khám" value="{{$data['code']}}">
                              </div> 
                          	<div class="form-group">
                              @foreach($taikhoan as $value)
                                @if($value['idtaikhoan'] == $data['idtaikhoan'])
                          		<label for="exampleInputEmail1">Email</label>
                          		<input type="text" name="tendichvu" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm" value="<?php echo $value['email'] ?>">
                               @endif
                              @endforeach
                          	</div>
                          	<div class="form-group">
                              @foreach($taikhoan as $value)
                                @if($value['idtaikhoan'] == $data['idtaikhoan'])
                          		<label for="exampleInputEmail1">Số điệnt thoại</label>
                          		<input type="text" name="tendichvu" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm" value="<?php echo $value['sdt'] ?>">
                                @endif
                              @endforeach
                          	</div>
                          	<div class="form-group">
                          		<label for="exampleInputEmail1">Ngày</label>
                          		<input type="text" name="tendichvu" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm" value="{{$data['ngay']}}">
                          	</div>
                          	<div class="form-group">
                          		<label for="exampleInputEmail1">Giờ</label>
                          		<input type="text" name="tendichvu" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm" value="{{$data['gio']}}">
                          	</div>  
                          	<div class="form-group">
                               @foreach($dichvu as $dichvu)
                                @if($dichvu['iddichvu'] == $data['iddichvu']) 

                          		<label for="exampleInputEmail1">Dịch vụ</label>
                          		<input type="text" name="tendichvu" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm" value="<?php echo $dichvu['tendichvu'] ?>">
                               @endif
                              @endforeach
                          	</div>
                            <div class="form-group">
                               @foreach($bacsi as $bacsi)
                                @if($bacsi['idbacsi'] == $data['idbacsi']) 

                              <label for="exampleInputEmail1">Bác sĩ phụ trách</label>
                              <input type="text" name="tendichvu" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm" value="<?php echo $bacsi['hoten'] ?>">
                               @endif
                              @endforeach
                            </div>
                            @if($data['trangthai'] == "Đang chờ xác nhận")
                            <form>
                              @csrf
                                <select class="form-control order_details">
                                <option id="{{$data['id']}}" selected value="Đang chờ xác nhận">Chưa xác nhận</option>  
                                <option id="{{$data['id']}}" value="Đã xác nhận">Đã xác nhận</option>
                              </select>  
                            </form>
                          	@else
                               
                              <form>
                              @csrf
                                <select class="form-control order_details">
                                <option  disabled id="{{$data['id']}}" value="Đang chờ xác nhận">Chưa xác nhận</option>  
                                <option id="{{$data['id']}}"selected value="Đã xác nhận">Đã xác nhận</option>
                              </select>  
                              </form>
                            @endif               
                          	<p><a href="{{url('/quanlylichhen')}}" style="float: right; margin-top: 10px " class="btn btn-small btn-danger">Back</a></p>
                            <p><a href="{{url('/email')}}" style="float: right; margin-top: 10px " class="btn btn-small btn-success">Send Mail</a></p>
                          </form>
                      </div>
                  </section>

              </div>
          </div>


          <!-- page end-->
      </div>
  </section>
  <script type="text/javascript">
      $(document).ready(function(){
        $(".order_details").change(function(){
            var trangthai = $(this).val();
            var id = $(this).children(":selected").attr("id");
            var _token = $('input[name="_token"]').val();
            $.ajax({
              url: "{{url('/update-lichhen')}}",
              method: "POST",
              data: {trangthai:trangthai,id:id,_token:_token},
               success: function (data) {
                      alert("Thay đổi trạng thái thành công");
                      location.reload();
                },
                error: function() {
                   console.log(t);
                }
              });
            });
      });
  </script>
  @endsection