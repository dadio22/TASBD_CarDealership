<?php
    include 'connection.php';
$table_name = 'user';

  session_start();
  // menyimpan data yang diinputkan kedalam variabel
  $email = $_POST['email'];
  $password = md5($_POST['password']);

  // query sql untuk autentifikasi
  $query = "SELECT `email`, `password` FROM `user` where email='$email' AND password='$password';";
  $result = mysqli_query($connection, $query);

  if(mysqli_num_rows($result)==1)
	{
    if($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
      $_SESSION['email']=$row['email'];
      $_SESSION['password']=$row['password'];
    }
    echo ("Berhasil <br>");
    echo ('Akan pindah ke Homepage dalam 1 detik. Sabar. If not, click <a href="mobil.php">here</a>.');
    header('refresh: 1; url= homepage.php');
	}
	else{
    echo("<script>alert('Invalid Username or Password. Try Again!');</script>");
    header('refresh: 0; url= klien.php');
    }
?>