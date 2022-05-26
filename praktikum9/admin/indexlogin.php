<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style>
		.card {background-color: #DDDDDD;}
		.card-header {background-color: #383838 ;color: #FFFFFF;}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
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