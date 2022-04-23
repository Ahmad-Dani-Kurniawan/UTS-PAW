<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "db_dani";

$koneksi = mysqli_connect($server, $username, $password, $dbname);

if (!$koneksi) {
    echo("Terjadi masalah: " . mysqli_connect_error());
}
?>