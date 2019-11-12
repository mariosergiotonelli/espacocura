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

  $(".hamburguer").on('click', function(){
    console.log('click')
    $("nav").toggleClass("open");
    $(this).toggleClass("toggle");
  });

});

$(window).load(function(){
});