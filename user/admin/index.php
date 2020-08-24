<?php 

include('template/top.php');
include('template/navigasi.php');

?>

<div id="main">
	<div class="content">
		<marquee style="background: #D2B48C; padding:5px; color: #F5F5F5;">Pemrograman Web 1</marquee>
		<div id="profile">
			<img src="img/admin.jpg" alt="" class="animated flipInY">
			<center>
			<br>
				<h4><font color="gold">Hallo <?php echo $_SESSION['nama_pegawai']; ?></h4>
				<hr/>
			</center>
			<center>
				<h2><font color="gold">Selamat Datang</h2>

		</div>
		<hr/>

		
		<br />
		<br />
		<br />
	</div>
</div>


<?php include('template/footer.php'); ?>