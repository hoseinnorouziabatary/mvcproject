<?php namespace App\Models;

use Core\Model;
//use PDO;

// use Model class illuminate
class User extends Model
{
    protected $table = 'users';



    /*Code about the topic of the model manually
     *
    protected $tableName = "users";

    public function findUser($id)
    {
        $stmt = $this->pdo->prepare("select * from {$this->tableName} where id = :id");
        $stmt->bindParam("id",$id,\PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }
    */

}