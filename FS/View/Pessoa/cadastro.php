<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabrica de Software</title>
    <link rel="stylesheet" href="../../css/form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container form {
            width: 400px;
        }
        .form-container label {
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form id="form" class="form" method="POST" action="../../Controller/CadastroPessoa.php">
            <h2 class="text-center">Nova conta</h2>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome..." required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Digite o seu email..." required>
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o seu telefone..." required>
            </div>
            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o seu endereço..." required>
            </div>
            <div class="mb-3">
                <label for="cep" class="form-label">CEP</label>
                <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite o seu CEP..." required>
            </div>
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o seu CPF..." required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
        </form>
    </div>
</body>
</html>