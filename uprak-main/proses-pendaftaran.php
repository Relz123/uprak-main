<?php
include("config.php");

if (isset($_POST['daftar'])) {
    $nama_makanan = $_POST['nama_makanan'];
    $kode_makanan = $_POST['kode_makanan']; 
    $stok = $_POST['stok']; 
    $harga = $_POST['harga'];
    $kategori = $_POST['kategori'];
    $deskripsi = $_POST['deskripsi'];

    $sql = "INSERT INTO makanan (nama_makanan, kode_makanan, stok, harga,kategori,deskripsi) VALUE ('$nama_makanan','$kode_makanan', '$stok', '$harga',' $kategori',' $deskripsi')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: index.php?status=sukses');
    }else {
        header('Location: index.php?status=gagal');
    }
 }else {
    die("Akses dilarang...");
 }
?>