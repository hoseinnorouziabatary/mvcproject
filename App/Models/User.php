<?php namespace App\Models;

use Core\Model;

class User extends Model
{
    protected $tableName = "users";

    public function findUser($id)
    {
        $stmt = $this->pdo->prepare("select * from {$this->tableName} where id = :id");
        $stmt->bindParam("id",$id,\PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }

}