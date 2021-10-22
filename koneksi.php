<?php 
    $ServerName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "portal";

    //Buat Koneksi
    $koneksi = mysqli_connect($ServerName, $userName, $password, $dbName);

    //cek koneksi
    if (!$koneksi) {
        die ("Koneksi Gagal".mysqli_connect_error());
    }
?>