<?php 
require_once "database.php";
class ProductRepository {
    private $db;
    public function __construct()
    {
        $db = new DB();
        $this->db = $db->getPdo();
    }
    public function handleRequest(array $array,string $type){

                                                                                       
    }
    public function inputIntoDB(string $sql){

    }
}

