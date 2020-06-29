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
		<td><input type="text" name="idsoal" id="idsoal"></td>
		</tr>
		
		<tr>
		<td>Masukan Soal</td>
		<td>:</td>
		<td><textarea name="soal" id="soal"></textarea></td>
		</tr>
		
		<tr>
		<td>Pilihan A</td>
		<td>:</td>
		<td><input type="text" name="a" id="a"></td>
		</tr>
			
		<tr>
		<td>Pilihan B</td>
		<td>:</td>
		<td><input type="text" name="b" id="b"></td>
		</tr>
			
		<tr>
		<td>Pilihan C</td>
		<td>:</td>
		<td><input type="text" name="c" id="c"></td>
		</tr>
			
		<tr>
		<td>Pilihan D</td>
		<td>:</td>
		<td><input type="text" name="d" id="d"></td>
		</tr>
			
		<tr>
		<td>Kunci</td>
		<td>:</td>
		<td><input type="text" name="knc" id="knc"></td>
		</tr>
			
		<tr>
		<td>Jawaban</td>
		<td>:</td>
		<td><input type="text" name="jwb" id="jwb"></td>
		</tr>
		
		<tr>
		<td>Aktif</td>
		<td>:</td>
		<td><input type="radio" name="aktif" id="y" value="ya"><label>Yes</label>
			<input type="radio" name="aktif" id="n" value="no"><label>No</label></td>
		</tr>
			
		<tr>
		<td><input type="button" value="Submit"></td>	
		</tr>
		
			
		</table>
		</form>
	</div>
</body>
</html>