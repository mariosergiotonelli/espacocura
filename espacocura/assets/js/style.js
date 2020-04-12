$(document).ready(function(){

  $(".hamburguer").on('click', function(){
    console.log('click')
    $("nav").toggleClass("open");
    $(this).toggleClass("toggle");
  });

});

$(window).load(function(){
});