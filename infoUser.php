<?php
    /*verificação se existe ou não um id como parametro e se existir ele puxa os dados*/
    if(!empty($_GET['id']))
    {
        include_once('config/config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM tb_usuarios WHERE id_usuario=$id";
        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                $cpf = $user_data['cpf'];
                $celular = $user_data['celular'];
                $data_nasc = $user_data['date_nascimento'];
                $estado = $user_data['estado'];
                $cidade = $user_data['cidade'];
                $endereco = $user_data['endereco'];
            } 
        }
        else
        {
            header('Location: home.php');
        }
    }
    else
    {
        header('Location: home.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/infoUser.css">
    <title>CRUD-Sabanco</title>
</head>
<body>
    <div class="box">
        <form action="consultas/saveEdit.php" method="post">
            <fieldset>
                <legend>Informações do usuário</legend>
                <br>
                <div class="input-box">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" class="input-user" value="<?php echo $nome ?>" disabled>
                </div>
                <br><br>
                <div class="input-box">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" class="input-user" value="<?php echo $email ?>" disabled>
                </div>
                <br><br>
                <div class="input-box">
                    <label for="cpf">CPF</label>
                    <input type="number" name="cpf" id="cpf" class="input-user" value="<?php echo $cpf ?>" disabled>
                </div>
                <br><br>
                <div class="input-box">
                    <label for="celular">Celular</label>
                    <input type="number" name="celular" id="celular" class="input-user" value="<?php echo $celular ?>" disabled>
                </div>
                <br><br>
                <div class="input-box">
                    <label for="data-nasc">Data de nascimento</label>
                    <input type="date" name="data-nasc" id="data-nasc" class="input-user" value="<?php echo $data_nasc ?>" disabled>
                </div>
                <br><br>
                <div class="input-box">
                    <label for="uf">UF</label>
                    <select name="estado" id="uf" disabled>
                        <option value="PR" <?php echo $estado == 'PR' ? 'selected' : ''?>>PR</option>
                        <option value="SC" <?php echo $estado == 'SC' ? 'selected' : ''?> >SC</option>
                        <option value="RS" <?php echo $estado == 'RS' ? 'selected' : ''?> >RS</option>
                    </select>
                </div>
                <br><br>
                <div class="input-box">
                    <label for="cidade">Cidade</label>
                    <input type="text" name="cidade" id="cidade" class="input-user" value="<?php echo $cidade ?>" disabled>
                </div>
                <br><br>
                <div class="input-box">
                    <label for="endereco">Endereço</label>
                    <input type="text" name="endereco" id="endereco" class="input-user" value="<?php echo $endereco ?>" disabled>
                </div>
                <br><br>
                
            </fieldset>
            <br>
            <input type="hidden" name="id" value="<?php echo $id?>">
            <br>
            <a id="login" href="home.php">Voltar</a>
        </form>
    </div>
</body>
</html>