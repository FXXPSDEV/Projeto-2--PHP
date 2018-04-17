<?php 
session_start();

require_once "src/utils/FlashMessage.php";
require_once 'src/dao/UserDAO.php';
require_once 'src/entities/User.php';
require_once 'src/utils/Database.php';
include_once "src/partials/_verify_auth.php";
include_once "src/partials/_head.php";
include_once "src/partials/_head2.php";

if(isset($_GET['del'])){
    UserDAO::delete($_GET['del']);
}
?>

<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef="/index.php"><img src=img/logos/fxxdevpslogo.png alt="FXXPS DEV LOGO" class="hidden-xs hidden-sm"></a>
                </div>
                <div class="navi">
                    <ul>
                        <li class="active"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Página principal</span></a></li>
                        <li><a href="/pessoas/index.php"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Lista de usuários cadastrados</span></a></li>
                        <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Calendário de ações</span></a></li>
             
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <?= FlashMessage::printMessage(); ?>  
                
            </div>
        </div>
    </div>
</body>