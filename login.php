<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>CRUD-Login</title>
</head>
<body>
    <div class="container">
        <div class="form-image">
            <img src="img/undraw_login_re_4vu2.svg" alt="img">
        </div>

        <div class="form">
            <form action="#">
                <div class="form-header">
                    <div class="title">
                        <h1>Login</h1>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="name">Nome</label>
                        <input type="text" id="name" name="name" placeholder="Digite seu nome" required>
                    </div>

                    <div class="input-box">
                        <label for="CPF">CPF</label>
                        <input type="number" id="CPF" name="CPF" placeholder="Digite seu CPF" required>
                    </div>
                </div>

                <div class="entrar-button">
                    <button><a href="#">Entrar</a></button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>