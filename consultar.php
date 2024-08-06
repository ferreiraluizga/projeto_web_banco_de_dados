<?php
    //importação do arquivo pessoaController.php para a página e verificação de funcionamento e existência do mesmo
    require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_web_banco_de_dados/controller/pessoaController.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Tela de Consulta</title>
</head>
<body>

    <header>
        <div class="row fixed-top bg-primary">
            <div class="col">
                <div class="container m-auto">
                    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="index.php">Sistema de Cadastro</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="index.php">Cadastrar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="consultar.php?acao=consultar">Consultar</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <br><br><br>

    <div class="container m-auto mb-2">
        <h2 class="mb-3">Consultar Clientes</h2>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Celular</th>
                    <th colspan="2">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $pessoaController = new PessoaController(); //instanciação da classe pessoaController
                    $pessoas = $pessoaController->listar(); //criação da varivel $pessoas, e atribuição do retorno método listar() a ela
                    //foreach: enquanto houverem dados na variavel $pessoas, eles serão atribuidos a $pessoa (de forma associativa)
                    foreach($pessoas as $pessoa){                     
                ?>        
                        <tr>
                            <td><?php echo $pessoa['nome']; //exibição do nome do usuario ?></td>
                            <td><?php echo $pessoa['telefone']; //exibição do telefone do usuario ?></td>
                            <td><?php echo $pessoa['celular']; //exibição do celular do usuario ?></td>
                            <td><a class="text-primary" href="editar.php?acao=editar&id=<?php echo $pessoa['id']; ?>">Editar</a> <!-- busca os dados do usuário pelo ID --></td>
                            <td><a class="text-danger" href="excluir.php?acao=editar&id=<?php echo $pessoa['id']; ?>">Excluir</a> <!-- busca os dados do usuário pelo ID --></td>
                        </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
