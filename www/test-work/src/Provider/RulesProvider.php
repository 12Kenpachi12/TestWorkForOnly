<?php

namespace Kenpachi\TestWork\Provider;

use Kenpachi\TestWork\Rules\Email;
use Kenpachi\TestWork\Rules\Equal;
use Kenpachi\TestWork\Rules\Phone;
use Kenpachi\TestWork\Rules\Required;
use Kenpachi\TestWork\Rules\Unique;

class RulesProvider
{
    public static function getRules(): array
    {
        return [
            'required' => Required::class,
            'unique' => Unique::class,
            'email' => Email::class,
            'phone' => Phone::class,
            'equal' => Equal::class
        ];
    }
}