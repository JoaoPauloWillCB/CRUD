<?php
    /*parametros necessarios para conectar ao banco de dados*/
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPassword = '';
    $dbName = 'crud';

    /*iniciando conexão com o banco de dados*/
    $conexao = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

    /*teste conexão*/
    /*if($conexao->connect_errno)
    {
        echo "ERRO";
    }
    else
    {
        echo "Conexão efetuada com sucesso!";
    }*/
?>