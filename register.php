<?php
session_start();
require "security.php"; 
require "database.php";
require 'passecurity.php';
class Register{
    private $user;
    private $db;
    private $xesh;

    public function __construct(){
        $this->user=$_POST;
        var_dump($this->db);
        $new_db = new DB();
        $this->db = $new_db->getPDO();
        $this->xesh = new Password; 
    }
    public function logInUser(){
        $_SESSION['login']=$this->user;
    }
    public function validation(Validation $obj){
        
    }
    public function inputInDB(){
        $data = $this->xesh->NEW_password($this->user['password']);
        $sql ="INSERT INTO `users` VALUES(NULL, ?, ?,?, ?,?)";
        $result = $this->db->prepare($sql);
        $result->execute(array($this->user['firstname'], $this->user['lastname'],$this->user['email'], $data[0], $data[1]));
        var_dump($result);
    }

}
$objR = new Register;
$objR->inputInDB();
if(isset($_POST['regbutt'])){
    $objR->logInUser();
    
}
       
?>