<?php
include 'config.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM buku_tamu WHERE id='$id'");
header("Location: tampil.php");
?>