<!DOCTYPE html>
<html>
<head>
	<title>BIODATA</title>
</head>
<body>
	<h1> <center> BIODATA DIRI</center></h1>
	<?php
	if(isset($POST['input']));{
	$nama=$_POST['nama'];
	$NPM=$_POST['NPM'];
	$jk=$_POST['jk'];
	$tgl=$_POST['tgl'];
	$alamat=$_POST['alamat'];
	$hobi=$_POST['hobi'];
	$photo = $_POST['photo'];
	}
	?>
	<table border="2" width="650" align="center" cellpadding="8" cellspacing="4" bgcolor="#D4F0F0">
			<tr>
				<td width="200">Nama:</td>
				<td><?php echo $_POST['nama'];?></td>
			</tr>
			<tr>
				<td width="200">NPM:</td>
				<td><?php echo $_POST['NPM'];?></td>
			</tr>
			<tr>
				<td width="200">Jenis Kelamin:</td>
				<td><?php echo $_POST['jk'];?></td>
			</tr>
			<tr>
				<td width="200">Tempat, Tanggal Lahir:</td>
				<td><?php echo $_POST['tgl'];?></td>
			</tr>
			<tr>
				<td width="200">Alamat:</td>
				<td><?php echo $_POST['alamat'];?></td>
			</tr>
			<tr>
				<td width="200">Hobi:</td>
				<td><?php echo $_POST['hobi'];?></td>
			</tr>
			<tr>
				<td width="200">FOTO:</td>
				<td><img src="<?php echo $_POST['photo']?>" style="width:180px"></td>
			</tr>
</table>
</body>
</html>