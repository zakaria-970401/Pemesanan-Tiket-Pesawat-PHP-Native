<?php
include("conn.php");
$sql=" SELECT * FROM tbl_tujuan";

$tampil=mysql_query($sql);
$html ='
<link rel="stylesheet" type="text/css" href="style.css"/>
<p align="center">DATA PEMESAN TIKET ONLINE </p>
  <table id="tabel"  border="1" cellpadding="3" >
	<tr>
		<th bgcolor="#FFE4C4">No.</th>
		<th bgcolor="#FFE4C4">Kode Tujuan</th>
		<th bgcolor="#FFE4C4">kota Tujuan</th>
		<th bgcolor="#FFE4C4">No.Tiket</th>
		

	</tr>
';  
  $no =1;
  while($data=mysql_fetch_array($tampil)){
  $html .='
  <tr>
    <td align="center">'.$no++.'</td>
    <td>'.$data['no_tujuan'].'</td>
    <td>'.$data['kota_tujuan'].'</td>
	<td>'.$data['no_tiket'].'</td>
	
	
  </tr>';
  }
 $html .='</table>';
 
include("mpdf/mpdf.php");
$mpdf=new mPDF(); 
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
?>