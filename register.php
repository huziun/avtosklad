<?php
session_start();
require "security.php"; 
require "database.php";

class Register{
    private $user;
    private $db;


    public function __construct(){
        $this->user=$_POST;
        var_dump($this->db);
        $new_db = new DB();
        $this->db = $new_db->getPDO();
    }
    public function logInUser(){
        $_SESSION['login']=$this->user;
    }
    public function validation(Validation $obj){
        
    }
    public function inputInDB(){
        $sql ="INSERT INTO `users` VALUES(NULL, ?, ?,?, ?)";
        $result = $this->db->prepare($sql);
        $result->execute(array($this->user['firstname'], $this->user['lastname'],$this->user['email'],$this->user['password']));
        var_dump($result);
    }

}
$objR = new Register;
$objR->inputInDB();
if(isset($_POST['regbutt'])){
    $objR->logInUser();
    
}
       
?>