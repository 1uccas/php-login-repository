<?php 

require_once __DIR__ . '/routerSwitch.php';

class Router extends RouteSwitch{

    public function run(string $requestUri){
        $route = substr($requestUri, 1);

        $routes_login = [
            '',
            '?error=1',
            '?error=2',
            '?error=3',
            '?u=0',
            '?u=1',
        ];

        $router_acess_uniq = [
            'Acesso_Unico/',
            'Acesso_Unico/?mail=200',
            'Acesso_Unico/?mail=200-&di=NjU5ZjA5Zjc4MGFlNw=='
        ];

        if (in_array($route, $routes_login)) {
            $this->home();
        }else if(in_array($route, $router_acess_uniq)){
            $this->Acesso_Unico();
        }else {
            $this->$route();
        }
    }
}


?>