<?php
//1. membuat koneksi
include('koneksi.php');
//2. membuat parsing data dari metode post
$nomor = $_POST['nomor'];
$nama = $_POST['nama'];
$warna = $_POST['warna'];
$jumlah = $_POST['jumlah'];
//3. query sql untuk menginput data ke basisdata
$qry = mysqli_query($db, "INSERT INTO tbproduk(no, nama_merek, warna, jumlah) 
VALUES('$nomor','$nama','$warna','$jumlah')");
//4. cek proses berhasil
if ($qry) {
    // echo "Berhasil input";
    header("location: ../tampil.php");
    // echo "<br><a href='tampil.php'><input type='button' value='tampil data'> </a>";
} else {
    echo "gagal input";
}
?>