<h2> Edit Artikel Teknikal</h2>
<?php 
$ambil = $koneksi->query("SELECT * FROM teknikal WHERE id_tek='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
 ?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Judul</label>
		<input type="text" class="form-control" name="judulartikel" value="<?php echo $pecah['judul_tek'] ?>">
	</div>
	<div class="form-group">
		<label>Isi</label>
		<textarea class="form-control" name="isiartikel" rows="10"><?php echo $pecah['isi_tek'];?></textarea>
	</div>
	<div class="form-group">
		<img src="../gambar_artikel/<?php echo $pecah['gambar_tek'] ?>" width="100">
	</div>
	<div class="form-group">
		<label>Ganti Gambar</label>
		<input type="file" class="form-control" name="gambar">
	</div>
	<button class="btn btn-primary" name="edit">Simpan</button>
</form>

<?php 
if (isset($_POST['edit']))
{
	$namagambar = $_FILES['gambar']['name'];
	$lokasigambar = $_FILES['gambar']['tmp_name'];
	//jika gambar diubah
	if (!empty($lokasigambar))
	{
		move_uploaded_file($lokasigambar, "../gambar_artikel/$namagambar");

		$koneksi->query("UPDATE teknikal SET judul_tek='$_POST[judulartikel]', isi_tek='$_POST[isiartikel]', gambar_tek='$namagambar' WHERE id_tek='$_GET[id]'");
	}
else
{
	$koneksi->query("UPDATE teknikal SET judul_tek= '$_POST[judulartikel]', isi_tek='$_POST[isiartikel]' WHERE id_tek='$_GET[id]'");
}
echo "<script>alert('Artikel Berhasil Diubah')</script>";
echo "<script>location='index.php?halaman=analisateknikal';</script>";
}
 ?>