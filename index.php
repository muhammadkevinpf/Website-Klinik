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

    <section id="about" class="pt-4 bg-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h4 class="text-center font-weight-bold text-danger">Mengapa Memilih Bandung Dental Center ?</h4>
                    <p class="text-center pt-4">Bandung Dental Center adalah klinik gigi terbaik dan terjangkau di Indonesia dengan cabang yang tersebar di Bandung dan Jatinangor. Kami fokus pada pelayanan berkualitas dengan harga yang terjangkau. Dengan konsep yang modern, unik, ceria, profesional dan dentist yang pastinya professional, BDC hadir membawa perubahan bagi senyum cantikmu yang akan membuatmu lebih nyaman dan lebih percaya diri lagi.</p>
                    <hr>
                </div>
            </div>
        </div>
        <div class="container pb-5">
            <div class="row text-center mt-5">
                <div class="col-lg-4">
                    <img src="assets/img/icon/gigi.png"/>
                    <h5 class="font-weight-bold pt-3 text-danger">Solusi Gigi Sehat & Cantik</h5>
                    <p>Bandung Dental Center memiliki konsep klinik gigi modern dengan bantuan teknologi tinggi advanced dentistry dan juga intraoral camera. Klinik kami didukung juga dengan suasana klinik nyaman, sejuk, jenis perawatan gigi lengkap dan juga dokter gigi yang profesional.</p>
                </div>
                <div class="col-lg-4">
                    <img src="assets/img/icon/doctor.png"/>
                    <h5 class="font-weight-bold pt-3 text-danger">Dokter Profesional</h5>
                    <p>Seluruh Dentist Bandung Dental Center terdiri dari dokter gigi yang berpengalaman, ramah dan profesional dalam memberikan solusi perawatan terbaik bagi semua pasien.</p>
                </div>
                <div class="col-lg-4">
                    <img src="assets/img/icon/bank.png"/>
                    <h5 class="font-weight-bold pt-3 text-danger">Harga Terjangkau</h5>
                    <p>Melalui kerjasama dengan distributor besar, Bandung Dental Center Hadir memberikan terobosan harga yang sangat terjangkau untuk kamu yang ingin memiliki senyum sehat & cantik.</p>
                </div>
            </div>
        </div>
        <!-- <div id="background-merah" class="bg-danger"></div> -->
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
                    <div class="col-lg-4" data-aos="fade-right" data-aos-duration="1000">
                        <button type="button" class="btn btn-outline-secondary mb-4"><img src="assets/img/icon/dentist-chair.png"
                                class="img-fluid"></i></button>
                        <h5>KONSULTASI & DENTAL CHECK-UP</h5>
                    </div>
                    <div class="col-lg-4" data-aos="fade-down" data-aos-duration="1000">
                        <button type="button" class="btn btn-outline-secondary mb-4"><img src="assets/img/icon/tooth.png"
                                class="img-fluid"></i></button>
                        <h5>PEMBERSIHAN KARANG GIGI</h5>
                    </div>
                    <div class="col-lg-4" data-aos="fade-left" data-aos-duration="1000">
                        <button type="button" class="btn btn-outline-secondary mb-4"><img src="assets/img/icon/tools.png"
                                class="img-fluid"></i></button>
                        <h5>PERAWATAN KHUSUS GIGI ANAK</h5>
                    </div>
                </div>
                <div class="row text-center mt-5">
                    <div class="col-lg-4" data-aos="fade-right" data-aos-duration="1000">
                        <button type="button" class="btn btn-outline-secondary mb-4"><img src="assets/img/icon/implant.png"
                                class="img-fluid"></i></button>
                        <h5>PENAMBALAN & PENCABUTAN</h5>
                    </div>
                    <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000">
                        <button type="button" class="btn btn-outline-secondary mb-4"><img src="assets/img/icon/braces.png"
                                class="img-fluid"></i></button>
                        <h5>PEMASANGAN BEHEL</h5>
                    </div>
                    <div class="col-lg-4" data-aos="fade-left" data-aos-duration="1000">
                        <button type="button" class="btn btn-outline-secondary mb-4"><img src="assets/img/icon/teeth.png"
                                class="img-fluid"></i></button>
                        <h5>PEMBUATAN GIGI TIRUAN</h5>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="testimoni">
        <div class="row testimoni">
            <div class="col-lg-6 text-center testi">
                <div class="owl-carousel owl-theme p-5 ml-5">
                    <div class="item text-center">
                        <h4><i class="fas fa-quote-right"></i></h4>
                        <h3 class="font-weight-bold">Tenaga Ahli Profesional</h3>
                        <p class="isiTesti text-justify">Saya sudah tiga kali berobat ke Bandung Dental Center. Pertama waktu kontrol dengan drg. Jafar. Kedua kali saat pembersihan karang gigi dengan drg. Elsa. Dan ketiga kali saat cabut dengan drg. Ghaisani. Kini gigi saya lebih sehat dan terawat. Terima kasih untuk Bandung Dental Center.</p>
                        <p class="font-weight-bold">- Tiara Lestari -</p>
                    </div>
                    <div class="item text-center">
                        <h4><i class="fas fa-quote-right"></i></h4>
                        <h3 class="font-weight-bold">Memuaskan</h3>
                        <p class="isiTesti text-justify">Saya datang ke klinik gigi Bandung Dental Center ketika geraham bungsu mulai mengganggu. Dari kunjungan tersebut, saya cukup terkesan dengan servis yg saya dapat di klinik tersebut. Tidak hanya dari segi harganya yang sangat terjangkau, tindakan dan pelayanan yang diberikan juga sangat memuaskan. Sekarang utk urusan gigi, saya selalu pilih Bandung Dental Center</p>
                        <p class="font-weight-bold">- Nana Karnaen -</p>
                    </div>
                    <div class="item">
                        <h4><i class="fas fa-quote-right"></i></h4>
                        <h3 class="font-weight-bold">Senyum sempurna karena BDC</h3>
                        <p class="isiTesti text-justify">Gigi depan saya patah karena kecelakaan motor,jadi kelihatan sangat jelek ketika tersenyum ataupun ketawa. Saya dengar di Bandung Dental Center bisa melakukan implan gigi dan bagus.Akhirnya saya cobain implan gigi di Bandung Dental Center dan sekarang gigi depan saya lengkap lagi.</p>
                        <p class="font-weight-bold">- Alex Barbados -</p>
                    </div>
                    <div class="item text-center">
                        <h4><i class="fas fa-quote-right"></i></h4>
                        <h3 class="font-weight-bold">Bebas ngilu dan makan pun lebih nikmat</h3>
                        <p class="isiTesti text-justify">Beberapa waktu lalu saya merasakan ngilu ketika makan manis dan minum yang dingin. Saya segera memeriksakan gigi saya ke klinik Jakarta smile, ternyata ada lobang pada beberapa gigi geraham saya dan saya disarankan untuk dilakukan penambalan pada gigi tersebut. Saya langsung okay untuk ditambal. Setelah itu, saya tidak merasa ngilu lagi dan makan pun jd nikmat karena tidak ngilu lagi. Thank you Bandung Dental Center</p>
                        <p class="font-weight-bold">- Tuti Hartati -</p>
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
            <div id="go-to-top">
                <button type="button" class="btn btn-primary btnUp" title="Go to Top">
                <i class="fas fa-arrow-up"></i></button>
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
        AOS.init();
        $(function () {
            $.scrollify({
                section: "section",
            });
        });
        $(document).ready(function () {
            $('.btnUp').tooltipster();
            $('#go-to-top').click(function() {
                $(window.opera ? 'html' : 'html, body').animate({
                    scrollTop: 0
                }, 'slow');
            });
            
            $('body').materializeInputs();
            $('.bxslider').bxSlider();

            $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            items:1,
            autoplay:true,
            navText:['<i class="fas fa-chevron-left fa-2x"></i>','<i class="fas fa-chevron-right fa-2x"></i>'],
            autoplayTimeout: 5000
            });
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