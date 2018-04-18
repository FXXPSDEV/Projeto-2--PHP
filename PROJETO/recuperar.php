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
        <form method="post" action="recuperar_senha.php" role="login" name="Login_Form">
           <?= FlashMessage::printMessage(); ?>  
          <img src="img/password.png" class="img-responsive" alt="senha" />
          <label for="email">Digite seu email cadastrado</label>
          <input type="email" name="email" placeholder="Email" required class="form-control input-lg" >
          <label for="resposta">Digite seu email cadastrado</label>
          <input type="text" class="form-control input-lg" name="senha" id="password" placeholder="Senha" />
          </br>
                    
          <button type="submit" name="submit" value="login" class="btn btn-lg btn-dark btn-block">Entrar</button>
          </hr>
        
        </form>
        </br>
        <div class="form-links">
        
          <a href="/index.php" class="btn btn-outline-dark btn-block" target="_blank">VOLTAR AO SITE</a>
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