<?php

namespace Kenpachi\TestWork\Rules;

class Equal extends AbstractRule
{
    public $errorTemplate = 'Пароли не равны';

    public $equalValue;

    public function run()
    {
        if ($this->value !== $this->equalValue) {
            $this->setError();

            return false;
        }

        return true;
    }
}