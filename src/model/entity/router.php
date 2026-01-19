<?php

namespace Src\Model\Entity;
use controller\Authcontroller;

class Router
{
    private $routes = [];

    public function add($path, $callBack)
    {
        $this->routes[$path] = $callBack;
    }

    public function dispatch($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            $action = $this->routes[$uri];

            $controller = $action[0];
            $method = $action[1];
            $className = "Controller\\".$controller;
            $obj = new $className();

            $obj->$method();

        } else {
            http_response_code(404);
            echo "this file not found";
        }
    }
}
