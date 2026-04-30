<?php

class Database
{
    public $pdo;
    public $dbname = 'shopping-app';
    public $username = "root";
    public $password = "";
    public function __construct($host)
    {
        $this->pdo = new PDO("mysql:host=$host;dbname=$this->dbname", $this->username, $this->password);
    }
    public function connect()
    {
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $this->pdo;
    }
    public function queryDb($query){
        try {
            $this->pdo->query($query);
        } catch (PDOException $th) {
            throw new Exception($th->getMessage());
        }
    }
}
