<?php 

session_start();

require_once 'src/utils/FlashMessage.php';
include_once 'src/partials/_headLogin.php';
include_once 'src/partials/_navLogin.php';

?>

<body>
<div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">

      <section class="login-form">
        <form method="post" action="sign_in.php" role="login" name="Login_Form">
           <?= FlashMessage::printMessage(); ?>  
           
          <img src="img/logos/icon.png" class="img-responsive" alt="fxxpsdevicon" />
          <input type="email" name="email" placeholder="Email" required class="form-control input-lg" >
          
          <input type="password" class="form-control input-lg" name="senha" id="password" placeholder="Senha" />
          </br>
                    
          <button type="submit" name="submit" value="login" class="btn btn-lg btn-dark btn-block">Entrar</button>
          </hr>
          <a href="pessoas/cadastro.php"class="btn btn-lg btn-dark btn-block">Cadastrar-se</a> 

           <a href="recuperar.php" class="btn btn-lg btn-secondary btn-block">Esqueci minha senha</a>
        </form>
        </br>
        <div class="form-links">
        
          <a href="https://github.com/FXXPSDEV" class="btn btn-outline-dark btn-block" target="_blank">NOSSO SITE</a>
        </div>
      </section>  
      </div>
      
     </div>

  </div>
  
  
  
</div>

<?php 
include_once 'src/partials/_footer.php';
?>

</body>