<?php
session_start();
require_once 'database.php';
require_once 'security.php';
require_once 'passecurity.php';
class LogIn{
    private $user;
    private $bd;
    private $check;

    public function __construct(){
        $this->user=$_POST;
        //var_dump($this->user);
        $bd = new DB();
        $this->bd = $bd->getPDO();
        $this->check = new Password;
    }
    
    public function Enter(){
        //$sql = "SELECT * FROM users WHERE email = '?'";
        $sql = "SELECT * FROM users WHERE email = ?";
        $result = $this->bd->prepare($sql);
        $result->execute(array( $this->user['email']));
        $ressa = $result->fetch();
        
        
        $check = $this->check->chacking($ressa['password'],$this->user['password'],$ressa['salt']);
        //var_dump($check);
        if($check){
            $_SESSION['login'] = $ressa;
            header("Location: avtosklad.php");
        }
    }

}
$log = new LogIn;
$log->Enter();
?>