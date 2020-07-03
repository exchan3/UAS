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
	
	mysqli_query($koneksi,"UPDATE tbl_soal SET soal='$soal', a='$a', b='$b', c='$c', d='$d', knc_jawaban='$knc', jawaban='$jwb', aktif='$aktif' WHERE id_soal='$idsoal'") or die(mysql_error());
	 
	header("location:halaman_admin.php?pesan=update");
	
	?>
</body>
</html>
