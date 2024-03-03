<?php
    session_start();
    include_once('config/config.php');
    //verifica se existe uma seção com email e com cpf ele mantem na página caso contrario ele retorna pro login
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['cpf']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['cpf']);
        header('Location: login.php');
    }
    else
    {
        $logado = $_SESSION['email'];
    }

    //query para pegar todos os registros do banco de dados
    $sql = "SELECT * FROM tb_usuarios ORDER BY id_usuario ASC";
    //joga o resultado da query para a variavel result
    $result = $conexao->query($sql);

    $user_data =  mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <title>CRUD-Sabanco</title>
</head>
<body>
    <header>
        <nav>
            <a href="#" class="text">CRUD-Sabanco</a>
            <a href="consultas/logout.php" class="btn-sair">Sair</a>
        </nav>
    </header>

    <?php
        echo "<h1 class='text-bemvindo'>Bem Vindo " .$user_data['nome']. "!</h1>";
    ?>
    <div class="table-box">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>" .$user_data['id_usuario']. "</td>";
                        echo "<td>" .$user_data['nome']. "</td>";
                        echo "<td>" .$user_data['email']. "</td>";
                        echo "<td>
                            <a id='btn-edit' href='edit.php?id=$user_data[id_usuario]'>
                                <img id='img-pencil' src='img/pencil.svg'>
                            </a>
                            <a id='btn-remove' href='consultas/delete.php?id=$user_data[id_usuario]'>
                                <img id='img-trash' src='img/trash-fill.svg'>
                            </a>
                        </td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>