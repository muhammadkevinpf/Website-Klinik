<?php session_start(); ?>
<nav class="navbar navbar-expand-md bg-light navbar-light">
  <a class="navbar-brand" href="/klinik/">
    <span class="logo-small">[BDC]</span>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/klinik/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/klinik/page/jadwal.php">Jadwal Dokter</a>
      </li>       
    </ul>
    <ul class="navbar-nav ml-auto mr-4">
      <li class="nav-item">
        <?php
        if(isset($_SESSION['nama'])){
          echo '<div class="dropdown">
          <a style="text-transform:capitalize;" class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            '.$_SESSION['nama'].'
          </a>
        
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="/klinik/logout.php">Log Out</a>
          </div>
        </div>';
        }else{
          echo '<a class="nav-link" href="/klinik/login.php" style="color:red;">Log In</a>';
        }
        ?>
        
      </li> 
    </ul>
  </div>  
</nav>