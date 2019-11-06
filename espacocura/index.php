<?php get_header(); ?>


<main class="mainFritz">

  <section class="banner">

    <a href="<?php echo PW_URL ?>">
      <img class="bannerDesktop" src="<?php echo PW_URL_THEME ?>/assets/img/banners/02.jpg" alt="Banner">
    </a>

    <a href="<?php echo PW_URL ?>">
      <img class="bannerDesktop" src="<?php echo PW_URL_THEME ?>/assets/img/banners/02.jpg" alt="Banner">
    </a>

    <!-- <a href="<?php echo PW_URL ?>">
      <img class="bannerMobile" src="<?php echo PW_URL_THEME ?>/assets/img/banners/02_mob.jpg" alt="Banner">
    </a>

    <a href="<?php echo PW_URL ?>">
      <img class="bannerMobile" src="<?php echo PW_URL_THEME ?>/assets/img/banners/03_mob.jpg" alt="Banner">
    </a> -->

  </section>

  <section class="queijo">
    
    <div class="txtQueijo">
      <h1 class="tituloQueijo">Queijo Crocante</h1>
      <p class="infoQueijo">Os cubinhos de queijo parmesão foram criados para dar ainda mais sabor aos momentos de lazer e diversão. Irresistível em sua crocancia, sendo 100% queijo parmesão.</p>
      <button class="btn btnQueijo">
        <a href="<?php echo PW_URL ?>queijo">Veja mais</a>
      </button>
    </div>

    <figure class="imgQueijo">
      <a href="<?php echo PW_URL ?>queijo">
        <img src="<?php echo PW_URL_THEME ?>/assets/img/queijo_home.png" alt="Queijo Frito">
      </a>
    </figure>

  </section>

  <section class="produtos">
    <div class="container">
      <div class="row">
        <div class="imgProdutos">

          <div>
            <a href="<?php echo PW_URL ?>produtos"><img src="<?php echo PW_URL_THEME ?>/assets/img/queijo_01.png" alt="Produtos Friz"></a>
          </div>

          <div>
            <a href="<?php echo PW_URL ?>produtos"><img src="<?php echo PW_URL_THEME ?>/assets/img/queijo_02.png" alt="Produtos Friz"></a>
          </div>

          <div>
            <a href="<?php echo PW_URL ?>produtos"><img src="<?php echo PW_URL_THEME ?>/assets/img/queijo_03.png" alt="Produtos Friz"></a>
          </div>  

        </div>

        <div class="txtProdutos">
          <h1 class="tituloProdutos">Produtos Fritz@</h1>
          <p class="infoProdutos">O catálogo Fritz@ é composto de produtos variados: além do delicioso Queijo Crocante, temos diversos tipos de amendoim (salgado, sem pele, com alho, etc), snacks de bacon e batata frita!</p>
          <button class="btn btnProdutos">
            <a href="<?php echo PW_URL ?>produtos">Veja mais</a>
          </button>
          <div class="paginator">
            <ul>
              <li class="prev"> </li>
              <li class="next"> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </section>

  <section class="historia">
    
    <div class="txtHistoria">
      <h1 class="tituloHistoria">Quem somos</h1>
      <p class="infoHistoria">Fundada em 2009, a FRITZ@ iniciou seu trabalho com a produção de uma linha completa de amendoins junto da distribuição para bares, padarias, mercearias e mini mercados no Vale do Paraíba.
        <button class="btn btnHistoria">
          <a href="<?php echo PW_URL ?>historia">Veja mais</a>
        </button>
      </p>
      
    </div> 

    <figure class="imgHistoria">
      <img src="<?php echo PW_URL_THEME ?>/assets/img/historia2.png" alt="História">
    </figure>

  </section>

  <section class="PDV" id="PDV">
    <div class="container">
      <div class="row">
        <div class="PDV02">
          <div class="txtPDV">
            <figure class="casaPDV">
              <img src="<?php echo PW_URL_THEME ?>/assets/img/PDV.png" alt="Pontos de Venda">
            </figure>
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