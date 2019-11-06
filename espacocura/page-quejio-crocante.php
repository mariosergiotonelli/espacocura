<?php 

/*Template name: fritzalimentos - Queijo Crocante */

get_header();

?>

<main class="mainQueijo">   

  <figure class="bannerQueijo">
    <img class="fotoQueijo" src="<?php echo PW_URL_THEME ?>/assets/img/banner_queijo.jpg" alt="Queijo Crocante">
  </figure>

  <section class="queijo">
    
    <div class="txtQueijo">
      <h1 class="tituloQueijo">Queijo Crocante</h1>
      <p class="infoQueijo">Os cubinhos de queijo parmesão foram criados para dar ainda mais sabor aos momentos de lazer e diversão. Irresistível em sua crocancia, sendo 100% queijo parmesão.</p>
      <p class="infoQueijo">Os cubinhos de queijo parmesão acompanham sua pipoca salgada em um bom filme, mas também um vinho ou cerveja entre os amigos e até mesmo aquela salada ou risoto no almoço de família.</p>
    </div>

    <figure class="imgQueijo">
      <img src="<?php echo PW_URL_THEME ?>/assets/img/queijo50g.png" alt="Queijo Crocante" title="Queijo Crocante">
    </figure>   

  </section>  

  <section class="PDV" id="PDV">
    <div class="container">
      <div class="row">
        <div class="PDV02">
          <div class="txtPDV">
            <figure class="casaPDV">
              <img src="<?php echo PW_URL_THEME ?>/assets/img/casaPDV.png" alt="Pontos de Venda">
            </figure>
            <h1 class="tituloPDV02">Queijo Crocante</h1>
            <p class="infoPDV02">Confira os cinemas mais perto de você que comercializam o queijo crocante FRITZ@! Busque por rua, CEP, bairro ou mesmo pelo nome do estabelecimento para consultar os pontos de revenda mais próximos de você.</p>
          </div>
        </div>
      </div>
    </div>

  </section>

  <section class="maps">
    <div class="container">
      <div class="row">
        <div class="maps">  
          <iframe src="https://www.google.com/maps/d/embed?mid=1z4EAzCI79-Co1MO5PeCaHlu_90n4MAr6" width="100%" height="400"></iframe>
        </div>
      </div>
    </div>
  </section>


</main>


<?php get_footer(); ?>