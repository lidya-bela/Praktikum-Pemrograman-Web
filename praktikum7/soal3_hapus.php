<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DataPegawai";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
if(isset($_GET['key'])){
	$sql = "DELETE FROM data_pegawai WHERE ID_DP = '$_GET[key]'";
if(mysqli_query($conn, $sql)){
	echo "Data berhasil dihapus";
	echo "<meta HTTP-EQUIV='REFRESH' content='1; url=hapus.php'>";
}else{
	echo "Error: ". $sql ."<br>". mysqli_error($conn);
}
mysqli_close($conn);
}
?>