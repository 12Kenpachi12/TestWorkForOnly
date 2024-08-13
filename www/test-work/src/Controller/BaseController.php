<?php

namespace Kenpachi\TestWork\Controller;

use Kenpachi\TestWork\Component\View;

abstract class BaseController
{
    protected $template;
    protected $view;

    public function __construct()
    {
        $this->view = new View;
    }

    public function render($filename, $data = [])
    {
        return $this->view->render($_SERVER['DOCUMENT_ROOT'] . $this->template . $filename, $data);
    }
}