<?php 
session_start();

require_once '../src/utils/FlashMessage.php';
include_once '../src/partials/_headDashboard.php';
require_once '../src/partials/_verify_auth.php';
require_once '../src/dao/UserDAO.php';
require_once '../src/entities/User.php';
require_once '../src/utils/Database.php';



if(isset($_GET['del'])){
    UserDAO::delete($_GET['del']);
}
?>

<section id="bg12">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation12">
                <div class="logo">
                    <a hef="../index.php"><img src="../img/logos/fxxdevpslogo.png" alt="merkery_logo" class="hidden-xs hidden-sm">
                        <img src="../img/logos/fxxdevpslogo.png" alt="fxxdevps" class="visible-xs visible-sm circle-logo">
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li><a href="../index.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Página Inicial</span></a></li>
                        <li class="active"><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Usuários</span></a></li>
                        <li><a href="../login.php"><i class="fa fa-sign-in" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Login</span></a></li>
                        <li><a href="../logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Sair</span></a></li>
                    </ul>
                </div>
            </div>
                <div class="user-dashboard">
                    <h1>BEM VINDO AO DASHBOARD!</h1></br>
                    <p id="Descricao"> AQUI VOCÊ TEM CONTROLE DOS SEUS CLIENTES CADASTRADOS!</p>
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12 gutter">
                        
                        <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <?= FlashMessage::printMessage(); ?>  
                <div id="bgTable">
                <table class="table table-dark table-striped  table-responsive  table-bordered table-hover  text-center">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Sobrenome</th>
                            <th scope="col">CPF</th>
                            <th scope="col">RG</th>
                            <th scope="col">Tel.Cel</th>
                            <th scope="col">Tel.Fixo</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Complemento</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">Estado</th>
                            <th scope="col">CEP</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Deletar</th>                        
                        </tr>
                    </thead>
                    <tbody>
                    
                        <?php 
                            $result = UserDAO::listar();
                            foreach($result as $row) :
                                $id = $row["id"];
                                ?>
                                
                                <tr>
                                    <td><?php echo $row["id"] ?></td>
                                    <td><?php echo $row["username"]?></td>
                                    <td><?php echo $row["lastname"] ?></td>
                                    <td><?php echo $row["cpf"] ?></td>
                                    <td><?php echo $row["rg"] ?></td>
                                    <td><?php echo $row["tfc"] ?></td>
                                    <td><?php echo $row["tfr"] ?></td>
                                    <td><?php echo $row["email"] ?></td>
                                    <td><?php echo $row["endereco"] ?></td>
                                    <td><?php echo $row["complemento"] ?></td>
                                    <td><?php echo $row["cidade"] ?></td>
                                    <td><?php echo $row["estado"] ?></td>
                                    <td><?php echo $row["cep"] ?></td>
                                   <!-- <form action ="alterar.php" method ="GET">
                                        <td><a href="alterar.php?id=<?= $id ?>" name="alt" class="btn btn-warning">Editar</a></td>
                                    </form>-->
                                    <form action ="alterar.php" method = "GET" >
                                        <td><a href="/alterar.php"><button class="btn btn-warning" name="alt"value = "<?php echo $row["id"]; ?>">Editar</button></a></td>
                                     </form> 


                                    <form method = "GET">
                                        <td><button class="btn btn-danger" onclick="return confirm('Você realmente deseja remover a pessoa: <?php $row['username'] ?>?');" name="del" value = "<?php echo $row["id"]; ?>">Remover</button></td>
                                     </form>
                                   



                                </tr>
                            <?php endforeach; ?>
                                
                </tbody>
                </table>
                            </div>
            </div>

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

    </div>


</body>

</section>
<?php

require_once '../src/partials/_footer.php';
?>
</section>

<script>

/*$(document).ready(function(){
   $('[data-toggle="offcanvas"]').click(function(){
       $("#navigation").toggleClass("hidden-xs");
   });
});
</script>