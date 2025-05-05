<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi-BidCar</title>
</head>
<body>
    
    <div class="form-container">
        <div class="logo"><img src="bidcar.png"></div>  
        <div class="image"><img src="Maskgroup.png"> </div>
        <h2>Selamat datang di<span style="color: cadetblue;">BidCar.</span></h2>
        <p>Siapkan akun Anda dan Mulailah membuat tawaran pertama Anda!</p>
        
        <form method="post">
            <label for="nama">Nama Lengkap</label>
            <input type="text" id="nama" name="nama_lengkap" required>
 
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <label for="telp">No Telepon</label><br>
            <input type="text" id="telp" name="telp" required><br><br>

            <button type="submit" name = "submit" class="btn-submit">Daftar</button>
        </form>
        <p>Sudah Punya Akun? <a href="login.php">login</a></p>
    </div>    
</body>
</html>