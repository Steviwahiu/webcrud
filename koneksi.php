<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "db_kelompok_wandapesik";

$koneksi = mysqli_connect($server, $username, $password, $database);

if (!$koneksi) {
    die("koneksi gagal : " . mysqli_connect_error());
}

?>