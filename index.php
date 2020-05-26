<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Online Quiz Web</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<br/>
	<div class="login">
	<br/>
		<form action="login.php" method="post">
			<div>
			
					<label>Masukan Nama</label>
					<input type="text" name="nama" id="nama" required/>
			
			</div>
			
			<div>
			
					<label>Masukan Email</label>
					<input type="text" name="email" id="email" required/>
			
			</div>
			
			<div>
			
					<label>Masukan Alamat</label>
					<input type="text" name="alamat" id="alamat" required/>
			</div>
			
			<div>
				
					<input type="submit" value="Start Quiz" class="tombol">
			
			</div>
		</form>
	</div>
</html>