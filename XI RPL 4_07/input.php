<!DOCTYPE html>
<html>
<head>
	<title>Register Instagram</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>

<div id="register">
<div class="judul">
	Daftar Disini
</div>

<div class="form">
	<form action="hasil.php" method="post">
	<table align="center">
<?php
echo "<tr>
		<td>Email</td>
		<td>&nbsp</td>
		<td><input type='Email' name='email' size='30' placeholder='Masukan Email'</td>
		</tr>";
echo "<tr>
		<td>Fullname</td>
		<td>&nbsp</td>
		<td><input type='text' name='fullname' size='30' placeholder='Masukan Fullname'</td>
		</tr>";
echo "<tr>
		<td>Username</td>
		<td>&nbsp</td>
		<td><input type='text' name='username' size='30' placeholder='Masukan Username'</td>
		</tr>";
echo "<tr>
		<td>Password</td>
		<td>&nbsp</td>
		<td><input type='Password' name='password' size='30' placeholder='Masukan Password'</td>
		</tr>";
?>
</table>
		<input type='submit' value='Sign up' />
</form>
</div>
</div>
</body>
</html>