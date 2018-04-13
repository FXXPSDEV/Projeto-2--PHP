<?php 
session_start();

require_once "src/utils/FlashMessage.php";
require_once 'src/dao/UserDAO.php';
require_once 'src/entities/User.php';
require_once 'src/utils/Database.php';
include_once "src/partials/_verify_auth.php";
include_once "src/partials/_head.php" 

?>

<?php if(isset($_GET['del'])){
    UserDAO::delete($_GET['del']);
}
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef="home.html"><img src=img/logos/fxxdevpslogo.png alt="merkery_logo" class="hidden-xs hidden-sm">
                        <img src="http://jskrishna.com/work/merkury/images/circle-logo.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li><a href="#"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Workflow</span></a></li>
                        <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Statistics</span></a></li>
                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Calender</span></a></li>
                        <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Users</span></a></li>
                        <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Setting</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
    <!-- Modal -->
    <!-- table -->
    

   <table class="table table-dark table-striped  table-responsive  table-bordered table-hover  text-center">
   <?= FlashMessage::printMessage(); ?>  
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
            foreach($result as $row){
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
                     <form action ="alterar.php" method = "GET" >
                        <td><a href="/alterar.php"><button onclick="" name="alt"value = "<?php echo $row["id"]; ?>">Editar</button></a></td>
                    </form>
                    <form method = "GET">
                        <td><button onclick="return confirm('Confirmar?');" name="del" value = "<?php echo $row["id"]; ?>">Remover</button></td>
                     </form> 
                    <?php
                         }
                        ?>
                </tr>
                <?php 
            
            ?>
  </tbody>
</table>
    
    <div id="add_project" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Add Project</h4>
                </div>
                <div class="modal-body">
                            <input type="text" placeholder="Project Title" name="name">
                            <input type="text" placeholder="Post of Post" name="mail">
                            <input type="text" placeholder="Author" name="passsword">
                            <textarea placeholder="Desicrption"></textarea>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="cancel" data-dismiss="modal">Close</button>
                    <button type="button" class="add-project" data-dismiss="modal">Save</button>
                </div>
            </div>

        </div>
    </div>

</body>