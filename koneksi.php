<?php
$host = "localhost";
$user = "user20236007";
$pass = "2axfZ0";
$db   = "user20236007"; // nama database kamu

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
