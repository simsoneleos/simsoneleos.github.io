<h2>Halaman Coin</h2>

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
		<?php $ambil=$koneksi->query("SELECT * FROM coin");?>
		<?php WHILE ($pecah=$ambil->fetch_assoc()){ ?>
			<tr>
				<td><?php echo $nomor ; ?></td>
				<td><?php echo $pecah['judul_coin'] ; ?></td>
				<td><?php echo $pecah['isi_coin'] ; ?></td>
				<td>
					<img src="../gambar_artikel/<?php echo $pecah['gambar_coin']; ?> " width = "100" >
				</td>
				<td>
					<a href="index.php?halaman=editcoin&id=<?php echo $pecah['id_coin']; ?>" class="btn btn-success">Edit</a>
					<a href="index.php?halaman=hapuscoin&id=<?php echo $pecah['id_coin']; ?>" class="btn btn-danger">Delete</a>
				</td>
			</tr>
			<?php $nomor++; ?>
		<?php } ?> 
	</tbody>
</table>
<a href="index.php?halaman=tambahcrypto" class="btn btn-primary">Tambah Artikel</a>