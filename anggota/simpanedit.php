<?php
include '../konfigurasi/koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];

$edit = mysqli_query($koneksi,"UPDATE anggota set nama='$nama' where id='$id'");

if($edit){
    echo('Data tersimpan');
    header('location: tampilanggota.php');
}else{
    echo('Data Gagal Tersimpan');
}

?>