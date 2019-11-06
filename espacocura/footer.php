<footer class="footerFritz">

  <section class="contatosFritz">
    <div class="container">
      <div class="row">
        <div class="logoFooter">
          <a href="#" title="Fritz Alimentos">
            <h1 class="logo">         
              <?php echo PW_SITE_NAME; ?> 
            </h1>
          </a>
        </div>

        <div class="infoRodape">
          <div class="endRodape">
            <p><span class="glyphicon glyphicon-home"></span>Rua Gandu, 203 - Jardim Vale do Sol</p>
            <p>São José dos Campos - SP</p>
            <p>CEP 12238-040 </p>
            <p><span class="glyphicon glyphicon-earphone"></span>(12) 3341-0162 - (12) 98299-4711</p>
            <p><span class="glyphicon glyphicon-globe"></span>
              <a href="mailto:faleconosco@fritzalimentos.com.br">faleconosco@fritzalimentos.com.br</a>
            </p>            
          </div>

          <div class="menuRodape">
            <ul>
              <li><a href="<?php echo PW_URL ?>queijo"" class="menuRodapeLink">queijo crocante</a></li>
              <li><a href="<?php echo PW_URL ?>produtos"" class="menuRodapeLink">produtos</a></li>
              <li><a href="<?php echo PW_URL ?>historia"" class="menuRodapeLink">história</a></li>
              <li><a href="<?php echo PW_URL ?>#PDV" class="menuRodapeLink">pontos de vendas</a></li>
              <li><a href="#contatoRodape" class="menuRodapeLink">contato</a></li>
              
            </ul>
          </div>

        </div>

        <div class="contatoRodape" id="contatoRodape">
          <h4 class="contatoRodape__titulo">
            Entre em contato
          </h4>
          <p class="contatoRodape__descricao">
            Estamos dispostos a atende-lo.
          </p>
          <?php echo do_shortcode('[contact-form-7 id="4" title="Contato"]'); ?>
        </div>
      </div>
    </div>  
  </section>

  <section class="direitosFritz">
    <div class="container">
      <div class="row">
        <p>© Todos os direitos reservados à Fritz@ Alimentos </p>
        <p>Desenvolvido por <a href="http://mariotonelli.com.br">Mário Tonelli</a></p>
      </div>

    </div>
    
  </section>

</footer>

<?php wp_footer(); ?>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js'></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/menu.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/style.js"></script>

</body>
</html>