<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	include "koneksi.php";
	$email=$_POST['email'];
	$password=$_POST['password'];
	$tampil=mysqli_query($koneksi, "select*from peserta where email='$email' and password='$password' and aktif='1'");
	$jumlahdata=mysqli_num_rows($tampil);
	$anggota=mysqli_fetch_array($tampil);
	if($jumlahdata>0)
	{
		session_start();
		$_SESSION['id_user']=$anggota['id_user'];
		$_SESSION['nama']=$anggota['nama'];
		$_SESSION['email']=$anggota['email'];
		$_SESSION['login']=1;
		header('location:halaman/index.php');
	}
	else
	{
		echo "<center><h3><script>alert('Login Gagal');</script></h3></center>";
                header("refresh:0;url=index.php");
	}
	?>
</body>
</html>
