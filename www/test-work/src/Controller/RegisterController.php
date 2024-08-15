<?php

namespace Kenpachi\TestWork\Controller;

use Kenpachi\TestWork\Model\User;
use Kenpachi\TestWork\Validator\RegisterValidator;

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
        $validator = new RegisterValidator();

        if ($validator->validate($request)) {
            $user = new User();
            $user->username = $request['username'];
            $user->email = $request['email'];
            $user->phone = $request['phone'];
            $user->setPassword($request['password']);

            if ($user->save()) {
                header('Location: /login');
            }
        }

        return $this->render('index', ['errors' => $validator->errors, 'request' => $request]);
    }
}