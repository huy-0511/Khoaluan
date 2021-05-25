@extends('Frontend.master1')
@section('content')
<div class="dichvu">
                <p><i class="ti-home"></i>Trang chủ > Dịch vụ >{{$chitietdichvu->tendichvu}}</p>
                <div class="vien"></div>
    <div class="chitietdichvu">
        <ul class="chitiet">    
            <h3>{{$chitietdichvu->tendichvu}}</h3>
                
                <img class="img-chitiet"  src="{{pare_url_file($chitietdichvu->hinhanhdichvu)}}" alt="">
                <p>{{$chitietdichvu->noidungdichvu}}</p>
        </ul>
        <!-- <button style="align-items: center;" class="d-grid mx-auto btn btn-primary">Đặt lịch ngay</button> -->
    </div>
  </div>
   <div class="form-lien-he">
        <div class="form-datlich">
            <div  class="imgs" >
            <img  src="{{asset('Teethcare/assets/img/img-lienhe.png')}}">
            </div> 
            <div class="thong-tin-lien-he">
            <h3>Thông tin liên hệ</h3>
            <h4>Địa chỉ</h4>
            <p>20 – 22 Lê Văn Việt, Phường Hiệp Phú, Quận 9, TP.HCM</p>
            <h4>Hotline</h4>
            <p>0968 688 688</p>
            <h4>Email</h4>
            <p>dinhthanhsondtu@gmail.com</p>
            <h4>Giờ làm việc</h4>
            <p>T2 - T7: 8h00 - 20h00</br>
                CN: 8h00 - 18h00</p>
                @if(Auth::check())
               <button style="margin-bottom: 40px;" class="btn btn-success"><a style="text-decoration: none; color: white;" href="{{url('/datlich')}}">Đặt lịch ngay</a></button>
                    
                @else
                <button style="margin-bottom: 40px;" class="btn btn-success"><a style="text-decoration: none; color: white;" href="{{url('/khachhang/dangnhap')}}">Đặt lịch ngay</a></button>
                        
                @endif
            </div>
        </div>
   </div>
</div>
@endsection
