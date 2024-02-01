<?php

header('Content-type: application/json');
$json = file_get_contents('php://input');

$array = json_decode($json, true);
$pName=$array['name'];
$iTitle=$array['issueTitle'];
$iDetail=$array['issueDetail'];


function curl($url, $data_string, $USERNAME, $PASSWORD) {
	$HEADER="accept: application/json".
		"accept-encoding: gzip, deflate".
		"accept-language: en-US,en;q=0.8".
		"user-agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36".
		"Content-Type: application/json".
		"Authorization: Basic Um9oYW5Bc21hdDpsYWNhc2lhbjE3".
		"Cache-Control: no-cache";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);

    curl_setopt($ch, CURLOPT_HEADER, $HEADER);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2722.0 Safari/537.36');

    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,1);
    curl_setopt($ch, CURLOPT_USERPWD, $USERNAME.":".$PASSWORD);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    $content = curl_exec($ch);

    echo curl_error($ch);

    curl_close($ch);

    return $content;
}

function getCurl($url, $USERNAME, $PASSWORD) {
	$HEADER="Accept: application/vnd.github.v3+json";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, $HEADER);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2722.0 Safari/537.36');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    $content = curl_exec($ch);

    curl_close($ch);

    return $content;
}

$USERNAME = "JohnDoe";
$PASSWORD = "******";

$owner = "JohnDoe";
$repo = "test";


//$issue_title = "Found a bug";
//$issue_body = "I'm having a repo.";
//$issue_assignee = "octocat";

$issue_title = $iTitle;
$issue_body = $iDetail;

$issue_milestone = 1;


$data = array(
		"title" => $issue_title,
		"body" => $issue_body
	);

$issue_lables = array("bug");

$data["labels"] = $issue_lables;


$data_string = json_encode($data);

$result = json_decode(curl('https://api.github.com/repos/'.$owner.'/'.$repo.'/issues',$data_string, $USERNAME, $PASSWORD),true);

print_r($result);

echo "Total Issues = ";

$URL = "https://api.github.com/repos/".$owner."/".$repo."/issues";
$resultData = json_decode(getCurl($URL, $USERNAME, $PASSWORD),true);


echo "<pre>";


for($i=0; $i<sizeof($resultData); $i++){

	$result = $resultData[$i];
	echo "Issue URL = ". $result["url"]."<br>";
    echo "Issue Id = ". $result["id"]."<br>";
    echo "Issue Number = ". $result["number"]."<br>";
	echo "Issue state = ".  $result["state"]."<br>";
	echo "Issue created_at = ". $result["created_at"]."<br>";
	echo "Issue updated_at = ". $result["updated_at"]."<br>";
	echo "Issue title = ". $result["title"]."<br>";
	echo "Issue Body = ". $result["body"]."<br>";

	echo "<br>";
	echo "Issue User Id = ". $result["user"]["id"]."<br>";
	echo "Issue User Number = ". $result["user"]["login"]."<br>";
	echo "Issue User URL = ". $result["user"]["url"]."<br>";

	echo "<hr>";
}
echo "</pre>";

?>
