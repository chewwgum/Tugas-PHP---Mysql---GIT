<?php
include 'koneksi.php';

$id = mysqli_real_escape_string($koneksi, $_POST['id']);
$nama_gedung = mysqli_real_escape_string($koneksi, $_POST['nama_gedung']);
$alamat_gedung = mysqli_real_escape_string($koneksi, $_POST['alamat_gedung']);
$lantai = mysqli_real_escape_string($koneksi, $_POST['lantai']);
$fasilitas_gedung = mysqli_real_escape_string($koneksi, $_POST['fasilitas_gedung']);
mysqli_query ($koneksi, "UPDATE tb_gedung SET nama_gedung='$nama_gedung', alamat_gedung='$alamat_gedung', lantai='$lantai', fasilitas_gedung='$fasilitas_gedung' WHERE id='$id'");
header("location: index.php");

?>