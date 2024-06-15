<?php
if (isset($_POST["upload"])) {
    # code...

include_once 'koneksi.php';
include_once "check_login.php";
$user = $_SESSION['user_login'];

$judul = $_POST['judul'];

$gambar = upload();
$rename = md5(date("Y-m-d H:i:s"));

$isi = $_POST['isi'];
$tgl_pembuatan = $_POST['tgl_pembuatan'];
$id_user = $user['id'];


$sql = "INSERT INTO berita (judul, gambar, isi, tgl_pembuatan, id_user) 
values ('$judul', '$gambar','$isi','$tgl_pembuatan',$id_user)";

$insert  = $koneksi->query($sql);

if ($insert) {
    echo "Input berita berhasil";
}else {
    echo "Input berita Gagal";
}

header("Location: berita1.php");
}

function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if ($error === 4) {
        echo "<script>alert('Isi foto terlebih dahulu');</script>";
        return false;
    }

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>alert('Yang Anda upload bukan gambar');</script>";
        return false;
    }

    if ($ukuranFile > 1000000) {
        echo "<script>alert('Ukuran gambar terlalu besar');</script>";
        return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.' . $ekstensiGambar;
    move_uploaded_file($tmpName, './img/' . $namaFileBaru);
    return $namaFileBaru;
}
?>