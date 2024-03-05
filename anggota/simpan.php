<?php
include '../konfigurasi/koneksi.php';
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$notelp = $_POST['notelp'];

$simpan = mysqli_query($koneksi, "INSERT INTO anggota VALUES(null,'$nama','$kelas','$notelp')");
if($simpan){
    echo('Data tersimpan');
    header('location: tampilanggota.php');
}else{
    echo('Data Gagal Tersimpan');
}
?>