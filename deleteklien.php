<?php

include 'config.php';
include 'connection.php';

 $id = $_GET['nama_klien'];
// $tnama = $_POST['tnama'];
// $tteam = $_POST['tteam'];
// $tgame = $_POST['tgame'];
// $tcode = $_POST['tcode'];



  $query =  "DELETE FROM klien WHERE nama_klien = '$id'";
   mysqli_query($mysqli,$query);
if(!$query) {
   die('ERROR : Data gagal dihapus pada tabel: ' .mysqli_error($mysqli));
  // echo ('data berhasil dihapus dari tabel ' . $table_name);
}
else if($query) {
   //die('ERROR : Data gagal dihapus pada tabel: ' .mysqli_error($mysqli));
  echo ('data berhasil dihapus dari tabel ');
}


//header('location: updatePlayer.php');

?>
<a href="klien.php">Back to Tabel</a>