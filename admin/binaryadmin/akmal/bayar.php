<h2>Data Pembayaran</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>Nama Kopi</th>
			<th>Harga</th>
			<th>Ukuran</th>
			<th>Id Kopi</th>
			<th>Nama Pembeli</th>
			<th>Foto Produk</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $ambil=$koneksi->query("SELECT * FROM pembayaran"); ?>
		<?php while($pecah = $ambil->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $pecah['nama_kopi'];?> </td>
			<td><?php echo $pecah['harga'];?></td>
			<td><?php echo $pecah['ukuran'];?></td>
			<td><?php echo $pecah['id_kopi'];?></td>
			<td><?php echo $pecah['nama_pembeli'];?></td>
			<td>
				<img src="assets/foto_produk/<?php echo $pecah['foto_produk']; ?>" width="100">
			</td>
			<td>
				<a href="index.php?halaman=hapusbayar&id=<?php echo $pecah['id_kopi']; ?>" class="btn-danger btn">hapus</a>
				<a href="" class="btn btn-warning">ubah</a>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahpembayaran" class="btn btn-primary">Tambah Pembayaran</a>