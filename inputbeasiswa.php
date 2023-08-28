<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$nomorhp = $_POST['nomorhp'];
$semester = $_POST['semester'];
$ipk = $_POST['ipk'];
$pilihanbeasiswa = $_POST['pilihanbeasiswa'];
$file = $_POST['file'];
$status = "Belum Di Verifikasi";

$query = "INSERT INTO form_registrasi VALUES ('$id','$nama','$email','$nomorhp','$semester','$ipk','$pilihanbeasiswa','$file','$status')";

mysqli_query($db, $query); 

header("location:hasil.php");
?>