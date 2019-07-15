<?php include '../controller/kalkulator.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Latihan Pertemuan ke-10</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<script src="../assets/js/jquery.slim.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">DIGITAL TALENT</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="oop.php">Latihan OOP <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="daftar-nilai-peserta.php">Daftar Nilai Peserta</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
	<div class="container">
		<h2 class="text-center">Pelatihan Program terstruktur</h2>
    <br>
    <?php 
    $nama   = "Ricky R. Syahputra";
    $umur   = date("Y") - date("Y", strtotime("2000-04-08"));
    $alamat = "Sendowo, Mlati, DIY";
     ?>
     <!-- finish variable -->

    <!-- Start profil -->
     <form class="form-horizontal">
      <div class="form-row">
         <label for="fullname" class="control-label col-2">Nama lengkap:</label>
         <h5 class="col-10"><?=$nama ?></h5>
         <label for="age" class="control-label col-2">Umur:</label>
         <h5 class="col-10"><?=$umur ?> tahun</h5>
         <label for="address" class="control-label col-2">Alamat:</label>
         <h5 class="col-10"><?=$alamat ?></h5>
       </div>
     </form>
     <!-- Finish profil -->
     <hr>
     <h2 class="text-center">Aplikasi Kalkulator</h2>
     <br>
     <!-- Start Calculator -->
     <?php 
      $a =  14;
      $b =  5;
      $hasil = penjumlahan($a, $b);
      ?>
      <div class="row">
        <label for="angka1" class="col-2">Angka 1:</label>
        <h5 class="col-10"><?=$a?></h5>
      </div>
      <div class="row">
        <label for="angka2" class="col-2">Angka 2:</label>
        <h5 class="col-10"><?=$b?></h5>
      </div>
      <div class="row">
        <label for="hasil" class="col-2">Hasil:</label>
        <h5 class="col-10"><?=$hasil?></h5>
      </div>
    <!-- Finish Calculaltor -->

    <!-- Start Generasi -->
    <?php 
      if ($tahun_lahir<1990) {
        $generasi="Generasi sblm 90an";
      }
      elseif ($tahun_lahir<2000) {
        $generasi="Generasi 90an";
      }
      elseif ($tahun_lahir>=2000) {
        $generasi="Generasi milenial";
      }
    ?>
	</div>
</body>
</html>