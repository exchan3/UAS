<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	include"../koneksi.php";
	
	$idsoal=$_POST['id_soal'];
	$soal=$_POST['soal'];
	$a=$_POST['a'];
	$b=$_POST['b'];
	$c=$_POST['c'];
	$d=$_POST['d'];
	$knc=$_POST['knc_jawaban'];
	$jwb=$_POST['jawaban'];
	$aktif=$_POST['aktif'];
	
	mysqli_query($koneksi, "INSERT INTO tbl_soal(id_soal, soal, a, b, c, d, knc_jawaban, jawaban, aktif)values('$idsoal','$soal','$a','$b','$c','$d','$knc','$jwb','$aktif')");
	
	header("location:halaman_admin.php");
	
	?>
</body>
</html>
