<?php

namespace Kenpachi\TestWork\Rules;

class Email extends AbstractRule
{
    public $errorTemplate = 'Некоректная почта';

    public function run()
    {
        if (!filter_var($this->value, FILTER_VALIDATE_EMAIL)) {
            $this->setError();

            return false;
        }

        return true;
    }
}