<?php
    if (! isset($_SESSION['user'])) {
        FlashMessage::setMessage('Você precisa logar para efetuar essa ação.', FlashMessage::ERROR);
        header('Location: index.php');
    }
?>