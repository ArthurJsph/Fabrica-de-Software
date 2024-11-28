<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabrica de Software</title>
    <link rel="stylesheet" href="./css/form.css">
</head>
<body>

<form action="Controller/UserController.php? action=cadastro" method="post" class="row g-3">
  <div class="col-md-6">
    <label for="nome" class="form-label">Nome:</label>
    <input type="text" class="form-control" id="nome" name="nome" required>
  </div>
  <div class="col-md-6">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>
  <div class="col-md-6">
    <label for="senha" class="form-label">Senha:</label>
    <input type="password" class="form-control" id="senha" name="senha" required>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
                  
</body>
</html>

