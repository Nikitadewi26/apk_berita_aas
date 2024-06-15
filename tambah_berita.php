<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Berita</title>
</head>
<body>
    <?php
    include_once 'menu.php';
    include_once "check_login.php";

    ?>

    <form action="handler_berita.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="upload" value="1">
        <div>
            <label for="">Judul</label>
            <input type="text" name="judul">
        </div>
        <div>
            <label for="">Gambar</label>
            <input type="file" name="gambar">
        </div>
        <div>
            <label for="">Isi</label>
            <textarea name="isi">

            </textarea>
        </div>
        <div>
            <label for="">Tanggal Pembuatan</label>
            <input type="date" name="tgl_pembuatan">
        </div>
        <div>
            <button type="submit" >Tambah Data</button>
        </div>
    </form>
</body>
</html>