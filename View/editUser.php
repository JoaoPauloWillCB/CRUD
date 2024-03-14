<?php
    include_once('../Controller/updateInfoUser.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/editUser.css">
    <title>CRUD-Sabanco</title>
</head>
<body>
    <div class="box">
        <form action="../Model/update.php" method="post">
            <fieldset>
                <legend>Editar</legend>
                <br>
                <div class="input-box">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" class="input-user" value="<?php echo $nome ?>" required>
                </div>
                <br><br>
                <div class="input-box">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" class="input-user" value="<?php echo $email ?>" required>
                </div>
                <br><br>
                <div class="input-box">
                    <label for="cpf">CPF</label>
                    <input type="number" name="cpf" id="cpf" class="input-user" value="<?php echo $cpf ?>" required>
                </div>
                <br><br>
                <div class="input-box">
                    <label for="celular">Celular</label>
                    <input type="number" name="celular" id="celular" class="input-user" value="<?php echo $celular ?>" required>
                </div>
                <br><br>
                <div class="input-box">
                    <label for="data-nasc">Data de nascimento</label>
                    <input type="date" name="data-nasc" id="data-nasc" class="input-user" value="<?php echo $data_nasc ?>" require>
                </div>
                <br><br>
                <div class="input-box">
                    <label for="uf">UF</label>
                    <select name="estado" id="uf">
                        <option></option>
                    </select>
                </div>
                <br><br>
                    <label for="cidade">Cidade</label>
                    <select id="cidade" name="cidade">
                    </select>
                <br><br>
                <div class="input-box">
                    <label for="endereco">Endereço</label>
                    <input type="text" name="endereco" id="endereco" class="input-user" value="<?php echo $endereco ?>" required>
                </div>
                <br><br>
                
            </fieldset>
            <br>
            <input type="hidden" name="id" value="<?php echo $id?>">
            <button type="submit" name="update" id="update">Salvar</button>
            <br>
            <a id="login" href="home.php">Voltar</a>
        </form>
    </div>
    <script src="../Script/script.js"></script>
</body>
</html>