<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Tela de Cadastro</title>
</head>
<body>
    <div class="container">
        <h2>Cadastro</h2>
        <form method="POST" action="controller/pessoaController.php">
            <div class="form-group mb-2">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome">
            </div>
            <div class="form-group mb-2">
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o endereço">
            </div>
            <div class="form-group mb-2">
                <label for="bairro">Bairro:</label>
                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite o bairro">
            </div>
            <div class="form-group mb-2">
                <label for="cep">CEP:</label>
                <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite o CEP">
            </div>
            <div class="form-group mb-2">
                <label for="cidade">Cidade:</label>
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite a cidade">
            </div>
            <div class="form-group mb-2">
                <label for="estado">Estado:</label>
                <input type="text" class="form-control" id="estado" name="estado" placeholder="Digite o estado">
            </div>
            <div class="form-group mb-2">
                <label for="telefoneFixo">Telefone Fixo:</label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o telefone fixo">
            </div>
            <div class="form-group mb-2">
                <label for="celular">Celular:</label>
                <input type="text" class="form-control" id="celular" name="celular" placeholder="Digite o celular">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</body>
</html>