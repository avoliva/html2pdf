<?php
//basic error checking
if (isset($_POST['name'])  &&  !empty($_POST['name'])) {
 	$name = $_POST['name'];
	unset($_POST['name']);
}
else {
	echo "No Name Entered In Form<br /><br />";
	echo "<a href='certform.php'>Go Back.</a>";
	exit;
}
if (isset($_POST['code'])  && !empty($_POST['code'])) {
 	$code = $_POST['code'];
	unset($_POST['code']);
}
else {
	echo "No Code Entered In Form<br /><br />";
	echo "<a href='certform.php'>Go Back.</a>";
	exit;
}
if (isset($_POST['date'])  && !empty($_POST['date'])) {
 	$date = $_POST['date'];
	unset($_POST['date']);
}
else {
	echo "No Date Entered In Form<br /><br />";
	echo "<a href='certform.php'>Go Back.</a>";
	exit;
}
if (isset($_POST['quantity'])  && !empty($_POST['quantity'])) {
 	$quantity = $_POST['quantity'];
	unset($_POST['quantity']);
}
else {
	echo "No Quantity Number Entered In Form<br /><br />";
	echo "<a href='certform.php'>Go Back.</a>";
	exit;
}
if (isset($_POST['group1']) && !empty($_POST['group1'])) {
	 $option = $_POST['group1']; 
	 unset($_POST['group1']);
}
else {
	echo "No Output Type Selected<br /><br />";
	echo "<a href='certform.php'>Go Back.</a>";
	exit;
}
session_start();
require_once("dompdf/dompdf_config.inc.php");
$cert = '<html>';
$cert .= '<head>';
$cert .= "<style type='text/css'>";
$cert .= " .main { background-image: url('certblanktemplate.jpg'); background-size: 100% 100%; background-repeat: no-repeat; }";
$cert .= " .name { margin-top: 25.9%; text-align: center; }";
$cert .= " .large { font-size: 270%; font-weight:bolder; font-style: italic; }";
$cert .= " .quantity { margin-top: 4.6%; text-align: center; }";
$cert .= " .small { font-size: 200%; font-weight: bolder; font-style: italic; }";
$cert .= " .code { margin-top: 4.0%; text-align: center; }";
$cert .= " .date { margin-top: 28.6%; text-align: center; }";
$cert .= " .bottom { padding-bottom: 10%; }";
$cert .= "</style>";
$cert .= "</head>";
$cert .= '<body class="main">';
$cert .= '<div class="name">';
$cert .= "<span class='large'>$name</span>";
$cert .= "</div>";
$cert .= "<div class='quantity'>";
$cert .= "<span class='small'>$quantity</span>";
$cert .= "</div>";
$cert .= "<div class='code'>";
$cert .= "<span class='small'>$code</span>";
$cert .= "</div>";
$cert .= "<div class='date'>";
$cert .= "<span class='small'>$date</span>";
$cert .= "</div>";
$cert .= "<div class='bottom'></div>";
$cert .= "</body>";
$cert .= "</html>";
$dompdf = new DOMPDF();
$dompdf->set_paper('A4','landscape');
$dompdf->load_html($cert);
$dompdf->render();
if ($option == 'jpg' || $option == 'zip') {
	$pdfoutput = $dompdf->output();
	file_put_contents("$quantity.pdf",$pdfoutput);
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
