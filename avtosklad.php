<?php
session_start();
if(isset($_POST['button'])){
    echo "Hello ".$_POST['email'];
    $_SESSION['login']=$_POST['email'];
}


?>