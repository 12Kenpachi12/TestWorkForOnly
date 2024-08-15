<?php

namespace Kenpachi\TestWork\Controller;

use Kenpachi\TestWork\Component\User as ComponentUser;
use Kenpachi\TestWork\Model\User;
use Kenpachi\TestWork\Validator\LoginValidator;

class LoginController extends BaseController
{
    protected $template = '/views/login/';

    public function index()
    {
        if (!ComponentUser::isGuest()) {
            return header('Location: /');
        }

        return $this->render('index');
    }

    public function login()
    {
        if (!ComponentUser::isGuest()) {
            return header('Location: /');
        }

        $validator = new LoginValidator();

        if ($validator->validate($_POST)) {
            $user = User::findByEmailOrPhone($_POST['login']);

            if ($user
                && password_verify($_POST['password'], $user['password'])
                && ComponentUser::login($user['id'])
            ) {
                return header('Location: /');
            } else {
                return $this->render('index', ['error' => 'Неверный логин или пароль']);
            }
        }

        return $this->render('index', ['errors' => $validator->errors]);
    }
}