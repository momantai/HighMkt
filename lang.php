<?php

    session_start();

    if(isset($_GET['lang'])) {
        switch($_GET['lang']) {
            case 'es':
                $_SESSION['lang'] = 'es';
                break;
            case 'en':
                $_SESSION['lang'] = 'en';
                break;
            default:
                $_SESSION['lang'] = 'es';
                break;
        }
    } elseif(!$_SESSION['lang']) {
        $_SESSION['lang'] = 'es';
    }

    include('lang/'.$_SESSION['lang'].'.php');

?>
