<?php 
session_start();
include 'koneksi.php'
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Belajar Cryptocurrency</title>

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
            <h1 class="fw-bold">CRYPTOCURRENCY</h1>
            <p style="color: #996600;"><b>Cryptocurrency adalah sebuah teknologi yang berbasis blockchain yang sering digunakan sebagai mata uang digital. Uang digital berbeda dengan uang konvensional, uang jenis ini tidak memiliki bentuk fisik melainkan hanya sebuah block data yang di ikat oleh hash sebagai validasinya. Datanya tersebar ke setiap pengguna cryptocurrency yang berada dalam lingkungan itu. Sehingga saat ada pengguna melakukan sebuah transaksi akan dilakukan mining data.</b></p>
            
        </div>
    </div>

<div class="container">
    <div class="row">
        <?php $ambil=$koneksi->query("SELECT * FROM coin"); ?>
        <?php WHILE($perartikel=$ambil->fetch_assoc()){ ?>
            <div class="col align-self-center">
                <div class="thumbnail">
                    <img src="gambar_artikel//<?php echo $perartikel['gambar_coin'] ?>" width="100%" alt="Cinque Terre" class="img-responsive"></a>
                    <div class="caption">
                        <h6><?php echo $perartikel['judul_coin']; ?></h6>
                        <p><a href="detailcrypto.php?id=<?php echo $perartikel["id_coin"]; ?>" class="btn btn-outline-secondary btn-block" role="button">Selengkapnya</a> </p>
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
                <a href="http://localhost/piaku/funda.php">Next</a>
            </p>
        </div>
    </footer>

    <script src="admin/assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>