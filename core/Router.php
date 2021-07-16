<?php

class Router {

    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($routesFile) {


        $router = new self;

        require $routesFile;


        return $router;
    }

    public function get($uri, $controller) {

        $this->routes['GET'][$uri] = $controller;

    }

    public function post($uri, $controller) {
        $this->routes['POST'][$uri] = $controller;
    }

    public function loadController($uri, $method)
    {


        if(array_key_exists($uri, $this->routes[$method])) {
            $value = $this->routes[$method][$uri];
            $value = explode('@', $value);
            $controller = new $value[0];
            $method = $value[1];
            return $controller->$method();

        }

        throw new Exception('No route found for this URI');
    }

}