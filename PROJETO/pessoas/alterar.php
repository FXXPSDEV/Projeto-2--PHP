<?php 

session_start();

require_once '../src/utils/FlashMessage.php';
require_once '../src/dao/UserDAO.php';
require_once '../src/utils/Database.php';
include_once '../src/partials/_head.php';
include_once '../src/partials/_navcadastro.php';
?>

<script> 
    function verificaCheck(){
     if (document.getElementById('check').checked) {
      alert('Cadastro realizado!');
      return true;
    } else{
     alert('Você precisa confirmar os termos!');
     document.getElementById('check').focus();
     return false;
    }
    }
</script>

<script>
  function verificaFINAL(){
    var nome = document.getElementById("nome").value;
    var sobrenome =  document.getElementById("sobrenome").value;
    var cpf =  document.getElementById("cpf").value;
    var rg =  document.getElementById("rg").value;
    var tfc = document.getElementById("tfc").value;
    var tfr = document.getElementById("tfr").value;
    var email = document.getElementById("email").value;
    var endereco = document.getElementById("endereco").value;
    var senha = document.getElementById("senha").value;;
    var complemento = document.getElementById("complemento").value;
    var cidade = document.getElementById("cidade").value;
    var estado = document.getElementById("estado").value;
    var cep = document.getElementById("cep").value;
    var pergunta = document.getElementById("pergunta").value;
    var resposta = document.getElementById("resposta").value;
    if(true && verificaCheck()){
  if(nome ==""){

      alert("Preencha seu nome!");
      return false;
      document.getElementById('n').focus();

    }

   if(sobrenome ==""){
      alert("Preencha seu sobrenome!");
      return false;
      document.getElementById('ln').focus();
    } 
    if(cpf ==""){
      alert("Preencha seu CPF!");
      return false;
      document.getElementById('cpf').focus();
    }
    if(rg ==""){
      alert("Preencha seu RG!");
      return false;
      document.getElementById('rg').focus();
    }
    if(tfc ==""){
      alert("Preencha seu Telefone Celular!");
      return false;
      document.getElementById('tfc').focus();
    }

    if(tfr ==""){
      alert("Preencha seu Telefone Residencial!");
      return false;
      document.getElementById('tfr').focus();
    }

    if(email==""){
      alert("Preencha seu Email!");
      document.getElementById('email').focus();
      return false;

    }


    if(senha ==""){
      alert("Preencha sua Senha!");
      return false;
      document.getElementById('senha').focus();

    }
    
    if(pergunta ==""){
      alert("A pergunta não pode ser vazia!");
      return false;
      document.getElementById('pergunta').focus();
    }
    if(resposta ==""){
      alert("Preencha sua resposta");
      return false;
      document.getElementById('resposta').focus();
    }

    if(endereco ==""){
      alert("Preencha seu Endereço!");
      return false;
      document.getElementById('endereco').focus();
    } 

      if(complemento ==""){
      alert("Preencha seu Complemento!");
      return false;
      document.getElementById('endereco').focus();
    }
 

    if(cidade ==""){
      alert("Preencha sua Cidade!");
      return false;
      document.getElementById('cidade').focus();

    }

    if(estado =="Selecione"){
      alert("Selecione seu Estado!");
      return false;
      document.getElementById('estado').focus();
    }
    if(cep ==""){
      alert("Preencha o CEP!");
      return false;
      document.getElementById('cep').focus();
    }

    
  return true;
  }else {


  return false;
}

  }

</script>

<?php 
   $result = UserDAO::listAlter($_GET['alt']);
        $id = $_GET['alt'];
        foreach($result as $row){
            
        }
    ?>
   

<section id="form" class="row align-items-center justify-content-center"> 
    
<form onsubmit="return verificaFINAL()" action="alter.php" method="POST" class="col-md-6">
<?= FlashMessage::printMessage(); ?> 


<h1>Formulário de alteração </h1>

 <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" value = "<?= $row['username']?> " name="usuario" id="nome" placeholder="Nome">
    </div>
    <div class="form-group col-md-6">
      <label for="sobrenome">Sobrenome</label>
      <input type="text" class="form-control" name="ln" value = "<?= $row['lastname']?> " id="sobrenome" placeholder="Sobrenome">
    </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="cpf">CPF</label>
      <input type="text" class="form-control" name="cpf" value = "<?= $row['cpf']?> " id="cpf" placeholder="Digite apenas números">
    </div>
    <div class="form-group col-md-6">
      <label for="rg">RG</label>
      <input type="text" class="form-control" name="rg" value = "<?= $row['rg']?> " id="rg" placeholder="Digite apenas números">
    </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="tfm">Telefone Celular</label>
      <input type="text" class="form-control" name="tfc" value = "<?= $row['tfc']?> " id="tfc" placeholder="(00)00000-0000">
    </div>
    <div class="form-group col-md-6">
      <label for="tfr">Telefone Residencial</label>
      <input type="text" class="form-control" name="tfr" value = "<?= $row['tfr']?> " id="tfr" placeholder="(00)0000-0000">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" value = "<?= $row['email']?> " id="email" placeholder="exemplo@exemplo.com">
    </div>
    <div class="form-group col-md-6">
      <label for="senha">Senha</label>
      <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="pergunta">Digite aqui sua pergunta de segurança</label>
      <input type="text" class="form-control" value = "<?= $row['pergunta']?>" name="pergunta" id="pergunta" placeholder="Ex: Qual o nome do seu cachorro?">
    </div>
    <div class="form-group col-md-6">
      <label for="resposta">Resposta para a pergunta de segurança</label>
      <input type="text" class="form-control" value = "<?= $row['resposta']?>" name="resposta" id="resposta" placeholder="Sua resposta">
    </div>
  </div>

  <div class="form-group">
    <label for="endereco">Endereço</label>
    <input type="text" class="form-control" name="endereco" value = "<?= $row['endereco']?> " id="endereco" placeholder="Sua rua, seu bairro...">
  </div>
  <div class="form-group">
    <label for="complemento">Complemento</label>
    <input type="text" class="form-control" name="complemento" value = "<?= $row['complemento']?> " id="complemento" placeholder="Apartmento, casa, sítio...">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="cidade">Cidade</label>
      <input type="text" class="form-control" name="cidade" value = "<?= $row['cidade']?> " id="cidade" placeholder="Cidade">
    </div>
    <div class="form-group col-md-4">
      <label for="estado">Estado</label>
      <select id="estado" class="form-control" name="estado" value = "<?= $row['estado']?>">
        <option selected value = "<?= $row['estado']?>"><?= $row['estado']?></option>
        <option value="AC">AC</option>
        <option value="AL">AL</option>
        <option value="AP">AP</option>
        <option value="AM">AM</option>
        <option value="BA">BA</option>
        <option value="CE">CE</option>
        <option value="ES">ES</option>
        <option value="DF">DF</option>
        <option value="MA">MA</option>
        <option value="MT">MT</option>
        <option value="MS">MS</option>
        <option value="MG">MG</option>
        <option value="PA">PA</option>
        <option value="PB">PB</option>
        <option value="PR">PR</option>
        <option value="PE">PE</option>
        <option value="PI">PI</option>
        <option value="RJ">RJ</option>
        <option value="RN">RN</option>
        <option value="RS">RS</option>
        <option value="RO">RO</option>
        <option value="RR">RR</option>
        <option value="SC">SC</option>
        <option value="SP">SP</option>
        <option value="SE">SE</option>
        <option value="TO">TO</option>

      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="cep">CEP</label>
      <input type="text" name="cep" class="form-control" value = "<?= $row['cep']?> " id="cep" placeholder="00000-000">
    </div>
  </div>
  <div id="center">
  <div class="down">
    <a href="../src/downloads/Termos-Servico.doc">Clique aqui para efetuar o download dos termos de serviço</a>
  </div>
  
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="check" name="aceito">
      <label class="form-check-label" for="aceito">
        Li e aceito os termos
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary" name="id" value="<?= $id?> " id="alterar">Alterar</button>
  </div>
</form>

</section>
        

<?php include_once '../src/partials/_footer.php'?>

</body>



</html>
