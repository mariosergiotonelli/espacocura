$(document).ready(function(){

  $(".hamburguer").on('click', function(){
    console.log('click')
    $("nav").toggleClass("open");
    $(this).toggleClass("toggle");
  });

  setTimeout(function() {
    $(".section-principal").css('opacity', '1');
  },1000)

});

$(window).load(function(){
});