<?php
session_start();
class Page_access{
    
    private $user;

    public function __construct(){
        $this->user=$_SESSION['login'];
    }
    public function checkuser(){
        if(empty($user)){
            return header("Location: index.php");
        }
    }
}

$odj = new Page_access;
$odj->checkuser();
?>