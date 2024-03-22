<?php
    include_once('../Model/read.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/home.css">
    <title>CRUD</title>
</head>
<body>
    <header class="cabecalho">
        <nav class="navigation">
            <a href="#" class="title">CRUD</a>
            <a href="../Controller/logout.php" class="btn-sair">Sair</a>
        </nav>
    </header>

    <?php
        echo "<h1 class='text-bemvindo'>Bem Vindo(a) " .$_SESSION['nome']. "!</h1>";
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
                    include_once('../Controller/listUsers.php');
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>