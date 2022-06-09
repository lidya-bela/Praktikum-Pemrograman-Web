<?php
include 'koneksi.inc.php';
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "DELETE FROM guestbook WHERE id=$id";
	$qry = mysqli_query($conn, $sql);
    if ($qry) {
        header('location: cetak.php');
    }else{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}