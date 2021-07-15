<?php
session_start();
$_SESSION['login'] = "";
?>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
        .zopka{
            background-image: url(https://www.peugeot-favorit.ru/upload/resize_cache/fm/62924d2f26bee91a37cfdbeee0821c4b.auto.auto.0.jpg);
            background-size: cover;
        }
        #modal{
            border:none;
            height: 400px;
            width: 300px;
        }
        #forma{
            height: 400px;
            width: 300px;
        }
        .input_c{
            color: white;
        }
        .show {
            display: flex !important;
            justify-content:center;
            align-items: center;
        }
        </style>
    </head>
    
    <body class ="zopka">
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

                    <div>
                        
                            <a href="" target="_blank"> </a>
                            <button class="btn btn-outline-success " type="button" data-toggle="modal" data-target="#registration">registration</button>
                        
                    </div>
                    
                    <div>
                        <?php
                            if(empty($_SESSION['login'])){?>
                
                            <a href="" target="_blank"> </a>
                            <button class="btn btn-outline-success" type="button" data-toggle="modal" data-target="#exampleModalCenter">log in</button>
                    
                        <?php }
                    
                        else {
                            echo "Hello ".$_SESSION['login'];
                        }
                        ?>
                    </div>   
                   
                </div>
            </div>
        </nav>
        
        <div class="modal fade" id="registration" tabindex="-1" role="dialog"  aria-labelledby="registration" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content"  id="modal">
                    <form class="row needs-validation position-absolute bg-dark border" novalidate>
                        <div class="md-3">
                            <label for="validationCustom01" class="form-label input_c">First name</label>
                            <input type="text" class="form-control" id="validationCustom01" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="md-3">
                            <label for="validationCustom02" class="form-label input_c">Last name</label>
                            <input type="text" class="form-control " id="validationCustom02" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="md-3">
                            <label for="InputEmail1" class="form-label input_c">Email address</label>
                            <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" name="email">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>

                        <div class="md-3">
                            <label for="FirstInputPassword1" class="form-label input_c">Password</label>
                            <input type="password" class="form-control" id="FirstInputPassword1" name="password">
                        </div>

                        <div class="md-3">
                            <label for="SecondInputPassword1" class="form-label input_c">Please repit your password</label>
                            <input type="password" class="form-control" id="SecondInputPassword1" name="password">
                        </div>
                    
                        <div class="md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label input_c" for="invalidCheck">
                                    Agree to terms and conditions
                                </label>
                                <div class="invalid-feedback input_c">
                                    You must agree before submitting.
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content"  id="modal">
                    <form class= "position-absolute top-50 start-50 translate-middle bg-dark p-5 border" id="modal" action="avtosklad.php" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label input_c">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label input_c">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label input_c" for="exampleCheck1">Check me out</label>
                        </div >
                            <button type="sumbit" class="btn btn-primary mb-3" name="button">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src='index.js'> </script>
       
    </body>
    
</html>