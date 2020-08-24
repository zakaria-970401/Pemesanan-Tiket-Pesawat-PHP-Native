<?php 
include('template/top.php');
include('template/navigasi.php');
 if(!isset($_SESSION)){
 	session_start();
 }
 if (empty($_SESSION['username'])) {
 	header('Location:login.php');
 }
?>
<div id="main">
	<div class="content">
		<?php
		include('koneksi/conn.php');
		$nopmb=$_POST['no_pembayaran'];
		$notiket=$_POST['no_tiket'];
		$tglbayar=$_POST['tgl_pembayaran'];
		$hbayar=$_POST['hari_pembayaran'];
		$jtiket=$_POST['jumlah_tiket'];
		$htiket=$_POST['harga_tiket'];
		$tbayar=$_POST['total_pembayaran'];
		$update = mysqli_query ($conn,"UPDATE  tbl_pembayaran SET no_tiket='$notiket',tgl_pembayaran='$tglbayar',hari_pembayaran='$hbayar',jumlah_tiket='$jtiket',harga_tiket='$htiket',total_pembayaran='$tbayar' where no_pembayaran='$nopmb' ") or die (mysqli_error());

//jika query update sukses
		if($update){

  echo '<br/><br/>Data berhasil di simpan! ';  //Pesan jika proses simpan sukses
  echo '<a href="entry_pembayaran.php" class="btn">Kembali</a>'; //membuat Link untuk kembali ke halaman edit
  
}else{

  echo 'Gagal menyimpan data! ';  //Pesan jika proses simpan gagal
  echo '<a href="editpembayaran.php?id_pembayaran='.$id.'" class="btn">Kembali</a>'; //membuat Link untuk kembali ke halaman edit
  
}


?>

</div>
</div>


<?php include('template/footer.php'); ?>

