<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginlogout";
$getId = $_GET['id'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM pembayaran WHERE id_kopi = '$getId'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

// $deleteData = $koneksi->query("DELETE FROM pembayaran WHERE id_pembayaran = '$getId'");
// $hasilQuery = $koneksi->query($deleteData);
// if ($hasilQuery) {
//     echo "<script>alert('produk terhapus');</script>";
//     echo "<script>location='index.php?halaman=pemesanan';</script>"; 
// } else {
//     echo "<script>alert('Data transaksi gagal dihapus')"; 
// }

?>