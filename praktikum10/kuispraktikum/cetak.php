<?php
include "koneksi.inc.php"; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lihat Guestbook</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<style>
		body{
			background-color: #141E27;
			color: #F7F7F7;}
		}
		.container {color: #F7F7F7;}
		.table {color: #F7F7F7;}
	</style>
</head>
<body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<br>
	<center><h2> LIHAT GUESTBOOK </h2></center><br>
	<div class="container">
		<table class="table">
			<thead>
				<tr>
				<th scope="col">ID</th>
				<th scope="col">Posted</th>
				<th scope="col">Name</th>
				<th scope="col">Email</th>
				<th scope="col">Address</th>
				<th scope="col">City</th>
				<th scope="col">Message</th>
				<th scope="col">Aksi</th>
</tr>
</thead>
<tbody>
	<?php
$sql="select * from guestbook order by id;";
$qry=mysqli_query($conn, $sql) or die("Proses cetak gagal");
while($hasil=mysqli_fetch_row($qry)){
	echo"<tr>
	<td>$hasil[0]</td>
	<td>$hasil[1]</td>
	<td>$hasil[2]</td>
	<td>$hasil[3]</td>
	<td>$hasil[4]</td>
	<td>$hasil[5]</td>
	<td>$hasil[6]</td>
	<td>
	<a href='edit.php?id=".$hasil[0]."' class= 'btn btn-success'>Edit</a>&ensp; 
	<a href='delete.php?id=".$hasil[0]."' class= 'btn btn-danger'>Delete</a>
	</td>
	</tr>";
}
?>
</tbody>
</table>
<a href="form_guestbook.php">Kembali</a>
</div>
</body>
</html>