<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fábrica de Software</title>
    <link rel="stylesheet" href="./css/form.css">
</head>
<body>
  <!--usei a mesma base de pessoa (eujp)-->
<div class="container">
    <section class="header">
        <h2>Cadastrar Empresa</h2>
    </section>

    <form id="form" class="form">
        <div class="form-content">
            <label for="razao_social">Razão Social</label>
            <input
                type="text"
                id="razao_social"
                placeholder="Digite a razão social..."
                required
            />
            <a>Aqui vai a mensagem de erro....</a>
        </div>

        <div class="form-content">
            <label for="nome_fantasia">Nome Fantasia</label>
            <input
                type="text"
                id="nome_fantasia"
                placeholder="Digite o nome fantasia..."
                required
            />
            <a>Aqui vai a mensagem de erro....</a>
        </div>

        <div class="form-content">
            <label for="cnpj">CNPJ</label>
            <input
                type="text"
                id="cnpj"
                placeholder="Digite o CNPJ..."
                required
            />
            <a>Aqui vai a mensagem de erro....</a>
        </div>

        <div class="form-content">
            <label for="cep">CEP</label>
            <input
                type="text"
                id="cep"
                placeholder="Digite o CEP..."
                required
            />
            <a>Aqui vai a mensagem de erro....</a>
        </div>

        <div class="form-content">
            <label for="telefone">Telefone</label>
            <input
                type="text"
                id="telefone"
                placeholder="Digite o telefone..."
                required
            />
            <a>Aqui vai a mensagem de erro....</a>
        </div>

        <div class="form-content">
            <label for="endereco">Endereço</label>
            <input
                type="text"
                id="endereco"
                placeholder="Digite o endereço..."
                required
            />
            <a>Aqui vai a mensagem de erro....</a>
        </div>

        <button type="submit">Cadastrar</button>
    </form>
</div>

</body>
</html>