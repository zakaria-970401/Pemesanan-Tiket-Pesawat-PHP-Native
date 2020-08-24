<?php
include("conn.php");
$sql=" SELECT * FROM tbl_akunuser";

$tampil=mysql_query($sql);
$html ='
<link rel="stylesheet" type="text/css" href="style.css"/>
<p align="center">DATA PEMESAN TIKET ONLINE </p>
  <table id="tabel"  border="1" cellpadding="3" >
	<tr>
		<th bgcolor="#FFE4C4">No.</th>
		<th bgcolor="#FFE4C4">Nama Lengkap</th>
		<th bgcolor="#FFE4C4">No. Telpon</th>
		<th bgcolor="#FFE4C4">Alamat</th>
		<th bgcolor="#FFE4C4">Jenis Kelamin</th>
		<th bgcolor="#FFE4C4">Username</th>
		<th bgcolor="#FFE4C4">Password</th>

	</tr>
';  
  $no =1;
  while($data=mysql_fetch_array($tampil)){
  $html .='
  <tr>
    <td align="center">'.$no++.'</td>
    <td>'.$data['nama_lengkap'].'</td>
	<td>'.$data['no_telpon'].'</td>
    <td>'.$data['alamat'].'</td>
    <td>'.$data['jenis_kelamin'].'</td>
	<td>'.$data['username'].'</td>
    <td>'.$data['password'].'</td>

  </tr>';
  }
 $html .='</table>';
 
include("mpdf/mpdf.php");
$mpdf=new mPDF(); 
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
?>