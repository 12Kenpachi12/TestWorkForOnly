<?php

namespace Kenpachi\TestWork\Component;

class Router
{
    public const POST_METHOD = 'post';
    public const GET_METHOD = 'get';

    public $path;
    public $method;
    public $handler;

    public function exec()
    {
        $controller = new $this->handler[0];
        $method = $this->handler[1];


        return $controller->{$method}();
    }
}