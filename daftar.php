<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Daftar</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<br/>
	<?php include 'koneksi.php'?>
	<div class="login">
	<br/>
		<form method="post">
            <div>
					<label>Nama</label>
					<input type="text" name="nama" placeholder="Nama Anda"  class="form-control" size="38" required/>
			</div>
			<div>
					<label>Email</label>
					<input type="email" name="email" placeholder="Email Anda"  class="form-control" size="38" required/>
			</div>
			<div>
					<label>Password</label>
					<input type="password" name="password1" placeholder="Password Anda"  class="form-control" size="38" required/>
            </div>
            <div>
					<label>Re-Password</label>
					<input type="password" name="password2" placeholder="Konfirmasi Password Anda"  class="form-control" size="38" required/>
			</div>
			<div>
                    <input type="submit" name="daftar" value="Daftar!" class="tombol">
            </div>
            <div>
				<span>Sudah punya akun?</span> <a href="index.php">Masuk</a>
			</div>
        </form>
        <?php
            if (isset($_POST['daftar'])){
                $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
                $email = mysqli_real_escape_string($koneksi, $_POST['email']);
                $password1 = mysqli_real_escape_string($koneksi, $_POST['password1']);
                $password2 = mysqli_real_escape_string($koneksi, $_POST['password2']);
            if ($password1 == $password2){
                mysqli_query($koneksi, "INSERT INTO peserta VALUES ('', '$nama', '$email', '$password1')");
                echo "<center><h3><script>alert('Berhasil Daftar');</script></h3></center>";
                header("refresh:0;url=index.php");
            } else
            if ($password1 !== $password2){
                echo "<center><h3><script>alert('Password tidak sama');</script></h3></center>";
                header("refresh:0;url=daftar.php");
                }
            }
        ?>
	</div>
</html>