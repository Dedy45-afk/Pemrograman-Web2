<?php
$koneksi = mysqli_connect("localhost", "root", "");
mysqli_query($koneksi, "CREATE DATABASE IF NOT EXISTS lat_dbase");
mysqli_select_db($koneksi, "lat_dbase");
mysqli_query($koneksi, "CREATE TABLE IF NOT EXISTS tbl_mhs (nim VARCHAR(20), nama VARCHAR(100))");
mysqli_query($koneksi, "CREATE TABLE IF NOT EXISTS buku_tamu (id INT AUTO_INCREMENT PRIMARY KEY, nama VARCHAR(100), email VARCHAR(100), pesan TEXT)");
echo "Database dan tabel berhasil diinisialisasi beserta data dummy.";
?>