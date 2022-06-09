<!DOCTYPE html>
<html>
<head>
	<title>Form Sign Up</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<style>
		body{
			background-color: #141E27;
			color: #F7F7F7;}
		}
		.card {background-color: #F7F7F7;}
		.card-header {background-color: #AEFEFF ;color: #000000;}
		.container {color: #000000;}
	</style>
</head>
<body>
	<br>
	<center><h2> FORM SIGN UP </h2></center><br>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-7">
				<div class="card">
			<div class="card-header">
				SIGN UP
			</div>
			<div class="card-body">
				<form method="post" action="simpan_signup.php"> 
					<!-- Nama -->
					<div class="form-group-row">
					<label for="name" class="col-sm-3 col-form-label">Name</label>
					<div class="col-sm-11">
					<input type="text" name="name" class="form-control" id="name" placeholder="name">
				</div>
			</div>
					<!-- Alamat -->
					<div class="form-group-row">
					<label for="address" class="col-sm-3 col-form-label">Address</label>
					<div class="col-sm-11">
					<input type="text" name="address" class="form-control" id="address" placeholder="address">
				</div>
					<!-- Email -->
					<div class="form-group-row">
					<label for="email" class="col-sm-3 col-form-label">Email</label>
					<div class="col-sm-11">
					<input type="text" name="email" class="form-control" id="email" placeholder="email">
				</div>
					<!-- Homepage -->
					<div class="form-group-row">
					<label for="homepage" class="col-sm-3 col-form-label">Homepage</label>
					<div class="col-sm-11">
					<input type="text" name="homepage" class="form-control" id="homepage" placeholder="homepage">
				</div>
					<!-- Username -->
					<div class="form-group-row">
					<label for="username" class="col-sm-3 col-form-label">Username</label>
					<div class="col-sm-11">
					<input type="text" name="username" class="form-control" id="username" placeholder="Masukkan Username Anda">
				</div>
			</div>
					<!-- Password -->
					<div class="form-group-row">
					<label for="password" class="col-sm-3 col-form-label">Password</label>
					<div class="col-sm-11">
					<input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password Anda">
				</div>
			</div>
				<br>
			<div class="form-group row">
				<div class="col-sm-11">
					<button type="submit" class="btn btn-primary">Sign Up</button>
				</div>
			</div>
		</form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>