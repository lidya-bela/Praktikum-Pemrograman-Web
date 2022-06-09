<?php
include "koneksi.inc.php";
//memindahkan nilai data form ke variabel
$vname = $_POST['name'];
$vaddress = $_POST['address'];
$vemail = $_POST['email'];
$vhomepage = $_POST['homepage'];
$vusername = $_POST['username'];
$vpassword = $_POST['password'];
$sql = "INSERT user set name='$vname', 
address='$vaddress',
email='$vemail',
homepage='$vhomepage',
username='$vusername',
password='$vpassword'";
if (mysqli_query($conn, $sql)){
	echo "New record created sucessfully";
}else{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>