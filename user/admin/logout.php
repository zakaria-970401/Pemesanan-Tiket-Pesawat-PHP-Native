<?php 
 if(!isset($_SESSION)){
 	session_start();
 }

session_destroy();

include('template/top.php');
include('template/navigasi.php');

?>

<div id="main">
	<div class="content">
		<?php
		echo "<h3>Logout Berhasil<h3>";
		echo "<meta http-equiv='refresh' content='1 url=login.php'>";
		?>
	</div>
</div>


<?php include('template/footer.php'); ?>
