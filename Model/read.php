<?php
    session_start();
    include_once('../config/config.php');
    //verifica se existe uma seção com email e com cpf ele mantem na página caso contrario ele retorna pro login
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['cpf']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['cpf']);
        header('Location: ../View/login.php');
    }
    else
    {
        $logado = $_SESSION['email'];
    }

    //query para pegar todos os registros do banco de dados
    $sql = "SELECT * FROM tb_usuarios ORDER BY id_usuario ASC";
    //joga o resultado da query para a variavel result
    $result = $conexao->query($sql);
?>