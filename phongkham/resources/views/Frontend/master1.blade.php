<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nha Khoa</title>
    <link rel="stylesheet" href="{{asset('Teethcare/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('Teethcare/assets/css/reponsive.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">       
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- icon-font -->
    <link rel="stylesheet" href="{{asset('Teethcare/assets/font/themify-icons/themify-icons.css')}}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
 <div class="container">
 	@include('Frontend.header1')
        <!-- End : Nav -->
        <!-- Begin: search button -->
   	     
        <!-- End: search button -->
      
    <!-- <div id="slider">
        <div class="text-content">
            <h2 class="text-heading"><b>Teeth Care</b></h2>
            <a class="text-descroptiong">Chúng tôi luôn vì bạn !!! </a>
        </div>
    </div> -->
    @yield('content')

     @include('Frontend.footer1')
</div>
  
</body>
  <script>
        var header = document.getElementById('header');
        // console.log(header);mobile-menu
        var mobileMenu = document.getElementById('mobile-menu');
        var headerHeight = header.clientHeight;
        console.log(mobileMenu);
        mobileMenu.onclick = function(){
            console.log(header.clientHeight);
            var isClosed = header.clientHeight === headerHeight;
            if(isClosed){
                header.style.height = 'auto';
            }
            else{
                header.style.height = null;
            }
        }

    </script>  
<!-- <script>
    var header = document.getElementById('header');
    header.onclick = function(){
        var isOpen = header.clientHeight == 46;
        if(isClosed){
            header.style.height = 'auto'
        }
        else {
            header.style.height = null;
        }
    }
</script> -->
<style>
    .xemlichdat  {
    margin-top: 50px;
    margin-bottom: 200px;
}

.xemlichdat .title-lichdat{
    margin: 15px;
    font-weight: bold;
    font-size: 25px;
    text-align: center;
    color: #072d7c;
}

.xemlichdat table  {
    margin-left: 57px;
    width: 90%;
    border: solid 2px rgb(0, 5, 51);
}

.xemlichdat table td   {
    border: solid 2px rgb(0, 5, 51);
    padding-left: 5px;
}

.xemlichdat table th  {
    width: 10%;
    color: rgb(3, 19, 71);
    background: rgb(86, 173, 207);
    font-weight: bold;
    padding-left: 10px;
    border: solid 2px rgb(0, 5, 51);
}
</style>
</html>