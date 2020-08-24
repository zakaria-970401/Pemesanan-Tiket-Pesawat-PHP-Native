<?php
session_start();
if(!isset($_SESSION['nama_lengkap'])){
?>
	<script type="text/javascript">
		alert("Anda Harus Login Terlebih Dahulu");
		window.open("login.php","_self");
	</script>
<?php
}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Zakaria Airlines</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<script type="text/javascript">
		function calculate() {
		var myBox1 = document.getElementById('jumlah').value;	
		var myBox2 = document.getElementById('harga').value;
		var result = document.getElementById('total');	
		var myResult = myBox1 * myBox2;
		result.value = myResult;
      
		
	}
</script>
</head>
<body>
	<div class="container">

		<header>
			<div class="header_content">
				
			</div>
		</header>
		
		