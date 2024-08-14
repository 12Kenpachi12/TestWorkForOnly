<?php

namespace Kenpachi\TestWork\Controller;

use Kenpachi\TestWork\Component\User as ComponentUser;
use Kenpachi\TestWork\Model\User;

class ProfileController extends BaseController
{
    protected $template = '/views/profile/';

    public function index()
    {
        $user = ComponentUser::getIdentity();

        if (!$user) {
            header('Location: /login');
        }

        return $this->render('index', ['user' => $user]);
    }

    public function edit()
    {
        $user = ComponentUser::getIdentity();

        if (!$user) {
            header('Location: /login');
        }

        return $this->render('edit', ['user' => $user]);
    }

    public function update()
    {
        $request = $_POST;
        $user = ComponentUser::getIdentity();
        $user->username = $request['username'];
        $user->email = $request['email'];
        $user->phone = $request['phone'];

        if ($user->save()) {
            header('Location: /profile');
        }

        return $this->render('edit', ['user' => $user]);
    }

    public function password()
    {
        if (ComponentUser::isGuest()) {
            header('Location: /login');
        }

        return $this->render('change_password');
    }

    public function changePassword()
    {
        $request = $_POST;
        $user = ComponentUser::getIdentity();
        
        if (password_verify($request['current_password'], $user->password)) {
            $user->setPassword($request['new_password']);

            if ($user->save()) {
                header('Location: /profile');
            }
        }

        return $this->render('change_password', ['error' => 'Произошла ошибка']);
    }
}