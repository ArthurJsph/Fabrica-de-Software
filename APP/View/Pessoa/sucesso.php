<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Bem-Sucedido</title>
    <link rel="stylesheet" href="../../css/form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="form-container">
        <h2 class="text-center">Cadastro Bem-Sucedido</h2>
        <p class="text-center">Nome cadastrado: <?php echo htmlspecialchars($nome); ?></p>
        <a href="/Pessoa/cadastro" class="btn btn-primary w-100">Voltar</a>
    </div>
</body>
</html>