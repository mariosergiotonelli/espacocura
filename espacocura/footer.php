<footer class="footerEspaco">

  <section class="contatosEspaco">
    <div class="container">
      <div class="row">
        <div class="infoRodape">

          <div class="endRodape">
            <p><span class="glyphicon glyphicon-home"></span>Rua Agostinho Gomes, 2225 - Ipiranga</p>
            <p>São Paulo - SP</p>
            <p>CEP 04206-001 </p>
            <p><span class="glyphicon glyphicon-globe"></span>
              <a href="mailto:curaespaco.sp@gmail.com">curaespaco.sp@gmail.com</a>
            </p>
          </div>

          <div class="menuRodape">
            <ul>
              <li><a href="<?php echo PW_URL ?>queijo" class="menuRodapeLink">queijo crocante</a></li>
              <li><a href="<?php echo PW_URL ?>produtos" class="menuRodapeLink">produtos</a></li>
              <li><a href="<?php echo PW_URL ?>historia" class="menuRodapeLink">história</a></li>
              <li><a href="<?php echo PW_URL ?>#PDV" class="menuRodapeLink">pontos de vendas</a></li>
              <li><a href="#contatoRodape" class="menuRodapeLink">contato</a></li>
            </ul>
          </div>

          <div class="redesRodape">
            <div class="menu__item">
              <a target="_blank" class="menu__link redesHeader" href="https://www.facebook.com/espacocurasp">
                <div class="facebook">facebook</div>
              </a>
            </div>
            <div class="menu__item">
              <a target="_blank" class="menu__link redesHeader" href="https://www.instagram.com/curaespaco/">
                <div class="instagram">instagram</div>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="direitosEspaco">
    <div class="container">
      <div class="row">
        <p>© Todos os direitos reservados à Espaco Cura </p>
        <p>Desenvolvido por <a href="http://mariotonelli.com.br">Mário Tonelli</a></p>
      </div>
    </div>
  </section>

</footer>

<?php wp_footer(); ?>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js'></script>
<script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/style.js"></script>

</body>
</html>