<?php 

abstract class RouteSwitch{
    
    protected function home(){
        require __DIR__ . '/../page/LoginAtomic.php';
    }
    protected function inicio(){
        require __DIR__. '/../page/inicio.php';
    }

    protected function cadastro(){
        require __DIR__ . '/../page/cadastro.php';
    }
    protected function InserirUsuario(){
        require __DIR__ . '/../php/InserirUsuario.php';
    }
    protected function phpLogin(){
        require __DIR__ . '/../php/login.php';
    }
    
    public function __call($name, $arguments){
        http_response_code(404);
        require __DIR__ . '/../page/not-found.html';
    }
}

?>