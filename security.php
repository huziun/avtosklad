<?php
session_start();
require "modal.php";

class Page_access{
    
    private $user;

    public function __construct(){
        $this->user=$_SESSION['login'];
        
    }
    
    public function checkuser(){
        if(empty($_SESSION['login']) || $_SESSION['login']==''){
           
            header("Location: index.php");
        }
    }
}

