<?php
// Koneksi ke server MySQL
mysql_connect("localhost", "root", "");
mysql_select_db("lat_dbase"); // Mengaktifkan database

// Membuat tabel buku tamu
$sql = "CREATE TABLE tbl_bukutamu (
    id int NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(id),
    nama varchar(50),
    email varchar(50),
    pesan text,
    tanggal timestamp DEFAULT CURRENT_TIMESTAMP
)";

$cek = mysql_query($sql);
if ($cek) {
    echo "Tabel tbl_bukutamu berhasil dibuat.";
} else {
    echo "Gagal membuat tabel: " . mysql_error();
}
?>