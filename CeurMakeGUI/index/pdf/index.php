<?php
/*
include 'pdfparser-master/vendor/autoload.php';

$parser = new \Smalot\PdfParser\Parser();
$pdf    = $parser->parseFile('paper_8.pdf');
 
$text = $pdf->getText();
echo $text;
*/


require( 'pdf-to-text/PdfToText.phpclass' );

    $pdf = new  PdfToText( 'paper_8.pdf' );
    echo $pdf->Text ;
	
	var_dump($pdf);