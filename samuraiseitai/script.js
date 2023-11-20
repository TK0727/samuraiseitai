//  カルーセル
$('.l-carousel').slick({
    autoplay: true,
    dots: true,
    infinite: true,
    autoplaySpeed: 5000,
    cssEase: 'linear',
    fade:true,
    arrows:false,
    
});

// トップへ戻るボタン
$('.l-reverse').hide();

$(window).scroll(function(){
 if($(this).scrollTop()>400){
    $('.l-reverse').fadeIn();
 }
 else{
    $('.l-reverse').fadeOut();
 }
});
$('.l-reverse').click(function(){
    $('body,html').animate({scrollTop:0},500);
    return false;
});
