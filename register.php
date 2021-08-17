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
        //var_dump($_SESSION);
        $new_db = new DB();
        $this->db = $new_db->getPDO();
        $this->xesh = new Password; 
        $this->valid = new Validation;

    }

    public function logInUser(){
        var_dump($_POST);
        
        if(isset($_POST['regbutt'])){
            $this->validation();
            //echo' hello';
        }
        //var_dump($this->user);
    }

    private function validation(){
        $par = $this->valid->checkPaswword($this->user['password'], $this->user['password2']);
        var_dump($par);
        if($par == 'true'){
            $this->inputInDB();
        }
        //var_dump($this->user);

        //var_dump($par);
    }

    private function inputInDB(){

        $data = $this->xesh->NEW_password($this->user['password']);
        var_dump($this->user);
        $sql ="INSERT INTO `users` VALUES(NULL, ?, ?, ?, ?,?)";
        $result = $this->db->prepare($sql);
        $result->execute(array($this->user['firstname'], $this->user['lastname'],$this->user['email'], $data[0], $data[1]));
        $_SESSION['login']=$this->user;
        $Login = new LogIn;
        $Login->Enter();

        //header("Location: avtosklad.php");
        
        
    }

}
$objR = new Register;


if(isset($_POST['regbutt'])){
    $objR->logInUser();
    //echo 'hello';
    
}
     /*
     <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
     */  
?>