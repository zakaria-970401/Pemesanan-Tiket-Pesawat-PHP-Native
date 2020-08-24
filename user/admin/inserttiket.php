<?php
include('koneksi/conn.php');
$noksm=$_POST['no_konsumen'];
$notiket=$_POST['no_tiket'];
$tglb=$_POST['tgl_berangkat'];
$hbrangkat=$_POST['hari_berangkat'];
$wberangkat=$_POST['waktu_berangkat'];
$notujuan=$_POST['no_tujuan'];
$query	= "INSERT INTO tbl_tiket values('$noksm','$notiket','$tglb','$hbrangkat','$wberangkat','$notujuan')";
$result = mysql_query($query) or die(mysql_error()) ;
if($result){
	echo "<script type='text/javascript'>
	alert('Data Berhasil Disimpan..!');
</script>";
echo "<meta http-equiv='refresh' content='0; url=entry_tiket.php'>";
}else{
	echo "<script type='text/javascript'>
	onload =function(){
		alert('data gagal disimpan!');
	}
</script>";

var_dump($_FILES);
//KEMBALI KE LIST.PHP
echo "data berhasil dimasukkan";
echo "<meta http-equiv=refresh content=3;url=entry_tiket.php>";
}
?>


