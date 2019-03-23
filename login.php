<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Klinik</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css" type="text/css">
        <link rel="stylesheet" href="assets/css/input-material.css">
    </head>
    <body>
    <div class="container mid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12 mx-auto">
                <div class="card box-shad card-3">
                <div id="card-top"></div>
                    <div class="card-body">
                        <h2 class="title text-center">Form Login</h2>
                        
                        <form class="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="form-group input-material">
                                <input type="text" class="form-control" name="username" required/>
                                <label for="username">Username</label>
                            </div>
                            <div class="form-group input-material">
                                <input type="password" class="form-control" name="password" required/>
                                <label for="password">Password</label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-danger" name="submit">Log In</button><br>
                                <small><span>- or -</span></small><br/>
                                <span><a href="register.php">Register</a></span>
                            </div>
                        </form>
                    </div>
                </div>
                <?php
                    include 'config/conn.php';
                    include 'class/validation.php';
                    $login = new validation;
                    if(isset($_POST['submit']))
                    $login->login($conn,$_POST['username'],$_POST['password']);
                ?>
            </div>
        </div>
    </div>
        
    <?php include 'jquery.php' ?>

    <script>
        $(document).ready(function(){

        // enable material-style inputs in entire body
        $('body').materializeInputs();

        });
    </script>
    </body>
</html>
