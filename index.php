<?php
    include_once'.config/config.php';
    
    /*Condição para a verificação se o usuário esta logado ou não,
    se ele nao estiver logado é redirecionado para a tela de login*/
    if(!isset($_SESSION['userLogged'])){
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD-Sabanco</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <span>Cadastro de Funcionários</span>
            <button>Incluir</button>
        </div>

        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Função</th>
                        <th>Salário</th>
                        <th class="acao">Editar</th>
                        <th class="acao">Excluir</th>
                    </tr>
                </thead>
            </table>
        </div>

        <div class="modal-container">
            <div class="modal">
                <form action="#">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" require>

                    <label for="funcao">Função</label>
                    <input type="text" id="funcao" require>

                    <label for="salario">Salário</label>
                    <input type="text" id="salario" require>

                    <button>Salvar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>