<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
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
	<center><h2> FORM LOGIN </h2></center><br>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="card">
			<div class="card-header">
				LOGIN
			</div>
			<div class="card-body">
				<form method="post" action="login.php">
					<!-- Username -->
					<div class="form-group-row">
					<label for="username" class="col-sm-3 col-form-label">Username</label>
					<div class="col-sm-9">
					<input type="text" name="username" class="form-control" id="username" placeholder="Masukkan Username Anda">
					<br>
				</div>
			</div>
					<!-- Password -->
					<div class="form-group-row">
					<label for="password" class="col-sm-3 col-form-label">Password</label>
					<div class="col-sm-9">
					<input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password Anda">
				</div>
			</div>
				<br>
			<div class="form-group row">
				<div class="col-sm-5">
					<button type="submit" class="btn btn-primary">Log In</button>
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