<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php
    include_once "menu.php";
    include_once "check_login.php";
    
 //   if (!isset($_SESSION['users'])) {
 
 //     exit;
 //   }
 
   include_once "koneksi.php";
   
 
   $userid = $_SESSION['user_login']['id'];
   $data_berita = $koneksi->query("SELECT berita.*, user.nama FROM berita JOIN user ON user.id = berita.id_user WHERE berita.id_user = $userid");
   if (!$data_berita) {
     echo "Error: " . $koneksi->error; // Debugging query error
   }
   ?>
    <div class="my-berita d-flex justify-content-center">
    <div class="d-flex flex-wrap justify-content-center gap-3" style="margin-top:9vh;">
      <?php foreach ($data_berita as $item): ?>
      <div class="card shadow" style="width: 25rem;">
        <img src="./img/<?= $item['gambar'] ?>" class="card-img-top" style="height:220px;" alt="">
        <div class="card-body">
         <a href="view.php"><h5 class="card-title"><?= $item['judul'] ?></h5></a> 
          <p class="card-text"><?= $item['isi'] ?></p>
          <p class="card-text"><small class="text-body-secondary"><?= $item['tgl_pembuatan'] ?></small></p>
          <div class="d-flex gap-1">
            <i class='bx bxs-user-circle bx-sm'></i>
            <p class="card-text"><small class="text-body-secondary"><?= $_SESSION['user_login']['nama'] ?></small></p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</body>
</html>