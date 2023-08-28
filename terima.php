<?php
include 'koneksi.php'; 

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $status = 'Diterima';

    $query = "UPDATE form_registrasi SET status='$status' WHERE id='$id' AND status='Belum Di Verifikasi'";
    mysqli_query($db, $query);
}

header("location:hasil.php");
?>