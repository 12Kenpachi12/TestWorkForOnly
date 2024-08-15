<?php

namespace Kenpachi\TestWork\Rules;

class Required extends AbstractRule
{
    public $errorTemplate = 'Поле {property} не заполнено';

    public function run()
    {
        if ($this->value === null || $this->value === '') {
            $this->setError();

            return false;
        }

        return true;
    }
}