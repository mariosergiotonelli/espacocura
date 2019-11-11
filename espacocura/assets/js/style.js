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

  $(document).on('click', ".hamburguer", function(){
    console.log('click')
    $("nav").toggleClass("open");
    $(this).toggleClass("toggle");
  });

});

$(window).load(function(){
  headerFixo();
  headerRelative();
});