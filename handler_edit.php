<?php
include_once "koneksi.php";
include_once "handler_berita.php";

if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $gambarLama = $_POST['gambarLama'];
    $judul = $_POST['judul'];
    $desk = $_POST['isi'];

    // cek user ubah gambar atau tidak
    if($_FILES['gambar']['error']===4){
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $insert = $koneksi->query(
        "UPDATE berita set `gambar` = '$gambar',judul = '$judul', isi = '$desk' WHERE id = $id"
    );

    if($insert) {
        header('Location:berita1.php');
    }else {
        echo "data gagal dimasukan";
    }
}