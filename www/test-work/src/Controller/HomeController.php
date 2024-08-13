<?php

namespace Kenpachi\TestWork\Controller;

class HomeController extends BaseController
{
    protected $template = '/views/home/';

    public function index()
    {
        return $this->render('index', ['x' => 10]);
    }
}
