<?php

namespace Kenpachi\TestWork\Model;

use Kenpachi\TestWork\Component\Database;

/**
 * @property \PDO $conn
 */
class User
{
    public int $id;
    public string $username;
    public string $email;
    public string $phone;
    public string $password;
    public int $created_at;
    public int $updated_at;

    protected $conn;

    public function __construct()
    {
        $this->conn = Database::getInstance();
    }

    public static function tableName()
    {
        return 'users';
    }

    public function save()
    {
        $sql = "INSERT INTO " . static::tableName() . "(name, email, phone, password) VALUES(:username, :email, :phone, :password)";
        $state = $this->conn->prepare($sql);
        $state->execute([
            ':username' => $this->username,
            ':phone' => $this->phone,
            ':email' => $this->email,
            ':password' => $this->password
        ]);
    }
}