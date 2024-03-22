<?php
    /*incluindo a conexão*/
    include_once('../config/config.php');
    /*verificação para ver se o formulário foi submitado/enviado para o banco*/
    if(isset($_POST['submit']))
    {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $data_nasc = $_POST['data-nasc'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];

        /*fazendo a query de insert*/
        $result = mysqli_query($conexao, "INSERT INTO tb_usuarios (nome, email, cpf, date_nascimento, estado, cidade) VALUES ('$nome', '$email', '$cpf', '$data_nasc', '$estado', '$cidade')");
    
        //depois de enviar os dados para o banco de dados ele redireciona para a tela de login
        header('Location: ../View/login.php');
    }
    
?>