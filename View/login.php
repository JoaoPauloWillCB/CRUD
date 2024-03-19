<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>CRUD</title>
</head>
<body>
    <div class="box_img">
        <h1>Faça seu login</h1>
        <h2>e entre para o nosso time!</h2>
    </div>

    <div class="box_log">
        <h1>Login</h1>
        <form action="../Controller/verifyLogin.php" method="post" class="input-box">
            <label for="email">E-mail</label>
            <input type="email" name="email" required>
            <br><br>
            <label for="cpf">CPF</label>
            <input type="number" name="cpf" required>
            <br><br>
            <button type="submit" name="submit" value="Enviar">Entrar</button>
            <br>
            <a href="formCad.php">Cadastre-se aqui!</a>
        </form>
    </div>
</body>
</html>