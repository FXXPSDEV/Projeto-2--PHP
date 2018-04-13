<?php

    require_once 'src/entities/User.php';
    require_once 'src/dao/UserDAO.php';
    require_once 'src/utils/Database.php';
    require_once 'src/utils/FlashMessage.php';

    session_start();

    $user = new User;
    
    $user->setUseremail($_POST['email']);
    $user->setPassword($_POST['senha']);
    
    $status = UserDAO::verify($user);
    
    if ($status) {
        $_SESSION['user'] = serialize($user);
        FlashMessage::setMessage('Usuário logado com sucesso.', FlashMessage::OK);
        header('Location: /dashboard.php');
    } else {
        FlashMessage::setMessage('Credenciais incorretas favor tentar novamente.', FlashMessage::ERROR);
        header('Location: /login.php');
    }

    