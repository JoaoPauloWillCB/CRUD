<?php
    //arquivo que tera a lógica para salvar os dados editados
    include_once('../config/config.php');

    //verifica se o botao com id update foi apertado
    if(isset($_POST['update']))
    {   
        //passa todos os dados do banco para variaveis locais
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $data_nasc = $_POST['data_nasc'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];

        //query de update no usuario
        $sqlUpdate = "UPDATE tb_usuarios SET nome='$nome', email='$email', cpf='$cpf', date_nascimento='$data_nasc', estado='$estado', cidade='$cidade' WHERE id_usuario='$id'";

        $result = $conexao->query($sqlUpdate);
    }
    //volta para a tela home
    header('Location: ../View/home.php');
?>