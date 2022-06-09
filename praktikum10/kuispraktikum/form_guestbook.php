<!DOCTYPE html>
<html>
<head>
	<title>Form Guestbook</title>
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
	<center><h2> FORM GUESTBOOK </h2></center><br>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-7">
				<div class="card">
			<div class="card-header">
				INPUT GUESTBOOK
			</div>
			<div class="card-body">
				<form method="post" action="simpan_guestbook.php"> 
					<!-- Posted -->
					<div class="form-group-row">
					<label for="posted" class="col-sm-2 col-form-label">Posted</label>
					<div class="col-sm-11">
					<input type="date" name="posted" class="form-control" id="posted" placeholder="yyyy-mm-dd">
				</div>
			</div>
					<!-- Nama -->
					<div class="form-group-row">
					<label for="name" class="col-sm-2 col-form-label">Name</label>
					<div class="col-sm-11">
					<input type="text" name="name" class="form-control" id="name" placeholder="name">
				</div>
			</div>
					<!-- Email -->
					<div class="form-group-row">
					<label for="email" class="col-sm-2 col-form-label">Email</label>
					<div class="col-sm-11">
					<input type="text" name="email" class="form-control" id="email" placeholder="email">
				</div>
			</div>
					<!-- Alamat -->
					<div class="form-group-row">
					<label for="address" class="col-sm-2 col-form-label">Address</label>
					<div class="col-sm-11">
					<input type="text" name="address" class="form-control" id="address" placeholder="address">
				</div>
			</div>
					<!-- City -->
					<div class="form-group-row">
					<label for="city" class="col-sm-2 col-form-label">City</label>
					<div class="col-sm-11">
					<input type="text" name="city" class="form-control" id="city" placeholder="city">
				</div>
			</div>
					<!-- message -->
					<div class="form-group row">
					<label for="message" class="col-sm-2 col-form-label">Message</label>
					<div class="col-sm-11">
					<textarea name="message" class="form-control" id="message" placeholder="message"></textarea>
				</div>
			</div>
			<br>
			<div class="form-group row">
				<div class="col-sm-11">
					<button type="submit" class="btn btn-primary" name="submit">Submit</button>
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