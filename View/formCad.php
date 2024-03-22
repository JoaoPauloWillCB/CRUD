<?php
    include_once('../Model/create.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/formCad.css">
    <title>CRUD</title>
</head>
<body>
<div class="main">
        <div class="box-img">
            <h1>Que bom vê-lo(a) aqui!</h1>
            <h2>vamos começar?</h2>
            <img class="img" src="../assets/img/formCad.png" alt="Formulário">
        </div>
        <form class="input-group" name="formulario1" action="../Model/create.php" method="post">
            <h1>Registre-se</h1>
            <div class="form-cad">
                <div class="input-cad">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" class="input-user"required>
                </div>

                <div class="input-cad">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" class="input-user"required>
                </div>

                <div class="input-cad">
                    <label for="cpf">CPF</label>
                    <input type="number" name="cpf" id="cpf" class="input-user" required>
                </div>
    
                <div class="input-cad">
                    <label for="data-nasc">Data de nascimento</label>
                    <input type="date" name="data-nasc" id="data-nasc" class="input-user" required>
                </div>
                
                <div class="input-cad">
                    <label for="uf">UF</label>
                    <select name="estado" id="uf">
                        <option></option>
                    </select>
                </div>
            
                <div class="input-cad">
                    <label for="cidade">Cidade</label>
                    <select id="cidade" name="cidade"></select>
                </div>
            </div>

            <div class="submit-form">
                <button type="submit" name="submit" id="submit">Continuar</button>
                <br>
                <a class="ancora-login" href="login.php">Faça o seu login aqui!</a>
            </div>
        </form>
    </div>
    <script src="../Script/script.js"></script>
</body>
</html>