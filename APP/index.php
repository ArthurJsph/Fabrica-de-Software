<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fábrica de Software</title>
    <link rel="stylesheet" href="css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container form {
            width: 300px;
        }
        .form-container label {
            font-weight: 600;
        }
        .hidden {
            display: none;
        }
    </style>
    <script>
        function showCadastroOptions() {
            document.getElementById('loginForm').classList.add('hidden');
            document.getElementById('cadastroOptions').classList.remove('hidden');
        }

        function redirectToCadastroPessoa() {
            window.location.href = 'View/Pessoa/Cadastro.php';
        }

        function redirectToCadastroEmpresa() {
            window.location.href = 'View/Empresa/Cadastro.php';
        }
    </script>
</head>
<body>
    <div class="form-container">
        <form id="loginForm" method="POST" action="Controller/Login.php">
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-12 col-form-label">Email</label>
                <div class="col-sm-12">
                    <input type="email" class="form-control" id="inputEmail3" name="email" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-12 col-form-label">Senha</label>
                <div class="col-sm-12">
                    <input type="password" class="form-control" id="inputPassword3" name="senha" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
            <br>
            <button type="button" class="btn btn-link" onclick="showCadastroOptions()">Cadastrar</button>
        </form>

        <div id="cadastroOptions" class="hidden">
            <button type="button" class="btn btn-primary" onclick="redirectToCadastroPessoa()">Pessoa</button>
            <button type="button" class="btn btn-primary" onclick="redirectToCadastroEmpresa()">Empresa</button>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Fábrica de Software. Todos os direitos reservados.</p>
    </footer>
</body>
</html>