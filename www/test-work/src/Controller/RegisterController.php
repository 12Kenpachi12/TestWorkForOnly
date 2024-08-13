<?php

namespace Kenpachi\TestWork\Controller;

use Kenpachi\TestWork\Model\User;

class RegisterController extends BaseController
{
    protected $template = '/views/home/';

    public function index()
    {
        return $this->render('index', ['x' => 10]);
    }

    public function store()
    {
        $request = $_POST;
        $user = new User();
        $user->username = $request['username'];
        $user->email = $request['email'];
        $user->phone = $request['phone'];
        $user->password = $request['username'];
        $user->save();

        header('Location: /register');
    }
}