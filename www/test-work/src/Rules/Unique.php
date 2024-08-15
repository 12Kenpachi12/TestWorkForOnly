<?php

namespace Kenpachi\TestWork\Rules;

use Kenpachi\TestWork\Component\Database;
use PDO;

class Unique extends AbstractRule
{
    public $class;
    public $column = null;
    public $currentId = null;
    public $errorTemplate = 'Поле {property} с таким значением уже есть в системе';

    public function run()
    {
        $db = Database::getInstance();
        $class = $this->class;

        $column = $this->column ?? $this->propertyName;
    
        $sql = "SELECT id FROM " . $class::tableName() . " WHERE " . $column . " = :value";

        if ($this->currentId !== null) {
            $sql .= " AND NOT id = " . $this->currentId;
        }

        $sql .= ";";

        $state = $db->prepare($sql);
    
        $state->execute([':value' => $this->value]);
    
        $result = $state->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $this->setError();

            return false;
        }

        return true;
    }
}