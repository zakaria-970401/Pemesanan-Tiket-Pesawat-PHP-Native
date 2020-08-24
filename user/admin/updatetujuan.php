<?php 
include('template/top.php');
include('template/navigasi.php');

?>
<div id="main">
	<div class="content">
		<?php
		include('koneksi/conn.php');
		$notjn=$_POST['no_tujuan'];
		$ktujuan=$_POST['kota_tujuan'];
		$no_tiket=$_POST['no_tiket'];
		
		$update = mysql_query ("UPDATE tbl_tujuan SET kota_tujuan='$ktujuan', no_tiket='$no_tiket' where no_tujuan='$notjn' ") or die (mysql_error());

//jika query update sukses
		if($update){

  echo '<br/><br/>Data berhasil di Update! ';  //Pesan jika proses simpan sukses
  echo '<a href="entry_tujuan.php" class="btn">Kembali</a>'; //membuat Link untuk kembali ke halaman edit
  
}else{

  echo 'Gagal menyimpan data! ';  //Pesan jika proses simpan gagal
  echo '<a href="edittujuan.php?id_tujuan='.$id.'" class="btn">Kembali</a>'; //membuat Link untuk kembali ke halaman edit
  
}


?>

</div>
</div>


<?php include('template/footer.php'); ?>

