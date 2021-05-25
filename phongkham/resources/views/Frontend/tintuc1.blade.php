@extends('Frontend.master1')
@section('content')      
      <div class="dichvu">
        <p><i class="ti-home"></i> Tin tức</p>
        <div class="vien"></div>
        </div>
          <!-- begin dịch vụ nha khoa -->
        <div class="list-page-tintuc">
          @foreach($tintuc as $value)
          <div class="item-tintuc">
                <div class="imgs" >
                    <img  src="{{pare_url_file($value->hinhanhtintuc)}}"></a>
                </div>    
                <a class="click-tintuc" href=""><h3>{{$value['tentintuc']}}</h3></a>                                
                <p>{{$value['motatintuc']}}}</p>
                <a href="{{url('/chitiettintuc/'.$value['idtintuc'])}}" class="viewmore">Chi tiết</a>
          </div>
          @endforeach
      {{ $tintuc->links() }}
      </div>
        
    </div>
    
@endsection

