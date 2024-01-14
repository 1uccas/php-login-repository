<?php 

require_once __DIR__ . '/routerSwitch.php';

class Router extends RouteSwitch{

    public function run(string $requestUri){
        $route = substr($requestUri, 1);

        if ($route === '' || $route === '?error=1' || $route ==='?error=2' || $route ==='?error=3' || $route ==='?u=0') {
            $this->home();
        } else {
            $this->$route();
        }
    }
}


?>