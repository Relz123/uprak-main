<?php
    include("config.php");

    if (isset($_GET['id'])) { 
        $id = $_GET['id'];

    $sql = "DELETE FROM makanan WHERE Id=$id"; 
    $query = mysqli_query($db, $sql);
    
    if ($query) {
        header('Location: list-makanan.php');
    }else{
        die("Gagal menghapus...");
    }
}else{
    die("Akses dilarang...");
}
?>