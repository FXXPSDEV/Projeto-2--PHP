<?php
    require_once '../src/entities/User.php';
    require_once '../src/dao/UserDAO.php';
    require_once '../src/utils/Database.php';
    require_once '../src/utils/FlashMessage.php';

    session_start();

    $user = new User;
    
    //if ($_POST['senha'] == $_POST['senha']) {
        $user->setUsername($_POST['usuario']);
        $user->setUserln($_POST['ln']);
        $user->setUsercpf($_POST['cpf']);
        $user->setUserrg($_POST['rg']);
        $user->setUsertfc($_POST['tfc']);
        $user->setUsertfr($_POST['tfr']);
        $user->setUseremail($_POST['email']);
        $user->setPassword($_POST['senha']);
        $user->setUserendereco($_POST['endereco']);
        $user->setUsercomplemento($_POST['complemento']);
        $user->setUsercidade($_POST['cidade']);
        $user->setUserestado($_POST['estado']);
        $user->setUsercep($_POST['cep']);
        $user->setUserpergunta($_POST['pergunta']);
        $user->setUserresposta($_POST['resposta']);
        
    /*} else {
        echo 'Senhas não conferem';        
    }*/

    $linhasAfetadas = UserDAO::add($user);
    
    if ($linhasAfetadas > 0) {
        FlashMessage::setMessage('Usuário cadastrado com sucesso.', FlashMessage::OK);
        header('Location: ../login.php');
    } else {
        FlashMessage::setMessage('Ocorreu um problema ao cadastrar o usuário.', FlashMessage::ERROR);
        header('Location: cadastro.php');
    }

    