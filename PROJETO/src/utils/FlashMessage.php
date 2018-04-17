<?php

class FlashMessage {
     const OK = 'ok';
     const ERROR = 'error';

    public static function printMessage() {
        if(isset($_SESSION['flash_message']) && $_SESSION['flash_message']['status'] == 'ok') {
            $msg = $_SESSION['flash_message']['msg'];
            unset($_SESSION['flash_message']);
            return "<p class='alert alert-success'>$msg</p>";
        } else if (isset($_SESSION['flash_message']) && $_SESSION['flash_message']['status'] == 'error') {
            $msg = $_SESSION['flash_message']['msg'];
            unset($_SESSION['flash_message']);
            return "<p class='alert alert-danger'>$msg</p>";
        }
    }

    public static function setMessage($msg, $status) {
        $_SESSION['flash_message']['msg'] = $msg;
        $_SESSION['flash_message']['status'] = $status;
    }

}


