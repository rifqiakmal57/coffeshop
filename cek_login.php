<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan database mysql
include 'koneksi.php';

// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = $_POST['password'];

// menyeleksi data user dengan nama dan password yang sesuai
// $data = mysqli_query($conn,"select * from user where email='$email' and password='$password'");

// dd($data);

$data = mysqli_query($conn, "select * FROM user where email = '$email' and password = '".md5($password)."'");


// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

// echo $cek;

if($cek > 0) {
	//echo "berhasil login";
	$_SESSION['email'] = $email;
	header("location:order.php");	
} else {
	echo "<script>alert('silahkan daftar terlebih dahulu'); 
			document.location.href='registrasi.php'</script>\n";

}



?>