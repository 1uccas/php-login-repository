<?php 

abstract class RouteSwitch{
    
    protected function home(){
        require __DIR__ . '/../page/login.php';
    }
    protected function inicio(){
        require __DIR__. '/../page/inicio.php';
    }
    protected function esqueci_senha(){
        require __DIR__. '/../page/esqueci_senha.php';
    }
    protected function enviar_email(){
        require __DIR__. '/../php/email.php';
    }
    protected function Acesso_Unico(){
        require __DIR__. '/../page/acesso_unico.php';
    }
    protected function validarToken(){
        require __DIR__. '/../php/validarToken.php';
    }
    protected function cadastro(){
        require __DIR__ . '/../page/cadastro.php';
    }
    protected function InserirUsuario(){
        require __DIR__ . '/../php/InserirUsuario.php';
    }
    protected function phpLogin(){
        require __DIR__ . '/../php/autenticacao.php';
    }
    
    public function __call($name, $arguments){
        http_response_code(404);
        require __DIR__ . '/../page/not-found.html';
    }
}

?>