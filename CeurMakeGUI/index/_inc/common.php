<?php

define( 'BASE_URL', 'http://localhost');

$APP_CONFIG = array(
	'fb_app_id' 		=> '1760395434060765',
	'fb_app_secret'		=> 'cac38e0893e1e5511ae4eadfe68eb92c',
	'google_client_id' 	=> '1030278216844-ec137nd08f8iers4v7ujvc9ul4e8qvnr.apps.googleusercontent.com',
	'db_host'			=> 'localhost',
	'db_user'			=> 'root',
	'db_pwd'			=> '',
	'db_name'			=> 'u459209384_ceur'
);

session_start();

//-- connect to database
$DB = new mysqli( $APP_CONFIG['db_host'], $APP_CONFIG['db_user'], $APP_CONFIG['db_pwd'], $APP_CONFIG['db_name'] );
if ($DB->connect_errno) {  
    echo "Database connection error! \n";
    echo "Errno: " . $DB->connect_errno . "\n";
    echo "Error: " . $DB->connect_error . "\n";
    exit;
}


//-- checks whether a user is logged in or not
function is_logged_in()
{
	if( isset( $_SESSION['user_id'] ) )
		return true;
	
	return false;
}

//-- redirect to another page
function redirect( $url )
{
	header( 'location:' . $url );
	die;
}

function fetch_using_curl( $url ) {

	// Create a new cURL resource
	$curl = curl_init(); 

	if (!$curl) {
		die("Couldn't initialize a cURL handle"); 
	}

	// Set the file URL to fetch through cURL
	curl_setopt($curl, CURLOPT_URL, $url);

	// Set a different user agent string (Googlebot)
	//curl_setopt($curl, CURLOPT_USERAGENT, 'Googlebot/2.1 (+http://www.google.com/bot.html)'); 

	// Follow redirects, if any
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true); 

	// Fail the cURL request if response code = 400 (like 404 errors) 
	curl_setopt($curl, CURLOPT_FAILONERROR, true); 

	// Return the actual result of the curl result instead of success code
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

	// Wait for 10 seconds to connect, set 0 to wait indefinitely
	curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 20);

	// Execute the cURL request for a maximum of 50 seconds
	curl_setopt($curl, CURLOPT_TIMEOUT, 50);

	// Do not check the SSL certificates
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false); 
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); 

	// Fetch the URL and save the content in $html variable
	$html = curl_exec($curl); 

	// Check if any error has occurred 
	if (curl_errno($curl)) 
	{
		//echo 'cURL error: ' . curl_error($curl); 
		
		$html = false;
	} 
	else 
	{ 
		// cURL executed successfully
		//print_r(curl_getinfo($curl)); 		
	}

	// close cURL resource to free up system resources
	curl_close($curl);
	
	return $html;
}

