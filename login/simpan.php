<?php
include '../konfigurasi/koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

$simpan = mysqli_query($koneksi, "INSERT INTO login VALUES('$username','$password')");
if($simpan){
    echo('Data tersimpan');
    header('location: tampillogin.php');
}else{
    echo('Data Gagal Tersimpan');
}
?>