<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_web_banco_de_dados/controller/pessoaController.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Sistema de Cadastro</title>
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
                                        <a class="nav-link" href="consultar.php?acao=consultar">Consultar</a>
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
        <?php
            //buscando id do usuário
            $pessoaController = new pessoaController();
            $pessoa = $pessoaController->buscarPorId($_GET['id']);
        ?>
        <h2 class="mb-3">Editar Cadastro</h2>
        <form method="POST" onsubmit="alert('Cadastro atualizado com sucesso!')" action="controller/pessoaController.php?acao=atualizar&id=<?php echo $pessoa['id'] ?>"> <!-- ação do formulário que leva ao pessoaController.php -->
            <!-- em cada um dos campos, o respectivo dado é atribuido atraves do buscarPorId -->
            <div class="form-group mb-2">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $pessoa['nome'] ?>">
            </div>
            <div class="row">
                <div class="form-group col-12 col-lg-6 mb-2">
                    <label for="endereco">Endereço:</label>
                    <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo $pessoa['endereco'] ?>">
                </div>
                <div class="form-group col-12 col-lg-6 mb-2">
                    <label for="bairro">Bairro:</label>
                    <input type="text" class="form-control" id="bairro" name="bairro" value="<?php echo $pessoa['bairro'] ?>">
                </div>
            </div>
            <div class="row mb-2">
                <div class="form-group col-12 col-lg-4">
                    <label for="cep">CEP:</label>
                    <input type="text" class="form-control" id="cep" name="cep" value="<?php echo $pessoa['cep'] ?>">
                </div>
                <div class="form-group col-12 col-lg-4">
                    <label for="cidade">Cidade:</label>
                    <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $pessoa['cidade'] ?>">
                </div>
                <div class="form-group col-12 col-lg-4">
                    <label for="estado">Estado:</label>
                    <input type="text" class="form-control" id="estado" name="estado" value="<?php echo $pessoa['estado'] ?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="form-group col-12 col-lg-6">
                    <label for="telefoneFixo">Telefone Fixo:</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $pessoa['telefone'] ?>">
                </div>
                <div class="form-group col-12 col-lg-6">
                    <label for="celular">Celular:</label>
                    <input type="text" class="form-control" id="celular" name="celular" value="<?php echo $pessoa['celular'] ?>">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
</body>
</html>