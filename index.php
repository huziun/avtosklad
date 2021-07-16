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
        .mr-2 {
            margin-right:20px;
        }
        
        </style>
    </head>
    
    <body class ="zopka">
        <?php require("navbar.php"); ?>
        
        <div class="modal fade" id="registration" tabindex="-1" role="dialog"  aria-labelledby="registration" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content"  id="modal">
                    <form class="row needs-validation position-absolute bg-dark border p-3" method="POST" novalidate>
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