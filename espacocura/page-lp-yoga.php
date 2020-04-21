<?php

/*Template name: espacocura - Lp Yoga */
get_header();

?>

<main class="mainPageYoga">

  <div class="lpYoga">
    <img class="lpYoga-imgBgYoga" src="<?php echo PW_URL_THEME ?>assets/img/lp-ebook-yoga/yoga.jpg" alt="Yoga">
    <div class="lpYoga-formYoga">
      <h1 class="mainPageYoga-titulo">Prática de Yoga em Casa</h1>
      <p class="mainPageYoga-texto">Mussum Ipsum, cacilds vidis litro abertis. Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus. Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis. Mé faiz elementum girarzis, nisi eros vermeio. Copo furadis é disculpa de bebadis, arcu quam euismod magna.</p>
      <?php echo do_shortcode( '[contact-form-7 id="7" title="Contato"]' ); ?>
    </div>
  </div>


</main>

<?php get_footer(); ?>