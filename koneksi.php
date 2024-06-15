<?php
$koneksi = new mysqli('localhost', 'root', '', 'db_asesmenddg&pd');
if ($koneksi) {
    // echo "Koneksi Berhasil";
}else{
    echo $koneksi->error;
}

?>