<?php
require 'koneksi.php';
$nim= $_GET['id'];
$query = mysqli_query($kon,"SELECT * FROM mhs where nim='$nim'");
$row= mysqli_fetch_row($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="aksiedit.php" method="post">
    <p></p>
    <input type="hidden" name="nim" placeholder="Masukan Nim" value="<?php echo $row[0];?>">
    <p>Edit nama</p>
    <input type="text" name="nama" placeholder="Masukan Nama" value="<?php echo $row[1];?>">
    <p>Edit jenis kelamin</p>
    <select name="jenis" id="jenis">
        <option value="<?= $row[2] ?>" selected<?= $row[2] ?>>Pilih</option>
        <option value="Pria">Pria</option>
        <option value="Wanita">Wanita</option>    
    </select>
    <p></p>
    <button type="submit">Simpan</button>
</form>    
</body>
</html>
