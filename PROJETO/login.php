<?php 

session_start();

require_once "src/utils/FlashMessage.php";
include_once 'src/partials/_head.php';
include_once 'src/partials/_navcadastro.php';

?>


<div class = "container centered">

<div class="wrapper col-lg-6 centered ">   

        <form action="sign_in.php" method="post" name="Login_Form" class="form-signin">
            <?= FlashMessage::printMessage(); ?>  

            <h3 class="form-signin-heading">Seja bem vindo!</h3>
            <hr class="colorgraph"><br>
            
            <input type="email" class="form-control" name="email" placeholder="E-mail cadastrado!" required="" autofocus="" tabindex="1" />
            <input type="password" class="form-control" name="senha" placeholder="Senha" required="" tabindex="2"/>     		  
            
            <button class="btn btn-lg btn-primary btn-block"  name="submit" value="login" type="submit" tabindex="3">Entrar</button>  			
            <hr />
            <a href="cadastro.php" class="btn btn-lg btn-default btn-block">Cadastrar-se</a>
        </form>	
      
    </div>
</div>


<?php include_once 'src/partials/_footer.php'?>