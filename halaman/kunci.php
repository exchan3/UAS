<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kunci Jawaban</title>
</head>

<body>
	<center><h2>KUNCI JAWABAN</h2></center><BR>
	<?php
	include"../koneksi.php";
	$query=mysqli_query($koneksi, "select * from tbl_soal WHERE aktif='Y' order by id_soal desc");
	if(isset($_POST['submit']))
	{
		$pilihan=$_POST["pilihan"];
	}
	?>
	<table border="1" cellpadding="1" cellspacing="1">
	<tr>
	<th>No</th>
	<th>Soal</th>
	<th>Jawaban Anda</th>
	<th>Jawaban</th>		
	</tr>
	
		<?php
		if(mysqli_num_rows($query))
		{?>
		<?php
			$no=1;
		while($data=mysqli_fetch_array($query))
		{?>
			<tr>
				<td><?php echo $no?></td>
				<td><?php echo $data['soal'];?></td>
				<td><?php echo $pilihan; ?></td>
				<td><?php echo $data['jawaban'];?></td>
			</tr>
		<?php $no++; }?>
		<?php } ?>
	
	</table>
	
	<a href="../index.php">Kembali ke Home</a>
</body>
</html>