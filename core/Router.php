<?php

class Router {

    public $routes = [];

    public static function load($routesFile) {


        $router = new self;

        require $routesFile;


        return $router;
    }

    public function register($routes) {
        $this->routes = $routes;

    }

    public function loadController($uri)
    {

        if(array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

        throw new Exception('No route found for this URI');
    }

}