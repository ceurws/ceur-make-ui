<?php
include_once '_inc/common.php';

//-- if already logged in, redirect to the home page
if( is_logged_in() )
{
	redirect( 'index.php' );
}

$email 	= isset( $_GET['email'] ) ? trim( $_GET['email'] ) : '';
$code 	= isset( $_GET['code'] ) ? trim( $_GET['code'] ) : '';

//-- validate
if( empty( $email ) OR empty( $code ) )
{	
	//-- redirect to login page
	redirect( 'login.php' );		
}

//-- escape the data to prevent SQL injection
$email 	= $DB->real_escape_string( $email );
$code 	= $DB->real_escape_string( $code );

//-- query the db
$result = $DB->query( "SELECT `first_name`, `user_id`, `status` FROM `tblUsers` WHERE `email` = '$email' AND `email_verification_code` = '$code' LIMIT 1");

if( $result->num_rows > 0 ) 	//-- check if its successful
{
	$row = $result->fetch_assoc();
	
	//-- update the user row with the verification code, in database
	$DB->query( "UPDATE `tblUsers` SET `status` = '1', `email_verification_code` = '' WHERE `user_id` = '". $row['user_id'] ."' LIMIT 1");
	
	$msg = "Email account verified. Please login!";
		
	redirect( 'login.php?success=' . urlencode( $msg ) );	
}		
else
{
	$error_msg = "Unable to verify your account! Please contact ADMIN.";
		
	//-- redirect to login page
	redirect( 'login.php?error=' . urlencode( $error_msg ) );
}


	