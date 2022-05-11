<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BukuTamu";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$nama = $_POST['nama'];
$email = $_POST['email'];
$isi = $_POST['isi'];
$sql = "INSERT INTO buku_tamu(nama, email, isi) VALUES('$nama', '$email', '$isi')";
if (mysqli_query($conn, $sql)){
	echo "New record created sucessfully";
}else{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>