<?php
    /*usar quando o usuário cliar no botao de logout*/
    include_once '.config/config.php';
    unset($_SESSION['userLogged']);
    header('Lovation: login.php')
?>