<?php
include_once '../_inc/common.php';

function display_error( $msg, $data = '' )
{
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
	$json_output = array(
		'error' => false,
		'msg'	=> $msg
	);

	header('Content-type:application/json;charset=utf-8');
	echo json_encode( $json_output );
	
	die;
}

//-- check if the data is being submitted using POST method
if( $_SERVER['REQUEST_METHOD'] == 'POST' )
{
	//-- read the inputs
	$email 		= isset( $_POST['email'] ) ? trim( $_POST['email'] ) : '';		
	$first_name	= isset( $_POST['first_name'] ) ? trim( $_POST['first_name'] ) : '';
	$last_name	= isset( $_POST['last_name'] ) ? trim( $_POST['last_name'] ) : '';
	$login_type	= isset( $_POST['login_type'] ) ? trim( $_POST['login_type'] ) : '';
	$auth_id	= isset( $_POST['auth_id'] ) ? trim( $_POST['auth_id'] ) : '';
	
	//-- simple validation
	if( empty( $email ) OR empty( $first_name ) OR empty( $last_name ) OR empty( $login_type ) OR empty( $auth_id ) )
	{
		display_error( 'Missing fields!' );
	}
	
	//-- for security
	$security_token = isset( $_POST['security_token'] ) ? trim( $_POST['security_token'] ) : '';
	if( $security_token != $_SESSION['security_token'] )
	{	
		display_error( 'Invalid security token! Please try again.', 'security_token_mistach' );
	}
	
	//-- escape the data to prevent SQL injection
	$email 		= $DB->real_escape_string( $email );	
	$first_name = $DB->real_escape_string( $first_name );	
	$last_name 	= $DB->real_escape_string( $last_name );
	$login_type = $DB->real_escape_string( $login_type );
	$auth_id 	= $DB->real_escape_string( $auth_id );
	
	//-- get the details
	$user = getUserDetails( $email );
	
	//-- user doesn't exists in our db, then consider it as a new Registration
	if( $user === false )
	{
		
		//-- query the db
		$result = $DB->query( "INSERT INTO `tblUsers`(`email`, `first_name`, `last_name`, `login_type`, `auth_id`) VALUES('$email', '$first_name', '$last_name', '$login_type', '$auth_id') ");
		
		if( $result ) 	//-- check if its successful
		{	
			//-- get the details
			$user = getUserDetails( $email );
	
			//-- store it in session
			$_SESSION['user_id'] 	= $user['user_id'];
			$_SESSION['first_name'] = $user['first_name'];
			$_SESSION['login_type'] = $user['login_type'];	
			
			display_success( 'Registration success!' );			
		} 
		else 
		{
			display_error( 'Something went wrong while inserting in the database! ' . $DB->error );
		}
	}	
	else	//-- validate the existing user.
	{	
		//-- check whether the login type and auth id matches with the one during registration..
		if( ( $user['login_type'] == $login_type ) AND ( $user['auth_id'] == $auth_id ) )
		{
			//-- store it in session
			$_SESSION['user_id'] 	= $user['user_id'];
			$_SESSION['first_name'] = $user['first_name'];
			$_SESSION['login_type'] = $user['login_type'];	
			
			display_success( 'Login success!' );
		}
		else
		{
			display_error( 'Invalid login!' );
		}	
	}

	//-- check whether we have this email id already registered in our database
	if( is_email_exists( $email ) )
	{
		$error_msg = "Email already exists! Please login.";
	
		redirect( 'login.php?error=' . urlencode( $error_msg ) );			
	}	
	
}	


//-- get the user details from db
function getUserDetails( $email )
{
	global $DB;
	
	$result = $DB->query( "SELECT * FROM `tblUsers` WHERE `email` = '$email' LIMIT 1");
	
	if( $result )
	{	
		if( $result->num_rows > 0 ) 
		{
			$row = $result->fetch_assoc();
			
			return $row;
		}
	}	
	
	return false;
}	