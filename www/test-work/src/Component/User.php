<?php

namespace Kenpachi\TestWork\Component;

use Kenpachi\TestWork\Model\User as ModelUser;

class User
{
    public static ModelUser|null $identity = null;

    public static function isGuest(): bool
    {
        return empty($_SESSION['user_id']);
    }

    public static function login($user_id): bool
    {
        $_SESSION['user_id'] = $user_id;
        return true;
    }

    public static function logout(): bool
    {
        unset($_SESSION['user_id']);
        return true;
    }

    public static function getIdentity()
    {
        if (static::isGuest()) {
            static::$identity = null;
            return null;
        }

        if (static::$identity === null) {
            $user = ModelUser::findById($_SESSION['user_id']);

            if (!$user) {
                static::logout();
                return null;
            }

            $identity = new ModelUser();
            $identity->id = $user['id'];
            $identity->username = $user['name'];
            $identity->email = $user['email'];
            $identity->phone = $user['phone'];
            $identity->password = $user['password'];
            $identity->created_at = $user['created_at'];
            $identity->updated_at = $user['updated_at'];

            static::$identity = $identity;
        }

        return static::$identity;
    }
}