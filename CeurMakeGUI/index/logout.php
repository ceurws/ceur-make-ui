<?php
	include_once '_inc/common.php';
	
	//-- if already logged in, redirect to the home page
	if( is_logged_in() )
	{
		unset( $_SESSION['user_id'] );
		unset( $_SESSION['first_name'] );
		unset( $_SESSION['login_type'] );		
	}
	
	redirect( 'login.php' );