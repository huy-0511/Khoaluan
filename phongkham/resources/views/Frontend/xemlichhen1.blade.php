@extends('Frontend.master1')
@section('content')   
   <div class="dichvu">
          <p><i class="ti-home"></i> Trang chủ > Lịch hẹn</p>
          <div class="vien"></div>
        </div>
    <div class="xemlichdat">
        <div class="title-lichdat">Thông tin lịch đặt</div>
        <table>
            <tr>
                <th>Họ tên</th>
                <th>Bác sĩ</th>
                <th>Ngày</th>
                <th>Giờ</th>
                <th>Dịch vụ</th>
                <th>Trạng thái</th>
            </tr>
           @foreach($lichhen as $value)
           		@foreach($user as $value1)	 
            <tr>
                <td>
                 	@if($value['idtaikhoan'] == $value1['idtaikhoan'])
                        {{$value1['name']}}
                    @endif
            	</td>
                <td>
            	 	@foreach($bacsi as $bacsi1)
                        @if($value['idbacsi'] == $bacsi1['idbacsi'])
                            {{$bacsi1['hoten']}}
                        @endif
                    @endforeach
                </td>
                <td>
                	{{$value['ngay']}}
            	</td>
                <td>
                	{{$value['gio']}}
                </td>
                <td>
                	@foreach($dichvu as $value2)
                        @if($value['iddichvu'] == $value2['iddichvu'])
                            {{$value2['tendichvu']}}
                        @endif
                    @endforeach
                </td>
                <td>
                	{{$value['trangthai']}}
                </td>
            </tr>
            	@endforeach
           @endforeach
        </table>
      </div>
    </div>
   </div>
@endsection
