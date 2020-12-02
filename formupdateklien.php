<!doctype html>
<html>
<head>
	<title>Update Klien</title>
  <body style="background-image: url(bro.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
	<link rel="stylesheet" type="text/css" href="style.css">
	<div class="wrapper"></div>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
	<body>
		<div class="card">
			<div class="container">	
				<div class = "row">

					<?php
					include "config.php";
					$nama_klien = $_GET['nama_klien'];
					$query_mysql = mysqli_query($mysqli, "SELECT * FROM klien WHERE nama_klien='$nama_klien'")or die(mysqli_error($connection));
					$nomor = 1;
					while($data = mysqli_fetch_array($query_mysql)){
					?>
						<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
							<div class="card card-signin my-5">
								<div class="card-body">
									<h5 class="card-title text-center">Edit Klien</h5>
										<form class="form-signing" action="updatekln.php" method="post">
											<div class="form-label-group">
											<label>Nama Klien</label>
												<input type="text" name="nama_klien" value="<?php echo $data['nama_klien'] ?>" class="form-control" required autofocus>
												</div><br>

												<label>ID Klien</label>
												<div class="form-label-group">
												<input type="text" name="id_klien" value="<?php echo $data['id_klien'] ?>" class="form-control" required>
												</div><br>
												<label>Nomer Telepon</label>
												<div class="form-label-group">
												<input type="text" name="nomer_telepon" value="<?php echo $data['nomer_telepon'] ?>"class="form-control" required>
												</div>
												<br>
												<input class ="btn btn-dark btn-block " type="submit" value="Simpan">
												<a class = "btn btn-dark btn-block " href="klien.php">Kembali</a>	
																	
										</form>
									</div>
      						</div>
    					</div>
					<?php } ?>
				</div>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div>
	</body>
</html>