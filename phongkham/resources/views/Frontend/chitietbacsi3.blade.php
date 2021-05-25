@extends('Frontend.master1')
@section('content')
 <div class="dichvu">
                <p><i class="ti-home"></i>Trang chủ > Đội ngũ bác sĩ</p>
                <div class="vien"></div>
      <div class="form-chi-tiet-bacsi">
          <div class="title-bacsi">
              <img src="https://nhakhoaparkway.com/wp-content/uploads/2020/09/Nguyễn-Thị-Kim-Dung.jp" alt="">
          </div>
        <div class="form-bacsi">
            <div  class="imgs" >
            <img  src="{{asset('Teethcare/assets/img/docter-kieu-ngan.jpg')}}">
            <h4>Dr. Nguyễn Kiều Ngân</h4>
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
                  <li>Tốt nghiệp bác sĩ chuyên ngành Răng hàm mặt – Đại học Y Hà Nội</li>
                  <li>Tốt nghiệp các khóa đào tạo chuyên sâu dài hạn & ngắn hạn về chỉnh nha của các bác sỹ đầu ngành trong và ngoài nước</li>
                  <li>Có nhiều năm kinh nghiệm trong lĩnh vực chỉnh nha và nha khoa tổng quát. Có chuyên môn cao về các dịch vụ nha khoa

					</li>
                </ul>
            <h3>Các chứng chỉ đặc biệt</h3>
                <ul class="ul-bacsi">
                  <li>Chứng chỉ khoá học “Tổng quan đến Nâng cao trong chỉnh nha“ của Tiến sĩ Romeo N.Jacob, Jr. DMD, FADI, FPFA lecturer.</li>
                  <li>Chứng chỉ niềng răng không mắc cài INVISALIGN của Mỹ</li>
                </ul>
            </div>
        </div>
   </div>
      </div>
      </div>
@endsection
