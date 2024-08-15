<?php

namespace Kenpachi\TestWork\Model;

use Kenpachi\TestWork\Component\Database;

abstract class AbstractModel implements ModelInterface
{
    protected $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    abstract public static function tableName();
}