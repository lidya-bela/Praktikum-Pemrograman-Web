<!DOCTYPE html>
<html>
<head>
	<title>Form Data Kontak</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style>
		.card {background-color: #DDDDDD;}
		.card-header {background-color: #383838 ;color: #FFFFFF;}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="card">
			<div class="card-header">
				INPUT DATA KONTAK
			</div>
			<div class="card-body">
				<form method="post" action="simpan_kontak.php"> 
					<!-- Nama -->
					<div class="form-group-row">
					<label for="Nama" class="col-sm-2 col-form-label">Nama</label>
					<div class="col-sm-11">
					<input type="text" name="Nama" class="form-control" id="Nama" placeholder="Nama">
					<br>
				</div>
					<!-- Jenis Kelamin -->
					<div class="form-group-row">
					<label for="jkel" class="col-sm-3 col-form-label">Jenis Kelamin</label>
					<div class="col-sm-7 form-check-inline">
					<input type="radio" name="jkel" class="form-check-input" value="Laki-laki"><label for="jkel">Laki-laki</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
					<div class="form-check-inline">
					<input type="radio" name="jkel" class="form-check-input" value="Perempuan"><label for="jkel">Perempuan</label>
				</div>
			</div>
		</div>
	</div>
					<!-- Email -->
					<div class="form-group-row">
					<label for="Email" class="col-sm-2 col-form-label">Email</label>
					<div class="col-sm-11">
					<input type="text" name="Email" class="form-control" id="Email" placeholder="Email">
				</div>
					<!-- Alamat -->
					<div class="form-group-row">
					<label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
					<div class="col-sm-11">
					<input type="text" name="Alamat" class="form-control" id="Alamat" placeholder="Alamat">
				</div>
					<!-- Kota -->
					<div class="form-group-row">
					<label for="Kota" class="col-sm-2 col-form-label">Kota</label>
					<div class="col-sm-11">
					<input type="text" name="Kota" class="form-control" id="Kota" placeholder="Kota">
				</div>
					<!-- Pesan -->
					<div class="form-group-row">
					<label for="Pesan" class="col-sm-2 col-form-label">Pesan</label>
					<div class="col-sm-11">
					<textarea name="Pesan" class="form-control" id="Pesan" placeholder="Pesan"></textarea>
				</div>
				</div>
				<br>
			<div class="form-group row">
				<div class="col-sm-11">
					<button type="submit" class="btn btn-primary">Simpan</button>
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