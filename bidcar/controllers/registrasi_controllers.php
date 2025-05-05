<?php  
include('../config/koneksi.php');  

if (isset($_POST['submit'])) {  

    
    
    $nama_lengkap = mysqli_real_escape_string($koneksi, $_POST['nama_lengkap']);
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);
    $telp = mysqli_real_escape_string($koneksi, $_POST['telp']);

    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO tb_masyarakat (nama_lengkap, username, password, telp) VALUES ('$nama_lengkap', '$username', '$password_hash', '$telp')";

    $message = '';

    if (mysqli_query($koneksi, $query)) {
        $message = "Registrasi berhasil! Silakan <a href='login.php'>login</a>.";
    } else {
        $message = "Gagal melakukan registrasi: " . mysqli_error($koneksi);
    }

    mysqli_close($koneksi); 
}


?>
