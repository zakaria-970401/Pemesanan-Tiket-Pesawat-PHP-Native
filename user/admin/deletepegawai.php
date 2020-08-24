<?php 
session_start();
include('template/top.php');
include('template/navigasi.php');
include 'koneksi/conn.php';

$id=$_GET['id_pegawai'];
$sql = "DELETE FROM tbl_pegawai where no_pegawai='$id'";
$result = mysql_query ($sql) or die (mysql_errno());
?>

<div id="main">
	<div class="content">	
		<?php
		echo "<br/><br/><h4>Data telah di hapus</h4>";
		echo "<meta http-equiv=refresh content=1;url=entry_pegawai.php>";
		?>
	</div>
</div>


<?php include('template/footer.php'); ?>

