<?php 
include('template/top.php');
include('template/navigasi.php');
include 'koneksi/conn.php';

$id=$_GET['id_tujuan'];
$sql = "DELETE FROM tbl_tujuan where no_tujuan='$id'";
$result = mysql_query ($sql) or die (mysql_errno());
?>

<div id="main">
	<div class="content">	
		<?php
		echo "<br/><br/><h4>Data telah di hapus</h4>";
		echo "<meta http-equiv=refresh content=1;url=entry_tujuan.php>";
		?>
	</div>
</div>


<?php include('template/footer.php'); ?>

