@extends('Frontend.master1')
@section('content') 
            <div class="dichvu">
                <p><i class="ti-home"></i>Trang chủ > Đội ngũ bác sĩ</p>
                <div class="vien"></div>
      <div class="form-chi-tiet-bacsi">
          <div class="title-bacsi">
              <img src="{{asset('Teethcare/assets/img/ho-so-bacsi-le-kim-dung.jpg')}}" alt="">
          </div>
        <div class="form-bacsi">
            <div  class="imgs" >
            <img  src="{{asset('Teethcare/assets/img/docter-kim-dung.jpg')}}">
            <h4>Dr. Lê Kim Dung</h4>
            <p>Giám đốc chuyên môn hệ thống Parkway miền Bắc</p>
            @if(Auth::check())
              <button style="float: left;" class="btn btn-success"><a href="{{url('/datlich')}}" style="color: white; text-decoration: none">Đặt lịch khám</a></button>
            @else
              <button style="float: left;" class="btn btn-success"><a href="{{url('/khachhang/dangnhap')}}" style="color: white; text-decoration: none">Đặt lịch khám</a></button>
            @endif
            </div> 
            <div class="thong-tin-bac-si">
            <h3>Học vấn</h3>
                <ul class="ul-bacsi">
                  <li>Bác sĩ chuyên khoa Răng Hàm Mặt – Đại học Y Hà Nội</li>
                  <li>Chuyên gia chỉnh nha không mắc cài Invitech, Invisalign của Mỹ</li>
                  <li>Bác sĩ nhiều kinh nghiệm chỉnh nha, thẩm mỹ, tinh chỉnh dáng răng và thiết kế nụ cười</li>
                </ul>
            <h3>Các chứng chỉ đặc biệt</h3>
                <ul class="ul-bacsi">
                  <li>Được đào tạo bởi chuyên gia trường phái chỉnh nha không nhổ răng – Giáo sư Ravindra Nanda, Trưởng khoa Răng Hàm Mặt và Chủ nhiệm bộ môn chỉnh nha của Đại học Connecticut, Farmington – Hoa Kỳ</li>
                  <li>Chứng chỉ chương trình hoàn thiện kỹ năng phục hình thẩm mỹ đương đại 2013</li>
                </ul>
            </div>
        </div>
   </div>
      </div>
      </div>
@endsection