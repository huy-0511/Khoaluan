$(function(){
    $(window).scroll(function(){
        if($('html,body').scrollTop()>100){
            $('.navbar').addClass('nenxanh');//nền menu xanh
            $('.nav-link').addClass('chutrang');//menu chữ trắng
            $('.top').addClass('hientop');
        }
        else{
            $('.navbar').removeClass('nenxanh');
            $('.nav-link').removeClass('chutrang');
            $('.top').removeClass('hientop');
        }
    })
    $('[data-toggle="popover"]').popover();
    $('.nuttop').click(function () { 
        $('html,body').animate({scrollTop:0},1000); //0 là vị trí trở về 
    });
})