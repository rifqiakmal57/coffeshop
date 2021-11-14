<h2>Detail Kirim</h2>
<?php
	$getNama = $_GET['alamat'];
	$ambil = $koneksi->query("SELECT * FROM delivery where alamat= '$getNama' ");
	$detail = $ambil->fetch_assoc();
?>
<pre><?php print_r($detail); ?></pre>

