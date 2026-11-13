<!DOCTYPE html>
<html>
<head>
    <title>Buku Tamu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Isi Buku Tamu</h2>
        <form action="simpan.php" method="POST">
            Nama: <input type="text" name="nama" required><br>
            Email: <input type="email" name="email" required><br>
            Pesan: <textarea name="pesan" required></textarea><br>
            <button type="submit">Kirim Pesan</button>
        </form>
        <br><a href="tampil.php">Lihat Daftar Tamu</a>
    </div>
</body>
</html>