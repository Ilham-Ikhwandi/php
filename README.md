ILHAM



Koneksi dari MYSQL ke web kita

localhost = web lokal kita
user = root
password = 
folder di MYSQL = kampus

<?php
$koneksi = mysqli_connect("localhost","root","","kampus",)
?>

Ini adalah text HTML untuk membuat tabel

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
            <td><input type="submit" value="Simpan" name="proses"></td>
        </tr>
    </table>

</form>


 <!-- code PHP -->
<?php
// kita koneksi kan terlebih dahulu ke file yang kita simpan dalam satu folder (koneksi.php)
include "koneksi.php";

kita gunakan perintah dari Mysql untuk menambahkan data. ("INSERT INTO *nama table* VALUES('nim','nama','prodi')") namun saya sederhanakan seperti code di bawah.

if (isset($_POST['proses'])){
    mysqli_query($koneksi, "INSERT INTO mahasiswa set
    nim  = '$_POST[nim]',
    nama = '$_POST[nama]',
    prodi= '$_POST[prodi]'");
// Guna echo agar memberi tahu bahwa data baru sudah di tambahkan 
    echo "Mahasiswa  Baru Telah Di Tambahkan ... ";
}
?>

text HTML untuk membuat tabel

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
            <td><input type="submit" value="Hapus" name="proses2"></td>
        </tr>
    </table>
</form>



<!-- Code PHP -->
<?php
// kita koneksi kan terlebih dahulu ke file yang kita simpan dalam satu folder (koneksi.php)
include "koneksi.php";

// kita gunakan perintah dari Mysql untuk menambahkan data. ("DELETE FROM *nama table* WHERE nama=*nama yang ada di data*") namun saya sederhanakan seperti code di bawah.

if (isset($_POST['proses2'])){
    mysqli_query($koneksi, "DELETE FROM mahasiswa where
    nama = '$_POST[nama]'");

// Guna echo agar memberi tahu bahwa data baru sudah di tambahkan 
    echo "Mahasiswa  Telah Di Hapus ... ";
}

?>



SEKIAN TERIMAKASIH . 
