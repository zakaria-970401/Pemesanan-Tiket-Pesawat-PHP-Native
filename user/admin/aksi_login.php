<?php
session_start();
include("koneksi/conn.php");
$user=$_POST['username'];
$pass=$_POST['password'];

$sql="
SELECT * FROM `tbl_pegawai` WHERE username='".$user."' and password='".$pass."'
";

$tampil=mysql_query($sql);
$data=mysql_fetch_array($tampil);

if($data['username']==""){
	?>
	<script type="text/javascript">
		alert("username atau password anda salah!!!");
		window.open('login.php','_self');
	</script>
<?php
}else{
	$_SESSION['nama_pegawai']=$data['nama_pegawai'];
	$_SESSION['no_pegawai']=$data['no_pegawai'];
	?>
	<script type="text/javascript">
		alert("Anda Berhasil Login!!!");
		window.open('index.php','_self');
	</script>
<?php
}
?>

