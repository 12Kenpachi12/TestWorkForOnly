<?php

namespace Kenpachi\TestWork\Rules;

abstract class AbstractRule implements RuleInterface
{
    public $value;
    public $error;
    public $propertyName;
    public $errorTemplate;

    public function __construct($value, $propertyName, $config = [])
    {
        $this->value = $value;
        $this->propertyName = $propertyName;

        foreach ($config as $name => $property) {
            if (property_exists($this, $name)) {
                $this->{$name} = $property;
            }
        }
    }

    protected function setError()
    {
        $this->error = str_replace('{property}', $this->propertyName, $this->errorTemplate);
    }

    abstract public function run();
}