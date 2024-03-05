<?php
include '../konfigurasi/koneksi.php';
if(isset($_GET['username'])){
    $username = $_GET['username'];
    $hapus = mysqli_query($koneksi, "DELETE FROM login where username='$username'");
    header('location: tampillogin.php');
}else{
    echo("Data Tidak Ada");
}
?>