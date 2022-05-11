<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DataPegawai";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
$ID_DP = $_POST['ID_DP'];
$nama_pegawai = $_POST['nama_pegawai'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$JABATAN = $_POST['JABATAN'];
$Alamat = $_POST['Alamat'];
$Gaji = $_POST['Gaji'];
$sql = "INSERT INTO data_pegawai(ID_DP, nama_pegawai, jenis_kelamin, JABATAN, Alamat, Gaji) VALUES('$ID_DP', '$nama_pegawai', '$jenis_kelamin', '$JABATAN', '$Alamat', '$Gaji')";
if (mysqli_query($conn, $sql)){
	echo "New record created sucessfully";
}else{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>