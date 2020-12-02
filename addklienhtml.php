<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Klien - Car Dealership</title>
    <link rel="stylesheet" type="text/css" href="style.css">
	<div class="wrapper"></div>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div class="container" style="padding:5px">
	<div class="card mt-7">
  <div class="card-header bg-dark text-white text-center">
    <h1>New Klien Info</h1>
  </div>
  <div class="card-body">
    <form method="post" action="addklien.php">
    	<div class="form-group">
    		<label>Nama Klien</label>
    		<input type="text" name="tambahnamaklien" class="form-control" required>
    	</div>
    	<div class="form-group">
    		<label>ID Klien</label>
    		<input type="text" name="tambahidklien" class="form-control"  required>
      </div>
      <div class="form-group">
        <label>Nomer Telepon</label>
        <input type="text" name="tambahnomertelepon" class="form-control"  required>
      </div>     

    <a href="addklien.php">
    	<button type="submit" class="btn btn-block btn-dark mb-2" name="bsimpan2">Submit</button>
</a>
    	<button type="reset" class="btn btn-block btn-dark" name="breset">Reset</button>
    	<a href="klien.php" class="btn btn-block btn-dark">Back</a>

    </form>
  </div>
  </div>
</div>
</body>
</html>