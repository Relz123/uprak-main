<?php
    include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantin ceria SMK Telkom</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
            body {background-color: #f0fdfc;}
    </style>
</head>
<body>
    <header>
        <h3 class="text-center pt-5">Makanan Yang Sudah Terdaftar</h3>
    </header>

    <nav class="text-center">
        <a href="form-daftar.php">Tambah Data </a> | <a href="index.php"> Back</a>
    </nav>
    <br>
    <table class="table text-center">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nama_makanan</th>
      <th scope="col">kode_makanan</th>
      <th scope="col">stok</th>
      <th scope="col">harga</th>
      <th scope="col">kategori</th>
      <th scope="col">deskripsi</th>
      
    </tr>
  </thead>
  <tbody class="table-group-divider">
  <?php
            
                $sql = "SELECT * FROM makanan";
                $query = mysqli_query($db, $sql);

                while ($makanan = mysqli_fetch_array($query)) {
                    echo "<tr>";

                    echo "<td>".$makanan['id']."</td>";
                    echo "<td>".$makanan['nama_makanan']."</td>";
                    echo "<td>".$makanan['kode_makanan']."</td>";
                    echo "<td>".$makanan['stok']."</td>";
                    echo "<td>".$makanan['harga']."</td>";
                    echo "<td>".$makanan['kategori']."</td>";
                    echo "<td>".$makanan['deskripsi']."</td>";
                   
                    echo "<td>";
                    echo "<a href='form-edit.php?id=".$makanan['id']."'>Edit</a> | ";
                    echo "<a href='hapus.php?id=".$makanan['id']."'>Hapus</a>";
                    echo "</td>";

                    echo "</tr>";
                }
            
            ?>
        </tbody>
</table>

    <p class="pl-5 pt-2">Total: <?php echo mysqli_num_rows($query); ?></p>
</body>
</html>