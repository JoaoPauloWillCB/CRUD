<?php
    /*incluindo a conexão*/
    include_once('../config/config.php');
    /*verificação para ver se o formulário foi submitado/enviado para o banco*/
    if(isset($_POST['submit']))
    {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $celular = $_POST['celular'];
        $data_nasc = $_POST['data-nasc'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $endereco = $_POST['endereco'];

        /*fazendo a query de insert*/
        $result = mysqli_query($conexao, "INSERT INTO tb_usuarios (nome, email, cpf, celular, date_nascimento, estado, cidade, endereco) VALUES ('$nome', '$email', '$cpf', '$celular', '$data_nasc', '$estado', '$cidade', '$endereco')");
    
        //depois de enviar os dados para o banco de dados ele redireciona para a tela de login
        header('Location: ../View/login.php');
    }
    
?>