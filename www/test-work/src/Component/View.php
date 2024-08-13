<?php

namespace Kenpachi\TestWork\Component;

class View
{
    public function render($filePath, $data)
    {
        extract($data);
        include $filePath . '.php';
    }
}