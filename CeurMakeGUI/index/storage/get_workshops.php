<?php

$limit = 2;		//-- number of recent workshops to be fetched

include_once '../_inc/common.php';

$output = array(
	'error' => true,
	'data'	=> array()
);

//-- if user is logged in
if( is_logged_in() )
{	
	//-- get the currently logged in User's ID from SESSION
	$user_id = $_SESSION['user_id'];
	
	//-- get the recent 5 Workshops
	$result = $DB->query( "SELECT * FROM `tblWorkshops` WHERE `user_id` = '$user_id' ORDER BY `created_time` DESC LIMIT $limit");
	
	if( $result && $result->num_rows > 0 ) 	//-- check if its successful
	{
		$output['data'] = $result->fetch_all( MYSQLI_ASSOC );	//-- fetch all rows
		$output['error'] = false;	
	}			
}

//-- return the output
header('Content-type:application/json;charset=utf-8');
echo json_encode( $output );
die;