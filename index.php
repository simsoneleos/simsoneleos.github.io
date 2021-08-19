<?php 
session_start();
include 'koneksi.php'
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>CRYPTOCURRENCY</title>

 <!-- Bootstrap Core CSS -->
 	<link href="admin/assets/css/bootstrap.min.css" rel="stylesheet">
 	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">

 	<!-- custom styles for this template -->
 	<link href="navbar-top.css" rel="stylesheet">
 </head>
 <body style="background-color: #99FFCC;">
      <?php include 'navbar.php' ?>

 	<!-- konten -->
    <section class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-bold">BELAJAR CRYPTOCURRENCY</h1>
            <p class="lead text-muted">Website ini berisi informasi dasar dan cara menganalisa <b>cryptocurrency</b></p>
        </div>
    </div>
    </section>

  	<footer class="text-muted py-5">
      <div class="container">
          <p class="float-end mb-1">
              <a href="http://localhost/piaku/crypto.php">Next</a>
          </p>
          <p class="mb-1">
              Copyright 2021
          </p>
      </div>

    </footer>

    <script src="admin/assets/js/bootstrap.bundle.min.js"></script>
    
 </body>
 </html>