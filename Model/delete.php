<?php
    //verifica se a variavel id que esta na url do site nao esta vazia
    if(!empty($_GET['id'])) 
    {
        //se existir
        include_once('../config/config.php');

        $id = $_GET['id'];

        //busca o id no banco de dados
        $sqlSelect = "SELECT * FROM tb_usuarios WHERE id_usuario=$id";
        $result = $conexao->query($sqlSelect);

        //se encontrar o id no banco ira executar a query de delete do usuario
        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM tb_usuarios WHERE id_usuario='$id'";
            $resultDelet = $conexao->query($sqlDelete);
        }
    }
    //se estiver vazia ele volta para a tela home sem executar nada
    header('Location: ../View/home.php');
?>