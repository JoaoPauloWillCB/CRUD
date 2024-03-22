<?php
    session_start();
    include_once('../config/config.php');
    //verifica se existe uma seção com email e com cpf ele mantem na página caso contrario ele retorna pro login
    if((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['cpf']) == true))
    {
        unset($_SESSION['nome']);
        unset($_SESSION['cpf']);
        header('Location: ../View/login.php');
    }
    else
    {
        $logado = $_SESSION['nome'];
    }

    //query para pegar todos os registros do banco de dados
    $sql = "SELECT * FROM tb_usuarios ORDER BY id_usuario ASC";
    //joga o resultado da query para a variavel result
    $result = $conexao->query($sql);
?>