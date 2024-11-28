<?php
class LoginController {
    public function login() {
        // Verifica se o formulário foi enviado
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Obtém os dados do formulário
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Verifica se os campos não estão vazios
            if (empty($username) || empty($password)) {
                echo "Por favor, preencha todos os campos.";
                return;
            }

            // Aqui você pode adicionar a lógica para verificar o usuário no banco de dados
            // Exemplo de verificação simples (substitua pela lógica real)
            if ($username == 'admin' && $password == '1234') {
                echo "Login bem-sucedido!";
                // Redirecionar para a página inicial ou painel de controle
                header('Location: /home.php');
                exit();
            } else {
                echo "Nome de usuário ou senha incorretos.";
            }
        }
    }
}

// Cria uma instância do controlador e chama o método de login
$controller = new LoginController();
$controller->login();
?>