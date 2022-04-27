<!DOCTYPE html>
<html>
<head>
	<title>Form Biodata</title>
</head>
<body>
	<br></br>
	<center><h2> INPUT BIODATA</h2> </center>
	<br></br>
</body>
<form method="POST" action="soal3_output.php">
		<table align=center bgcolor="#CBD2C0" border = "1">
			<tr>
				<td></td>
				<td><font face="arial black" size="4">Nama:</font></td>
				<td><input type="text" name="nama" size="25"></td>
			</tr>
			<tr>
				<td></td>
				<td><font face="arial black" size="4">NPM:</font></td>
				<td><input type="text" name="NPM" size="15"></td>
			</tr>
			<tr>
				<td></td>
				<td><font face="arial black" size="4">Jenis Kelamin:</font></td>
				<td><input type="radio" name="jk" value="Laki-laki"><font face="arial black" size="3">Laki-laki &nbsp;&nbsp;</font>
				<input type="radio" name="jk" value="Perempuan"><font face="arial black" size="3">Perempuan</td></font>
			</tr>
			<tr>
				<td></td>
				<td><font face="arial black" size="4">Tempat, Tanggal Lahir:</font></td>
				<td><input type="text" name="tgl" size="30"></td>
			</tr>
			<tr>
				<td></td>
				<td><font face="arial black" size="4">Alamat:</font></td>
				<td><textarea cols="20" rows="5"name="alamat"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><font face="arial black" size="4">Hobi:</font></td>
				<td><input type="text" name="hobi" size="20"></td>
			</tr>
			<tr>
				<td></td>
				<td><font face="arial black" size="4">Foto Anda:</font></td>
				<td><input type=file name=photo accept="image/jpeg"></td>
			</tr>
			<tr>
				<td></td>
				<td colspan="2" align="center"><input type="submit" name="btnKirim" value="Submit"></br>
				</td>
		</table>
	</form>
</body>
</html>