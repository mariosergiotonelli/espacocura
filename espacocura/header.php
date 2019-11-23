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
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

<link rel="icon" href="<?php echo PW_URL_THEME; ?>favicon.ico" />

<?php wp_head(); ?>
</head>
<body>

<header class="headerEspaco">
  <div class="wrap topo">

    <div class="hamburguer">
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
    </div>

    <nav>
      <ul>
        <li><a href="<?php echo PW_URL ?>#">Home</a></li>
        <li><a href="<?php echo PW_URL ?>espaco">O Espaço</a></li>
        <li><a href="<?php echo PW_URL ?>terapias">Terapias</a></li>
        <li><a href="<?php echo PW_URL ?>atividades">Atividades</a></li>
        <li><a href="<?php echo PW_URL ?>quem-somos">Quem Somos</a></li>
        <li><a href="<?php echo PW_URL ?>parcerias">Parcerias</a></li>
        <li><a href="<?php echo PW_URL ?>contato">Contato</a></li>
      </ul>
    </nav>
  </div>
</header>