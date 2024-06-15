<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./style.css">

</head>
<body>

<form action="handler_register.php" method="post">

    <div class="form">

    <h2> <b><u>Form Pendaftaran</u></b> </h2>

        <label for="">Nama</label>
        <input type="text" name="nama">
    <br>
        <label for="">Email</label>
        <input type="email" name="email">
    <br>
        <label for="">Password</label>
        <input type="password" name="password">
    <br>
    <button type="submit">Register</button>

    <a href="login.php">Belum Mempunyai Akun?</a>
    </div>

</form>


</body>
</html>