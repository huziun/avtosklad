<?php
session_start();


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
   
    public function checkPaswword( $pas1, $pas2){
        if($pas1 === $pas2){
            return 'true';
        }
        return 'false';
    }
}
?>