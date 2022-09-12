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
<h3>Data Mahasiswa</h3>
    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
        </tr>
   

<?php 
include "koneksi.php";
$ambildata=mysqli_query($koneksi,"SELECT * FROM mahasiswa");
while ($tampil=mysqli_fetch_array($ambildata)){
    echo "
    <tr>
        <td>$tampil[nim]</td>
        <td>$tampil[nama]</td>
        <td>$tampil[prodi]</td>
    </tr>";
}
?>

</table>

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
            <td><input type="submit" value="Simpan" name="insert`"></td>
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


<!-- Update Data -->
<h3>Update Mahasiswa</h3>



<form action="" method="post">
    <table>
        <!-- Mengupdate Nama  -->
        <tr>
            <td widht="130">Update Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <!-- Kita gunakan NIM sebagai Identitas Nama yang akan di update di database -->
        <tr>
            <td widht="130">NIM</td>
            <td><input type="text" name="nim"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Update" name="updateNama"></td>
        </tr>  
    </table>

</form>

<br>

<form action="" method="post">
    <table>
        <!-- Mengupdate Prodi  -->
        <tr>
            <td widht="130">Update prodi</td>
            <td><input type="text" name="prodi"></td>
        </tr>
        <!-- Kita gunakan NIM sebagai Identitas Prodi yang akan di update di database -->
        <tr>
            <td widht="130">NIM</td>
            <td><input type="text" name="nim"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Update" name="updateProdi"></td>
        </tr>  
    </table>

</form>

</body>
</html>




 <!-- code PHP -->
<?php
// kita koneksi kan terlebih dahulu ke file yang kita simpan dalam satu folder (koneksi.php)
include "koneksi.php";



// Insert Data

if (isset($_POST['insert`'])){
    mysqli_query($koneksi, "INSERT INTO mahasiswa set
    nim  = '$_POST[nim]',
    nama = '$_POST[nama]',
    prodi= '$_POST[prodi]'");
// Guna echo agar memberi tahu bahwa data baru sudah di tambahkan 
    echo "Data Baru Telah Di Tambahkan ... ";
}

// Delete Data

if (isset($_POST['delete'])){
    mysqli_query($koneksi, "DELETE FROM mahasiswa where
    nama = '$_POST[nama]'");

// Guna echo agar memberi tahu bahwa data baru sudah di tambahkan 
    echo "Data  Telah Di Hapus ... ";
}

// Update Data NIM

if (isset($_POST['updateNama'])){
    mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$_POST[nama]' WHERE nim='$_POST[nim]'");
    

// Guna echo agar memberi tahu bahwa data baru sudah di tambahkan 
    echo "Data Telah Di Update ... ";
}


if (isset($_POST['updateProdi'])){
    mysqli_query($koneksi, "UPDATE mahasiswa SET prodi='$_POST[prodi]' WHERE nim='$_POST[nim]'");
    

// Guna echo agar memberi tahu bahwa data baru sudah di tambahkan 
    echo "Data Telah Di Update ... ";
}

?>
