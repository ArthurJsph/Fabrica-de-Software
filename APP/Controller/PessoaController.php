<?php
require_once '../Model/Entity/Pessoa.php';
require_once '../Model/DAO/PessoaDAO.php';

class PessoaController {
    // Método para renderizar a view
    private function render($view, $data = []) {
        extract($data);
        require "../View/{$view}.php";
    }

    // Método para redirecionar para outra URL
    private function redirect($url) {
        header("Location: {$url}");
        exit();
    }

    // Método para exibir o formulário de cadastro
    public function cadastro() {
        $this->render('Pessoa/cadastro');
    }

    // Método para processar o formulário de cadastro
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $endereco = $_POST['endereco'];
            $cep = $_POST['cep'];
            $cpf = $_POST['cpf'];

            $pessoa = new Pessoa();
            $pessoa->setNome($nome);
            $pessoa->setEmail($email);
            $pessoa->setTelefone($telefone);
            $pessoa->setEndereco($endereco);
            $pessoa->setCep($cep);
            $pessoa->setCpf($cpf);

            $pessoaDAO = new PessoaDAO();
            if ($pessoaDAO->create($pessoa)) {
                $this->render('Pessoa/successo', ['nome' => $nome]);
            } else {
                $this->render('Pessoa/cadastro', ['error' => 'Erro ao cadastrar pessoa.']);
            }
        } else {
            $this->redirect('/Pessoa/cadastro');
        }
    }

    // Método para exibir a página inicial
    public function index() {
        $this->redirect('/Pessoa/cadastro');
    }
}