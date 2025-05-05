<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - BidCar</title>
</head>
<body>
    <div class="container">
        <div class="login">
            <img class="logo" alt="bidcar" src="../img/bidcar.png">
            <h2>Masuk ke <span style="color: yellow;">BidCar.</span></h2>
            <p>Masukkan akun Anda dan Mulailah membuat tawaran Anda!</p>

            <form action="../controllers/login_controllers.php" method="POST">


                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <button type="submit" name="submit">Masuk</button>
            </form>
            <p>Belum Punya Akun? <a href="registrasi.php">Sign Up</a></p>
            <p>Lupa <a href="lupa_password.php">Password?</p>
        </div>
        <div class="right-side">
            <img src="../img/Maskgroup.png">
        </div>
    </div>
</body>
</html>