<?php
include('template/footer.php');

?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="animate.css">
</head>
<body>
	<div class="container">
		
			<form method="post" action="aksi-register.php" id="login-form">
							<h1><p align=center> User Register</h1>
				<br />
				<div class="input-group">
					<input type="text" name="nama_lengkap" value="" placeholder="Nama Lengkap" style="width: 280px;">
				</div>
				<div class="input-group">
					<input type="text" name="no_telpon" value="" placeholder="No Telpon" style="width: 280px;" autocomplete="off">
				</div>
				
				<div class="input-group">
					<input type="text" name="alamat" value="" placeholder="Alamat" style="width: 280px;" autocomplete="off" >
				</div>
				<div class="input-group">
					<select name="jenis_kelamin" id="">
					<option value="">-Pilih Jenis Kelamin-</option>
						<option value="Pria">Pria</option>
						<option value="Wanita">Wanita</option>
					</select>
				
				<div class="input-group">
					<input type="text" name="username" value="" placeholder="Username" style="width: 280px;" autocomplete="off" >
				</div>
				<div class="input-group">
					<input type="password" name="password" value="" placeholder="Password" style="width: 280px;">
				</div>
				
					<div class="input-group">
					<button type="submit" class="btn">Kirim</button>
					<button type="reset" class="btn">Hapus</button>
				</div>
				
			</form>
			


		<div class="clear"></div>
	</div>
</body>
</html>