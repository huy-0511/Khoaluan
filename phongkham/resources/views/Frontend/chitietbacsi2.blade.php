@extends('Frontend.master1')
@section('content')
 <div class="dichvu">
                <p><i class="ti-home"></i>Trang chủ > Đội ngũ bác sĩ</p>
                <div class="vien"></div>
      <div class="form-chi-tiet-bacsi">
          <div class="title-bacsi">
              <img src="https://nhakhoaparkway.com/wp-content/uploads/2020/09/Vũ-Dức-Dũng.jpg" alt="">
          </div>
        <div class="form-bacsi">
            <div  class="imgs" >
            <img  src="{{asset('Teethcare/assets/img/docter-duc-dung.jpg')}}">
            <h4>Dr. Vũ Đức Dũng</h4>
            <p>Bác sĩ Parkway Phố Huế</p>
            @if(Auth::check())
              <button style="float: left;" class="btn btn-success"><a href="{{url('/datlich')}}" style="color: white; text-decoration: none">Đặt lịch khám</a></button>
            @else
              <button style="float: left;" class="btn btn-success"><a href="{{url('/khachhang/dangnhap')}}" style="color: white; text-decoration: none">Đặt lịch khám</a></button>
            @endif
            
            </div> 
            <div class="thong-tin-bac-si">
            <h3>Học vấn</h3>
                <ul class="ul-bacsi">
                  <li>Chuyên gia chỉnh nha không mắc cài Invisalign do công ty Align – Mỹ chứng nhận</li>
                  <li>Bác sĩ chuyên khoa Răng Hàm Mặt – Đại học Y Hà Nội</li>
                  <li>Nhiều năm kinh nghiệm phẫu thuật và điều trị Răng Hàm Mặt</li>
                </ul>
            <h3>Các chứng chỉ đặc biệt</h3>
                <ul class="ul-bacsi">
                  <li>Chứng chỉ đào tạo chuyên môn về trồng răng Implant – Đại học Y Hà Nội</li>
                  <li>Chứng chỉ chỉnh nha theo trường phái không nhổ răng của giáo sư Nanda do công ty Đại Nha cấp</li>
                </ul>
            </div>
        </div>
   </div>
      </div>
      </div>
@endsection
