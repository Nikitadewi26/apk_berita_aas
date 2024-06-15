<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit Berita</title>
</head>
<body>
    <?php
    include_once 'menu.php';
    include_once "check_login.php";

    include_once 'koneksi.php';
    $id = $_GET['id'];
    $card = $koneksi->query("SELECT * FROM berita WHERE id = $id ")->fetch_assoc();
    ?>

    <form action="handler_edit.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="update" value="1">
        <input type="hidden" name="gambarLama" value="<?= $card['gambar']; ?>">
        <input type="hiden" name="id" value="<?php echo $_GET['id']; ?>" style="display: none;">
        <div>
            <label for="">Judul</label>
            <input type="text" name="judul" value="<?php echo $card['judul'] ?>">
        </div>
        <div>
            <label for="">Gambar</label>
            <input type="file" name="gambar" value="<?php echo $card['gambar'] ?>">
        </div>
        <div>
            <label for="">Isi</label>
            <textarea name="isi" value="">
            <?php echo $card['isi'] ?>
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