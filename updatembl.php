<?php

include 'config.php';
    $nama_mobil = $_POST['nama_mobil'];
    $id_mobil=$_POST['id_mobil'];
    $merk_mobil=$_POST['merk_mobil'];
    $harga_mobil=$_POST['harga_mobil'];

mysqli_query($mysqli,  "UPDATE mobil SET nama_mobil= '$nama_mobil',id_mobil='$id_mobil',merk_mobil='$merk_mobil',harga_mobil='$harga_mobil' WHERE nama_mobil='$nama_mobil'");

header("location:mobil.php");
?>
