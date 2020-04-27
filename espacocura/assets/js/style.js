function redirectForm() {
  if (window.location.href.indexOf('lp-yoga') > 0) {
    var wpcf7Elm = document.querySelector('.wpcf7');
    wpcf7Elm.addEventListener('wpcf7submit', function () {
      window.location.href = 'http://espacocura.com/download/PDF-Yoga.pdf', '_blank';
    }, false);
  }
}

function popupEspaco(){
  $('.popupEspacoCura').fadeIn();
  $('.popupEspacoCura .modal').addClass('active');
}

function fechaPopup(){
  $('.popupBg, .popupEspaco-close').on('click', function(){
    $('.popupBg, .popupEspaco-close, .popupEspacoCura').fadeOut();
    $('.popupEspacoCura .modal').removeClass('active');
    setCookie("PopupEspacoCura", (24 * 60 * 60 * 1000));
  });
}

function getCookie(k) {
  var c = String(document.cookie).split(";");
  var neq = k + "=";

  for (var i = 0; i < c.length; i++) {
    var d = c[i];

    while (d.charAt(0) === " ") {
      c[i] = c[i].substring(1, d.length);
    }

    if (c[i].indexOf(neq) === 0) {
      return decodeURIComponent(c[i].substring(neq.length, c[i].length));
    }
  }

  return null;
}

function setCookie(k, v, expira, path) {
  path = path || "/";

  var d = new Date();
  d.setTime(d.getTime() + (expira * 1000));

  document.cookie = encodeURIComponent(k) + "=" + encodeURIComponent(v) + "; expires=" + d.toUTCString() + "; path=" + path;
}

$(document).ready(function () {

  redirectForm();
  fechaPopup();

  if(!getCookie('PopupEspacoCura')){
    popupEspaco();
  }

  $(".hamburguer").on('click', function () {
    $("nav").toggleClass("open");
    $(this).toggleClass("toggle");
  });

});

$(window).load(function () {});