<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "wisata_religi";

$koneksi = mysqli_connect($host, $user, $pass, $name);
if (mysqli_connect_errno()) {
    echo "Connection error : " . mysqli_connect_error();
}
