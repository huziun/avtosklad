<?php

class DB{
    private $pdo;
    public function __construct(){
        try{
            $pdo = new PDO('mysql:dbname=avtosklad;host=127.0.0.1', 'root','');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'success';
            $this->pdo = $pdo;
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function getPdo(){
        return $this->pdo;
    } 
    
    static public function Obj(){
        $obj = new static();
        return $obj->pdo;
    }
}

?>