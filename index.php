<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Online Quiz Web</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<br/>
	<?php 
	include 'koneksi.php';
	session_start();
	?>
	<div class="login">
	<br/>
		<form action="login.php" method="post">
			<div>
					<label>Email</label>
					<input type="email" name="email" placeholder="Email Anda"  class="form-control" size="38" required/>
			</div>
			<div>
					<label>Password</label>
					<input type="password" name="password" placeholder="Password Anda"  class="form-control" size="38" required/>
			</div>
			<div>
					<input type="submit" nama="masuk "value="Masuk" class="tombol">
				<span>atau</span> <a href="daftar.php">Daftar</a>
			</div>
		</form>
	</div>
</html>