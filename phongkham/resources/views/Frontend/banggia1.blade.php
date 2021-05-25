@extends('Frontend.master1')
@section('content')
    <div class="container">
        <div class="dichvu">
        <p><i class="ti-joomla"></i>  Bảng giá</p>
        <div class="vien"></div>
        </div>
      </br>
        <table class="table table-success table-striped ">
            <thead>
            <tr>
                <th>Dịch vụ</th>
                <th>Giá</th>
                <th>Đơn vị</th>
            </tr>
          </thead>    
          <tbody>
            @foreach($banggia as $value)
            <tr>
                <td>{{$value['tendichvu']}}</td>
                <td>{{$value['dongia']}}</td>
                <td>{{$value['donvi']}}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
        </div>
      </div>
@endsection