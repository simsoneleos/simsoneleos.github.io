<h2>Data Artikel Fundamental</h2>

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
		<?php $ambil=$koneksi->query("SELECT * FROM fundamental");?>
		<?php WHILE ($pecah=$ambil->fetch_assoc()){ ?>
			<tr>
				<td><?php echo $nomor ; ?></td>
				<td><?php echo $pecah['judul_funda'] ; ?></td>
				<td><?php echo $pecah['isi_funda'] ; ?></td>
				<td>
					<img src="../gambar_artikel/<?php echo $pecah['gambar_funda']; ?> " width = "100" >
				</td>
				<td>
					<a href="index.php?halaman=editfunda&id=<?php echo $pecah['id_funda']; ?>" class="btn btn-success">Edit</a>
					<a href="index.php?halaman=hapusfunda&id=<?php echo $pecah['id_funda']; ?>" class="btn btn-danger">Delete</a>
				</td>
			</tr>
			<?php $nomor++; ?>
		<?php } ?> 
	</tbody>
</table>
<a href="index.php?halaman=tambahfunda" class="btn btn-primary">Tambah Artikel</a>