<?php

namespace Kenpachi\TestWork\Validator;

class LoginValidator extends Validator
{
    public $login;
    public $password;

    public function rules()
    {
        return [
            'login' => ['required'],
            'password' => ['required'],
        ];
    }
}