<?php
include("config.php");
if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama_makanan = $_POST['nama_makanan'];
    $kode_makanan = $_POST['kode_makanan'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $kategori = $_POST['kategori'];
    $deskripsi = $_POST['deskripsi'];

    $sql = "UPDATE makanan SET nama_makanan='$nama_makanan',kode_makanan='$kode_makanan', stok='$stok', harga='$harga',kategori='$kategori',deskripsi='$kategori'  WHERE id=$id";
    $query = mysqli_query($db, $sql);
    var_dump($query);

    if ($query) {
        header('Location: list-makanan.php');
    } else {
        die("Gagal memperbarui data...");
    }
}else{
    die("Gagal terhubung dengan situs...");
}
?>