
<?php include_once 'src/partials/_head.php'?>

<?php include_once 'src/partials/_header.php'?>
  <body id="page-top">


<?php include_once 'src/partials/_nav.php'?>

    <!-- Time -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Nosso time</h2>
            <h3 class="section-subheading text-muted">Estudantes de Ciência da Computação - IFC Videira.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/time/andre.jpg" alt="André Robert">
              <h4>André Robert</h4>
              <p class="text-muted">Data Scientist e Web Developer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="https://steamcommunity.com/id/AndrewFXX" target="_blank">
                    <i class="fa fa-steam"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/andrew.fxx" target="_blank">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://github.com/FXXDEV" target="_blank">
                    <i class="fa fa-github"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/time/douglas.jpg" alt="Douglas Prado">
              <h4>Douglas Prado</h4>
              <p class="text-muted">Game e Web Developer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="https://steamcommunity.com/id/76561198123207453" target="_blank">
                    <i class="fa fa-steam"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/douglas.prado.733" target="_blank">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://github.com/dodopsantos" target="_blank">
                    <i class="fa fa-github"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          </div>
        <div class="row">
          <div class="col-lg-6 mx-auto text-center">
            <p class="large text-muted" >Não sabemos o que estamos fazendo, mas estamos tentando</p>
          </div>
        </div>
      </div>
    </section>


    <!-- Contato -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Entre em contato</h2>
            <h3 class="section-subheading text-muted">Tire suas dúvidas.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" action="email/contato.php" method="POST" no>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" name="name" id="name" type="text" placeholder="Seu Nome *" required data-validation-required-message="Por favor digite seu nome.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" name="email" id="email" type="email" placeholder="Seu Email *" required data-validation-required-message="Por favor digite seu endereço de email.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" name="phone" id="phone" type="tel" placeholder="Seu telefone *" required data-validation-required-message="Por favor digite seu número de telefone.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" name="message" id="message" placeholder="Sua Mensagem *" required data-validation-required-message="Por favor digite uma mensagem."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar mensagem</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

  <!-- Footer -->
<?php include_once 'src/partials/_footer.php'?>

  </body>

</html>
