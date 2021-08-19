<?php 
session_start();
include 'koneksi.php'
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Belajar Teknikal Cryptocurrency</title>

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
            <h1 class="fw-bold">ANALISA TEKNIKAL</h1>
            <p style="color: #CC9900;"><b>Analisis Teknikal(TA) sering disebut sebagai charting, adalah jenis analisis yang bertujuan untuk memprediksi perilaku pasar masa depan berdasarkan aksi harga dan data volume sebelumnya.</b></p>
            
        </div>
    </div>

<div class="container">
    <div class="row">
        <?php $ambil=$koneksi->query("SELECT * FROM teknikal"); ?>
        <?php WHILE($perartikel=$ambil->fetch_assoc()){ ?>
            <div class="col align-self-center">
                <div class="thumbnail">
                    <img src="gambar_artikel//<?php echo $perartikel['gambar_tek'] ?>" width="60%" alt="Cinque Terre" class="img-responsive"></a>
                    <div class="caption">
                        <h6><?php echo $perartikel['judul_tek']; ?></h6>
                        <p><a href="detailtek.php?id=<?php echo $perartikel["id_tek"]; ?>" class="btn btn-outline-danger btn-block" role="button">Selengkapnya</a></p>
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
                <a href="http://localhost/piaku/index.php">Back Home</a>
            </p>
        </div>
    </footer>

    <script src="admin/assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>