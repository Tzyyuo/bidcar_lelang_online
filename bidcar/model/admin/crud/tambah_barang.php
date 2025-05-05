<?php 
include '../../../config/koneksi.php';

if(isset($_POST['submit'])){
    $nama_barang = $_POST['nama_barang'];
    $tgl = $_POST['tgl'];
    $harga_awal = $_POST['harga_awal'];
    $deskripsi_barang = $_POST['deskripsi_barang'];
    $gambar = $_FILES['gambar']['name'];

    $tmp_file = $_FILES['gambar']['tmp_name'];
    $folder = '../../img/';

    move_uploaded_file($tmp_file, $folder . $gambar);

    $query = "INSERT INTO tb_barang (nama_barang, tgl, harga_awal, deskripsi_barang, gambar) VALUES ($nama_barang, $tgl, $harga_awal, $deskripsi_barang, $gambar)";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param("sdiss", $nama_barang, $tgl, $harga_awal, $deskripsi_barang, $gambar);
    $stmt->execute();
}
?>