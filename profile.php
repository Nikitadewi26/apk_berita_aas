<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <?php
    include_once "menu.php"; 
    include_once "check_login.php";

    $user = $_SESSION['user_login'];
    ?>

        <h1 class="text-2xl font-bold mb-4">Hello, <?php echo $user['nama']; ?></h1>
        <h1 class="text-lg mb-4">Email: <?php echo $user['email']; ?></h1>
        <a href="logout.php" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Logout</a>
</body>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <?php
    include_once "check_login.php";
    include_once "koneksi.php";
    include_once "menu.php";
    ?>
    <div class="container mx-auto px-4 py-6">
        <div class="flex justify-end mb-4">
            <a href="tambah_berita.php" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Tambah Berita</a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-6 py-2 border">ID</th>
                        <th class="px-6 py-2 border">Judul</th>
                        <th class="px-6 py-2 border">Gambar</th>
                        <th class="px-6 py-2 border">Isi</th>
                        <th class="px-6 py-2 border">Tanggal Pembuatan</th>
                        <th class="px-6 py-2 border">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $user = $_SESSION['user_login'];
                    $id_user = $user['id'];
                    $berita = $koneksi->query("SELECT * FROM berita WHERE id_user = $id_user");
                    $data = $berita->fetch_all();
                    foreach ($data as $v) {
                    ?>
                    <tr>
                        <td class="px-6 py-2 border"><?= $v[0] ?></td>
                        <td class="px-6 py-2 border"><?= $v[1] ?></td>
                        <td class="px-6 py-2 border">
                            <img src="./img/<?php echo $v[2] ?>" width="200" height="200" alt="" class="rounded">
                        </td>
                        <td class="px-6 py-2 border"><?= $v[3] ?></td>
                        <td class="px-6 py-2 border"><?= $v[4] ?></td>
                        <td class="px-6 py-2 border">
                            <a href="edit.php?id=<?= $v[0] ?>" class="text-blue-500 hover:underline mr-2">Edit</a>
                            <a href="delete.php?id=<?= $v[0] ?>" class="text-red-500 hover:underline">Delete</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>