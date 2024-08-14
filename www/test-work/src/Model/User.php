<?php

namespace Kenpachi\TestWork\Model;

use Kenpachi\TestWork\Component\Database;
use PDO;

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
    public $created_at;
    public $updated_at;

    protected $conn;

    public function __construct()
    {
        $this->conn = Database::getInstance();
    }

    public static function tableName()
    {
        return 'users';
    }

    public function setPassword($password)
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function save()
    {
        if ($this->id !== null) {
            return $this->update();
        }

        return $this->create();
    }

    public function update()
    {
        $sql = "UPDATE " . static::tableName() . " SET name = :username, email = :email, phone = :phone, password = :password WHERE id = :id;";
        $state = $this->conn->prepare($sql);
        $result = $state->execute([
            ':username' => $this->username,
            ':phone' => $this->phone,
            ':email' => $this->email,
            ':password' => $this->password,
            ':id' => $this->id
        ]);

        return $result;
    }

    public function create(): bool
    {
        $sql = "INSERT INTO " . static::tableName() . "(name, email, phone, password) VALUES(:username, :email, :phone, :password)";
        $state = $this->conn->prepare($sql);
        $result = $state->execute([
            ':username' => $this->username,
            ':phone' => $this->phone,
            ':email' => $this->email,
            ':password' => $this->password
        ]);

        return $result;
    }

    public static function findByEmailOrPhone($login)
    {
        $conn = Database::getInstance();
    
        $sql = "SELECT id, password FROM " . static::tableName() . " WHERE email = ? OR phone = ?;";
        $state = $conn->prepare($sql);
    
        $state->execute([$login, $login]);
    
        $result = $state->fetch(PDO::FETCH_ASSOC);
    
        return $result;
    }
    
   
    public static function findById($id)
    {
        $conn = Database::getInstance();
    
        $sql = "SELECT * FROM " . static::tableName() . " WHERE id = ?;";
        $state = $conn->prepare($sql);
    
        $state->execute([$id]);
    
        $result = $state->fetch(PDO::FETCH_ASSOC);
    
        return $result;
    } 
}