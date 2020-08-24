<?php
include ('koneksi/conn.php');


?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="animate.css">
</head>
<body>
	<div class="container">
		<header>
			<div class="header_content">
				
			</div>
		</header>
		<main>

			<form method="post" action="aksi_login.php" id="login-form">
			
				<div class="input-group">
					<input type="text" name="username" value="" placeholder="Username" autocomplete="off" autofocus style="width: 280px;">
				</div>
				<div class="input-group">
					<input type="password" name="password" value="" placeholder="Password" style="width: 280px;">
				</div>
				<div class="input-group"><input type="submit" name="commit" value="Login" class="btn">
				</div>
				</form>
		</main>
		<form method="post" action="user-register.php" id="login-form">
			<h4>TIDAK PUNYA AKUN? DAFTAR SEKARANG!</h4>
			<div class="input-group"><input type="submit" name="commit" value="DAFTAR" class="btn" style="width: 290px;>
				</div>
			</form>
</main>

		<div class="clear"></div>
	</div>
</body>
</html>