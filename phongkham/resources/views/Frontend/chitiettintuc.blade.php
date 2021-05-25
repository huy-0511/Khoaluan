@extends('Frontend.master1')
@section('content')
        <div class="dichvu">
            <p><i class="ti-home"></i>Trang chủ >{{$chitiettintuc->tentintuc}}</p>
            <div class="vien"></div>
    <div class="chitiettintuc">
        <ul class="chitiet">    
            <h3>{{$chitiettintuc->tentintuc}}</h3>
                <img class="img-chitiet"  src="{{pare_url_file($chitiettintuc->hinhanhtintuc)}}" alt="">
                <p>{{$chitiettintuc->noidungtintuc}}</p>
              <!--   <h3>Nguyên nhân gây bệnh nha chu ở trẻ em</h3>
                <li> Bệnh nha chu phát sinh do các mảng bám thức ăn bám vào bề mặt răng lâu ngày. Các mảng bám tạo thành vôi răng, sinh ra vi khuẩn và hoạt động trong khoang miệng, gây viêm nhiễm nướu…Đối với trẻ em, bệnh nha chu sẽ dễ dàng phát triển hơn do răng, nướu của các bé còn non nớt, yếu và chế độ ăn uống cũng như những nhạy cảm với đồ ăn ngọt, đồ ăn sấy khô …càng làm ho bệnh phát triển dễ hơn.</li>
                <ul>    
                    <li>Hầu hết trẻ e đều có sở thích ăn đồ ngọt, uống những thức uống có ga, các loại nước uống có màu chứa nhiều loại axit…khiến cho lớp men răng non nớt dễ bị ăn mòn và tổn thương.</li>
                    <li>Hệ thống nướu, các bộ phận xung quanh răng của bé còn non yếu không có nhiều sức đề kháng lại với các loại vi khuẩn nguy hiểm, cứng đầu.</li>
                    <li>Một điều nữa mà khiến răng trẻ dễ bị tổn thương hơn là việc vệ sinh cá nhân của các bé rất kém.
                        Và những nguyên nhân trên chính là lý do khiến răng miệng bé bị tổn thương sinh ra bệnh nha chu ở trẻ em nguy hiểm.</li>
                </ul> -->
        </ul>
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
