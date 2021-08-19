<?php 
session_start();
//koneksi database
$koneksi=new mysqli("localhost","root","","pisimson");

if (!isset($_SESSION['admin']))
{
   echo "<script>alert('Silahkan Login')</script>";
   echo "<script>location='login.php'</script>";
   header('location=login.php');
   exit();
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SELAMAT DATANG ADMIN</title>
  <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- MORRIS CHART STYLES-->
  <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
  <!-- CUSTOM STYLES-->
  <link href="assets/css/custom.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin</a> 
            </div>
            <div style="color: white;
            padding: 15px 50px 5px 50px;
            float: right;
            font-size: 16px;"> <?php echo date('Y/m/d '); ?> &nbsp; </div>
        </nav>   
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/adminsimson.jpg" class="user-image img-responsive"/>
                    </li>
                    <li>
                        <a href="index.php"><i class="fa fa-fighter-jet fa-3x"></i> HOME </a>
                    </li>
                    <li>
                        <a href="index.php?halaman=cryptocurrency"><i class="fa fa-fighter-jet fa-3x"></i> CRYPTOCURRENCY </a>
                    </li>
                    <li>
                        <a href="index.php?halaman=analisafundamental"><i class="fa fa-fighter-jet fa-3x"></i> ANALISA FUNDAMENTAL </a>
                    </li>
                    <li>
                        <a href="index.php?halaman=analisateknikal"><i class="fa fa-fighter-jet fa-3x"></i> ANALISA TEKNIKAL</a>
                    </li>
                    <li>
                        <a href="index.php?halaman=logout"><i class="fa fa-fighter-jet fa-3x"></i> LOG OUT </a>
                    </li>
                </ul>
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
             <?php
             if (isset($_GET['halaman']))
             {
                if ($_GET['halaman']=="cryptocurrency")
                {
                    include 'crypto.php';
                }
                elseif ($_GET['halaman']=="analisafundamental") 
                {
                    include 'funda.php';
                }
                elseif ($_GET['halaman']=="analisateknikal")
                {
                    include 'teknikal.php';
                }
                elseif ($_GET['halaman']=="logout")
                {
                    include 'logout.php';
                }
                elseif ($_GET['halaman']=="tambahcrypto")
                {
                    include 'tambahcrypto.php';
                }
                elseif ($_GET['halaman']=="tambahfunda")
                {
                    include 'tambahfunda.php';
                }
                elseif ($_GET['halaman']=="tambahtek")
                {
                    include 'tambahtek.php';
                }
                elseif ($_GET['halaman']=="editcoin")
                {
                    include 'editcoin.php';
                }
                elseif ($_GET['halaman']=="editfunda")
                {
                    include 'editfunda.php';
                }
                elseif ($_GET['halaman']=="edittek")
                {
                    include 'edittek.php';
                }
                elseif ($_GET['halaman']=="hapuscoin")
                {
                    include 'hapuscoin.php';
                }
                elseif ($_GET['halaman']=="hapusfunda")
                {
                    include 'hapusfunda.php';
                }
                elseif ($_GET['halaman']=="hapustek")
                {
                    include 'hapustek.php';
                }
                elseif ($_GET['halaman']=="funda")
                {
                    include 'funda.php';
                }
            }
            else
            {
                include 'home.php';
            }

            ?>


        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- MORRIS CHART SCRIPTS -->
<script src="assets/js/morris/raphael-2.1.0.min.js"></script>
<script src="assets/js/morris/morris.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>


</body>
</html>
