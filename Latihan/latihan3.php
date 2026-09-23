<html>
<head><title>Contoh Penggunaan IF</title></head>
<body>
<form method="GET">
  Besar Pembelian : <input type="text" name="total_beli"><br><br>
  <input type="submit" value="Tentukan Diskon">
</form>

<?php  
if (isset($_GET['total_beli']))  { 
    $total_beli = intval($_GET['total_beli']); 
    $diskon = 0;
    
    if ($total_beli >= 200000) {
        $diskon = 0.1;
    } else if ($total_beli >= 100000) {
        $diskon = 0.05;
    } else {
        $diskon = 0.01;
    }
       
    $jumlah_diskon = $diskon * intval($total_beli);
    printf("Diskon = %s <br>\n", $jumlah_diskon); 
    printf("Pembayaran = %s <br>\n", $total_beli - $jumlah_diskon);  
}
?>
</body>
</html>