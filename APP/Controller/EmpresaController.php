<?php
abstract class EmpresaController{
    //Aqui seria o ajuste da ligação entre o controller e a view 
    //Configuração de rotas
    public function cadastro()
    {//nome do método que usuário vai colocar na URL
        //chama o arquivo que está na view
        $this->render('/Empresa/index');

        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
        //como o form de cadastro é novo
        //limpo o formulario e limpo a mensagem
    }

    public function index()
    {
        $this->redirect('/Empresa/cadastro');
    }
}





?>