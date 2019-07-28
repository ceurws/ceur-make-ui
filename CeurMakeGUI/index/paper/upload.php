<?php
ini_set('memory_limit', '-1');
$data = array();

function display_error( $msg )
{
	global $data;
	
	$json_output = array(
		'error' => true,
		'msg'	=> $msg,
		'data'	=> $data
	);

	header('Content-type:application/json;charset=utf-8');
	echo json_encode( $json_output );
	
	die;
}

function display_success( $msg )
{
	global $data;
	
	$json_output = array(
		'error' => false,
		'msg'	=> $msg,
		'data'	=> $data
	);

	header('Content-type:application/json;charset=utf-8');
	echo json_encode( $json_output );
	
	die;
}
//-------------------------------------------------------------------------------------------
	
$target_dir = 'files/';
$target_file = $target_dir . time() . '_' . basename( $_FILES["fileToUpload"]["name"] );
$uploaded_file_type = strtolower( pathinfo( $target_file, PATHINFO_EXTENSION ) );


// Allow certain file formats
if( $uploaded_file_type != "pdf"  ) 
{	
    display_error( "Sorry, only PDF file is allowed." );    
}


//-- move the file from temp location to "files/" folder
if( move_uploaded_file( $_FILES["fileToUpload"]["tmp_name"], $target_file ) ) 
{	
	//-- get the pdf details
	$data = get_pdf_prop( $target_file );
	
	display_success( 'Success' );
} 
else 
{
	display_error( "Sorry, there was an error uploading your file." );
}


//-- get the details from PDF file
function get_pdf_prop( $file )
{
	include 'inc/pdfparser/pdfparser-0.14.0/vendor/autoload.php';
	$parser = new \Smalot\PdfParser\Parser();
	$pdf    = $parser->parseFile( $file );
	 
	$details  = $pdf->getDetails();
	//------------------------------------
	
	//var_dump( $details); 
	$page = $pdf->getPages()[0];

	//-- Extract the text of the first page
	$text = $page->getText();
	//echo $text;
	$text = explode( 'ABSTRACT', $text, 2 );	//-- get the text before the "ABSTRACT"
	$text = $text[0];
	
	//-- split the lines
	$lines = explode( "\n", $text );
	
	//echo $text;		
	//var_dump ( $details);
	
	//-------------------------------------------
	
	/*
	//-- display meta info
	foreach ($details as $property => $value) {
		if (is_array($value)) {
			$value = implode(', ', $value);
		}
		echo $property . ' => ' . $value . "\n";
	}
*/
	
	
	return array(
		'total_pages' 	=> $details['Pages'],
		'paper_title' 	=> $lines[0] . $lines[1],
		'author'		=> $lines[2]
	);
	
}