<?php

class App
{

    public function __construct()
    {
        $controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) . 'Controller' : 'AuthController';
        $action = isset($_GET['action']) ? $_GET['action'] : 'show';

        $controllerPath = '../app/controllers/' . $controllerName . ".php";

        if (!file_exists($controllerPath)) {
            http_response_code(404);
            echo "404 page not found";
            exit;
        }

        require_once $controllerPath;

        $controller = new $controllerName;

        if (!method_exists($controller, $action)) {
            http_response_code(404);
            echo "not found";
            exit;
        }

        $controller->$action();
    }
}