<?php
class navbar{
    public function __construct(){
        ?>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navv">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
                <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"/>
                </svg></a>
                <button class="navbar-toggler" id="log" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        
                    </ul>
                <?php 
                 
                (empty($_SESSION['login'])) ? $this->log_in_buttons() : $this->log_out_buttons();
                ?>
                </div>
            </div>
        </nav>
        <?php
    }
    public function log_in_buttons(){
        
                          ?>
                    <div class="mr-2" >
                        
                            <a href="" target="_blank"> </a>
                            <button class="btn btn-outline-success " type="button" data-toggle="modal" data-target="#registration">Registration</button>
                        
                    </div>
                    
                    <div>
                            <a href="" target="_blank"> </a>
                            <button class="btn btn-outline-success" type="button" data-toggle="modal" data-target="#exampleModalCenter">Log in</button>
                    
                    </div>   
                            
              
                     
                    
        <?php
    }
    public function log_out_buttons(){
          
                echo "<font style='color:white;'>Hello ".$_SESSION['login']."</font>";
        ?>
        <div class="mr-2" >
                        
                        <a href="" target="_blank"> </a>
                        <button class="btn btn-outline-success " type="button" data-toggle="modal" data-target="#registration">Log out</button>
                    
                </div>
               
        <?php
        }
    
}


$nav_o = new navbar;



?>
