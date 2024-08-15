<?php

namespace Kenpachi\TestWork\Validator;

use Kenpachi\TestWork\Provider\RulesProvider;

class Validator
{
    protected $rulesProvider;
    public array $errors = [];

    public function __construct()
    {
        $this->rulesProvider = RulesProvider::getRules();
    }

    public function rules()
    {
        return [];
    }

    public function load($data)
    {
        foreach ($data as $name => $value) {
            if (property_exists($this, $name)) {
                $this->{$name} = $value;
            }
        }
    }

    public function validate($data)
    {
        $result = true;

        $this->load($data);

        foreach ($this->rules() as $property => $rules) {
            $value = $this->{$property} ?? null;

            foreach ($rules as $key => $rule) {
                $result = $result && $this->applyRule($key, $rule, $value, $property);
            }
        }

        return $result;
    }

    public function applyRule($key, $rule, $value, $property)
    {
        $result = false;

        if (is_array($rule) && !empty($this->rulesProvider[$key])) {
            $class = $this->rulesProvider[$key];
            $ruleObject = new $class($value, $property, $rule);
            $result = $ruleObject->run();

            if (!$result) {
                $this->errors[$property][] = $ruleObject->error;
            }
        } elseif (is_string($rule) && !empty($this->rulesProvider[$rule])) {
            $class = $this->rulesProvider[$rule];
            $ruleObject = new $class($value, $property);
            $result = $ruleObject->run();

            if (!$result) {
                $this->errors[$property][] = $ruleObject->error;
            }
        }

        return $result;
    }
}