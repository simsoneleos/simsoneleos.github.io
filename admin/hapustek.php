<?php 
$ambil = $koneksi->query("SELECT * FROM teknikal WHERE id_tek='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$gambartek = $pecah['gambar_tek'];
if (file_exists("../gambar_artikel/$gambartek"))
{
	unlink("../gambar_artikel/$gambartek");
}

$koneksi->query("DELETE FROM teknikal WHERE id_tek= '$_GET[id]'");

echo "<script>alert('Artikel Terhapus')</script>";
echo "<script>location='index.php?halaman=analisateknikal';</script>";

 ?>