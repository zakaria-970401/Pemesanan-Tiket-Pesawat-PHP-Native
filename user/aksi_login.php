<?php
session_start();
include("koneksi/conn.php");
$username=$_POST['username'];
$password=$_POST['password'];

$sql="
SELECT * FROM `tbl_akunuser` WHERE username='".$username."' and password='".$password."'
";

$tampil=mysql_query($sql);
$data=mysql_fetch_array($tampil);

if($data['username']==""){
	?>
	<script type="text/javascript">
		alert("user atau password anda salah!!!");
		window.open('login.php','_self');
	</script>
<?php
}else{
	$_SESSION['nama_lengkap']=$data['nama_lengkap'];
	$_SESSION['alamat']=$data['alamat'];
	?>
	<script type="text/javascript">
		alert("Anda Berhasil Login!!!");
		window.open('index.php','_self');
	</script>
<?php
}
?>

