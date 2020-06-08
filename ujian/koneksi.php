<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$server="localhost";
$username="root";
$password="";
$database="ujian";

$koneksi = mysqli_connect("$server","$username","$password","$database");
if(!$koneksi)
{
die("Gagal, Database tidak ditemukan".mysqli_connect_eror());
}
?>
	
</body>
</html>