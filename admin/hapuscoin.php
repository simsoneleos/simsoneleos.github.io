<?php 
$ambil = $koneksi->query("SELECT * FROM coin WHERE id_coin='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$gambarcoin = $pecah['gambar_coin'];
if (file_exists("../gambar_artikel/$gambarcoin"))
{
	unlink("../gambar_artikel/$gambarcoin");
}

$koneksi->query("DELETE FROM coin WHERE id_coin= '$_GET[id]'");

echo "<script>alert('Artikel Terhapus')</script>";
echo "<script>location='index.php?halaman=cryptocurrency';</script>";

 ?>