@extends('Frontend.master1')
@section('content')	
<div class="lienhe">
	<div class="lien-he-1">
		<div class="contact-list">
			<div style="background-color:rgb(250, 79, 79);" class="contact-father">
				<div class="contact-child">
					<img src="{{asset('Teethcare/assets/img/icon-telephone.png')}}" alt="">
					<h3>Điện thoại</h3>
					<h5><a href="tel:052 869 3637" title="Gọi ngay">052 869 3637</a></h5>    
				</div>
			</div>
			<div style="background-color:rgb(196, 139, 34);" class="contact-father">
				<div class="contact-child">
					<img src="{{asset('Teethcare/assets/img/icon-website.png')}}" alt="">
					<h3>Website</h3>
					<h5><a href="index.html">https://pkhamnhakhoa.com</a></h5>       
				</div>
			</div>
			<div style="background-color:rgb(65, 175, 80);" class="contact-father">
				<div class="contact-child">
					<img src="{{asset('Teethcare/assets/img/icon-location.png')}}" alt="">
					<h3>Địa chỉ</h3>
					<h5><a href="https://bom.to/P5XxQklxtAruq">102 Phan Thanh, Thanh Khê, Đà Nẵng</a></h5>    
				</div>
			</div>
		</div>
	</div>
	<div class="lien-he-2">
		<div class="imgs">
			<a href="https://bom.to/P5XxQklxtAruq"><img src="{{asset('Teethcare/assets/img/map.png')}}"  style="min-width: 100%;"  alt=""></a>
		</div>
		<div class="bt">
			<button  style="float: right;" class="btn btn-primary"><a href="https://bom.to/P5XxQklxtAruq">Xem trên Google Map</a></button>   
		</div>
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

</div>
</div>
@endsection