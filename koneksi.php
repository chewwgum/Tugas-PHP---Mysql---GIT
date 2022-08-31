<?php
$koneksi = mysqli_connect("localhost", "root", "", "gedung");

if (mysqli_connect_error()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>