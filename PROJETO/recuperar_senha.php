<?php 

session_start();
require_once 'src/dao/UserDAO.php';
require_once 'src/utils/FlashMessage.php';
require_once 'src/utils/Database.php';
include_once 'src/partials/_headLogin.php';
include_once 'src/partials/_navLogin.php';
?>

<?php 
  
  UserDAO::recuperar($_POST['email']);
  $email = $_POST['email'];
?>
<body>
<div class="container">
  
<div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">

      <section class="login-form">
        <form method="post" action="recup.php" role="login" name="Login_Form">
           <?= FlashMessage::printMessage(); ?>  
          <img src="img/password.png" class="img-responsive" alt="senha" />
          


          <label for="senha" >Digite sua nova senha</label>
          <input type="password" name="senha" placeholder="Nova senha" required class="form-control input-lg" >
          </br>
        
          <button type="submit" value="<?= $email ?>" name="confirm" value="confirm" class="btn btn-lg btn-dark btn-block">Confirmar Alteração de Senha</button>
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



<script>
  function verificaFINAL(){
    var senha = document.getElementById("senha").value;;
    if(true && verificaCheck()){
  if(senha ==""){

      alert("Preencha seu senha!");
      return false;
      document.getElementById('senha').focus();

    }
</script>