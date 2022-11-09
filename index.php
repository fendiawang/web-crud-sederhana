<?php
require ('koneksi.php');
$query = mysqli_query($kon,'SELECT * FROM mhs');

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
    <table border="1">
        <tr>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Option</th>
        </tr>
        <?php 
       while ($row =mysqli_fetch_assoc($query)):?>
        <tr>
            <td><?php echo $row['nim'] ?></td>
            <td><?php echo $row['nama'] ?></td>
            <td><?php echo $row['jenis'] ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['nim']?>">Edit</a>
                <a href="delete.php?id=<?php echo $row['nim']?>">delete</a>
                </td>
        </tr>
    <?php endwhile; ?>
    </table>
    <a href="form.php">tambah</a> 
</body>
</html>
