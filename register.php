<?php
session_start();
require "security.php"; 
require_once "database.php";
require 'login.php';
require_once 'passecurity.php';

class Register{
    private $user;
    private $db;
    private $xesh;
    private $valid;
    private $secur;

    public function __construct(){
        $this->user = $_POST;
        $new_db = new DB();
        $this->db = $new_db->getPDO();
        $this->xesh = new Password; 
        $this->valid = new ValidationRegister;

    }

    public function logInUser(){
    #var_dump($this->user);
       $this->valid->ValidRegisterData($this->user);
       
       
    }

    private function validation(){
        $par = $this->valid->checkPaswword($this->user['password'], $this->user['password2']);
        if($par == 'true'){
            $this->inputInDB();
        }
    }

    private function inputInDB(){

        $data = $this->xesh->NEW_password($this->user['password']);
        $sql ="INSERT INTO `users` VALUES(NULL, ?, ?, ?, ?,?)";
        $result = $this->db->prepare($sql);
        $result->execute(array($this->user['firstname'], $this->user['lastname'],$this->user['email'], $data[0], $data[1]));
        $_SESSION['login']=$this->user;
        $Login = new LogIn;
        $Login->Enter();
    }

}
$objR = new Register;


if(isset($_POST['regbutt'])){
    $int = 8;
    $objR->logInUser();
    
}
?>