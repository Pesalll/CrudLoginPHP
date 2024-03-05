<?php
include '../konfigurasi/koneksi.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $hapus = mysqli_query($koneksi, "DELETE FROM anggota where id='$id'");
    header('location: tampilanggota.php');
}else{
    echo("Data Tidak Ada");
}
?>