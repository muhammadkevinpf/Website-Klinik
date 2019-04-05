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
    <?php 
    include 'navbar.php';
    include 'config/conn.php';
    include 'class/kontak.php';
    $kontak = new kontak;
    ?>

    <section id="home">
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
                <img src="https://news.files.bbci.co.uk/include/idt2/assets/9757c487-9b9e-4d4d-b507-97a649a4098d" alt="Third slide">
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

    <section id="layanan">
        <div class="container d-flex justify-content-center">
            <div class="wrapper p-5">
                <div class="row mb-5">
                    <div class="col-lg-12 text-center">
                        <h3 style="font-weight:bold;">Layanan Kami</h3>
                        <p>Senyum anda kepuasan kami</p>
                        <hr>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col-lg-4">
                        <button type="button" class="btn btn-active mb-4"><img src="assets/img/icon/dentist-chair.png"
                                class="img-fluid"></i></button>
                        <h5>KONSULTASI & DENTAL CHECK-UP</h5>
                    </div>
                    <div class="col-lg-4">
                        <button type="button" class="btn btn-active mb-4"><img src="assets/img/icon/tooth.png"
                                class="img-fluid"></i></button>
                        <h5>PEMBERSIHAN KARANG GIGI</h5>
                    </div>
                    <div class="col-lg-4">
                        <button type="button" class="btn btn-active mb-4"><img src="assets/img/icon/tools.png"
                                class="img-fluid"></i></button>
                        <h5>PERAWATAN KHUSUS GIGI ANAK</h5>
                    </div>
                </div>
                <div class="row text-center mt-5">
                    <div class="col-lg-4">
                        <button type="button" class="btn btn-active mb-4"><img src="assets/img/icon/implant.png"
                                class="img-fluid"></i></button>
                        <h5>PENAMBALAN & PENCABUTAN</h5>
                    </div>
                    <div class="col-lg-4">
                        <button type="button" class="btn btn-active mb-4"><img src="assets/img/icon/braces.png"
                                class="img-fluid"></i></button>
                        <h5>PEMASANGAN BEHEL</h5>
                    </div>
                    <div class="col-lg-4">
                        <button type="button" class="btn btn-active mb-4"><img src="assets/img/icon/teeth.png"
                                class="img-fluid"></i></button>
                        <h5>PEMBUATAN GIGI TIRUAN</h5>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="kontak">
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
                            <form method="post" action="<?php echo $_SERVER['PHP_SELF']."#3";?>">
                                <div class="form-group input-material">
                                    <input type="text" name="nama" class="form-control" />
                                    <label for="nama">Nama Anda</label>
                                </div>
                                <div class="form-group input-material">
                                    <input type="email" name="email" class="form-control" />
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
                            <span>Jl. Raya Jatinangor, Cikeruh, Jatinangor, Kabupaten Sumedang, Jawa Barat 45363,
                                Indonesia</span>
                            <br>
                            <i class='fas fa-phone mr-2 contact-margin' style='font-size:20px'></i>
                            +62 22 7790733
                            <br>
                            <i class="fas fa-envelope-square mr-2 contact-margin" style='font-size:20px'></i>
                            bandungdentalcenter@gmail.com
                        </div>
                    </div>
                </div>
            </div>



            <div class="footer text-center text-white">
                Copyright &copy; HAS <?php echo date('Y'); ?>
            </div>
        </div>
    </section>

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header alert-success">
                    <h4 class="modal-title">Success</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <center>
                        <i class="fas fa-smile" style="font-size:10vw; color:#5cb85c;"></i>
                    </center>
                    <h4 class="text-center mt-4">Terima kasih atas masukan anda!</h4>
                </div>
            </div>
        </div>
    </div>

    <?php include 'jquery.php';?>
    <script>
        $(function () {
            $.scrollify({
                section: "section",
            });
        });
        $(document).ready(function () {
            $('body').materializeInputs();
            $('.bxslider').bxSlider();
        });
    </script>
    <script>
        <?php if(isset($_POST['submit'])){
            $kontak->insertKontak($conn,$_POST['nama'],$_POST['email'],$_POST['pesan']);
        } 
        ?>
    </script>
</body>

</html>