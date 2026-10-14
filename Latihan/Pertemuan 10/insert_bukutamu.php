<?php
$con = mysql_connect("localhost", "root", "");
if (!$con) {
    die('Could not connect: ' . mysql_error());
}

mysql_select_db("lat_dbase", $con);

// Mengambil data dari POST form
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

$sql = "INSERT INTO tbl_bukutamu (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";

if (!mysql_query($sql, $con)) {
    die('Error: ' . mysql_error());
}

echo "1 record added (Buku tamu berhasil disimpan)";
echo "<br><br><a href='form_bukutamu.php'>Kembali ke Form</a> | <a href='tampil_bukutamu.php'>Lihat Buku Tamu</a>";

mysql_close($con);
?>