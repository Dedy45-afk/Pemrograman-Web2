<?php
include 'config.php';
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];
$query = "INSERT INTO buku_tamu (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";
mysqli_query($koneksi, $query);
header("Location: tampil.php");
?>