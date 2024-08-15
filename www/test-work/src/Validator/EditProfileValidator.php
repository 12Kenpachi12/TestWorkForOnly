<?php

namespace Kenpachi\TestWork\Validator;

use Kenpachi\TestWork\Model\User;

class EditProfileValidator extends Validator
{
    public $email;
    public $phone;
    public $username;

    public $user;

    public function rules()
    {
        return [
            'username' => ['required', 'unique' => ['class' => User::class, 'column' => 'name', 'currentId' => $this->user->id]],
            'phone' => ['required', 'phone', 'unique' => ['class' => User::class, 'currentId' => $this->user->id]],
            'email' => ['required', 'email', 'unique' => ['class' => User::class, 'currentId' => $this->user->id]]
        ];
    }
}