<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tambah Soal</title>
</head>

<body>
		<br/>
	<div class="tambah">
	<br/>
		<form action="input.php" method="post">
		<table border="0">
		
		<tr>
		<td>Masukan ID Soal</td>
		<td>:</td>
		<td><input type="text" name="id_soal" id="idsoal" required/></td>
		</tr>
		
		<tr>
		<td>Masukan Soal</td>
		<td>:</td>
		<td><textarea name="soal" id="soal" required/></textarea></td>
		</tr>
		
		<tr>
		<td>Pilihan A</td>
		<td>:</td>
		<td><input type="text" name="a" id="a" required/></td>
		</tr>
			
		<tr>
		<td>Pilihan B</td>
		<td>:</td>
		<td><input type="text" name="b" id="b" required/></td>
		</tr>
			
		<tr>
		<td>Pilihan C</td>
		<td>:</td>
		<td><input type="text" name="c" id="c" required/></td>
		</tr>
			
		<tr>
		<td>Pilihan D</td>
		<td>:</td>
		<td><input type="text" name="d" id="d" required/></td>
		</tr>
			
		<tr>
		<td>Kunci</td>
		<td>:</td>
		<td><input type="text" name="knc_jawaban" id="knc" required/></td>
		</tr>
			
		<tr>
		<td>Jawaban</td>
		<td>:</td>
		<td><input type="text" name="jawaban" id="jwb" required/></td>
		</tr>
		
		<tr>
		<td>Aktif</td>
		<td>:</td>
		<td><input type="radio" name="aktif" id="aktif" value="Y"><label>Yes</label>
			<input type="radio" name="aktif" id="aktif" value="N"><label>No</label></td>
		</tr>
			
		<tr>
		<td><button type="submit">Tambah</button>
			<a href="halaman_admin.php">Back</a>	
		<td>	
		
		</tr>
		
			
		</table>
		</form>
	</div>
</body>
</html>
