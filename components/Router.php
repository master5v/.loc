<?php
/**
 * Created by PhpStorm.
 * User: Master
 * Date: 20.09.2017
 * Time: 15:40
 */

class Router
{
    private $routes;

    public function __construct()
    {
        $routsPath = 'config/routes.php';
        $this->routes = include ($routsPath);
    }

    public function run()
    {
        if (!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'], '/');
        }

        echo


    }

}