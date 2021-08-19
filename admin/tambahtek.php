<h2>Tambah Artikel Teknikal</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Judul</label>
		<input type="text" class="form-control" name="judul">
	</div>
	<div class="form-group">
		<label>Isi</label>
		<textarea type="text" class="form-control" name="isi" rows="10"></textarea>
	</div>
	<div class="form-group">
		<label>Foto</label>
		<input type="file" class="form-control" name="gambar">
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php 
if (isset($_POST['save']))
{
	$nama = $_FILES['gambar']['name'];
	$lokasi = $_FILES['gambar']['tmp_name'];
	move_uploaded_file($lokasi, "../gambar_artikel/".$nama);
	$koneksi->query("INSERT INTO teknikal (judul_tek, isi_tek, gambar_tek) VALUES('$_POST[judul]','$_POST[isi]','$nama')");

	echo "<div class='alert alert-info'>Data Berhasil Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=analisateknikal'>";
 }
 	?>