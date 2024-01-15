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
            '?u=2',
        ];

        if (in_array($route, $routes_login)) {
            $this->home();
        } else {
            $this->$route();
        }
    }
}


?>