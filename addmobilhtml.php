<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Car</title>
    <link rel="stylesheet" type="text/css" href="style.css">
	<div class="wrapper"></div>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div class="container" style="padding:5px">
	<div class="card mt-7">
  <div class="card-header bg-dark text-center text-white">
    <h1>New Car Info</h1>
  </div>
  <div class="card-body">
    <form method="post" action="addmobil.php">
    	<div class="form-group">
    		<label>Nama Mobil</label>
    		<input type="text" name="tambahnama" class="form-control" required>
    	</div>
    	<div class="form-group">
    		<label>ID Mobil</label>
    		<input type="text" name="tambahidmobil" class="form-control"  required>
      </div>
      <div class="form-group">
        <label>Merk Mobil</label>
        <input type="text" name="tambahmerkmobil" class="form-control"  required>
      </div>     
      <div class="form-group">
        <label>Harga Mobil</label>
        <input type="text" name="tambahhargamobil" class="form-control"  required>
      </div>

    <a href="addmobil.php">
    	<button type="submit" class="btn btn-block btn-dark mb-2" name="bsimpan2">Submit</button>
</a>
    	<button type="reset" class="btn btn-block btn-dark" name="breset">Reset</button>
    	<a href="mobil.php" class="btn btn-block btn-dark">Back</a>

    </form>
  </div>
  </div>
</div>
</body>
</html>