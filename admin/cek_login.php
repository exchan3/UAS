<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>login</title>
</head>

<body>
	<?php
	include"../koneksi.php";
	$username=$_POST['username'];
	$password=md5($_POST['password']); 
	$tampil=mysqli_query($koneksi,"select*from admin where username='$username' and password='$password'");
	$jumlahdata=mysqli_num_rows($tampil);
	$admin=mysqli_fetch_array($tampil);
	if($jumlahdata>0) 
	{
		session_start();
		$_SESSION['id_admin']=$admin['id_admin'];
		$_SESSION['nama']=$admin['nama'];
		$_SESSION['loginadmin']=1;
		header('location:halaman_admin.php');
	}
		else
		{header("location:index.php?pesan=gagal");}
	?>
</body>
</html>