<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
	<link rel="stylesheet" href="../asset/css/bootstrap.css">
</head>

<body>
	<?php
	include "../koneksi.php";
	$qry=mysqli_query($koneksi, "select nama from peserta order by id_user desc");
	$data=mysqli_fetch_array($qry);
	$nama=$data['nama'];
	?>
	
	
	<table border="0" width="100%" bgcolor="#55F942">
		<tr>
			<td>
				<center><h1>Welcome <?php echo "$nama"; ?></h1></center>
		    </td>
		</tr>
		<tr>
			<td>
				<center><p class="lead">Selamat datang di Quiz Online Kelompok VI.</p></center>
			</td>
		</tr>
		<tr>
			<td>
				<center><p>jawab soal-soal ini dengan benar ya.. :D</p></center>
			</td>
		</tr>
		<tr>
			<td><center><a class="btn btn-primary btn-lg" href="index.php?page=session" role="button">Mulai Quiz</a></center></td>
		</tr>
	</table> <br><br>
	
<?php
if(isset($_GET['page']))
{$page=$_GET['page'];
 switch($page)
{
 case "soal":
 include "../halaman/soal.php";
 break;
 case "session":
 include "../halaman/session.php";
 break;
 case "jawab":
 include "../halaman/jawab.php";
 break;
 case "kunci":
 include "../halaman/kunci.php";
 break;

 default:
 echo"Maaf... Halaman Tidak Ditemukan";
 break;

}
}
?>
	  <a href="logout.php">LOGOUT</a>
</body>
</html>
