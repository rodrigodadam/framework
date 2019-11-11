<?php


class Router
{

    protected $routes = [

        'GET' => [],
        'POST' => []

    ];

    public static function load($file)
    {

        $router = new static;

        require $file;

        return $router;

    }

//    public function define($routes)
//    {
//
//        $this->routes = $routes;
//
//    }

    public function get($uri, $controllers)
    {

        $this->routes['GET'][$uri] = $controllers;

    }

    public function post($uri, $controllers)
    {

        $this->routes['POST'][$uri] = $controllers;

    }

    public function direct($uri, $requestType)
    {

        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->routes[$requestType][$uri];
        }

        throw new Exception('No route defined');

    }

}