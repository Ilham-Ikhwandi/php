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
            <td><input type="submit" value="Simpan" name="proses"></td>
        </tr>
    </table>

</form>
 <!-- code PHP -->
<?php
// kita koneksi kan terlebih dahulu ke file yang kita simpan dalam satu folder (koneksi.php)
include "koneksi.php";

if (isset($_POST['proses'])){
    mysqli_query($koneksi, "INSERT INTO mahasiswa set
    nim  = '$_POST[nim]',
    nama = '$_POST[nama]',
    prodi= '$_POST[prodi]'");
// Guna echo agar memberi tahu bahwa data baru sudah di tambahkan 
    echo "Mahasiswa  Baru Telah Di Tambahkan ... ";
}
?>

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

if (isset($_POST['proses2'])){
    mysqli_query($koneksi, "DELETE FROM mahasiswa where
    nama = '$_POST[nama]'");

// Guna echo agar memberi tahu bahwa data baru sudah di tambahkan 
    echo "Mahasiswa  Telah Di Hapus ... ";
}

?>