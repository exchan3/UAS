<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Halaman Admin</title>
</head>

<body>
	<h2><center>WELCOME TO ADMIN ROOM</center></h2>
	<a href="tambah_soal.php"><button>Tambah</button> </a>
	<table width="100%" border="1" cellspacing="0" cellpadding="0" align="center" style="text-align: center"> 
		<tr>   
			<td bgcolor="#CCCCCC">No.</td>    
			<td bgcolor="#CCCCCC">Soal</td>    
			<td bgcolor="#CCCCCC">Opsi A</td>    
			<td bgcolor="#CCCCCC">Opsi B</td>    
			<td bgcolor="#CCCCCC">Opsi C</td>
			<td bgcolor="#CCCCCC">Opsi D</td>    
			<td bgcolor="#CCCCCC">Kunci Jawaban</td>
			<td bgcolor="#CCCCCC">Ket Jawaban</td>
			<td bgcolor="#CCCCCC">Aktif</td>
			<td bgcolor="#CCCCCC" colspan="2"><div align="center">Aksi</div></td> 
		</tr>
		<?php
		include'../koneksi.php';
		$n=1;
		$query=mysqli_query($koneksi,"select * from tbl_soal");
		while($soal=mysqli_fetch_array($query)){
		?>
		<tr>   
			<td><?php echo $n; ?></td>  
			<td><?php echo $soal['soal']; ?></td>    
			<td><?php echo $soal['a']; ?></td>   
			<td><?php echo $soal['b']; ?></td> 
			<td><?php echo $soal['c']; ?></td> 
			<td><?php echo $soal['d']; ?></td>    
			<td><?php echo $soal['knc_jawaban']; ?></td>   
			<td><?php echo $soal['jawaban']; ?></td> 
			<td><?php echo $soal['aktif']; ?></td>
			
			<td><a href="#">Edit</a></td>    
			<td><a href="hapus.php?id_soal=<?php echo $soal['id_soal']; ?>">Hapus</a></td>  
		</tr> 
		<?php
		 $n++; } 
		?> 
	</table>
	<br><br>
	<a href="logout.php">Logout</a>
</body>
</html>
