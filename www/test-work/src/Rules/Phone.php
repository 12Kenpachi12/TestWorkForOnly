<?php

namespace Kenpachi\TestWork\Rules;

class Phone extends AbstractRule
{
    public $errorTemplate = 'Телефон должен содержать 12 символов';

    public function run()
    {
        if (strlen($this->value) < 12) {
            $this->setError();

            return false;
        }

        return true;
    }
}