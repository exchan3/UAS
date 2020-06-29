<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	session_start();
	unset($_SESSION['id_admin']);
	unset($_SESSION['username']);
	unset($_SESSION['cek_login']);
	session_destroy();
	header('location:index.php');
	?>
</body>
</html>