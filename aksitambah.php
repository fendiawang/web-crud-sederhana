<?php
require 'koneksi.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];

$query= mysqli_query($kon, "INSERT INTO mhs (nim,nama,jenis) VALUE('$nim','$nama','$jenis') ");
header ('location:index.php');
?>