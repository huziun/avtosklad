<?php
session_start();
require "security.php"; 
require "database.php";
require 'passecurity.php';

class Register{
    private $user;
    private $db;
    private $xesh;
    private $valid;
    private $secur;

    public function __construct(){
        $this->user = $_POST;
        //var_dump($this->user);
        $new_db = new DB();
        $this->db = $new_db->getPDO();
        $this->xesh = new Password; 
        $this->valid = new Validation;

    }

    public function logInUser(){
        if(!empty($_POST)){
            $this->user = $_SESSION['regbutt'];
            $this->validation();
            
        }
        var_dump($this->user);
    }

    private function validation(){
        $par = $this->valid->checkPaswword($this->user['password'], $this->user['password2']);
        if($par == 'true'){
            $this->inputInDB();
        }
        var_dump($this->user);

        //var_dump($par);
    }

    private function inputInDB(){
        $data = $this->xesh->NEW_password($this->user['password']);
        //var_dump($this->user);
        $sql ="INSERT INTO `users` VALUES(NULL, ?, ?, ?, ?,?)";
        $result = $this->db->prepare($sql);
        $result->execute(array($this->user['firstname'], $this->user['lastname'],$this->user['email'], $data[0], $data[1]));
    
        //var_dump($result);
    }

}
$objR = new Register;


if(isset($_POST['regbutt'])){
    $objR->logInUser();
    echo 'hello';
    
}
       
?>