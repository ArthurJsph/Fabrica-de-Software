<?php
    use PHP\Controller\UserController;
    
class User extends UserController{
        
        private $id_user;
        private $id_pessoa;
        private $data_cadastro;
        
        public function getId_user(){
            return $this->id_user;
        }
        
        public function setId_user($id_user){
            $this->id_user = $id_user;
        }
        
        public function getId_pessoa(){
            return $this->id_pessoa;
        }
        
        public function setId_pessoa($id_pessoa){
            $this->id_pessoa = $id_pessoa;
        }
        
        public function getData_cadastro(){
            return $this->data_cadastro;
        }
        
        public function setData_cadastro($data_cadastro){
            $this->data_cadastro = $data_cadastro;
        }



    }
    
    
    
    
    
    ?>