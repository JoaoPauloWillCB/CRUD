<?php
    /*verificação se existe ou não um id como parametro e se existir ele puxa os dados*/
    if(!empty($_GET['id']))
    {
        include_once('../config/config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM tb_usuarios WHERE id_usuario=$id";
        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                $cpf = $user_data['cpf'];
                $data_nasc = $user_data['date_nascimento'];
                $estado = $user_data['estado'];
                $cidade = $user_data['cidade'];
            } 
        }
        else
        {
            header('Location: ../View/home.php');
        }
    }
    else
    {
        header('Location: ../View/home.php');
    }
?>