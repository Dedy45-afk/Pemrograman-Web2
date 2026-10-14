<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Penggunaan UDF</title>
</head>
<body>
    <form method="GET">
        Masukan bilangan pertama : <input type="text" name="A" size="10"><br>
        Masukan bilangan kedua : <input type="text" name="B" size="10"><br>
        <input type="submit" value="Hitung">    
    </form>
    
    <!-- membandingkan 2 buah bilangan yang diinput -->
    <?php
    // Check if the form has been submitted to prevent undefined array key errors
    if (isset($_GET["A"]) && isset($_GET["B"])) {
        $A = $_GET["A"];
        $B = $_GET["B"];

        function jumlah($A, $B) {
            $hasil = $A + $B;
            return $hasil;
        }

        function kurang($A, $B) {
            $hasil = $A - $B;
            return $hasil;
        }

        function kali($A, $B) {
            $hasil = $A * $B;
            return $hasil;
        }

        function bagi($A, $B) {
            $hasil = $A / $B;
            return $hasil;
        }

        echo "<br>";
        echo ("Bilangan Pertama : " . $A);
        echo "<br>";
        echo ("Bilangan Kedua : " . $B); 
        echo "<br><br>";

        echo ("Hasil Penjumlahan 2 buah bilangan : <br>");
        $jumlahbil = jumlah($A, $B);
        printf("Penjumlahan antara : %d + %d = %d", $A, $B, $jumlahbil);
        
        echo "<br><br>";
        
        echo ("Hasil Pengurangan 2 buah bilangan : <br>");
        $kurangbil = kurang($A, $B);
        printf("Pengurangan antara : %d - %d = %d", $A, $B, $kurangbil);
        
        echo "<br><br>";
        
        echo ("Hasil Perkalian 2 buah bilangan : <br>");
        $kalibil = kali($A, $B);
        printf("Perkalian antara : %d * %d = %d", $A, $B, $kalibil);
        
        echo "<br><br>";
        
        echo ("Hasil Pembagian 2 buah bilangan : <br>");
        $bagibil = bagi($A, $B);
        printf("Pembagian antara : %d / %d = %d", $A, $B, $bagibil);
        
        echo "<br><br>";
    }
    ?>
</body>
</html>