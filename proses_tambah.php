<?php
include 'koneksi.php';

$nama_gedung = $_POST ['nama_gedung'];
$alamat_gedung = $_POST ['alamat_gedung'];
$lantai = $_POST ['lantai'];
$fasilitas_gedung = $_POST ['fasilitas_gedung'];

mysqli_query($koneksi, "INSERT INTO tb_gedung values('', '$nama_gedung', '$alamat_gedung', '$lantai', '$fasilitas_gedung')");
header("location: index.php");
?>