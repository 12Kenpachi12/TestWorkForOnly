<?php

namespace Kenpachi\TestWork\Controller;

use Kenpachi\TestWork\Model\User;

class RegisterController extends BaseController
{
    protected $template = '/views/register/';

    public function index()
    {
        return $this->render('index');
    }

    public function store()
    {
        $request = $_POST;
        $user = new User();
        $user->username = $request['username'];
        $user->email = $request['email'];
        $user->phone = $request['phone'];
        $user->setPassword($request['password']);

        if ($user->save()) {
            header('Location: /register');
        }

        return $this->render('index');
    }
}