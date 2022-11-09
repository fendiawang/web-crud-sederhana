<?php
require 'koneksi.php';

$nim= $_POST['nim'];
$nama= $_POST['nama'];
$jenis = $_POST['jenis'];
$query= mysqli_query($kon, "UPDATE mhs set nama='$nama', jenis='$jenis' where nim='$nim'");
header ('location:index.php');