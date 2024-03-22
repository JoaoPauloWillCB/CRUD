<?php
    //Arquivo que manipula a lógica php para ver se existe o registro com o email e o cpf do login
    
    //iniciando uma sessão
    session_start();
    /* vericia os parametro que estão vindo do login
    print_r($_REQUEST);
    */

    //verifica se o fomulário foi enviado e se as variaveis nao estão vazias
    if(isset($_POST['submit']) && !empty($_POST['nome'] && !empty($_POST['cpf'])))
    {
        include_once('../config/config.php');
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];

        //cria e executa a query para verificar se os parametros existem no banco de dados
        $sql = "SELECT * FROM tb_usuarios WHERE nome = '$nome' and cpf = '$cpf'";
        $result = $conexao->query($sql);
        
        //verifica se foi encontrada algum registro no banco de dados, se foi ele entra se nao ele volta para a tela de login
        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['nome']);
            unset($_SESSION['cpf']);
            header('Location: ../View/login.php');
        }
        else
        {
            $_SESSION['nome'] = $nome;
            $_SESSION['cpf'] = $cpf;
            header('Location: ../View/home.php');
        }
    }
    else
    {
        header('Location: ../View/login.php');
    }
?>