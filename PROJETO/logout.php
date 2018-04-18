<?php
    require_once 'src/utils/FlashMessage.php';
   
    
        session_start();
        $_SESSION =array();
        FlashMessage::setMessage('O usuário foi desconectado.', FlashMessage::ERROR);
        header('Location: /login.php');
    
   
    
  
?>

    