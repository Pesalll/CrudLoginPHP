<?php
include '../konfigurasi/koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

$edit = mysqli_query($koneksi,"UPDATE login set password='$password' where username='$username'");

if($edit){
    echo('Data tersimpan');
    header('location: tampillogin.php');
}else{
    echo('Data Gagal Tersimpan');
}

?>