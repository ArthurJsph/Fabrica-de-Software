<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabrica de Software</title>
    <link rel="stylesheet" href="./css/form.css">
</head>
<body>
  
 <!--Aqui seria o cadastro da pessoa--> 
<div class="container">
    <section class="header">
      <h2>Nova conta</h2>
    </section>

    <form id="form" class="form">
      <div class="form-content">
        <label for="username">Nome da pessoa</label>
        <input
          type="text"
          id="username"
          placeholder="Digite o nome do usuario..."
        />
        <a>Aqui vai a mensagem de erro....</a>
      </div>

      <div class="form-content">
        <label for="email">Email</label>
        <input
          type="email"
          id="email"
          placeholder="Digite o seu email..."
        />
        <a>Aqui vai a mensagem de erro....</a>
      </div>

      <div class="form-content">
        <label for="password">Senha</label>
        <input
          type="password"
          id="password"
          placeholder="Digite sua senha..."
        />
        <a>Aqui vai a mensagem de erro....</a>
      </div>

      <div class="form-content">
        <label for="password-confirmation">Confirmação de senha</label>
        <input
          type="password"
          id="password-confirmation"
          placeholder="Digite sua senha novamente..."
        />
        <a>Aqui vai a mensagem de erro....</a>
      </div>

      <button type="submit">Cadastrar</button>

    </form>

  </div>
                  
</body>
</html>