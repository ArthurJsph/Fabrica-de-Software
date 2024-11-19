<?php
    use PHP\Controller\EmpresaController;
    Public class EmpresaUser extends EmpresaController{
        private $id_empresa_user;
        private $id_empresa;
        private $data_cadastro;
        
        public function getId_empresa_user(){
            return $this->id_empresa_user;
        }
        
        public function setId_empresa_user($id_empresa_user){
            $this->id_empresa_user = $id_empresa_user;
        }
        
        public function getId_empresa(){
            return $this->id_empresa;
        }
        
        public function setId_empresa($id_empresa){
            $this->id_empresa = $id_empresa;
        }
        
        public function getData_cadastro(){
            return $this->data_cadastro;
        }
        
        public function setData_cadastro($data_cadastro){
            $this->data_cadastro = $data_cadastro;
        }
    }
?>