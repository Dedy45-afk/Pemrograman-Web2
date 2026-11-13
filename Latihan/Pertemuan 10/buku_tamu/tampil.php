<?php
include 'config.php';
$limit = 5;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;
$result = mysqli_query($koneksi, "SELECT * FROM buku_tamu LIMIT $start, $limit");
$count_result = mysqli_query($koneksi, "SELECT COUNT(id) AS total FROM buku_tamu");
$row = mysqli_fetch_assoc($count_result);
$total_pages = ceil($row['total'] / $limit);
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css"></head>
<body>
<div class="container">
    <h2>Daftar Buku Tamu</h2>
    <table border="1">
        <tr><th>Nama</th><th>Email</th><th>Pesan</th><th>Aksi</th></tr>
        <?php while($d = mysqli_fetch_assoc($result)){ ?>
        <tr>
            <td><?= $d['nama'] ?></td><td><?= $d['email'] ?></td><td><?= $d['pesan'] ?></td>
            <td><a href="hapus.php?id=<?= $d['id'] ?>">Hapus</a></td>
        </tr>
        <?php } ?>
    </table>
    <br>
    <?php for($i=1; $i<=$total_pages; $i++){ echo "<a href='?page=$i'>$i</a> "; } ?>
    <br><br><a href="index.php">Tambah Tamu</a>
</div>
</body>
</html>