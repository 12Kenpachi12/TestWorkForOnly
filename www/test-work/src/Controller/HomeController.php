<?php

namespace Kenpachi\TestWork\Controller;

use Kenpachi\TestWork\Component\User;

class HomeController extends BaseController
{
    protected $template = '/views/home/';

    public function index()
    {
        return $this->render('index', ['x' => 10]);
    }

    public function logout()
    {
        User::logout();
        header('Location: /login');
    }
}
