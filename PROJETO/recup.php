<?php
    //require_once '/src/entities/User.php';
    require_once 'src/dao/UserDAO.php';
    require_once 'src/utils/Database.php';
    require_once 'src/utils/FlashMessage.php';

    session_start();

        $email = ($_POST['confirm']);
        $senha = ($_POST['senha']);

       
    UserDAO::alterar_senha($email,$senha);
    
    ?>