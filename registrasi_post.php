<?php 

// mengaktifkan session php
session_start();
include "koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = md5($_POST['password']);



$sql = "INSERT INTO `user` (nama, email, password) VALUES ('$nama', '$email', '$password')";
// ('$nama_barang','$merk','$unit','$jumlah')";

$dataEmail = mysqli_query($conn,"select email from user where email='$email'");
$cekDataEmail = mysqli_num_rows($dataEmail);
// echo $cekDataEmail;
if($cekDataEmail > 0) {
	echo "<script>alert('data email sudah ada!');
	document.location.href='registrasi.php'</script>\n";
} else {
	if ($conn->query($sql) === TRUE) {
		$_SESSION['email'] = $email;
		echo "<script>alert('data berhasil dikirim'); 
		document.location.href='order.php'</script>\n";
	} else {
		echo "<script>alert('data gagal dikirim'); 
			document.location.href='registrasi.php'</script>\n";
	}		
}	
?>