<?php
include("config.php");

if (!isset($_GET['id'])) { 
    header('Location: list-makanan.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM makanan WHERE id=$id"; 
$query = mysqli_query($db, $sql); 
$makanan = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) { 
    die("Data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>makanan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
            body {background-color: #ACCECE;}
    </style>
</head>
<body>
<div class="d-flex justify-content-center">
    <div class="container p-5 m-5">
    <div class="p-5 mb-5 bg-light text-dark w-50 p-3">
    <header>
        <h5 class="text-center pb-3">Formulir Pengeditan Makanan</h5> 
    </header>
    <form action="proses-edit.php" method="post">  
            <input type="hidden" name="id" value=" <?php echo $makanan['id']; ?> " >
            <p>
            <div class="input-group flex-nowrap px-5">
                <label for="nama_makanan"></label>
                <input type="text" class="form-control" name="nama_makanan" placeholder="nama_makanan" aria-label="nama_makanan" aria-describedby="addon-wrapping" value="<?php echo $makanan['nama_makanan'] ?>">
                </div> 

            <div class="input-group flex-nowrap px-5 pt-3">
                <label for="kode_makanan"></label>
                <input type="text" class="form-control" name="kode_makanan" placeholder="kode_makanan" aria-label="kode_makanan" aria-describedby="addon-wrapping" value="<?php echo $makanan['kode_makanan'] ?>">
                </div> 
        
            <div class="input-group flex-nowrap px-5 pt-3">
                <label for="stok"></label>
                <input type="text" class="form-control" name="stok" placeholder="stok" aria-label="stok" aria-describedby="addon-wrapping" value="<?php echo $makanan ['stok']?>">
                </div>    

            <div class="input-group flex-nowrap px-5 pt-3">
                <label for="harga"></label>
                <input type="text" class="form-control" name="harga" placeholder="harga" aria-label="harga" aria-describedby="addon-wrapping" value="<?php echo $makanan ['harga']?>">
                </div>

            <div class="input-group flex-nowrap px-5 pt-3">
                <label for="kategori"></label>
                <input type="text" class="form-control" name="kategori" placeholder="kategori" aria-label="kategori" aria-describedby="addon-wrapping" value="<?php echo $makanan['kategori'] ?>">
                </div> 

            <div class="input-group flex-nowrap px-5 pt-3">
                <label for="deskripsi"></label>
                <input type="text" class="form-control" name="deskripsi" placeholder="deskripsi" aria-label="deskripsi" aria-describedby="addon-wrapping" value="<?php echo $makanan['deskripsi'] ?>">
                </div> 
            </p>

            <p>
            <div class="pl-5 pt-3">
                <button type="submit" class="btn btn-info btn-sm" value="simpan" name="simpan">Simpan</button>
                </div>
            </p>
        </form>
        </div>
    </div>
    </div>
    </div>
    </div>
</body>
</html>