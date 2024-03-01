<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>CRUD-Sabanco</title>
</head>
<body>
    <div class="container">
        <div class="form-image">
            <img src="img/undraw_sign_up_n6im.svg" alt="img">
        </div>

        <div class="form">
            <form action="#">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>

                    <div class="login-button">
                        <button><a href="login.php">Entrar</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="name">Nome</label>
                        <input type="text" id="name" name="name" placeholder="Digite seu nome" required>
                    </div>

                    <div class="input-box">
                        <label for="cpf">CPF</label>
                        <input type="text" id="cpf" placeholder="Digite seu CPF" required>
                    </div>

                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="celular">Celular</label>
                        <input type="number" id="celular" placeholder="(xx) xxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="data-nascimento">Data de nascimento</label>
                        <input type="date" id="data-nascimento" required>
                    </div>

                    <div class="input-box">
                        <label for="endereco">Endereço</label>
                        <input type="text" id="endereco" placeholder="Digite seu endereço" required>
                    </div>

                    <div class="input-box">
                        <label for="UF">UF</label>
                        <select name="UF" id="UF">
                            <option value="PR">PR</option>
                            <option value="SC">SC</option>
                            <option value="RS">RS</option>
                        </select>
                    </div>

                    <div class="input-box">
                        <label for="endereco">Cidade</label>
                        <input type="text" id="endereco" placeholder="Digite seu endereço" required>
                    </div>
                </div>

                <div class="continue-button">
                    <button><a href="#">Continuar</a></button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>