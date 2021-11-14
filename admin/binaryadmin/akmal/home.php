<h2>Data Pelanggan</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>Id User</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Password</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $ambil=$koneksi->query("SELECT * FROM user"); ?>
		<?php while($pecah = $ambil->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $pecah['id_user'];?> </td>
			<td><?php echo $pecah['nama'];?></td>
			<td><?php echo $pecah['email'];?></td>
			<td><?php echo $pecah['password'];?></td>
			
			<td>
				<a href="" class="btn btn-danger">hapus</a>
				
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahpesanan" class="btn btn-primary">Edit</a>