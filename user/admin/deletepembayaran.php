<?php 
include('template/top.php');
include('template/navigasi.php');
include 'koneksi/conn.php';
 if(!isset($_SESSION)){
 	session_start();
 }
 if (empty($_SESSION['username'])) {
 	header('Location:login.php');
 }
$id=$_GET['id_pembayaran'];
$sql = "DELETE FROM tbl_pembayaran where no_pembayaran='$id'";
$result = mysqli_query ($conn,$sql) or die (mysqli_errno());
?>

<div id="main">
	<div class="content">	
		<?php
		echo "<br/><br/><h4>Data telah di hapus</h4>";
		echo "<meta http-equiv=refresh content=1;url=entry_pembayaran.php>";
		?>
	</div>
</div>


<?php include('template/footer.php'); ?>

