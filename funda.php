<?php 
session_start();
include 'koneksi.php'
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Belajar Fundamental Cryptocurrency</title>

 <!-- Bootstrap Core CSS -->
 	<link href="admin/assets/css/bootstrap.min.css" rel="stylesheet">
 	

 	<!-- custom styles for this template -->
 	<link href="navbar-top-fixed.css" rel="stylesheet">
 </head>
 <body style="background-color: #99FFCC;">
    <?php include 'navbar.php' ?>

<section class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-8 col-md-8 mx-auto">
            <h1 class="fw-bold">ANALISA FUNDAMENTAL</h1>
            <p style="color: #999900;"><b>Analisis fundamental melibatkan penyelaman mendalam ke dalam informasi yang tersedia tentang aset keuangan. Misalnya, Anda mungkin melihat kasus penggunaannya, jumlah orang yang menggunakannya, atau tim di belakang proyek.</b></p>
            
        </div>
    </div>

<div class="container">
    <div class="row">
        <?php $ambil=$koneksi->query("SELECT * FROM fundamental"); ?>
        <?php WHILE($perartikel=$ambil->fetch_assoc()){ ?>
            <div class="col align-self-center">
                <div class="thumbnail">
                    <img src="gambar_artikel//<?php echo $perartikel['gambar_funda'] ?>" width="60%" alt="Cinque Terre" class="img-responsive"></a>
                    <div class="caption">
                        <h6><?php echo $perartikel['judul_funda']; ?></h6>
                        <p><a href="detailfunda.php?id=<?php echo $perartikel["id_funda"]; ?>" class="btn btn-outline-primary btn-block" role="button">Selengkapnya</a></p>
                    </div>
                </div>
            </div>
        <?php } ?> 
    </div>
</div>

</section>

    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="http://localhost/piaku/teknikal.php">Next</a>
            </p>
        </div>
    </footer>

    <script src="admin/assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>