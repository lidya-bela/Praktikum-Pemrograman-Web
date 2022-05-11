<!DOCTYPE html>
<html>
<body>
	<table>
		<thead>
			<tr>
				<td>Nama</td>
				<td>Email</td>
				<td>Isi</td>
			</tr>
		</thead>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BukuTamu";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT nama, email, isi FROM buku_tamu";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result)>0){
	while($row = mysqli_fetch_array($result)){
		?>
		<tr>
			<td><? php echo $row['nama']?></td>
			<td><? php echo $row['email']?></td>
			<td><? php echo $row['isi']?></td>
		</tr>
		<?php
	}
}
	else{
		echo "0 results";
	}
mysqli_close($conn);
?>
</table>
</body>
</html>