<?php
$hostname = "localhost";
$database = "belajarapi";
$username = "root";
$password = "";
$connect = mysqli_connect($hostname, $username, $password, $database);

if (!$connect) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}
