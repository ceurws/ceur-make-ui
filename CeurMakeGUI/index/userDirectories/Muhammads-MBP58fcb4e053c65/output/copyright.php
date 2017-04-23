<?php
header('Content-type: application/json');
$json = file_get_contents('php://input');
$array = json_decode($json, true);

$pathFileName = $array[0]['fileName'] ;


$pth = "../../../userDirectories/".$pathFileName;
//
 //exec ("find ".$pth." -type d -exec chmod -R 777 {} +");//for sub directory
  //exec ("find ".$pth." -type f -exec chmod -R 777 {} +");//for files inside directory


$output = shell_exec('sudo make copyright-form.txt');


?>
