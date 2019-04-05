<?php session_start(); ?>



<div class="navbar navbar-expand-sm bsnav bsnav-brand-top">
    <a class="navbar-brand" href="#"><img src="/klinik/assets/img/logo.png" class="img-fluid" ></a>
    <button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse justify-content-xs-center">
        <ul class="navbar-nav navbar-mobile mr-0">
            <li class="nav-item active"><a class="nav-link" href="/klinik/">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#layanan">Layanan</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Testimoni</a></li>
            <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
            <li class="nav-item"><a class="nav-link" href="/klinik/page/jadwal.php">Jadwal</a></li>
              <?php if(isset($_SESSION['nama'])){
                  echo '<li class="nav-item dropdown">
                  <a class="nav-link" href="#">'.$_SESSION["nama"].' <i class="caret"></i></a>
                  <ul class="navbar-nav">
                      <li class="nav-item"><a class="nav-link" href="/klinik/logout.php">Logout</a></li>
                  </ul>
              </li>';
                }else{
                  echo '<li class="nav-item"><a class="nav-link" href="/klinik/login.php">Login</a></li>';
                }
              ?>
        </ul>
    </div>
</div>





