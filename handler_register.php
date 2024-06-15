<?php
include_once 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];

$insert = $koneksi->query("INSERT INTO user 
(nama, email, password) 
values
('$nama', '$email', '$password')
");

if ($insert) {
    echo "Insert Data Berhasil";
}else {
    echo "Gagal Insert Data";
}

header("Location: login.php")
?>