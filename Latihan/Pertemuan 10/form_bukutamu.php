<html>
<head>
    <title>Form Buku Tamu</title>
</head>
<body>
    <h2>Buku Tamu</h2>
    <!-- Mengarah ke file proses simpan -->
    <form action="insert_bukutamu.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>: <input type="text" name="nama" required /></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>: <input type="text" name="email" required /></td>
            </tr>
            <tr>
                <td>Pesan</td>
                <td>: <textarea name="pesan" rows="4" cols="30" required></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Kirim Pesan" /></td>
            </tr>
        </table>
    </form>
    <br>
    <a href="tampil_bukutamu.php">Lihat Daftar Buku Tamu</a>
</body>
</html>