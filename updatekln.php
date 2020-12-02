<?php

include 'config.php';
    $nama_klien = $_POST['nama_klien'];
    $id_klien=$_POST['id_klien'];
    $nomer_telepon=$_POST['nomer_telepon'];

mysqli_query($mysqli,  "UPDATE klien SET nama_klien= '$nama_klien',id_klien='$id_klien',nomer_telepon='$nomer_telepon' WHERE nama_klien='$nama_klien'");

header("location:klien.php");
?>
