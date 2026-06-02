<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "latihan_backend";

$conn = mysqli_connect ($host, $user, $pass, $db);

if(!$conn) {
    die("koneksi database gagal: " . mysqli_connect_error()) ;
}
?>