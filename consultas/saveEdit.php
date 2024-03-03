<?php
    //arquivo que tera a lógica para salvar os dados editados
    include_once('../config/config.php');

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $celular = $_POST['celular'];
        $data_nasc = $_POST['data_nasc'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $endereco = $_POST['endereco'];

        $sqlUpdate = "UPDATE tb_usuarios SET nome='$nome', email='$email', cpf='$cpf', celular='$celular', date_nascimento='$data_nasc', estado='$estado', cidade='$cidade', endereco='$endereco' WHERE id_usuario='$id'";

        $result = $conexao->query($sqlUpdate);
    }
    header('Location: ../home.php');
?>