<h2>Tambah Pengiriman</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama Kopi</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" class="form-control" name="alamat">
	</div>
	<div class="form-group">
		<label>Ukuran</label>
		<select name="ukuran" class="form-control">
		    <option value="Small">Small</option>		    
		    <option value="Large">Large</option>
		    <option value="Extra Large">Extra Large</option>
		</select>

	</div>
	<div class="form-group">
		<label>Total Harga</label>
		<input type="number" class="form-control" name="harga">
	</div>
	<div class="form-group">
		<label>Nama Pembeli</label>
		<input type="text" class="form-control" name="namapembeli">
	</div>
	
	
	<div class="form-group">
		<label>Foto Produk</label>
		<input type="file" class="form-control" name="foto">
	</div>
	
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if (isset($_POST['save'])) 
	{
		$nama = $_FILES['foto'] ['name'];
		$lokasi = $_FILES['foto'] ['tmp_name'];
		move_uploaded_file($lokasi, "assets/foto_produk/".$nama);
		$koneksi->query("INSERT INTO delivery
			(nama_kopi,alamat,ukuran,total_harga,nama,foto_produk)
			VALUES('$_POST[nama]','$_POST[alamat]','$_POST[ukuran]','$_POST[harga]',' $_POST[namapembeli]','$nama')");
	echo "<div class='alert alert-info'>Data Tersimpan</div>";

}

?>

