
<div class="clear"></div>
</div>
<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
<script type="text/javascript">
	/*--This JavaScript method for Print command--*/
	function PrintDoc() {
		    require ("fpdf16/fpdf.php");
    $pdf = new FPDF();
    $pdf->AddPage('P','A4','C');
    $pdf->SetFont('arial','B','15');
    $pdf->Cell(0, 15, $Judul, '0', 1, 'C');
    $pdf->SetFont('arial','i','9');
    $pdf->Cell(0, 10, $tgl, '0', 1, 'P');
    $pdf->SetFont('arial','','12');
    $pdf->SetFillColor(190,190,0);
    $pdf->SetTextColor(255);
    $pdf->setDrawColor(128,0,0);
    foreach ($Header as $Kolom){
        $pdf->Cell($Kolom['length'], 8, $Kolom['label'], 1, '0', $Kolom['align'], true);
    }
    $pdf->Ln();
    $pdf->SetFillColor(244,235,255);
    $pdf->SettextColor(0);
    $pdf->SetFont('arial','','10');
    $fill =false;
    foreach ($Data as $Baris){
        $i= 0;
        foreach ($Baris as $Cell){
            $pdf->Cell ($Header[$i]['length'], 7, $Cell, 2, '0', $Kolom['align'], $fill);
            $i++;
        }
        $fill = !$fill;
        $pdf->Ln();
    }
    $pdf->Output();
?>

	}
	/*--This JavaScript method for Print Preview command--*/
	function PrintPreview() {
		var toPrint = document.getElementById('tabel');
		var popupWin = window.open('');
		popupWin.document.open();
		popupWin.document.write('<html><title>::Printpreview Data::</title><link rel="stylesheet" type="text/css" href="print.css" media="screen"/></head><body">')
		popupWin.document.write(toPrint.outerHTML);
		popupWin.document.write('</html>');
		popupWin.document.close();
	}
</script>

<script type="text/javascript">
  $(document).ready(function($) {
    $('#accordion').find('.accordion-toggle').click(function(){

      //Expand or collapse this panel
      $(this).next().slideToggle('fast').addClass('animated bounceIn');

      //Hide the other panels
      $(".accordion-content").not($(this).next()).slideUp('fast');

    });
  });
</script>

</body>
</html>