<?php
require 'koneksi.php';

$nim= $_GET['id'];
$query= mysqli_query($kon,"DELETE from mhs WHERE nim='$nim'");
header('location:index.php');
?>


