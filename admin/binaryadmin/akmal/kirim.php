<h2>Data Pengiriman</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>Id Kopi</th>
			<th>Nama Kopi</th>
			<th>Alamat</th>
			<th>Ukuran</th>
			<th>Total Harga</th>
			<th>Nama Pembeli</th>
			<th>Foto Produk</th>
			<th>Aksi</th>
			
		</tr>
	</thead>
	<tbody>
		<?php $ambil=$koneksi->query("SELECT * FROM delivery"); ?>
		<?php while($pecah = $ambil->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $pecah['id_kopi'];?> </td>
			<td><?php echo $pecah['nama_kopi'];?></td>
			<td><?php echo $pecah['alamat'];?></td>
			<td><?php echo $pecah['ukuran'];?></td>
			<td><?php echo $pecah['total_harga'];?></td>
			<td><?php echo $pecah['nama'];?></td>
			<td>
				<img src="assets/foto_produk/<?php echo $pecah['foto_produk']; ?>" width="100">
			</td>

			<td>
				<a href="index.php?halaman=detailkirim&alamat=<?php echo $pecah['alamat']; ?>" class="btn btn-info">detail</a>
				<a href="index.php?halaman=hapuskirim&id=<?php echo $pecah['id_kopi']; ?>" class="btn-danger btn">hapus</a>
				
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahpengiriman" class="btn btn-primary">Tambah Pengiriman</a>
