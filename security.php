<?php
session_start();
require 'passecurity.php';
class Page_access{
    
    private $user;

    public function __construct(){
        $this->user=$_SESSION['login'];
    }
    public function checkuser(){
        if(empty($this->user)){
           
            header("Location: index.php");
        }
    }
}

class Validation{
    public function checkPaswword(string $pas1, string $pas2){
        if($pas1 == $pas2){
            return True;
        }
        return 'invalid password';
    }
}
?>