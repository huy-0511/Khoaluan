@extends('Frontend.master1')
@section('content')

<div class="dichvu">
  <p><i class="ti-home"></i>Trang chủ >> Dịch vụ</p>
  <div class="vien"></div>
  </div>
    <!-- begin dịch vụ nha khoa -->
  <div class="list-page-dichvu">
    @foreach($dichvu as $value)
    <div class="item-dichvu">
          <div class="imgs" >
              <img  src="{{pare_url_file($value->hinhanhdichvu)}}"></a>
          </div>    
          <a class="click-dichvu" href=""><h3>{{$value['tendichvu']}}</h3></a>                                
          <p>{{$value['motadichvu']}}</p>
          <a href="{{url('/chitietdichvu/'.$value['iddichvu'])}}" class="viewmore">Chi tiết</a>
    </div>
    @endforeach
</div>
</div>
@endsection
