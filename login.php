<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>CRUD-Sabanco</title>
</head>
<body>
    <div class="box">
        <h1>Login</h1>
        <form action="consultas/verificaLogin.php" method="post" class="input-box">
            <label for="email">E-mail</label>
            <input type="email" name="email" required>
            <br><br>
            <label for="cpf">CPF</label>
            <input type="number" name="cpf" required>
            <br><br>
            <button type="submit" name="submit" value="Enviar">Entrar</button>
            <br>
            <a href="formulario.php">Cadastre-se aqui!</a>
        </form>
    </div>
    
</body>
</html>