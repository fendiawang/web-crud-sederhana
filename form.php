<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="aksitambah.php" method="post">
    <p>Masukan NIM</p>
    <input type="text" name="nim" placeholder="Masukan Nim">
    <p>Masukan Nama</p>
    <input type="text" name="nama" placeholder="Masukan Nama">
    <p>Masukan Jenis kelamin</p>
    <select name="jenis" id="jenis">
        <option value="Pria">Pria</option>
        <option value="Wanita">Wanita</option>
    </select>
    <p></p>
    <input type="submit" value="simpan">
    </form>

</body>
</html>