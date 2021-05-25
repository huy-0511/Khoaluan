@extends('Frontend.master1')
@section('content')
    <div class="slidershow">
        <div class="slides">
            <input type="radio" name="bottom" id="bottom1" checked>
            <input type="radio" name="bottom" id="bottom2" >
            <input type="radio" name="bottom" id="bottom3" >
            <input type="radio" name="bottom" id="bottom4" >
            <input type="radio" name="bottom" id="bottom5" >
            <div class="slide s1">
                <img src="{{asset('Teethcare/assets/img/slide_n2.jpg')}}">
            </div>
            <div class="slide">
                <img src="{{asset('Teethcare/assets/img/slide_n1.jpg')}}">
            </div>
            <div class="slide">
                <img src="{{asset('Teethcare/assets/img/silde_n3.jpg')}}" >
            </div>
            <div class="slide">
                <img src="{{asset('Teethcare/assets/img/silde_n4.jpg')}}" >
            </div>
            <div class="slide">
                <img src="{{asset('Teethcare/assets/img/a1.jpg')}}" >
            </div>
        </div>
        <div class="navigation">
            <label for="bottom1" class="bar"></label>
            <label for="bottom2" class="bar"></label>
            <label for="bottom3" class="bar"></label>
            <label for="bottom4" class="bar"></label>
            <label for="bottom5" class="bar"></label>
        </div>
        <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
            <div class="auto-btn5"></div>
        </div>
    </div> 
    <div id="content">
        <div class="container1">
            <div class="why1" style="
            background: url('https://nhakhoavietphapdn.com/uploads/group/157000665671.jpg')
              no-repeat center top;">
                <div class="wrap">
                    <ul>
                        <li class="why1-title">
                            <h2>10 LÝ DO TẠI SAO CHỌN
                                </br>
                                NHA KHOA TEETH CARE</h2>
                        </li>
                        <li class="why1-title-1">
                            <span>1</span>
                            <label>Đội ngũ Nha Sĩ hàng đầu về Nha Khoa Việt Pháp</label>
                        </li>
                        <li class="why1-title-1">
                            <span>2</span>
                            <label>Trang thiết bị cao cấp, hiện đại, đồng bộ.</label>
                        </li>
                        <li class="why1-title-1">
                            <span>3</span>
                            <label>Đầy đủ tất cả các chuyên khoa về Nha Khoa.</label>
                        </li>
                        <li class="why1-title-1">
                            <span>4</span>
                            <label>Sử dụng các vật liệu cao cấp nhập khẩu từ Pháp</label>
                        </li>
                        <li class="why1-title-1">
                            <span>5</span>
                            <label>Chính sách bảo hành lâu dài</label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="why2" style="
          background: url('https://nhakhoavietphapdn.com/uploads/group/150215621366.png')
            no-repeat center top;">
                <div class="wrap2">
                    <ul>
                        <li class="why2-title-2">
                            <span>6</span>
                            <label>Nha Khoa không đau can thiệp tối thiểu – Hiệu quả rõ rệt.</label>
                        </li>
                        <li class="why2-title-2">
                            <span>7</span>
                            <label>Quy trình vô trùng nghiêm ngặt.</label>
                        </li>
                        <li class="why2-title-2">
                            <span>8</span>
                            <label>Không gian sang trọng, tiện nghi cao cấp cho bạn sự thư giãn như trong một kỳ
                                nghỉ.</label>
                        </li>
                        <li class="why2-title-2">
                            <span>9</span>
                            <label>Đội ngũ nhân viên chuyên nghiệp, thân thiện chăm sóc bạn ân cần, nhẹ nhàng, chu
                                đáo.</label>
                        </li>
                        <li class="why2-title-2">
                            <span>10</span>
                            <label>Chất lượng hỗ trợ điều trị với giá cả hợp lý.</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
            <div class="container2">
                <div class="widget_text">
                    <h2>Dịch vụ nha khoa toàn diện</h2>
                    <span>Chúng tôi luôn có giải pháp phục hình răng phù hợp cho bạn và cho những người thân yêu của bạn
                        !</span>
                </div>
            </div>
            <!-- begin dịch vụ nha khoa -->
           <div class="container4">
            <div class="service-list">
                <div class="service-item">
                    <h2  class="service-header-fisrt">Phục hình răng sứ VENEER</h2>
                    <img class="service-img" src="{{asset('Teethcare/assets/img/rangsu.jpg')}}" alt="Veneer">
                    <h3 class="service-header-second">Nha Khoa Teeth Care có nhiều loại răng sứ, vậy loại nào là tốt nhất?</h3>
                    <p class="service-content">Nha Khoa Teeth Care có bề dày kinh nghiệm phục hình răng sứ thẩm mỹ hơn 20 năm và đã trải qua rất nhiều dòng sứ khác nhau. Đến nay, nha khoa Teeth Care đã khẳng định được thương hiệu là nha khoa uy tín trong phục hình răng sứ thẩm mỹ cao cấp."</p>
                    <ul>
                        <li class="color">Đa dạng giải pháp giúp hoàn thiện nụ cười</li>
                        <li class="color">Làm răng sứ nhanh chỉ trong một ngày</li>
                        <li class="color">Giải pháp toàn diện cho nụ cười đẹp</li>
                    </ul>
                </div>
                <div class="service-item">
                    <h2 class="service-header-fisrt">Cấy ghép IMPLANT</h2>
                    <img class="service-img" src="{{asset('Teethcare/assets/img/implant.jpg')}}" alt="Veneer">
                    <h3 class="service-header-second">Cấy ghép Implant có đau không?</h3>
                    <p class="service-content">Rất nhiều người nghĩ cấy ghép Implant sẽ “kinh khủng” lắm. Sự thật không hẳn là như vậy, cấy ghép Implant đơn thuần (không có ghép xương) được xem là nhẹ nhàng và ít chấn thương hơn nhiều so với nhổ răng, do vậy, cũng ít “đau” hơn.</p>
                    <ul >
                        <li class="color">Bạn nên đi cấy ghép răng khi nào?</li>
                        <li class="color">Thời điểm thích hợp cấy ghép implant </li>
                        <li class="color"> Cấy ghép implant All on four – Giải pháp mới cho mất răng toàn hàm</li>
                    </ul>
                </div>
                <div class="service-item ">
                    <h2 class="service-header-fisrt">Chỉnh nha</h2>
                    <img class="service-img" src="{{asset('Teethcare/assets/img/chinhnha.jpg')}}" alt="Veneer">
                    <h3 class="service-header-second">Những câu hỏi thường gặp về chỉnh nha bằng Invisalign (Phần 1)</h3>
                    <p class="service-content">Invisalign là một kỹ thuật điều trị mới của công nghệ chỉnh nha ngày nay. Invisalign là một loạt khay trong suốt được bệnh nhân mang để di chuyển răng theo mong muốn của bác sĩ và bệnh nhân. Vậy Invisalign có những ưu và nhược điểm gì?</p>
                    <ul >
                        <li class="color">Những câu hỏi thường gặp về Invisalign (phần 2)</li>
                        <li class="color">Niềng răng không mắc cài invisalign – Hình ảnh </li>
                    </ul>
                </div>
            </div>
            <div class="service-list">
                <div class="service-item">
                    <h2 class="service-header-fisrt">Nha Khoa Thẩm Mỹ</h2>
                    <img class="service-img" src="{{asset('Teethcare/assets/img/nhakhoa.jpg')}}" alt="Veneer">
                    <h3 class="service-header-second">TẨY TRẮNG RĂNG ZOOM WHITE SPEED – Hệ thống tẩy trắng được lựa chọn nhiều nhất tại Mỹ</h3>
                    <p class="service-content">Nếu bạn đã từng mong muốn một kết quả tẩy trắng răng hiệu quả nhất có thể, bạn có thể nghĩ đến hệ thống Zoom White Speed – thế hệ đèn tẩy trắng mới nhất năm 2015 của Philips, vừa được trang bị tại nha khoa Teeth Care</p>
                    <ul>
                        <li class="color">Tẩy trắng răng tại nhà</li>
                        <li class="color">Bạn có biết cách cải thiện nụ cười của mình?</li>
                        <li class="color">Đi tìm nụ cười hoàn hảo</li>
                    </ul>
                </div>
                <div class="service-item">
                    <h2 class="service-header-fisrt">Bảng giá</h2>
                    <img class="service-img" src="{{asset('Teethcare/assets/img/banggia.jpg')}}" alt="Veneer">
                    <h3 class="service-header-second">Bảng giá nha khoa Teeth Care</h3>
                    <p class="service-content"> Bảng giá nha khoa Teeth Care thể hiện rõ ràng và đầy đủ các loại hình điều trị nha khoa bao gồm: Phục hình răng sứ, Cấy ghép Impalnt, Chỉnh nha - niềng răng, Nha khoa tổng quát, Nha khoa thẩm mỹ, Nha khoa trẻ em</p>
                </br>
                    <ul>
                        <li class="color">Bảng giá chi nhánh Phú Nhuận</li>
                        <li class="color">Bảng giá chi nhánh Phú Mỹ Hưng</li>
                        <li class="color">Bảng giá chi nhánh Quận 2 - Sala</li>
                    </br>
                    </ul>
                </div>
                <div class="service-item">
                    <h2 class="service-header-fisrt">Hỏi và đáp</h2>
                    <img class="service-img" src="{{asset('Teethcare/assets/img/hoivadap.jpg')}}" alt="Veneer">
                    <h3 class="service-header-second">Cấy ghép Implant có thể tồn tại suốt đời được không?</h3>
                    <p class="service-content">Tôi bị mất răng và muốn cấy ghép implant, nhưng có nhiều người nói cấy ghép implant có thể bị hỏng. Tôi muốn hỏi là cấy ghép implant có tồn tại suốt đời được không?</p>
                    <ul>
                        <li class="color">Giá niềng răng Invisalign bao nhiêu?</li>
                        <li class="color">Niềng răng bằng khay Invisalign</li>
                        <li class="color">Cấy ghép Implant có thể tồn tại suốt đời được không?</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="docter">
            <h2 class="header-docter">Giới thiệu đội ngủ bác sĩ</h2>
            <div class="list-info-docter">
                <div class="docter-list-sort">
                    <img class="list-img-docter" src="{{asset('Teethcare/assets/img/docter-kim-dung.jpg')}}" alt="">
                    <p>Dr. Lê Kim Dung</p>
                    <button class="btn btn-primary"><a  href="{{url('/chitietbacsi/kim-dung')}}" style="text-align: center;color: #fff;text-decoration: none;">Xem hồ sơ bác sĩ</a></button>
                    <ul class="info-docter-li">
                        <li>Giám đốc chuyên môn hệ thống Parkway miền Bắc</li>
                        <li>Bác sĩ chuyên khoa Răng Hàm Mặt
                            - Đại học Y Hà Nội</li>
                        <li>Chuyên gia Invisalign</li>
                    </ul>
                </div>  
                <div class="docter-list-sort">
                    <img class="list-img-docter" src="{{asset('Teethcare/assets/img/docter-duc-dung.jpg')}}" alt="">
                    <p>Dr. Vũ Đức Dũng</p>
                    <button style="text-align: center;" class="btn btn-primary"><a  style="color: #fff;text-decoration: none;" href="{{url('/chitietbacsi/vu-duc-dung')}}">Xem hồ sơ bác sĩ</a></button>
                    <ul class="info-docter-li">
                        <li>Bác sĩ chuyên khoa Răng Hàm Mặt </br>- Đại học Y Hà Nội</li>
                        <li>Chuyên gia Invisalign</li>
                    </ul>
                </div>  
                <div class="docter-list-sort">
                    <img class="list-img-docter" src="{{asset('Teethcare/assets/img/docter-kieu-ngan.jpg')}}" alt="">
                    <p>Dr. Nguyễn Kiều Ngân</p>
                    <button class="btn btn-primary"><a  style="text-align: center;color: #fff;text-decoration: none;" href="{{url('/chitietbacsi/kim-ngan')}}">Xem hồ sơ bác sĩ</a></button>
                    <ul class="info-docter-li">
                        <li>Bác sĩ chuyên khoa Răng Hàm Mặt </br>- Đại học Y Hà Nội</li>
                        <li>Chuyên gia chỉnh nha</li>
                    </ul>
                </div>  
            </div>
        </div>
    </div>
<div class="container">
    <div class="tin-tuc-noi-bat">
        <h3 class="header-tintuc">Tin tức nỗi bật</h3>
        <div class="list-tin-tuc">
            <div class="tin-tuc-con">
                <img class="list-img-tin-tuc" src="{{asset('Teethcare/assets/img/tintuc-chunhatreem.jpg')}}" alt="">
                <h2>Bệnh nha chu ở trẻ em</h2>
                <p>Bệnh nha chu là một trong những bệnh lý răng miệng phổ biến nhất không chỉ xuất hiện phổ biến ở người lớn mà còn ở lứa tuổi trẻ em. Vậy bệnh nha chu...</p>
                <button class="btn btn-primary"><a style="color: #fff;text-decoration: none;" href="{{url('/chitiettintuc/11')}}">Xem thêm</a></button>
            </div>  
        </div>   
        <div class="list-tin-tuc">
            <div class="tin-tuc-con">
                <img class="list-img-tin-tuc" src="{{asset('Teethcare/assets/img/tintuc-treemmocrangsu.jpg')}}" alt="">
                <h2>Những dấu hiệu khi trẻ sắp mọc răng sữa</h2>
                <p>Thời kỳ răng sữa mọc đánh dấu bước ngoặt đầu tiên trong cuộc đời của con trẻ. Và trong khoảng thời gian mọc răng sữa sức khỏe của bé có thể sẽ gặp...</p>
                <button class="btn btn-primary"><a style="color: #fff;text-decoration: none" href="{{url('/chitiettintuc/12')}}">Xem thêm</a></button>
            </div>  
        </div>   
        <div class="list-tin-tuc">
            <div class="tin-tuc-con">
                <img class="list-img-tin-tuc" src="{{asset('Teethcare/assets/img/tintuc-meotrirangbuot.jpg')}}" alt="">
                <h2>Mẹo hay chữa răng bị ê buốt</h2>
                <p>Răng bị ê buốt hay còn gọi là răng nhạy cảm với những món ăn có độ nóng, lạnh hoặc chua, ngọt thất thường. Có nhiều nguyên nhân gây ra tình trạng...</p>
                <button class="btn btn-primary"><a style="color: #fff;text-decoration: none" href="{{url('/chitiettintuc/13')}}">Xem thêm</a></button>
            </div>  
        </div>   
    </div>
</div>
    <div class="container3">
        <div class="grid-img">
            <h2>
                HÌNH ẢNH PHÒNG KHÁM NHA KHOA TEETH CARE
            </h2>
            <div class="list-item">
                <img src="{{asset('Teethcare/assets/img/list_item1.webp')}}" alt="img" class="img">
                <img src="{{asset('Teethcare/assets/img/list_item2.jpg')}}" alt="img" class="img">
                <img src="{{asset('Teethcare/assets/img/list_item3.webp')}}" alt="img" class="img">
                <img src="{{asset('Teethcare/assets/img/list_item4.webp')}}" alt="img" class="img">
                <img src="{{asset('Teethcare/assets/img/list_item5.webp')}}" alt="img" class="img">
                <img src="{{asset('Teethcare/assets/img/list_item6.webp')}}" alt="img" class="img">
                <img src="{{asset('Teethcare/assets/img/list_item7.webp')}}" alt="img"class="img">
                <img src="{{asset('Teethcare/assets/img/list_item8.webp')}}" alt="img" class="img">
            </div>
        </div>
    </div>
    <div class="form-lien-he-tu-van ">
        <div >
            <h5 style="padding-top:10px;font-weight: bold;">BẠN ĐANG CẦN ĐƯỢC TƯ VẤN ?</h5>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Vui lòng nhập số điện thoại của bạn để được tư vấn nay nào ... !"  aria-describedby="button-addon2">
                <button class="btn btn-primary" type="button" id="button-addon2">Gửi</button>
            </div>
            <i>TƯ VẤN CHÚNG TÔI SẼ GỌI ĐIỆN CHO BẠN TRONG ÍT PHÚT</i>
        </div>
    </div>
@endsection