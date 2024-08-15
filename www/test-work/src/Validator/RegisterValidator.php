<?php

namespace Kenpachi\TestWork\Validator;

use Kenpachi\TestWork\Model\User;

class RegisterValidator extends Validator
{
    public $email;
    public $phone;
    public $username;
    public $password;
    public $confirmPassword;

    public function rules()
    {
        return [
            'username' => ['required', 'unique' => ['class' => User::class, 'column' => 'name']],
            'phone' => ['required', 'phone', 'unique' => ['class' => User::class]],
            'email' => ['required', 'email', 'unique' => ['class' => User::class]],
            'password' => ['required'],
            'confirmPassword' => ['required', 'equal' => ['equalValue' => $this->password]]
        ];
    }
}