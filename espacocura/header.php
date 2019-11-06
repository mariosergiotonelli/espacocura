<!DOCTYPE HTML>
<html>
<head>
  <title><?php wp_title( ' | ', true, 'right');?></title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="<?php echo PW_URL_THEME ?>/assets/css/style.css" />  
  <link rel="stylesheet" href="<?php echo PW_URL_THEME ?>/assets/css/reset.css" />
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
  <link rel="icon" href="<?php echo PW_URL_THEME; ?>favicon.png" />

  
  <?php wp_head(); ?>
</head>
<body>

  <header class="headerFritz">    
    <div class="wrap topo">
      <a href="<?php echo PW_URL ?>" title="Fritz@ Alimentos">
        <h1 class="logo">         
          <?php echo PW_SITE_NAME; ?> 
        </h1>
      </a>
      
      <button class="menu-btn menuResponsivo menuLink"></button>

      <nav class="menu">
        <ul class="menu__list">
          <li class="menu__item">
            <a href="<?php echo PW_URL ?>queijo" class="menu__link">queijo crocante</a>
          </li>
          <li class="menu__item">
            <a href="<?php echo PW_URL ?>produtos" class="menu__link">produtos</a>
          </li>
          <li class="menu__item">
            <a href="<?php echo PW_URL ?>historia" class="menu__link">Quem Somos</a>
          </li>
          <li class="menu__item">
            <a href="<?php echo PW_URL ?>#PDV" class="menu__link">pontos de vendas</a>
          </li>
          <li class="menu__item">
            <a href="#contatoRodape" class="menu__link">fale conosco</a>
          </li>
          <li class="menu__item">
            <a target="_blank" class="menu__link redesHeader" href="https://www.facebook.com/fritzalimentos/">
              <div class="facebook">facebook</div>
            </a>
          </li>
          <li class="menu__item">
            <a target="_blank" class="menu__link redesHeader" href="https://www.instagram.com/fritz.alimentos/">
              <div class="instagram">instagram</div>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </header>