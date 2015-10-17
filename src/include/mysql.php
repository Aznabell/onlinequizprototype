<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "awesome_db";

$conn = mysql_connect($server, $user, $pass)or die("koneksi mysql gagal");

mysql_select_db($database, $conn)or die("gagal memilih database");
?>