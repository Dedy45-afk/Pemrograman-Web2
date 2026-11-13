<?php
include 'latihan_slide/mysql_shim.php'; // Using shim or direct mysqli
$koneksi = mysqli_connect("localhost", "root", "", "lat_dbase");
if(isset($_POST['nim'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    mysqli_query($koneksi, "INSERT INTO tbl_mhs (nim, nama) VALUES ('$nim', '$nama')");
    echo "Data berhasil disimpan! <a href='form.php'>Kembali</a>";
}
?>