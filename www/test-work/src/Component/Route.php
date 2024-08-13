<?php

namespace Kenpachi\TestWork\Component;

class Route
{
    public static $routerList = [];

    public static function post($path, $handler)
    {
        $router = new Router();
        $router->path = $path;
        $router->method = Router::POST_METHOD;
        $router->handler = $handler;

        static::$routerList[] = $router;
    }

    public static function get($path, $handler)
    {
        $router = new Router();
        $router->path = $path;
        $router->method = Router::GET_METHOD;
        $router->handler = $handler;

        static::$routerList[] = $router;
    }

    public static function run()
    {
        $routers = array_filter(static::$routerList, function ($router) {
            return $router->path === $_SERVER['REQUEST_URI'] && $router->method === strtolower($_SERVER['REQUEST_METHOD']);
        });

        return array_shift($routers)->exec();
    }
}