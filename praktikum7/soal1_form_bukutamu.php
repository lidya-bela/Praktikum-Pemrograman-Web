<!DOCTYPE html>
<html>
<head>
	<title>Form Buku Tamu</title>
</head>
<body>
	<center><h2> Form Buku Tamu</h2> </center> 
	<br> </br>
	<form method="POST" action="soal1_simpan.php">
		<table width="300" align="center" cellpadding="2" cellspacing="2">
			<tr>
				<td width="100">Nama:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="100">Email:</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td width="100">Isi:</td>
				<td><textarea name="isi"></textarea></td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<br>
					<input type="submit" name="btnSubmit" value="Submit">
					<input type="reset" name="reset" value="Reset"></br>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>