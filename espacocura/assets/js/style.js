//Fixa o Header no topo

function headerFixo() {
  $(document).on('scroll', function () {
    if ($(window).scrollTop() > 90) {
      $('.topo').addClass('fixar');
    } else {
      $('.topo').removeClass('fixar');
    }
  });
}


function headerRelative() {

  var historia = window.location.href.indexOf("historia") > 0;
  var queijo =  window.location.href.indexOf("queijo") > 0;
  var produtos =  window.location.href.indexOf("produtos") > 0;

  if (historia || queijo || produtos) {
    $(".headerFritz .topo").css('position', 'relative');
    $(".headerFritz .topo").css('background', '#f9f9f9');
    $(".headerFritz .topo .menu__link").css('color', "#000");
    $(".facebook").css('background', 'url(http://fritzalimentos.com.br/site/wp-content/themes/fritzalimentos/assets/img/face-site-fixar.png)');
    if( window.innerWidth > 479){
      $(".facebook").css('background-position-y', '-20px');
    }else{
      $(".facebook").css('background-position-y', '0px');
    }
    $(".facebook").mouseover(function(){
      $(this).css('background-position-y', '0px');
    });
    $(".facebook").mouseout(function(){
      $(this).css('background-position-y', '-20px');
    });

    $(".instagram").css('background', 'url(http://fritzalimentos.com.br/site/wp-content/themes/fritzalimentos/assets/img/instagram-site-fixar.png)');
    if(window.innerWidth > 479) {
      $(".instagram").css('background-position-y', '-20px');
    }else{
      $(".instagram").css('background-position-y', '0px');
    }
    
    $(".instagram").mouseover(function(){
      $(this).css('background-position-y', '0px');
    });
    $(".instagram").mouseout(function(){
      $(this).css('background-position-y', '-20px');
    });
  } 
}

function slickImgProdutos(){
  $(".imgProdutos").slick({
    dots: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    prevArrow: $('.prev'),
    nextArrow: $('.next'),
    responsive: [
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: null,
        nextArrow: null,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: null,
        nextArrow: null,
      }
    }
    ]
  });
}

function slickBanner() {
  $(".banner").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    prevArrow: $('.prev'),
    nextArrow: $('.next'),
  });
}

$(document).ready(function(){

  $('a[href^="#"]').on('click', function (e) {
    e.preventDefault();

    var target = this.hash;
    var $target = $(target);

    $('html, body').animate({
      'scrollTop': $target.offset().top
    }, 1000, 'swing');
  });

  headerFixo();
  headerRelative();
  slickImgProdutos();
  slickBanner();
});

$(window).load(function(){
  headerFixo();
  headerRelative();
});