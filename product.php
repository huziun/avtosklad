<?php 
require_once "database.php";

class ProductReader {
    protected $db ;
    public function __construct()
    {
        $db = new DB();
        $this->db = $db->getPdo();
    }
    public function readAll(){
        //read all
    }
    public function getAllCount(){
        $products  = $this->db->query( "SELECT SUM(`count`) FROM `products`");
        $kuni = $this->db->query( "SELECT SUM(`count`) FROM `universal_products`");
        $p = $products->fetch();
        $k = $kuni->fetch();
        $pk = $p[0]+$k[0];
        return $pk;
    }
}
class CogReader extends ProductReader {
    public function __construct()
    {
        parent::__construct();
    }
    public function readAll()
    {
        $myDB = $this->db->query("SELECT * FROM `products`");
       return $myDB->fetchAll();
    }
}
class UniversalReader extends ProductReader {
    public function __construct()
    {
        parent::__construct();
    }
    public function readAll()
    {
        $myDB = $this->db->query("SELECT * FROM `universal_products`");
        return $myDB->fetchAll();
    }
}
