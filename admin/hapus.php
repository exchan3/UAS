<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	include"../koneksi.php";
	$soal=$_GET['id_soal'];
	
	mysqli_query($koneksi, "DELETE FROM tbl_soal WHERE id_soal='$soal'");
	
	header("location:halaman_admin.php");
	
	?>
</body>
</html>