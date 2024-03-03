<?php
    //inicia uma sessão
    session_start();
    //destroi as variaveis cpf e email
    unset($_SESSION['email']);
    unset($_SESSION['cpf']);
    //redireciona para a tela de login
    header('Location: ../login.php');
?>