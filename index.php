<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Klinik</title>
    <?php include 'css.php'?>
</head>
<body>
    <?php include 'navbar.php' ?>
    
    <section>
        <div id="carouselId" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                <li data-target="#carouselId" data-slide-to="1"></li>
                <li data-target="#carouselId" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="https://www.ciputramedicalcenter.com/wp-content/uploads/2017/07/dokter-spesialis.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img src="https://media.beritagar.id/2018-08/feeca84118079cee2f253990da75a954.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img src="https://hellosehat.com/wp-content/uploads/2018/09/periksa-dengan-dokter.jpg?x54339" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <section>
    Section 2
    </section>

    <section>
        <div class="contact h-100">
            <div class="wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class='text-center'>Informasi Kontak</h4>
                            <p class="text-center">Nikmati kemudahan berkomunikasi dengan kami</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <form method="post" action="">
                                <div class="form-group input-material">
                                    <input type="text" name="nama" class="form-control"/>
                                    <label for="nama">Nama Anda</label>
                                </div>
                                <div class="form-group input-material">
                                    <input type="email" name="email" class="form-control"/>
                                    <label for="email">Email Anda</label>
                                </div>
                                <div class="form-group input-material">
                                    <textarea class="form-control" name="pesan"></textarea>
                                    <label for="email">Pesan Anda</label>
                                </div>
                                <button type="submit" name="submit" class="btn btn-dark">Kirim</button>
                            </form>
                        </div>
                        <div class="separator"></div>
                        <div class="col-lg-5">
                            <i class='far fa-building mr-2 contact-margin' style='font-size:20px'></i>
                            <span>Jl. Raya Jatinangor, Cikeruh, Jatinangor, Kabupaten Sumedang, Jawa Barat 45363, Indonesia</span>
                            <br>
                            <i class='fas fa-phone mr-2 contact-margin' style='font-size:20px'></i>
                            +62 22 7790733
                            <br>
                            <i class="material-icons  mr-2 contact-margin" style='font-size:20px'>email</i>
                            bandungdentalcenter@gmail.com
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer text-center">
            Copyright &copy; HAS <?php echo date('Y'); ?>
            </div>
        </div>
        
    </section>

    
    
<?php include 'jquery.php';?>
<script>
    $(function() {
        $.scrollify({
        section : "section",
        });
    });
    $(document).ready(function(){
        $('body').materializeInputs();
    });
</script>
</body>
</html>