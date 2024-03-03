<?php

    if(!empty($_GET['id']))
    {
        include_once('../config/config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM tb_usuarios WHERE id_usuario=$id";
        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM tb_usuarios WHERE id_usuario='$id'";
            $resultDelet = $conexao->query($sqlDelete);
        }
    }
    header('Location: ../home.php');
?>