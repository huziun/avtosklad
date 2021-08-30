<?php

class ValidationRegister{
   private $user;

   public function __construct(){
       $this->user = $_POST;
   }
    public function checkPaswword($pas1, $pas2){
        
        if($pas1 === $pas2){
            return 'true';
        }
        return 'false';
    }

    public function ValidRegisterData($user){
        if($user["password"] <=7){
            $int=7;
            var_dump($int);
            //$window = new ModalValidationWindow;
            
            
        }
    }
}


class ValidationEnter{

    public function ValidEnter($user){
        if($user['email']=="" || $user['password']== ""){
            echo '124';
            $_SESSION="";
            header("Location: index.php");
        }
    }
}

?>
