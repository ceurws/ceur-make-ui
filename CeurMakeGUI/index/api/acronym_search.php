<?php

include_once '../_inc/common.php';

header('Content-type: application/json');

$output = array(
	'error' => true,
	'msg'	=> '',
	'data'	=> array()
);

$query = isset( $_GET['query'] ) ? trim( $_GET['query'] ) : '';

if( ! empty( $query ) )
{
	$query = urlencode( $query );
	$api_response = fetch_using_curl( 'https://dblp.org/search/venue/api?format=json&q=' . $query );
	
	if( $api_response === false )
	{
		$output['error'] = true;
		$output['msg'] = 'Unable to fetch the result';		
	}
	else
	{
		$api_response = json_decode( $api_response, true );
		if( $api_response['result']['status']['@code'] == '200' )
		{ 
			if( isset( $api_response['result']['hits']['hit'] ) > 0 )
			{ 	
				if( count( $api_response['result']['hits']['hit'] ) > 0 )
				{
					$output['error'] = false;
					$output['msg'] = 'Success';
					$output['data'] = $api_response['result']['hits']['hit'];
				}	
			}
		}		
	}
}

echo json_encode( $output );
?>