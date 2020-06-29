<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	include "koneksi.php";
	$iduser=$_POST['id_user'];
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$password=md5($_POST['password']);
	
	mysqli_query($koneksi, "INSERT INTO peserta(id_user, nama, email, password)values('$iduser','$nama','$email','$password')");
	
	header("location:halaman/index.php");
		
	
	
	?>
</body>
</html>