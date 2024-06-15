<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>

    <form action="handler_login.php" method="post">
    <div class="form">
        <div>
            <label for="">Email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" name="password">
        </div>
        <button type="submit">Login</button>
        <a href="register.php">Register</a>
    </div>
    </form>
    </body>
    </html>