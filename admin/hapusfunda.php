<?php 
$ambil = $koneksi->query("SELECT * FROM fundamental WHERE id_funda='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$gambarfunda = $pecah['gambar_funda'];
if (file_exists("../gambar_artikel/$gambarfunda"))
{
	unlink("../gambar_artikel/$gambarfunda");
}

$koneksi->query("DELETE FROM fundamental WHERE id_funda= '$_GET[id]'");

echo "<script>alert('Artikel Terhapus')</script>";
echo "<script>location='index.php?halaman=analisafundamental';</script>";

 ?>