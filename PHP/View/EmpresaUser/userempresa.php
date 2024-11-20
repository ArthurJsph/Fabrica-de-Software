<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuário da Empresa</title>
    <link rel="stylesheet" href="./css/form.css"> 
</head>
<body>

<div class="container">
    <section class="header">
        <h2>Cadastrar Usuário da Empresa</h2>
    </section>

    <form id="form" class="form">
        <div class="form-content">
            <label for="id_empresa">ID da Empresa</label>
            <input type="number" id="id_empresa" placeholder="Digite o ID da empresa..." required />
            <a>Aqui vai a mensagem de erro....</a>
        </div>

        <div class="form-content">
            <label for="data_cadastro">Data de Cadastro</label>
            <input type="datetime-local" id="data_cadastro" required />
            <a>Aqui vai a mensagem de erro....</a>
        </div>

        <button type="submit">Cadastrar</button>
    </form>

</div>

</body>
</html>