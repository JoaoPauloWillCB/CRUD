<?php
    /*verificação se existe ou não um id como parametro e se existir ele puxa os dados*/
    if(!empty($_GET['id']))
    {
        include_once('../config/config.php');

        //verifica se tem um usuario no banco de dados com o id da url
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM tb_usuarios WHERE id_usuario=$id";
        $result = $conexao->query($sqlSelect);

        //se achar alguma linha 
        if($result->num_rows > 0)
        {
            //puxa os dados para variaveis locais
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                $cpf = $user_data['cpf'];
                $celular = $user_data['celular'];
                $data_nasc = $user_data['date_nascimento'];
                $estado = $user_data['estado'];
                $cidade = $user_data['cidade'];
                $endereco = $user_data['endereco'];
            } 
        }
        else
        {
            //senao volta para a tela home
            header('Location: home.php');
        }
    }
    else
    {
        //se nao achar nenhuma linha volta para a tela home
        header('Location: home.php');
    }
?>