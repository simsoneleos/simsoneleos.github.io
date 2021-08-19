<h2>Data Artikel Teknikal</h2>

<table class="table table bodered">
	<thead>
		<tr>
			<th> No</th>
			<th> Judul Artikel</th>
			<th> Isi</th>
			<th> Gambar</th>
			<th> Aksi</th>
		</tr>
	</thead>


	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM teknikal");?>
		<?php WHILE ($pecah=$ambil->fetch_assoc()){ ?>
			<tr>
				<td><?php echo $nomor ; ?></td>
				<td><?php echo $pecah['judul_tek'] ; ?></td>
				<td><?php echo $pecah['isi_tek'] ; ?></td>
				<td>
					<img src="../gambar_artikel/<?php echo $pecah['gambar_tek']; ?> " width = "100" >
				</td>
				<td>
					<a href="index.php?halaman=edittek&id=<?php echo $pecah['id_tek']; ?>" class="btn btn-success">Edit</a>
					<a href="index.php?halaman=hapustek&id=<?php echo $pecah['id_tek']; ?>" class="btn btn-danger">Delete</a>
				</td>
			</tr>
			<?php $nomor++; ?>
		<?php } ?> 
	</tbody>
</table>
<a href="index.php?halaman=tambahtek" class="btn btn-primary">Tambah Artikel</a>