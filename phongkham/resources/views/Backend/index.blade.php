@extends('Backend.master')
@section('content')
<section class="wrapper">
<!-- //market-->
<div class="market-updates">
<div class="col-md-3 market-update-gd">
<div class="market-update-block clr-block-1">
	 
	<div class="col-md-8 market-update-left" style="text-align: center; margin-left: 25px;">
	<h4>Tài khoản người dùng</h4>
		<h3>{{$count}}</h3>
	</div>
  <div class="clearfix"> </div>
</div>
</div>
<div class="col-md-3 market-update-gd">
<div class="market-update-block clr-block-3">

	<div class="col-md-8 market-update-left" style="text-align: center; margin-left: 25px;">
		<h4>Bác sĩ của nha khoa</h4>
		<h3>{{$count_doctor}}</h3>
	</div>
  <div class="clearfix"> </div>
</div>
</div>
<div class="col-md-3 market-update-gd">
<div class="market-update-block clr-block-4">
	
	<div class="col-md-8 market-update-left" style="text-align: center; margin-left: 25px;">
		<h4>Lịch hẹn đã xác nhận</h4>
		<h3>{{$count_schedule}}</h3>
	</div>
  <div class="clearfix"> </div>
</div>
</div>
	
<!-- //market-->
<div class="row">
<div class="panel-body">

</div>
</div>
<div class="agil-info-calendar">
<!-- calendar -->
<div class="col-md-6 agile-calendar">
<div class="calendar-widget">
<div class="panel-heading ui-sortable-handle">
	<span class="panel-icon">
      <i class="fa fa-calendar-o"></i>
    </span>
    <span class="panel-title"> Calendar Widget</span>
</div>
<!-- grids -->
	<div class="agile-calendar-grid">
		<div class="page">
			
			<div class="w3l-calendar-left">
				<div class="calendar-heading">
					
				</div>
				<div class="monthly" id="mycalendar"></div>
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
</div>
<!-- //calendar -->
<div class="col-md-6 w3agile-notifications">
<div class="notifications">
<!--notification start-->

	<header class="panel-heading">
		Thông báo lịch hẹn chưa được xác nhận 
	</header>
	<div class="notify-w3ls">
		<div class="alert alert-success ">
			<span class="alert-icon"><i class="fa fa-envelope-o"></i></span>
			<div class="notification-info">
				<ul class="clearfix notification-meta">
					<li class="pull-left notification-sender">Hiện tại bạn đang có {{$count_lichchuaxacnhan}} lịch hẹn khám chưa được xác nhận</li>
				</ul>
			</div>
		</div>
		
	</div>

<!--notification end-->
</div>
</div>
<div class="clearfix"> </div>
</div>
<!-- tasks -->
<div class="agile-last-grids">

<div class="clearfix"> </div>
</div>
<!-- //tasks -->

</section>
 <div class="footer">
			<div class="wthree-copyright">
			  <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			</div>
</div>
@endsection