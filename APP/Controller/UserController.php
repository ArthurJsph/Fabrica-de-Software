<?php
namespace PHP\Controller;
use PHP\DAO\UserDAO;
use PHP\Model\User;
 abstract class UserController{
    private $UserDAO;
  
    public function index()
    {
        $this->redirect('/User/cadastro');
    }

    public function __construct() {
        $this->userDAO = new UserDAO();
    }

    public function createUser($user) {
        return $this->userDAO->create($user);
    }

    public function getUser($id) {
        return $this->userDAO->read($id);
    }

    public function updateUser($user) {
        return $this->userDAO->update($user);
    }

    public function deleteUser($id) {
        return $this->userDAO->delete($id);
    }


    public function cadastro() {
        include 'View/Entity/User/cadastro.php';
    }

    public function cadastroEmpresa() {
        include 'View/Entity/User/cadastroEmpresa.php';
    }

    public function pessoa() {
        include 'View/Entity/User/pessoa.php';
    }

    public function produto() {
        include 'View/Entity/User/produto.php';
    }

    public function categoria() {
        include 'View/Entity/User/categoria.php';
    }

    public function sucesso() {
        include 'View/Entity/User/sucesso.php';
    }




}






?>