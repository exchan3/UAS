<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	include"koneksi.php";
	$iduser=$_POST['id_user'];
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$alamat=$_POST['alamat'];
	
	mysqli_query($koneksi, "INSERT INTO peserta(id_user, nama, email, alamat)values('$iduser','$nama','$email','$alamat')");
	
	header("location:halaman/index.php");
		
	
	
	?>
</body>
</html>