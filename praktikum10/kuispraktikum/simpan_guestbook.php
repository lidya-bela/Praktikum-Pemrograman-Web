<?php
include "koneksi.inc.php";
//memindahkan nilai data form ke variabel
$posted = $_POST['posted'];
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$message = $_POST['message'];
$sql = "INSERT guestbook set posted='$posted', 
name='$name',
email='$email',
address='$address',
city='$city',
message='$message'";
$qry = mysqli_query($conn, $sql);
    if ($qry) {
        header('location: cetak.php');
    }else{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}