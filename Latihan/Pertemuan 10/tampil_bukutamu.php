<?php
include "koneksi.php";

// Tentukan jumlah record per halaman
$batas = 5;

// Tentukan halaman aktif dari parameter URL (jika tidak ada, set ke halaman 1)
$halaman = isset($_GET['halaman']) ? $_GET['halaman'] : 1;
$posisi  = ($halaman - 1) * $batas;

// Query data dengan LIMIT untuk pembatasan per halaman
$hasil = mysql_query("SELECT * FROM tbl_bukutamu LIMIT $posisi, $batas");

// Menghitung total seluruh record untuk menentukan jumlah halaman
$query_total = mysql_query("SELECT * FROM tbl_bukutamu");
$jml_data    = mysql_num_rows($query_total);
$jml_halaman = ceil($jml_data / $batas);
?>

<html>
<head>
    <title>Daftar Buku Tamu</title>
</head>
<body>
    <h2>Daftar Buku Tamu</h2>
    <a href="form_bukutamu.php">&laquo; Isi Buku Tamu</a>
    <br><br>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Pesan</th>
            <th>Tanggal</th>
        </tr>
        <?php
        $no = $posisi + 1;
        // Menggunakan mysql_fetch_array sesuai materi modul[cite: 1]
        while ($data = mysql_fetch_array($hasil)) {
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>" . $data['nama'] . "</td>";
            echo "<td>" . $data['email'] . "</td>";
            echo "<td>" . $data['pesan'] . "</td>";
            echo "<td>" . $data['tanggal'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <br>
    <!-- Navigasi Halaman (Pagination) -->
    <div>
        Halaman : 
        <?php
        for ($i = 1; $i <= $jml_halaman; $i++) {
            if ($i == $halaman) {
                echo "<b>[$i]</b> ";
            } else {
                echo "<a href='tampil_bukutamu.php?halaman=$i'>$i</a> ";
            }
        }
        ?>
    </div>
</body>
</html>