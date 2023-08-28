<?php
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "db_beasiswa";

$db = mysqli_connect($server, $user, $password, $nama_database);

if(!$db){
    die("Gagal Terhubung dengan database: " . mysqli_connect_error());
}
?>  