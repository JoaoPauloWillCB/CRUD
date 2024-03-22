<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>CRUD</title>
</head>
<body>
    <div class="main">
        <div class="box-img">
            <h1>Seja Bem-Vindo(a) de volta!</h1>
            <h2>faça seu login para continuar.</h2>
            <img class="img" src="../assets/img/login.png" alt="Login">
        </div>

        <div class="box-login">
            <h1>Login</h1>
            <form action="../Controller/verifyLogin.php" method="post" class="input-group">
                <label for="email">Nome</label>
                <input class="input-login" type="text" name="nome" required>
                <br><br>
                <label for="cpf">CPF</label>
                <input class="input-login" type="number" name="cpf" required>
                <br><br>
                <button type="submit" name="submit" value="Enviar">Entrar</button>
                <br>
                <a class="ancora-cad" href="formCad.php">Cadastre-se aqui!</a>
            </form>
        </div>
    </div>
</body>
</html>