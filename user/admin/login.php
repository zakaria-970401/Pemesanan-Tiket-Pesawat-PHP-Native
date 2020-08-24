<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="animate.css">
</head>
<body>
	<div class="container">
		
			<form method="post" action="aksi_login.php" id="login-form">
							<h1><p align=center> Hello, Admin! </h1>
				<br />
				<div class="input-group">
					<input type="text" name="username" value="" placeholder="Username" style="width: 280px;" autocomplete="off" autofocus>
				</div>
				<div class="input-group">
					<input type="password" name="password" value="" placeholder="Password" style="width: 280px;">
				</div>
				<div class="input-group"><input type="submit" name="commit" value="Login" class="btn">
				</div>
				
			</form>
			


		<div class="clear"></div>
	</div>
</body>
</html>