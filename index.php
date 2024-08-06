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
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="index.php">Cadastrar</a>
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
        <h2 class="mb-3">Cadastrar Cliente</h2>

        <form method="POST" onsubmit="alert('Cliente cadastrado com sucesso!')" action="controller/pessoaController.php?acao=inserir"> <!-- ação do formulário que leva ao pessoaController.php -->
        <div class="row">
            <div class="col">
                <div class="form-group mb-3">
                    <label for="nome">Nome:</label>
                    <input required type="text" class="form-control mt-2" id="nome" name="nome" placeholder="Digite o nome">
                </div>
            </div>
        </div>    
            <div class="row">
                <div class="form-group col-12 col-lg-6 mb-3">
                    <label for="endereco">Endereço:</label>
                    <input type="text" class="form-control mt-2" id="endereco" name="endereco" placeholder="Digite o endereço">
                </div>
                <div class="form-group col-12 col-lg-6 mb-3">
                    <label for="bairro">Bairro:</label>
                    <input type="text" class="form-control mt-2" id="bairro" name="bairro" placeholder="Digite o bairro">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-12 col-lg-4 mb-3">
                    <label for="cep">CEP:</label>
                    <input type="text" class="form-control mt-2" id="cep" name="cep" placeholder="Digite o CEP">
                </div>
                <div class="form-group col-12 col-lg-4 mb-3">
                    <label for="cidade">Cidade:</label>
                    <input type="text" class="form-control mt-2" id="cidade" name="cidade" placeholder="Digite a cidade">
                </div>
                <div class="form-group col-12 col-lg-4 mb-3">
                    <label for="estado">Estado:</label>
                    <input type="text" class="form-control mt-2" id="estado" name="estado" placeholder="Digite o estado">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-12 col-lg-6 mb-3">
                    <label for="telefoneFixo">Telefone Fixo:</label>
                    <input type="text" class="form-control mt-2" id="telefone" name="telefone" placeholder="Digite o telefone fixo">
                </div>
                <div class="form-group col-12 col-lg-6 mb-3">
                    <label for="celular">Celular:</label>
                    <input type="text" class="form-control mt-2" id="celular" name="celular" placeholder="Digite o celular">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Cadastrar</button>
        </form>
    </div>
</body>

</html>