<?php
session_start();
require 'database.php';
require_once 'security.php';
require 'passecurity.php';
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
        $sql = 'SELECT * FROM `users` WHERE `email` = :email';
        $result = $this->bd->prepare($sql);
        $result->execute(array(':email' => $this->user['email']));
        $ressa = $result->fetch();
        //var_dump($ressa);
        $check = $this->check->chacking($ressa['password'],$this->user['password'],$ressa['salt']);
        //var_dump($check);
    }

}
$log = new LogIn;
$log->Enter();
?>