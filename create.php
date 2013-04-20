<?php
session_start();
require_once("dompdf/dompdf_config.inc.php");
$html = '<p>Hello World!</p>';
$dompdf = new DOMPDF();
$dompdf->set_paper('A4','landscape');
$dompdf->load_html($html);
$dompdf->render();
if ($option == 'jpg' || $option == 'zip') {
	$pdfoutput = $dompdf->output();
	file_put_contents("$quantity.pdf",$pdfoutput);
	$_SESSION['option'] = $option;
	$_SESSION['option'] = $option;
	$_SESSION['quantity'] = $quantity;
	require_once('image_zp.php');
	unlink("$quantity.pdf");
	unlink("$quantity.jpg");
	unlink("$quantity.zip");
}
if ($option == 'pdf') {
	$dompdf->stream("$quantity.pdf");
}
?>
