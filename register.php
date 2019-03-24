
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Klinik</title>
        <!-- Bootstrap CSS -->
        <?php include 'css.php'?>
    </head>
    <body>
    <?php include 'navbar.php'?>
    <div id="page-container">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 mx-auto mt-2">
                    <div class="card box-shad card-3">
                        <div class="card-heading"></div>
                        <div class="card-body">
                            <h2 class="title text-center">Form Registrasi</h2>
                            <?php
                                include 'config/conn.php';
                                include 'class/validation.php';
                                $login = new validation;
                                if(isset($_POST['submit']))
                                $login->register($conn,$_POST['nik'],$_POST['tanggal'],$_POST['nama'],$_POST['alamat'],$_POST['username'],$_POST['password']);
                            ?>
                            <form class="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <div class="form-group input-material">
                                    <input type="text" class="form-control" id="nik" name="nik" required/>
                                    <label for="nik">NIK</label>
                                    <small id="alertNik" class="alert-danger pl-1" style="display:none;">NIK sudah terdaftar</small>
                                </div>
                                <div class="form-group input-material">
                                    <input type="text" class="form-control" name="nama" required/>
                                    <label for="nama">Nama</label>
                                </div>
                                <div class="form-group input-material">
                                    <input type="text" class="form-control" name="tanggal" onfocus="this.type='date'" required/>
                                    <label for="tanggal">Tanggal Lahir</label>
                                </div>
                                <div class="form-group input-material">
                                    <textarea name="alamat" class="form-control"></textarea>
                                    <label for="alamat">Alamat</label>
                                </div>
                                <div class="form-group input-material">
                                    <input type="text" class="form-control" id="username" name="username" required/>
                                    <label for="username" >Username</label>
                                    <small id="uname" class='alert-danger pl-1' style='display:none;'>Username sudah digunakan</small>
                                </div>
                                <div class="form-group input-material">
                                    <input type="password" class="form-control" id="password" name="password" minlength="8" required/>
                                    <label for="password">Password</label>
                                    <small id="danger" style="display:none" class="alert-danger">Password Min 8 Karakter</small>
                                </div>
                                    
                                <div class="text-center">
                                    <button type="submit" name="submit" class="btn btn-danger">Register</button><br>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="content-wrapper"></div>
        <?php include 'footer.php' ?>
    </div>
    
        
    <?php include 'jquery.php' ?>

    <script>
        $(document).ready(function(){

        // enable material-style inputs in entire body
        $('body').materializeInputs();
        
        $('#password').keyup(function(){
            if(this.value.length < 8){
                $('#danger').css('display','inline');
            }else{
                $('#danger').css('display','none');
            }
        });

        $('#username').focusout(function(){
            var uname = this.value
            $.ajax({
                type:'get',
                url:'ajaxUsername.php',
                data: {username:uname},
                dataype: 'json',
                success: function(response){
                    var len = response.length;
                    if(len == 2){
                        $("#uname").css('display','none');
                    }else{
                        $("#uname").css('display','inline');
                    }
                }
            });
        });

        $('#nik').focusout(function(){
            var niks = this.value;
            $.ajax({
                type:'get',
                url:'ajaxNik.php',
                data: {nik : niks},
                datatype: 'json',
                success: function(response){
                    var len = response.length;
                    if(len == 2){
                        $("#alertNik").css('display','none');
                    }else{
                        $("#alertNik").css('display','inline');
                    }
                }

            });
        });

        });
    </script>
    </body>
</html>
