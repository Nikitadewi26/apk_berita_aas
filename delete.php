<?php
include_once "koneksi.php";

if(isset($_GET['delete_id'])){
    $id = $_GET['delete_id'];
    $delete = $koneksi->query("DELETE FROM berita WHERE id = $id");
    
    if($delete){
        header('Location: profile.php');
    }else {
        echo "data gagal di hapus";
    }
}