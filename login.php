<?php
session_start();
require_once 'database.php';
require_once 'security.php';
require_once 'passecurity.php';
require 'validation.php';
class LogIn{
    private $user;
    private $bd;
    private $check;
    private $correctData;

    public function __construct(){
        $this->user = $_POST;
        $bd = new DB();
        $this->bd = $bd->getPDO();
        $this->check = new Password;
        $this->correctData = new ValidationEnter;
    }
    
    public function Enter(){
        $this->correctData->ValidEnter($this->user);
        
        $sql = "SELECT * FROM users WHERE email = ?";
        $result = $this->bd->prepare($sql);
        $result->execute(array( $this->user['email']));
        $ressa = $result->fetch();
        if($ressa != false){
            $check = $this->check->chacking($ressa['password'],$this->user['password'],$ressa['salt']);
            
            if($check == true){
                $_SESSION['login'] = $ressa;
                header("Location: avtosklad.php");
            }
        }else{
            $_SESSION="";
            header("Location: index.php");
        }
    }

}
$log = new LogIn;
$log->Enter();
?>