<?php

class Router {

    public static function start() 
    {
        $controllerName = 'Main';
        $actionName = 'Index';

        $routes = explode('/', $_SERVER['REQUEST_URI']);
        if (count($routes) === 3) {
            if (!empty($routes[1])) {
                $controllerName = $routes[1];
            }

            if (!empty($routes[2])) {
                $actionName = $routes[2];
            }
        } else {
            if (!empty($routes[2])) {
                $controllerName = $routes[2];
            }

            if (!empty($routes[3])) {
                $actionName = $routes[3];
            }
        }
        $modelName = 'Model' . $controllerName;
        $controllerName = 'Controller' . $controllerName;
        $actionName = 'action' . $actionName;

        $modelFile = $modelName . '.php';
        $modelPath = "application/models/" . $modelFile;
        if (file_exists($modelPath)) {
            include "application/models/" . $modelFile;
        }

        $controllerFile = $controllerName . '.php';
        $controllerPath = "application/controllers/" . $controllerFile;
        if (file_exists($controllerPath)) {
            include "application/controllers/" . $controllerFile;
        } else {
            Router::ErrorPage404();
        }

        $controller = new $controllerName;
        $action = $actionName;

        if (method_exists($controller, $action)) {
            $controller->$action();
        } else {
            Router::ErrorPage404();
        }
    }

    public static function ErrorPage404() 
    {
        $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:' . $host . '404');
    }

}
