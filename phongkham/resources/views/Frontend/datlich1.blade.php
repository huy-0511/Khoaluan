@extends('Frontend.master1')
@section('content')
<div class="dichvu">
	<p><i class="ti-home"></i>  Trang chủ > Đặt lịch</p>
	<div class="vien"></div>

</div>


  @if(session('alert'))

    <section class='alert alert-danger'>{{session('alert')}}</section>
  @endif
	@if(session('success'))
      <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-check" ></i> Thông báo!</h4>
          {{session('success')}}
      </div>
  @endif	  


<form action="" method="POST">
	@csrf
	<div class="datlich-kham">                  
	<div class="title1-datlich">ĐẶT LỊCH KHÁM</div>
	<div class="form-datlich"> 
		<input type="date" name="ngay" class="date-datlich" value="{{old('ngay')}}" placeholder="Ngày tháng">
		@if($errors->first('ngay'))
              <span class="text-danger">{{ $errors->first('ngay') }}</span>
         @endif
		
	</div>              
	<div class="form-select-dichvu">
		<div>
			<select name="gio" id="gio" class="form-controll">
			<option value>Chọn giờ</option> 
			  <option value="08:00"><?php echo "08:00"; ?></option>
              <option value="09:00"><?php echo "09:00"; ?></option>
              <option value="10:00"><?php echo "10:00"; ?></option>
              <option value="11:00"><?php echo "11:00"; ?></option>
              <option value="13:00"><?php echo "13:00"; ?></option>
              <option value="14:00"><?php echo "14:00"; ?></option>
              <option value="15:00"><?php echo "15:00"; ?></option>
              <option value="16:00"><?php echo "16:00"; ?></option>
              <option value="17:00"><?php echo "17:00"; ?></option>
              <option value="18:00"><?php echo "18:00"; ?></option>
		</select>
		 @if($errors->first('gio'))
              <span class="text-danger">{{ $errors->first('gio') }}</span>
         @endif
		</div>
	</div>
	<div class="form-select-dichvu">
		<select name="iddichvu" class="form-controll">
			<option value>Chọn dịch vụ</option>
			@foreach($dichvu as $value)
				<option {{old('iddichvu') == $value['iddichvu'] ? 'selected' : '' }}  value="{{$value['iddichvu']}}">{{$value['tendichvu']}}</option>
			@endforeach
		</select>
		 @if($errors->first('iddichvu'))
              <span class="text-danger">{{ $errors->first('iddichvu') }}</span>
         @endif

	</div>
	<div class="form-select-dichvu">
		<select name="idbacsi" class="form-controll">
			<option value>Chọn Bác sĩ</option>
			@foreach($bacsi as $bacsi)
				<option {{old('idbacsi') == $bacsi['idbacsi'] ? 'selected' : '' }}  value="{{$bacsi['idbacsi']}}">{{$bacsi['hoten']}}</option>
			@endforeach
		</select>
		 @if($errors->first('idbacsi'))
              <span class="text-danger">{{ $errors->first('idbacsi') }}</span>
         @endif
	</div>
	<div class="form-mota">
		<textarea name="mota" id="dsc" cols="10" rows="5" class="dsc" placeholder="Nội dung đặt lịch">{{old('mota')}}</textarea>
		 @if($errors->first('mota'))
              <span class="text-danger">{{ $errors->first('mota') }}</span>
         @endif
	</div>

	<button type="submit" style="margin-left: 500px;" class="btn btn-primary">Đặt lịch</button>
</div>
</form>
</div>
@endsection
