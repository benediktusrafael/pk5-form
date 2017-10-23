<!DOCTYPE html>
<html>
<head>
	<title>Register Sukses</title>
</head>
<body>
<table align="center">
<h1 align="center">Anda Berhasil Register</h1>
<?php
$host= "localhost";
$user= "root";
$password= "";
$email= $_POST['email'];
$fullname= $_POST['fullname'];
$username= $_POST['username'];
$pwd= $_POST['password'];
$pwd= str_repeat("*", strlen("password"));
if ($username) 
{
	$conn=mysqli_connect($host,$user,$password);
	mysqli_select_db($conn,'daftaruser');
	$sql="insert into tbuser values ('$email','$fullname','$username','$pwd')";
	$hasil=mysqli_query($conn,$sql);
}
else{
	echo "Gagal Disimpan";
}

echo "<tr> <td>Email</td> <td>:</td> <td>$email</td> </tr>";
echo "<tr> <td>Fullname</td> <td>:</td> <td>$fullname</td> </tr>";
echo "<tr> <td>Username</td> <td>:</td> <td>$username</td> </tr>";
echo "<tr> <td>Password</td> <td>:</td> <td>$pwd</td> </tr>";
?>
</table>
</body>
</html>
