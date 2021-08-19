<?php 
session_start();
include 'koneksi.php';
 ?>

<?php 
// mendapatkan id artikel dari url
$id_tek = $_GET["id"];

// ambil data
$ambil = $koneksi->query("SELECT * FROM teknikal WHERE id_tek='$id_tek'");
$detail = $ambil->fetch_assoc();
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Belajar Analisis Teknikal</title>

 <!-- Bootstrap Core CSS -->
 	<link href="admin/assets/css/bootstrap.min.css" rel="stylesheet">


 	<!-- custom styles for this template -->
 	<link href="navbar-top-fixed.css" rel="stylesheet">
 </head>
 <body style="background-color: #CCFFFF;">
    <?php include 'navbar.php' ?>

<!-- konten -->
<section class="konten">
    <div class="container">
        <div class="row">
            <div class="col-3 tim">
                <img src="gambar_artikel/<?php echo $detail["gambar_tek"]; ?>"alt="" class="mb-3">
            </div>
            <div class="col align-self-center">
                <h3 class="display-5"><?php echo $detail["judul_tek"] ?> </h3>
            </div>
            <div class="row">    
                <div class="col">
                <p><?php echo $detail["isi_tek"] ?> </p>
                </div>
            </div>
        </div>
    </div>
</section>

    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Back to top</a>
            </p>
            <p class="mb-1">
                copyright 2021
            </p>
        </div>

    </footer>

    <script src="admin/assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>