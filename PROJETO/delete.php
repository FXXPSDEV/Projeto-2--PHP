<?php
    require_once 'src/entities/User.php';
    require_once 'src/dao/UserDAO.php';
    require_once 'src/utils/Database.php';
    require_once 'src/utils/FlashMessage.php';

    session_start();

    $user = new User;
    
    if ($_POST[''] == $_POST['']) {
        $user->setUserid($_POST['id']);
    } else {
        echo 'ID não confere';        
    }

    $status = UserDAO::verify($user);
    
    if ($status) {
        
        $linhasAfetadas = UserDAO::delete($user);
    
        if ($linhasAfetadas > 0) {
            FlashMessage::setMessage('Usuário deletado com sucesso.', FlashMessage::OK);
            header('Location: /login.php');
        } else {
            FlashMessage::setMessage('Ocorreu um problema ao deletar o usuário.', FlashMessage::ERROR);
            header('Location: /dashboard.php');
        }

    } else {
        FlashMessage::setMessage('Credenciais incorretas favor tentar novamente.', FlashMessage::ERROR);
        header('Location: /index.php');
    }
    

    