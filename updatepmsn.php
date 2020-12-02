<?php

include 'config.php';
    $id_mobil = $_POST['id_mobil'];
    $id_pesanan=$_POST['id_pesanan'];
    $id_klien=$_POST['id_klien'];
    $tanggal=$_POST['tanggal'];


mysqli_query($mysqli,  "UPDATE pemesanan SET id_mobil= '$id_mobil',id_pesanan='$id_pesanan',id_klien='$id_klien' WHERE id_mobil='$id_mobil'");

header("location:pemesanan.php");
?>
