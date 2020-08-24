<?php
include("koneksi.php");
$sql="
SELECT
  a.Nama_siswa,
  a.Jenis_kelamin,
	a.Tmpat_lahir,
	a.Tgl_lahir,
	a.Alamat,
  a.Asal_sekolah,
  a.Nilai_Un
FROM
	siswa AS a
";
$tampil=mysql_query($sql);
$html ='
<link rel="stylesheet" type="text/css" href="style.css"/>
<p align="center">LAPORAN PENERIMAAN SISWA BARU </p>
<table id="siswa">
  <tr>
    <th>No</th>
    <th>Nama Siswa</th>
    <th>Jenis_kelamin</th>
    <th>TTL</th>
    <th>Alamat</th>
    <th>Asal sekolah</th>
    <th>Nilai UN</th>
  </tr>
';  
  $no =1;
  while($data=mysql_fetch_array($tampil)){
  $html .='
  <tr>
    <td align="center">'.$no++.'</td>
    <td>'.$data['Nama_siswa'].'</td>
    <td>'.$data['Jenis_kelamin'].'</td>
    <td>'.$data['Tmpat_lahir'].', '.date('d F Y',strtotime($data['Tgl_lahir'])).'</td>
    <td>'.$data['Alamat'].'</td>
    <td>'.$data['Asal_sekolah'].'</td>
    <td>'.$data['Nilai_Un'].'</td>
  </tr>';
  }
 $html .='</table>';
 
 include("mpdf/mpdf.php");
$mpdf=new mPDF(); 
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
?>