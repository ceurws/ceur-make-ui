<?php

include_once '../_inc/common.php';

$output = array(
	'error' => true	,
	'msg'	=> ''
);

//-- if user is logged in
if( is_logged_in() )
{
	//-- read the JSON data submitted
	$json = file_get_contents('php://input');
	
	//-- generate the workshop series files
	generate_workshop_series( $json );
	
	//-- escape it for saving in database
	$json = $DB->real_escape_string( $json );
	
	//-- get the currently logged in User's ID from SESSION
	$user_id = $_SESSION['user_id'];
	
	//-- insert it to the database
	$result = $DB->query( "	INSERT INTO `tblWorkshops`(`user_id`, `json_data`, `created_time`) 
							VALUES('$user_id', '$json', NOW()) ");
		
	if( $result ) 	//-- check if its successful
	{
		//-- success
		$output['error'] = false; 
		$output['error'] = 'Success';		
	}			
}


//-- generate Workshop Series file ==> 27 Aug 2019
function generate_workshop_series( $json )
{
	//-- decode the json data to get the user's directory name
	$data = json_decode( $json, true );
	
	$src_file 	= "../_inc/files/";
	$dest_file 	= "../userDirectories/" . $data[0]['fileName'] . '/output/put-form.odt';	//-- destination filename
		
	if( $data[0]['workshop_series'] == 'AIIA' )		//-- AIIA
	{	
		$src_file .= 'PUT-FORM_AIIA_Series.odt';	
	}
	elseif( $data[0]['workshop_series'] == 'IAOA' )	//-- IAOA
	{
		$src_file .= 'PUT-FORM_IAOA_Series.odt';
	}
	else											//-- default
	{
		$src_file .= 'PUT-FORM.odt';
	}
	
	copy( $src_file, $dest_file );
}

//-- return the output
header('Content-type:application/json;charset=utf-8');
echo json_encode( $output );	
die;			//-- end execution of this page