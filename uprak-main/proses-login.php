<?php

include("config.php");

if (isset($_POST['login'])) {
    session_start();

    $username = $_POST['iUsername'];
    $password = $_POST['iPassword'];

    $sql = "SELECT * FROM user WHERE username='$username'";
    $query = mysqli_query($db,$sql);
    //var_dump($query);

    if (mysqli_num_rows($query) >0 ) {
        $user = mysqli_fetch_assoc($query);
        if (password_verify($password, $user["password"])) {
            $_SESSION['status'] = "login";
            header('Location: index.php');
        } else {
            echo "password salah";
        }
    } else {
        echo "tidak berhasil menemukan akun...";
    }
} else {
    die("Gagal terhubung dengan sistem");
}
?>