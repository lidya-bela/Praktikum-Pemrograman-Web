<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
if(!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE DATABASE DBpraktikum9";
if (mysqli_query($conn, $sql)){
	echo "Database created sucessfully";
}else{
	echo "Error creating database: " . mysqli_error($conn);
}
mysqli_close($conn);
?>