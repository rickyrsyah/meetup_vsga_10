<?php include '../controller/grade.php'; ?>
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
          <a class="nav-link" href="oop.php">Latihan OOP</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="daftar-nilai-peserta.php">Daftar Nilai Peserta <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
	<div class="container">
		<h2 class="text-center">Daftar Nilai Peserta</h2>
    <!-- Define variable -->
    <?php 
      $data = array(
        'Ricky' => array(91 , 92),
        'Gilang'=> array(90 , 91),
        'Wahid' => array(90 , 90),
        'Farid' => array(93 , 91),
        'Rafli' => array(91 , 91),
        'Lutfi' => array(92 , 91),
        'Sisti' => array(92 , 93)
      );

     ?>
    <table class="table table-bordered">
      <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Ujian 1</th>
        <th>Ujian 2</th>
        <th>Hasil</th>
      </tr>
      <!-- Start Forloop -->
      <?php
      $idx=1;
      foreach ($data as $nama => $nilai): ?>
        
      <tr>
        <td><?= $idx++ ?></td>
        <td><?= $nama ?></td>
        <td><?= $nilai[0] ?></td>
        <td><?= $nilai[1] ?></td>
        <td><?= huruf($nilai[0], $nilai[1]) ?></td>
      </tr>

      <?php endforeach; ?>
      <!-- Finish Forloop -->
    </table>
	</div>
</body>
</html>