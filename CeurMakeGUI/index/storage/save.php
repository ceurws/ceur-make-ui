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

//-- return the output
header('Content-type:application/json;charset=utf-8');
echo json_encode( $output );	
die;			//-- end execution of this page