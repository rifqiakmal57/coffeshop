<h2>Detail Pembelian</h2>
<?php
	$getNama = $_GET['nama'];
	$ambil = $koneksi->query("SELECT * FROM pembayaran where nama = '$getNama' ");
	$detail = $ambil->fetch_assoc();
?>
<pre><?php print_r($detail); ?></pre>

<strong>ID KOPI :<?php echo $detail['id_pembayaran']; ?></strong> <br>
<strong>Kopi:<?php echo $detail['nama_kopi']; ?></strong> <br>
<strong>Harga:<?php echo $detail['harga']; ?></strong> <br>
<strong>Ukuran:<?php echo $detail['ukuran']; ?></strong> <br>
<strong>Nama:<?php echo $detail['nama']; ?></strong> <br>
<strong>Id Pembayaran:<?php echo $detail['id_pembayaran']; ?></strong> <br>
