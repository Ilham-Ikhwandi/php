<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APP WEB</title>
</head>
<body>

<!-- Tambakan Data -->
<h3>Tambah Mahasiswa</h3>

<form action="" method="post">
    <table>
        <tr>
            <td widht="130">NIM</td>
            <td><input type="text" name="nim"> </td>
        </tr>
        <tr>
            <td widht="130">Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td widht="130">Prodi</td>
            <td><input type="text" name="prodi"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name="update"></td>
        </tr>
    </table>

</form>

<!-- Hapus Data -->
<h3>Hapus Mahasiswa</h3>

<form action="" method="post">
    <table>
        <tr>
            <td widht="130">Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Hapus" name="delete"></td>
        </tr>
    </table>
</form>

</body>
</html>



 <!-- code PHP -->
<?php
// kita koneksi kan terlebih dahulu ke file yang kita simpan dalam satu folder (koneksi.php)
include "koneksi.php";

if (isset($_POST['update'])){
    mysqli_query($koneksi, "INSERT INTO mahasiswa set
    nim  = '$_POST[nim]',
    nama = '$_POST[nama]',
    prodi= '$_POST[prodi]'");
// Guna echo agar memberi tahu bahwa data baru sudah di tambahkan 
    echo "Mahasiswa  Baru Telah Di Tambahkan ... ";
}

// kita koneksi kan terlebih dahulu ke file yang kita simpan dalam satu folder (koneksi.php)
include "koneksi.php";

if (isset($_POST['delete'])){
    mysqli_query($koneksi, "DELETE FROM mahasiswa where
    nama = '$_POST[nama]'");

// Guna echo agar memberi tahu bahwa data baru sudah di tambahkan 
    echo "Mahasiswa  Telah Di Hapus ... ";
}

?>
