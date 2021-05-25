<div id="header" >
        <div class="box">
            <img src="{{asset('Teethcare/assets/img/logo.png')}}"   width="90px" height="75" alt="...">
        </div>
        <!-- Begin nav -->

        <div class="box">
            <ul id="nav">

                <li><a href="{{url('/trangchu')}}">Trang chủ</a></li>
                <li><a href="{{url('/dichvu')}}">Dịch vụ</a></li>
                <li><a href="{{url('/banggia')}}">Bảng giá</a></li>
                <li><a href="{{url('/tintuc')}}">Tin tức</a></li>
                <li><a href="{{url('/lienhe')}}">Liên hệ</a></li>
                @if(Auth::check())
                    <li><a href="{{url('/datlich')}}">Đặt lịch ngay</a></li>
                @else
                    <li><a href="{{url('/khachhang/dangnhap')}}">Đặt lịch ngay</a></li>
                @endif
                
            </ul>
        </div>
        <div id="right">
            <!-- <a style="margin-right: -0px;" href="" class="">Đăng nhập</a> -->
            @if(Auth::check())
            <a class="hieu-ung" href="#">
                    <?php $name = Auth::user()->name;
                                echo 'Chào '.$name;
                             ?> 
                <i class="nav-arrow-down ti-angle-down"></i>
            </a>
           
            <ul class="subnav">
                <li><a href="{{url('/khachhang/dangxuat')}}">Đăng Xuất</a></li>
                <li><a href="{{url('/khachhang/quan-ly-thong-tin-ca-nhan')}}">Quản lý tài khoản</a></li>
                <li><a href="{{url('/khachhang/xemlichhen')}}">Xem lịch đặt</a></li>
            </ul>
            @else
             <a class="hieu-ung" href="#">
                    Chào bạn
                <i class="nav-arrow-down ti-angle-down"></i>
            </a>
            <ul class="subnav">
                <li><a href="{{url('/khachhang/dangki')}}">Đăng ký</a></li>
                <li><a href="{{url('/khachhang/dangnhap')}}">Đăng nhập</a></li>
            </ul>
            @endif
        </div>
        <div id="mobile-menu" class="mobile-menu-btn">   
            <i class="menu-icon ti-menu"></i>
        </div>
</div>  