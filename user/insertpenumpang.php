<?php
include('koneksi/conn.php');
$idpnp=$_POST['no_identitas'];
$nmpnp=$_POST['nama_konsumen'];
$alamat=$_POST['almt_konsumen'];
$nohp=$_POST['telepon'];
$umurpnp=$_POST['umur'];
$jekelamin=$_POST['jenis_kelamin'];
$tlahir=$_POST['tmp_lahir'];
$tgllahir=$_POST['thn']."-".$_POST['bln']."-".$_POST['tgl'];



$query	= "INSERT INTO tbl_konsumen values('$idpnp','$nmpnp','$alamat','$nohp','$umurpnp','$jekelamin','$tlahir','$tgllahir')";
$result = mysql_query($query) or die(mysql_error());
if($result){
	echo "<script type='text/javascript'>
	alert('Data Berhasil Disimpan..!');
</script>";
echo "<meta http-equiv='refresh' content='0; url=entry_konsumen.php'>";
}else{
	echo "<script type='text/javascript'>
	onload =function(){
		alert('data gagal disimpan!');
	}
</script>";

var_dump($_FILES);
//KEMBALI KE LIST.PHP
echo "data berhasil dimasukkan";
echo "<meta http-equiv=refresh content=3;url=entry_konsumen.php>";
}
?>


