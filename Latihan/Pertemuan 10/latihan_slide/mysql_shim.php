<?php
// Compatibility wrapper if older modules used mysql_*
// In this repo we simulate it or just use mysqli standard connection wrapper
$host="localhost"; $user="root"; $pass=""; $db="lat_dbase";
$koneksi = mysqli_connect($host, $user, $pass, $db);
?>