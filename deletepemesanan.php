<?php

include 'config.php';
include 'connection.php';

 $id = $_GET['id_mobil'];
// $tnama = $_POST['tnama'];
// $tteam = $_POST['tteam'];
// $tgame = $_POST['tgame'];
// $tcode = $_POST['tcode'];



  $query =  "DELETE FROM pemesanan WHERE id_mobil = '$id'";
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
<a href="pemesanan.php">Back to Tabel</a>