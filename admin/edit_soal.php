<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edit Soal</title>
</head>


<h2 align=center> EDIT SOAL</h2>
<body>
	<?php
	include "../koneksi.php";	

	$idsoal = $_GET['id_soal'];
	
	$result = mysqli_query($koneksi, "SELECT * FROM tbl_soal WHERE id_soal='$idsoal'");
	
	if(mysqli_num_rows($result) == 0){
		
		echo '<script>window.history.back()</script>';
		
	}else{

		$data = mysqli_fetch_assoc($result);	
	
	}
	?>
	<form action="edit.php" method="POST">
		
		<table border="0">
		
		<tr>
		<td>Masukan Soal</td>
		<td>:</td>
		<td>
		<input type="hidden" name="id_soal" value="<?php echo $idsoal; ?>">
		<input type="text" name="soal" id="soal" value="<?php echo $d['soal']; ?>"required/></td>
		</tr>
		
		<tr>
		<td>Pilihan A</td>
		<td>:</td>
		<td><input type="text" name="a" id="a" value="<?php echo $d['a']; ?>"required/></td>
		</tr>
			
		<tr>
		<td>Pilihan B</td>
		<td>:</td>
		<td><input type="text" name="b" id="b" value="<?php echo $d['b']; ?>"required/></td>
		</tr>
			
		<tr>
		<td>Pilihan C</td>
		<td>:</td>
		<td><input type="text" name="c" id="c" value="<?php echo $d['c']; ?>"required/></td>
		</tr>
			
		<tr>
		<td>Pilihan D</td>
		<td>:</td>
		<td><input type="text" name="d" id="d" value="<?php echo $d['d']; ?>"required/></td>
		</tr>
			
		<tr>
		<td>Kunci</td>
		<td>:</td>
		<td><input type="text" name="knc_jawaban" id="knc" value="<?php echo $d['knc_jawaban']; ?>"required/></td>
		</tr>
			
		<tr>
		<td>Jawaban</td>
		<td>:</td>
		<td><input type="text" name="jawaban" id="jwb" value="<?php echo $d['jawaban']; ?>"required/></td>
		</tr>
		
		<tr>
		<td>Aktif</td>
		<td>:</td>
		<td><input type="radio" name="aktif" id="aktif" value="Y" value="<?php echo $d['aktif']; ?>"><label>Yes</label>
			<input type="radio" name="aktif" id="aktif" value="N" value="<?php echo $d['aktif']; ?>"><label>No</label></td>
		</tr>
			
		<tr>
		<td><button type="submit">Submit</button>
			<a href="halaman_admin.php">Back</a>	
		</td>	
		
		</tr>
		
			
		</table>
		</form>
</body>
</html>
