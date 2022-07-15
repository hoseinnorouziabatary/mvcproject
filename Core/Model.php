<?php namespace Core;

use mysql_xdevapi\Exception;

abstract class Model
{
    protected $pdo;
    protected $tableName =null;

    public function __construct()
    {
        $this->pdo = $this->make();
        $this->checkTable();

    }
    protected function make()
    {
        try {
            return new \PDO("mysql:host=localhost;dbname=mvcproject","root","");

        }catch (\PDOException $e){
            throw $e;
        }

    }

    /**
     * @throws \Exception
     */
    public function SelectAll()
    {
        if (is_null($this->tableName)){
            throw new \Exception("table name not null");
        }
        $stmt = $this->pdo->prepare("select * from {$this->tableName}");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_OBJ);


    }

    /**
     * @throws \Exception
     */
    protected function checkTable()
    {
        $stmt = $this->pdo->prepare("SHOW TABLES LIKE '{$this->tableName}'");
        $stmt->execute();
        if (!$stmt->fetch())
            throw new \Exception("{$this->tableName} Table not exists");

    }


}