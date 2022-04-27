<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
</head>
<body background="soal1_bg.png">
	<center><h2> Form Login</h2> </center> 
	<br> </br>
	<form method="GET" action="soal1_proseslogin.php">
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
				<td colspan="2" align="center">
					<br>
					<input type="submit" name="btnLogin" value="Login"></br>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
