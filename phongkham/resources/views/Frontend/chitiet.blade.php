@extends('Frontend.master')
@section('content')    <!-- form_chi tiết dịch vụ-->
    <div class="service_details">
      <!-- Tiêu đề dịch vụ -->
      <div class="title_service">
        <a href="#" id="title">{{$chitietdichvu->tendichvu}}</a>
      </div>
      <!-- Hình ảnh mô tả dịch vụ -->
      <div class="image_service">
        <img class="img_service" src="{{pare_url_file($chitietdichvu->hinhanhdichvu)}}" width="500px" height="300px" alt="">
      </div>
      <!-- Mô tả về dịch vụ -->
      <div class="description_service">
          <h2>{{$chitietdichvu->noidungdichvu}}</h2>
      </div>
      <!-- Nút đặt lịch -->
      <div class="schedule">
        <a href="./Datlich.html">
          <button class="button_schedule">Đặt lịch ngay!</button>
        </a>
      </div>
    </div>
@endsection



  <!-- footer -->
